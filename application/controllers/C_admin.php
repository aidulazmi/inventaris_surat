<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_login');
    }

	public function index()
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/home/home');
		$this->load->view('admin/inc/footer');
	}

	public function kategori()
	{
		$data['user'] = $this->M_admin->tampil_data_kategori()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/kategori',$data);
		$this->load->view('admin/inc/footer');
	}

	public function t_kategori()
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/input/kategori');
		$this->load->view('admin/inc/footer');
	}
	
	function simpan_kategori(){
		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_dokumen = $this->input->post('id_dokumen');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$data = array(			
			//'id_dokumen' => $id_dokumen,
			'kategori' => $kategori,
			'keterangan' => $keterangan
			);
		$this->M_admin->input_data($data,'kategori');
		redirect('C_admin/kategori');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function hapus_kategori($id_dokumen){

	if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_dokumen' => $id_dokumen);
	$this->M_admin->hapus_data($where,'kategori');
	redirect('C_admin/kategori');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function edit_kategori($id_dokumen){
			if($this->M_login->logged_id2() == 'admin')
	{		
		$where = array('id_dokumen' => $id_dokumen);
		$data['user'] = $this->M_admin->edit_data($where,'kategori')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/kategori',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");
	}
	}

	function update_data_kategori()
	{
			if($this->M_login->logged_id2() == 'admin')
		{
			$id_dokumen = $this->input->post('id_dokumen');
			$kategori = $this->input->post('kategori');
			$keterangan = $this->input->post('keterangan');
			$data = array(

			//'id_dokumen' => $id_dokumen,
			'kategori' => $kategori,
			'keterangan' => $keterangan
					);
			$where = array(
				'id_dokumen' => $id_dokumen
			);
			$this->M_admin->update_data($where,$data,'kategori');
			redirect('C_admin/kategori');
		}
		else
		{
			redirect("C_login");
		}
	}

	public function surat()
	{
		$data['user'] = $this->M_admin->tampil_data_surat2();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/surat',$data);
		$this->load->view('admin/inc/footer');
	}
	public function t_surat()
	{
		$data['user2'] = $this->M_admin->tampil_data_kategori()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/input/surat',$data);
		$this->load->view('admin/inc/footer');
	}

	function simpan_dokumen(){
		if($this->M_login->logged_id2() == 'admin')
	{
		
		//$id_surat = $this->input->post('id_surat');
		$judul_surat = $this->input->post('judul_surat');
		$id_kategori = $this->input->post('id_kategori');
		$link = $this->input->post('link');
		$status = $this->input->post('status');
		$data = array(			
			//'id_surat' => $id_surat,
			'judul_surat' => $judul_surat,
			'id_kategori' => $id_kategori,
			'link' => $link,
			'status' => $status
			);
		$this->M_admin->input_data($data,'surat');
		redirect('C_admin/surat');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function hapus_surat($id_surat){

	if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_surat' => $id_surat);
	$this->M_admin->hapus_data($where,'surat');
	redirect('C_admin/surat');
	}
	else
	{
		redirect("C_login");
	}	
	}

	function edit_surat($id_surat){
			if($this->M_login->logged_id2() == 'admin')
	{		
		$where = array('id_surat' => $id_surat);
		$data['user'] = $this->M_admin->edit_data($where,'surat')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/surat',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");
	}
	}

	function update_data_surat()
	{
			if($this->M_login->logged_id2() == 'admin')
		{
		$id_surat = $this->input->post('id_surat');
		$judul_surat = $this->input->post('judul_surat');
		$id_kategori = $this->input->post('id_kategori');
		$link = $this->input->post('link');
		$status = $this->input->post('status');
			$data = array(

			//'id_surat' => $id_surat,
			'judul_surat' => $judul_surat,
			//'id_kategori' => $id_kategori,
			'link' => $link,
			'status' => $status
					);
			$where = array(
				'id_surat' => $id_surat
			);
			$this->M_admin->update_data($where,$data,'surat');
			redirect('C_admin/surat');
		}
		else
		{
			redirect("C_login");
		}
	}

}
