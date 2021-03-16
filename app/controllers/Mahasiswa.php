<?php 


class Mahasiswa extends Controller {
    public function index() 
    {
        $data['judul'] = 'Daftar Mahasiwa';
        $data['mhs'] = $this->model('MahasiswaModel')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) 
    {
        $data['judul'] = 'Detail Mahasiwa';
        $data['mhs'] = $this->model('MahasiswaModel')->getDetailMahasiswa($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}