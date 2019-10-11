<?php
class Pendidikan_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'nama_sekolah',
            'label' => 'Nama Sekolah',
            'rules' => 'required'],

            ['field' => 'tahun_lulus',
            'label' => 'Tahun Lulus',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getPendidikan()
    {
        return $this->db->get('sekolah')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sekolah', ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id    = uniqid();
        $this->sekolah            = $post["sekolah"];
        $this->tahun_lulus       = $post["nama_perusahaan"];
        $this->deskripsi       = $post["deskripsi"];
        $this->db->insert('sekolah', $this);
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->sekolah            = $post["sekolah"];
        $this->tahun_lulus       = $post["tahun_lulus"];
        $this->deskripsi       = $post["deskripsi"];
        
        // $var_dump($post);
        $this->db->update('sekolah', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('sekolah', array("id" => $id));
    }

}
?>