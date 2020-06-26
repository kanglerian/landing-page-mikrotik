<?php

class Model_mahasiswa extends CI_model {
    
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa',['id_mahasiswa' => $id])->row_array();
        
    }

    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

   function tambahDataMahasiswa()
   {
       $data=array(
        'nama'=>$this->input->post('nama',true),
        'nrp'=>$this->input->post('nrp',true),
        'email'=>$this->input->post('email',true),
        'jurusan'=>$this->input->post('jurusan',true)
       );
       $this->db->insert('mahasiswa',$data);
   }

   function ubahDataMahasiswa()
   {
       $data=array(
        'nama'=>$this->input->post('nama',true),
        'nrp'=>$this->input->post('nrp',true),
        'email'=>$this->input->post('email',true),
        'jurusan'=>$this->input->post('jurusan',true)
       );
       $this->db->where('id_mahasiswa', $this->input->post('id_mahasiswa'));
       $this->db->update('mahasiswa',$data);
   }

   public function hapusDataMahasiswa($id)
   {
       $this->db->where('id_mahasiswa',$id);
       $this->db->delete('mahasiswa');
   }

}