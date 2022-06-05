<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    // Fungsi : manampilkan seluruh data
	public function index()
	{
		// Load model + bikin objek
        $this->load->model('dosen_model', 'dsn1');

        // pake class model = isi data 
       
        $this->dsn1->nidn = "0110221080";
        $this->dsn1->nama = "Seri Ani Ritonga";
        $this->dsn1->gender = "P";
        $this->dsn1->tmp_lahir= "Tapanuli Selatan";
        $this->dsn1->tgl_lahir = "25 juli";
        $this->dsn1->pendidikan = "S2";

        // Buat objek 2
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn2');

        // pake class model + Isi data
       
        $this->dsn2->nidn = "0110221075";
        $this->dsn2->nama = "yahya";
        $this->dsn2->gender = "L";
        $this->dsn2->tmp_lahir= "Riau";
        $this->dsn2->tgl_lahir = "28 agustus";
        $this->dsn2->pendidikan = "S2";

        
        // Buat objek 3
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn3');

        // pake class model + Isi data
       
        $this->dsn3->nidn = "0110221081";
        $this->dsn3->nama = "Aris";
        $this->dsn3->gender = "L";
        $this->dsn3->tmp_lahir= "Buana";
        $this->dsn3->tgl_lahir = "19 februari";
        $this->dsn3->pendidikan = "S2";

        
        // Buat objek 4
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn4');

        // pake class model + Isi data
       
        $this->dsn4->nidn = "0110221095";
        $this->dsn4->nama = "Ali Muharram";
        $this->dsn4->gender = "L";
        $this->dsn4->tmp_lahir= "Tapanuli Selatan";
        $this->dsn4->tgl_lahir = "02 januari";
        $this->dsn4->pendidikan = "S2";

         // Buat objek 5
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn5');

        // pake class model + Isi data
     
        $this->dsn5->nidn = "0110221021";
        $this->dsn5->nama = "Muliadi";
        $this->dsn5->gender = "L";
        $this->dsn5->tmp_lahir= "Sumbawa";
        $this->dsn5->tgl_lahir = "06 juni";
        $this->dsn5->pendidikan = "S2";

        // Simpan ke dlm array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5];

        // siapin data untuk dikirim ke view
        $data["list_dsn"] = $list_dsn;

        // Untuk ngirim data + nampilin ke view
       // $this->load->view('header');
       // $this->load->view('dosen/index', $data);
       // $this->load->view('footer');
       $this->load->view('layout/header');
       $this->load->view('layout/sidebar');
       $this->load->view('dosen/index', $data);
       $this->load->view('layout/footer');
	}
    public function create(){
        $data["judul"] = "form kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
    }
    public function save(){
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
}
