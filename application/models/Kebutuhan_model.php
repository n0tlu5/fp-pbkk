<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan_model extends CI_Model
{
    private $_table = "kebutuhan";

    public $kebutuhan_id;
    public $nama;
    public $jenis;
    public $jumlah;
    public $satuan;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],
            
            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric'],

            ['field' => 'satuan',
            'label' => 'Satuan',
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
        return $this->db->get_where($this->_table, ["kebutuhan_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kebutuhan_id = uniqid();
        $this->nama = $post["nama"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->satuan = $post["satuan"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kebutuhan_id = $post["id"];
        $this->nama = $post["nama"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->satuan = $post["satuan"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('kebutuhan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kebutuhan_id" => $id));
    }
}