<?php 

class About {
    public function index($nama = 'Kucing', $pekerjaan = 'Tidur')
    {
        echo "Halo $nama, job saya $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}