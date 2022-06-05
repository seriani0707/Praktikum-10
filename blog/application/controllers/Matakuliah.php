<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    // Fungsi : manampilkan seluruh data
	public function index()
	{
		// Load model + bikin objek
        $this->load->model('matakuliah_model', 'matkul1');

        // pake class model = isi data 
        $this->matkul1->sks = "4";
        $this->matkul1->nama = "basisdata";
        $this->matkul1->kode = "basdat";
       

        // Buat objek 2
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'matkul2');

        // pake class model + Isi data
        $this->matkul2->sks = "3";
        $this->matkul2->nama = "Perograman Web";
        $this->matkul2->kode = "pemweb";
      
         // Buat objek 3
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'matkul3');

        // pake class model + Isi data
        $this->matkul3->sks = "3";
        $this->matkul3->nama = "Jaringan Komputer";
        $this->matkul3->kode = "jarkom";

        // Buat objek 4
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'matkul4');

        // pake class model + Isi data
        $this->matkul4->sks = "3";
        $this->matkul4->nama = "Komunikasi Epektif";
        $this->matkul4->kode = "komtif";

         // Buat objek 5
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'matkul5');

        // pake class model + Isi data
        $this->matkul5->sks = "3";
        $this->matkul5->nama = "Ppkn";
        $this->matkul5->kode = "pkn";

        

        // Simpan ke dlm array
        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5];

        // siapin data untuk dikirim ke view
        $data["list_matkul"] = $list_matkul;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('matakuliah/header.php');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('matakuliah/footer.php');
	}
}
