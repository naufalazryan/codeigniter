<?php


class Guru_model extends CI_Model {

    private $_table = "guru";

    public $nip;
    public $nama_guru;
    public $mapel;
    public $no_telp;
   
    
    public function rules()
    {
    return 
    [
        [
            'field'=>'nip',
            'label'=>'NIP',
            'rules'=> 'required'
        ],

        [
            'field'=>'nama_guru',
            'label'=>'Nama Guru',
            'rules'=> 'required'
        ],

        [
            'field'=>'mapel',
            'label'=>'Mata Pelajaran',
            'rules'=> 'required'
        ],

        [
            'field'=>'no_telp',
            'label'=>'No Telpon',
            'rules'=>'numeric'
        ]

    ];
    }

public function getAll()
{
    return $this->db->get($this->_table)->result();
}

public function getByNip($nip)
{
    return $this->db->get_where($this->_table, ["nip"=> $nip])->row();
}

public function simpan()
{
    $post = $this->input->post();
    $this->nip = $post["nip"];
    $this->nama_guru =$post["nama_guru"];
    $this->mapel =$post["mapel"];
    $this->no_telp = $post["no_telp"];
    return $this->db->insert($this->_table, $this);

}

public function ubah()
{
    $post = $this->input->post();
    $this->nip = $post["nip"];
    $this->nama_guru =$post["nama_guru"];
    $this->mapel =$post["mapel"];
    $this->no_telp = $post["no_telp"];
    return $this->db->update($this->_table, $this, array('nip'=>$post['nip']));
}

public function hapus($nip)
{
    return $this->db->delete($this->_table, array('nip' =>$nip));
}



}



?>