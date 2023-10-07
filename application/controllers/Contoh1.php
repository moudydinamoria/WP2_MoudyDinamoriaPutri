<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<center><h1>HTML (HyperText Markup Language)</h1></center>";
        echo "HTML adalah bahasa markup standar yang digunakan untuk membuat halaman website dan aplikasi web.
                Eksistensi file HTML adalah .html atau .htm, yang bisa dilihat dengan menggunakan web browser apa pun
                (seperti Google Chrome, Safari, atau Mozila Firefox). Browser tersebut membaca file HTML dan merender
                kontennya sehingga user internet bisa melihat dan membacanya. Berdasarkan cara kerja HTML, bisa menggunakannya
                untuk membuat struktur konten pada website dan aplikasi web (menggunakan coding sederhana. HTML merupakan level
                terbawah dari teknologi frontend dan berfungsi sebagai dasar styling yang bisa ditambahkan dengan CSS dan fungsionalitas
                yang dapat dijalankan menggunakan JavaScript.";
        echo "<br><h3> Kelebihan dan Kekurangan HTML :</h3>";
        echo "Kelebihan HTML :<br>
                <br>- Digunakan secara luas dan memiliki banyak sumber serta komunitas yang besar.
                <br>- Dijalankan secara alami di setiap web browser.
                <br>- Mudah dipelajari.
                <br>- Open-source dan sepenuhnya gratis.
                <br>- Rapi dan Konsisten.
                <br>- Menjadi standar resmi web, dikelola oleh (W3C).
                <br>- Integrasi mudah dengan bahasa backend, seperti PHP dan Node.Js.<br>
                
                <br>Kekurangan HTML :<br>
                <br>- Umumnya digunakan untuk halaman web statis. Untuk fitur dinamis, bisa menggunakan JavaScript atau bahasa backend, seperti PHP.
                <br>- Tidak bisa menjalankan logic. Alhasil, semua halaman web harus dibuat terpisah meskipun menggunakan elemen yang sama, seperti header dan footer.
                <br>- Fitur baru tidak bisa digunakan dengan cepat di sebagian browser.
                <br>- Perilaku browser terkadang sulit diprediksi. Misalnya, browser lama tidak selalu bisa merender tag yang lebih baru.";
    }
}