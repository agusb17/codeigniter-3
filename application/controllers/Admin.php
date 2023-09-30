<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

 function __construct()
 {
  parent::__construct();
  $this->load->model('m_model');
  $this->load->helper('my_helper');
  $this->load->library('upload');
        if ($this->session->userdata('logged_in')!=true) {
            redirect(base_url().'auth');
        }
 }

 public function index()
 {
      $data['mapel'] = $this->m_model->get_data('mapel')->num_rows();
      $data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
      $data['guru'] = $this->m_model->get_data('guru')->num_rows();
      $data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
      $this->load->view('admin/index', $data);
 }

 // upload image
 public function upload_img($value)
    {
        $kode = round(microtime(true) * 1000);
        $config['upload_path'] = './images/siswa/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['fle_name'] = $kode;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($value)) {
            return [false, ''];
        } else {
            $fn = $this->upload->data();
            $nama = $fn['file_name'];
            return [true, $nama];
        }
    }

 public function siswa()
 {
  $data['siswa'] = $this->m_model->get_data('siswa')->result();
  $this->load->view('admin/siswa', $data);
 }
   
 public function hapus_siswa($id)
 {
  $siswa = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->row();
  if($siswa){
   if($siswa->foto !== 'User.png'){
    $file_path = './images/siswa/' . $siswa->foto;

    if(file_exists($file_path)){
     if(unlink($file_path)){
      //hapus file berhasil menggunakan model delete
      $this->m_model->delete('siswa', 'id_siswa',$id);
      redirect(base_url('admin/siswa'));
     }else{
      //gagal menghapus file
      echo "gagal menghapus file.";
     }
    }else{
     //file tidak di temukan
     echo "File Tidak Di Temukan"; 
    }
   }else{
    //Tanpa Hapus File User.png
    $this->m_model->delete('siswa', 'id_siswa', $id);
    redirect(base_url('admin/siswa'));
   }
  }else{
   //Siswa Tidak Di Temukan
   echo "Siswa Tidak Di Temukan";
  }
 }
 public function tambah_siswa()
 {
  $data['kelas'] = $this->m_model->get_data('kelas')->result();
  $this->load->view('admin/tambah_siswa', $data);
 }

 public function aksi_tambah_siswa()
 {
   $foto = $this->upload_img('foto');
   if ($foto[0] == false) {
     $data = [
       'foto' => 'User.png',
       'nama_siswa' => $this->input->post('nama'),
       'nisn' => $this->input->post('nisn'),
       'gender' => $this->input->post('gender'),
       'id_kelas' => $this->input->post('kelas'),
     ];
 
     $this->m_model->tambah_data('siswa', $data);
     redirect(base_url('admin/siswa'));
   } else {
     $data = [
       'foto' => $foto[1],
       'nama_siswa' => $this->input->post('nama'),
       'nisn' => $this->input->post('nisn'),
       'gender' => $this->input->post('gender'),
       'id_kelas' => $this->input->post('kelas'),
     ];
 
     $this->m_model->tambah_data('siswa', $data);
     redirect(base_url('admin/siswa'));
   }
   
 }

 public function update_siswa()
 {
  $data['kelas'] = $this->m_model->get_data('kelas')->result();
  $this->load->view('admin/update_siswa', $data);
 }

 public function ubah_siswa($id)
 {
  $data['siswa']=$this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();  
  $data['kelas']=$this->m_model->get_data('kelas')->result();
  $this->load->view('admin/ubah_siswa', $data);  

 }

 public function aksi_ubah_siswa()
    {
        $data = array (
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'id_kelas' => $this->input->post('kelas'),
        );
        $eksekusi=$this->m_model->ubah_data
        ('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
        if($eksekusi)
        {
            redirect(base_url('admin/siswa'));
        }
        else
        {
            redirect(base_url('admin/ubah_siswa/'.$this->input->post('id_siswa')));
        }
    }

 public function akun()
 {
 $data['user']=$this->m_model->get_by_id('admin','id',$this->session->userdata('id'))->result();
  $this->load->view('admin/akun',$data);
 }

 public function aksi_ubah_account()
 {
  $password_baru =$this-input->post('password_baru');
  $konfirmasi_password =$this-input->post('konfirmasi_password');
  $email =$this-input->post('email');
  $username =$this-input->post('username');

  // buat data yang akan di ubah
  $data = array(
   'email'=> $email,
   'username'=>$username
  );

  //jika ada password baru
  if (lempty($password_baru)) {
   //  pastikan password baru  dan konfirmasi password sama
   if ($password_baru === $konfirmasi_password)  {
    //hash password baru
    $data['password'] = md5($password_baru);
   } else {
    $this->session->set_flashdata('message','Password  baru dan konfirmasi password harus sama');
    redirect(base_url('admin/akun'));
   }
  }

  //lakukan pembaruan data
  $this->session->set_userdata($data);
  $update_result = $this->m_model->ubah_data('admin',$data,array('id' => $this->session->userdata('id')));

  if ($update_result) {
   redirect(base_url('admin/akun'));
  } else {
   redirect(base_url('admin/siswa'));
  }
 }

// public function hapus_siswa($id)
//  {
//      $this->m_model->delete('siswa', 'id_siswa', $id);
//      redirect(base_url('admin/siswa'));
//  }


}

?>