<?php 

class About extends Controller {
    public function index($nama = 'Admin', $status = 'Admin', $alamat = 'Admin')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['alamat'] = $alamat;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}