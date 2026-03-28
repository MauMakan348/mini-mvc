<?php


class HomeController extends Controller
{
    public function index() {
        require_once BASE_PATH . '/app/Models/BeritaModel.php';
        require_once BASE_PATH . '/app/Models/BantuanModel.php';
        

        $this->view('home/index', [
            'title'  => 'Home',
            'berita' => (new BeritaModel())->getAll(), 
            'bantuan' => (new BantuanModel())->getAll()
        ]);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Ini adalah halaman tentang Mini MVC yang kita bangun.'
        ];

        $this->view('home/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'admin@minimvc.local'
        ];

        $this->view('home/index', $data);
    }
}