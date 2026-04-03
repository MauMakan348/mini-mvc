<?php


class HomeController extends Controller
{
    public function index() {
        require_once BASE_PATH . '/app/Models/BeritaModel.php';
        require_once BASE_PATH . '/app/Models/BantuanModel.php';
        require_once BASE_PATH . '/app/Models/TableModel.php';
        

        $this->view('home/index', [
            'title'  => 'Home',
            'berita' => (new BeritaModel())->getAll(), 
            'bantuan' => (new BantuanModel())->getAll(),
            'table' => (new TableModel())->getAll(),

            // untuk bantuan
            'bantu1' => 'Cara berlangganan',
            'bantu1des' => 'Berlangganan layanan digital (aplikasi, streaming, atau konten) umumnya dilakukan melalui Google Play Store (Android), App Store (iOS), atau situs web resmi layanan tersebut. Langkah utamanya meliputi masuk ke aplikasi, pilih paket, dan selesaikan pembayaran menggunakan metode seperti e-wallet, kartu kredit/debit, atau pulsa.',
            'bantu2' => 'Cara kirim berita',
            'bantu2des' => 'Bayangkan kamu seorang mahasiswa, dosen, pelajar, guru, tim humas perusahaan, pemerintahan, organisasi, lembaga pendidikan atau penulis umum yang sedang menatap layar laptop dengan naskah artikel, opini, rilis berita, esai, karya ilmiah atau cerpen yang baru saja kamu tulis. Tapi ada satu pertanyaan besar: “Bagaimana caranya agar tulisan ini benar-benar terbit dan dibaca banyak orang?” Nah, inilah cara mengirim artikel ke media online yang bisa menjadi solusinya.',
            'bantu3' => 'Kebijakan',
            'bantu3des' => 'Kebijakan adalah rangkaian konsep dan asas yang menjadi pedoman dan dasar rencana dalam pelaksanaan suatu pekerjaan, kepemimpinan, dan cara bertindak[1] Istilah ini dapat diterapkan pada pemerintahan, organisasi dan kelompok sektor swasta, serta individu. Kebijakan berbeda dengan peraturan dan hukum. Jika hukum dapat memaksakan atau melarang suatu perilaku (misalnya suatu hukum yang mengharuskan pembayaran pajak penghasilan), kebijakan hanya menjadi pedoman tindakan yang paling mungkin memperoleh hasil yang diinginkan.',
        ]);
    }

    public function about() {
        require_once BASE_PATH . '/app/Models/a-sec-1.php';

        $this->view('home/about', [
            'sec-1' => (new aboutSection1())->getAll()
        ]);
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