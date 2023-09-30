<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('upload');
        if ($this->session->userdata('logged_in') != true && $this->session->userdata('role') != 'admin') {
            redirect(base_url() . 'auth');
        }
    }

    public function index()
    {
        $this->load->view('keuangan/index');
    }
    public function pembayaran()
    {
        $data['pembayaran'] = $this->m_model->get_data('pembayaran')->result();
        $this->load->view('keuangan/pembayaran', $data);
    }
    // tambah
    public function tambah_pembayaran()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/tambah_pembayaran', $data);
    }
    // aksi tambah siswa
    public function aksi_tambah_pembayaran()
    {
        $data = [
            'jenis_pembayaran' => $this->input->post('jenis'),
            'total_pembayaran' => $this->input->post('total'),
            'id_siswa' => $this->input->post('siswa'),
        ];

        $this->m_model->tambah_data('pembayaran', $data);
        redirect(base_url('keuangan/pembayaran'));
    }
    // ubah siswa
    public function ubah_pembayaran($id)
    {
        $data['pembayaran'] = $this->m_model->get_by_id('pembayaran', 'id', $id)->result();
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/ubah_pembayaran', $data);
    }
    // aksi ubah siswa
    public function aksi_ubah_pembayaran()
    {
        $data = array(
            'jenis_pembayaran' => $this->input->post('jenis'),
            'total_pembayaran' => $this->input->post('total'),
            'id_siswa' => $this->input->post('siswa'),
        );
        $eksekusi = $this->m_model->ubah_data
        ('pembayaran', $data, array('id' => $this->input->post('id')));
        if ($eksekusi) {
            redirect(base_url('keuangan/pembayaran'));
        } else {
            redirect(base_url('keuangan/ubah_pembayaran/' . $this->input - post('id')));
        }
    }
    // hapus pembayaran
    public function hapus_pembayaran($id)
  {
    $this->m_model->delete('pembayaran', 'id', $id);
    redirect(base_url('keuangan/pembayaran'));
  }
}
?>