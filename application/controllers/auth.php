<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Auth extends CI_Controller { 
    function __construct(){ 
        parent::__construct();  
        $this->load->library('form_validation'); 
        $this->load->model('m_model');  
        $this->load->helper('my_helper');  
    }  
 
     
    public function register() { 
        $this->load->view('auth/register'); 
    } 
     
    public function index()  
    {  
     $this->load->view('auth/login');  
    }  
    public function process_login() { 
        $email = $this->input->post('email', true);  
        $password = $this->input->post('password', true);  
        $data = [ 'email' => $email, ];  
        $query = $this->m_model->getwhere('admin', $data);  
        $result = $query->row_array();  
         
        if (!empty($result) && md5($password) === $result['password']) {  
        $data = [  
            'logged_in' => TRUE,  
            'email' => $result['email'],  
            'username' => $result['username'],  
            'role' => $result['role'],  
            'id' => $result['id'],  
        ];  
        $this->session->set_userdata($data);  
        if ($this->session->userdata('role') == 'admin') {  
            redirect(base_url()."admin");  
        }   elseif ($this->session->userdata('role') == 'keuangan') {  
            redirect(base_url()."keuangan");  
         } else {  
            redirect(base_url()."auth");  
        }  
        } else {  
        redirect(base_url()."auth");  
        }  
    } 
     
     
    public function process_register() { 
        // Ambil data dari formulir register 
        $username = $this->input->post('username'); 
        $email = $this->input->post('email'); 
        $password = $this->input->post('password'); 
        $role = $this->input->post('role'); 
         
        // Validasi input 
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[admin.username]'); 
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admin.email]'); 
        $this->form_validation->set_rules('password', 'Password', 'required'); 
     
        // Jika ingin menambahkan validasi untuk role, Anda dapat melakukannya di sini 
         
        if ($this->form_validation->run() === FALSE) { 
            // Jika validasi gagal, tampilkan kembali halaman register dengan pesan kesalahan 
            $this->load->view('register'); 
        } else { 
            // Hash password menggunakan MD5 (tidak direkomendasikan) 
            $hashed_password = md5($password); 
     
            // Simpan data pengguna ke dalam database, termasuk kolom role 
            $data = array( 
                'username' => $username, 
                'email' => $email, 
                'password' => $hashed_password, 
                'role' => $role // Kolom role 
            ); 
     
            // Gantilah 'admin' dengan nama tabel Anda 
            $this->db->insert('admin', $data); 
     
            // Redirect ke halaman login atau tampilkan pesan sukses 
            redirect(base_url('auth')); 
        } 
    } 
     
     
        
}