<?php

class Model_people extends CI_model {
    
    public function getPeopleById($id)
    {
        return $this->db->get_where('peoples',['id' => $id])->row_array();
        
    }

    public function countAllPeople()
    {
        return $this->db->get('peoples')->num_rows();
    }

    public function getPeople($limit, $start)
    {
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function getAllPeople()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function cariDataPeople()
    {
        $keywordpeople = $this->input->post('keywordpeople', true);
        $this->db->like('name', $keywordpeople);
        return $this->db->get('peoples')->result_array();
    }

   function tambahDataPeople()
   {
       $data=array(
        'name'=>$this->input->post('name',true),
        'address'=>$this->input->post('address',true),
        'email'=>$this->input->post('email',true),
       );
       $this->db->insert('peoples',$data);
   }

   function ubahDataPeople()
   {
       $data=array(
        'name'=>$this->input->post('name',true),
        'address'=>$this->input->post('address',true),
        'email'=>$this->input->post('email',true),
       );
       $this->db->where('id', $this->input->post('id'));
       $this->db->update('peoples',$data);
   }

   public function hapusDataPeople($id)
   {
       $this->db->where('id',$id);
       $this->db->delete('peoples');
   }

}