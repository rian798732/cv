<?php
class Pengalaman_model extends CI_Model{

    public function rules()
    {
        return [
            ['field' => 'judul_pengalaman',
            'label' => 'Judul pengalaman',
            'rules' => 'required'],

            ['field' => 'nama_perusahaan',
            'label' => 'Nama Perusahaan',
            'rules' => 'required'],

            ['field' => 'tahun_mulai',
            'label' => 'Tahun mulai',
            'rules' => 'required'],

            ['field' => 'tahun_akhir',
            'label' => 'Tahun Akhir',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getPengalaman()
    {
        return $this->db->get('pengalaman')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('pengalaman', ["id" => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->pengalaman_id    = uniqid();
        $this->judul            = $post["judul_pengalaman"];
        $this->perusahaan       = $post["nama_perusahaan"];
        $this->tahun_mulai       = $post["tahun_mulai"];
        $this->tahun_akhir      = $post["tahun_akhir"];
        $this->deskripsi      = $post["deskripsi"];
        $this->db->insert('pengalaman', $this);
    }

    public function edit()
    {
        $post                   = $this->input->post();
        $this->pengalaman_id    = $post["pengalaman_id"];
        $this->judul            = $post["judul_pengalaman"];
        $this->perusahaan       = $post["nama_perusahaan"];
        $this->tahun_mulai       = $post["tahun_mulai"];
        $this->tahun_akhir      = $post["tahun_akhir"];
        
        $var_dump($post);
        $this->db->update('pengalaman', $this, array('id' => $post['id']));
    }

    public function hapus($id)
    {
        return $this->db->delete('pengalaman', array("pengalaman_id" => $id));
    }

}
?>