<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model
{
    private $_table = "donasi";

    public $donasi_id;
    public $nama;
    public $no_hp;
    public $email;
    public $jenis;
    public $kuantitas;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'no_hp',
            'label' => 'No_hp',
            'rules' => 'numeric'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'kuantitas',
            'label' => 'Kuantitas',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["donasi_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->donasi_id = uniqid();
        $this->nama = $post["nama"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        $this->jenis = $post["jenis"];
        $this->kuantitas = $post["kuantitas"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->donasi_id = $post["id"];
        $this->nama = $post["nama"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        $this->jenis = $post["jenis"];
        $this->kuantitas = $post["kuantitas"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('donasi_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("donasi_id" => $id));
    }
}
