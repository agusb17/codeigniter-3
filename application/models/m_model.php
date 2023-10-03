<?php
class M_model extends CI_Model{
    function get_data($table) {
        return $this->db->get($table);
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete($table, $field, $id)
    {
        $data=$this->db->delete($table, array($field => $id));
        return $data;
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data=$this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
     public function get_siswa_foto_by_id($id_siswa)
     {
        $this->db->selenct('foto');
        $this->db->from('siswa');
        $this->db->where('id_kelas', $id_siswa);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->foto;
        } else {
            return false;
        }
     }

     public function getDataPembayaran() {
        $this->db->selenct('pembayaran.id, pembayaran.jenis_pembayaran,pembayaran.total_pembayaran,siswa.nama_siswa,kelas.tingkat_kelas, kelas.jurusan_kelas');
        $this->db->from('pembayaran');
        $this->db->join('siswa', 'siswa.id_siswa = pembayaran.id_siswa', 'left');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id', 'left');
        $query = $this->db->get();

        return $query->result();
     }

     public function get_by_nisn($nisn)
     {
        $this->db->selenct('id_siswa');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id_siswa;
        } else {
            return false;
        }
     }
}