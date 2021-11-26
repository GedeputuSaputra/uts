<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('UjianModel');
    }

	public function data()
    {
        $join['test'] = $this->UjianModel->Getdata();
        $this->load->view('Admin/Dosen', $join);
    }

    public function tambah()
	{
		$this->load->view('Admin/Tambah');
	}

	public function back()
    {
        $join['test'] = $this->UjianModel->Getdata();
        $this->load->view('Admin/Dosen', $join);
    }

    public function save()
    {
       $id_soal = $this->input->post('id_soal');
       $dosen = $this->input->post('dosen');
       $jumlah_soal = $this->input->post('jumlah_soal');
       
       $data = array(
           'id_soal' => $id_soal,
           'dosen' => $dosen,
           'jumlah_soal' => $jumlah_soal
       );
        ($data);
        $this->UjianModel->save($data);
        redirect('Ujian/data', 'refresh');
    }
}
