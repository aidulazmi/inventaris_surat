<?php 

class M_admin extends CI_Model{

	function tampil_data_kategori(){
		return $this->db->get('kategori');
	}
	function tampil_data_surat(){
		return $this->db->get('surat');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_surat2(){
		$this->db->limit(10); 
		$query = $this->db->query("
			SELECT kategori.id_dokumen,kategori.kategori,kategori.keterangan,surat.id_surat,surat.judul_surat,surat.id_kategori,surat.link,surat.status FROM kategori INNER JOIN surat ON surat.id_kategori = kategori.id_dokumen");
        return $query->result();
	}
}