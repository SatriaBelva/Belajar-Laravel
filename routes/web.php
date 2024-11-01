<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/home', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/about', function () {
    return view('about', ['URLTitle'=>'Halaman About','title' => 'About', 'penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});

Route::get('/posts', function () {
    return view('posts', ['URLTitle'=>'Halaman Blog', 'judul' => 'Blog', 'posts' => [
        [
            'id'    => 1,
            'slug'  => 'Otomotif-Anjay',
            'judul' => 'Otomotif',
            'author'=> 'Satria Belva',
            'body'  => 'tren gaya hidup, dan perubahan besar yang terjadi dalam industri ini. Setiap tahun, produsen mobil berlomba untuk menciptakan kendaraan yang lebih aman, ramah lingkungan, dan efisien. Berikut adalah beberapa tren utama yang kini sedang mendominasi dunia otomotif:

                        1. Kendaraan Listrik dan Ramah Lingkungan
                        Dengan meningkatnya kesadaran terhadap dampak lingkungan, permintaan terhadap kendaraan listrik (EV) terus meningkat. Banyak perusahaan besar, seperti Tesla, Toyota, dan Nissan, berinvestasi besar-besaran dalam mengembangkan teknologi EV yang lebih efisien. Kendaraan listrik kini dianggap sebagai solusi untuk mengurangi emisi karbon, terutama di kota-kota besar yang memiliki tingkat polusi tinggi.

                        2. Mobil Otonom
                        Mobil otonom atau self-driving merupakan inovasi masa depan yang diharapkan dapat mengubah cara kita berkendara. Beberapa produsen otomotif sudah meluncurkan teknologi semi-otonom, seperti fitur autopilot pada Tesla. Mobil otonom penuh masih dalam tahap pengembangan, tetapi dengan kemajuan teknologi kecerdasan buatan dan sensor, visi ini semakin mendekati kenyataan.

                        3. Konektivitas dan Internet of Things (IoT)
                        Konektivitas di dalam mobil saat ini tidak terbatas hanya pada GPS atau Bluetooth. Dengan adanya teknologi IoT, mobil kini bisa terhubung dengan perangkat lain dan bahkan dengan infrastruktur kota. Fitur seperti pemantauan jarak jauh, pengaturan suhu otomatis, serta peringatan servis membuat pengalaman berkendara semakin nyaman dan aman.

                        4. Mobilitas Berbagi dan Layanan Transportasi Baru
                        Tren lain yang berkembang adalah mobilitas berbagi seperti ride-hailing (misalnya Gojek atau Grab) dan car-sharing. Tren ini muncul sebagai solusi atas masalah kemacetan dan biaya kepemilikan mobil yang tinggi. Selain itu, perusahaan seperti Uber dan Lyft terus berinovasi untuk menyediakan layanan transportasi yang lebih fleksibel dan terjangkau.

                        5. Desain Futuristik dan Material Ringan
                        Desain mobil modern tidak hanya fokus pada estetika, tetapi juga pada efisiensi. Banyak produsen menggunakan material ringan seperti serat karbon dan aluminium untuk membuat mobil lebih efisien dalam konsumsi bahan bakar. Desain aerodinamis dan futuristik juga menjadi daya tarik tersendiri bagi konsumen, terutama generasi muda.

                        Industri otomotif terus bertransformasi seiring dengan kemajuan teknologi dan kebutuhan pasar yang dinamis. Masa depan otomotif tampak sangat menjanjikan dengan mobil-mobil yang semakin canggih, aman, dan ramah lingkungan.'
        ],
        [
            'id'    => 2,
            'slug'  => 'Kesehatan-Mata-Anjay',
            'judul' => 'Kesehatan Mata',
            'author'=> 'Satria Belva',
            'body'  => 'Menjaga Kesehatan Mata: Pentingnya dan Cara Melakukannya

                        Mata adalah salah satu organ yang sangat vital bagi kehidupan sehari-hari. Sayangnya, sering kali kesehatan mata terabaikan. Padahal, gangguan penglihatan seperti rabun jauh, rabun dekat, atau bahkan penyakit serius seperti glaukoma bisa dicegah dengan perawatan yang baik. 

                        1. Makan Makanan Sehat  
                        Nutrisi memainkan peran penting dalam menjaga kesehatan mata. Makanan yang kaya akan omega-3, lutein, zinc, dan vitamin C serta E dapat membantu mencegah degenerasi makula. Beberapa pilihan makanan yang baik untuk mata adalah ikan, sayuran hijau, telur, kacang-kacangan, dan buah-buahan.

                        2. Mengistirahatkan Mata  
                        Jika Anda bekerja di depan layar komputer atau gadget, cobalah metode 20-20-20: setiap 20 menit, lihatlah objek sejauh 20 kaki (sekitar 6 meter) selama 20 detik. Ini membantu mengurangi ketegangan mata yang disebabkan oleh paparan layar terus-menerus.

                        3. Gunakan Pelindung Mata 
                        Paparan sinar UV dari matahari bisa merusak retina dan meningkatkan risiko katarak. Gunakan kacamata hitam yang mampu melindungi dari sinar UV A dan UV B saat berada di luar ruangan. Selain itu, gunakan pelindung mata saat bekerja di lingkungan berisiko, seperti saat mengelas atau bekerja dengan bahan kimia.

                        4. Periksa Mata Secara Rutin  
                        Melakukan pemeriksaan mata setidaknya setahun sekali penting untuk mendeteksi gangguan penglihatan sejak dini. Deteksi dini memudahkan perawatan yang efektif sebelum kerusakan semakin parah.

                        Menjaga kesehatan mata merupakan investasi jangka panjang. Dengan pola hidup sehat, pemeriksaan rutin, serta pelindung mata yang tepat, kita bisa menjaga penglihatan tetap optimal di usia lanjut.'
        ]
    ]]);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id'    => 1,
            'slug'  => 'Otomotif-Anjay',
            'judul' => 'Otomotif',
            'author'=> 'Satria Belva',
            'body'  => 'tren gaya hidup, dan perubahan besar yang terjadi dalam industri ini. Setiap tahun, produsen mobil berlomba untuk menciptakan kendaraan yang lebih aman, ramah lingkungan, dan efisien. Berikut adalah beberapa tren utama yang kini sedang mendominasi dunia otomotif:

                        1. Kendaraan Listrik dan Ramah Lingkungan
                        Dengan meningkatnya kesadaran terhadap dampak lingkungan, permintaan terhadap kendaraan listrik (EV) terus meningkat. Banyak perusahaan besar, seperti Tesla, Toyota, dan Nissan, berinvestasi besar-besaran dalam mengembangkan teknologi EV yang lebih efisien. Kendaraan listrik kini dianggap sebagai solusi untuk mengurangi emisi karbon, terutama di kota-kota besar yang memiliki tingkat polusi tinggi.

                        2. Mobil Otonom
                        Mobil otonom atau self-driving merupakan inovasi masa depan yang diharapkan dapat mengubah cara kita berkendara. Beberapa produsen otomotif sudah meluncurkan teknologi semi-otonom, seperti fitur autopilot pada Tesla. Mobil otonom penuh masih dalam tahap pengembangan, tetapi dengan kemajuan teknologi kecerdasan buatan dan sensor, visi ini semakin mendekati kenyataan.

                        3. Konektivitas dan Internet of Things (IoT)
                        Konektivitas di dalam mobil saat ini tidak terbatas hanya pada GPS atau Bluetooth. Dengan adanya teknologi IoT, mobil kini bisa terhubung dengan perangkat lain dan bahkan dengan infrastruktur kota. Fitur seperti pemantauan jarak jauh, pengaturan suhu otomatis, serta peringatan servis membuat pengalaman berkendara semakin nyaman dan aman.

                        4. Mobilitas Berbagi dan Layanan Transportasi Baru
                        Tren lain yang berkembang adalah mobilitas berbagi seperti ride-hailing (misalnya Gojek atau Grab) dan car-sharing. Tren ini muncul sebagai solusi atas masalah kemacetan dan biaya kepemilikan mobil yang tinggi. Selain itu, perusahaan seperti Uber dan Lyft terus berinovasi untuk menyediakan layanan transportasi yang lebih fleksibel dan terjangkau.

                        5. Desain Futuristik dan Material Ringan
                        Desain mobil modern tidak hanya fokus pada estetika, tetapi juga pada efisiensi. Banyak produsen menggunakan material ringan seperti serat karbon dan aluminium untuk membuat mobil lebih efisien dalam konsumsi bahan bakar. Desain aerodinamis dan futuristik juga menjadi daya tarik tersendiri bagi konsumen, terutama generasi muda.

                        Industri otomotif terus bertransformasi seiring dengan kemajuan teknologi dan kebutuhan pasar yang dinamis. Masa depan otomotif tampak sangat menjanjikan dengan mobil-mobil yang semakin canggih, aman, dan ramah lingkungan.'
        ],
        [
            'id'    => 2,
            'slug'  => 'Kesehatan-Mata-Anjay',
            'judul' => 'Kesehatan Mata',
            'author'=> 'Satria Belva',
            'body'  => 'Menjaga Kesehatan Mata: Pentingnya dan Cara Melakukannya

                        Mata adalah salah satu organ yang sangat vital bagi kehidupan sehari-hari. Sayangnya, sering kali kesehatan mata terabaikan. Padahal, gangguan penglihatan seperti rabun jauh, rabun dekat, atau bahkan penyakit serius seperti glaukoma bisa dicegah dengan perawatan yang baik. 

                        1. Makan Makanan Sehat  
                        Nutrisi memainkan peran penting dalam menjaga kesehatan mata. Makanan yang kaya akan omega-3, lutein, zinc, dan vitamin C serta E dapat membantu mencegah degenerasi makula. Beberapa pilihan makanan yang baik untuk mata adalah ikan, sayuran hijau, telur, kacang-kacangan, dan buah-buahan.

                        2. Mengistirahatkan Mata  
                        Jika Anda bekerja di depan layar komputer atau gadget, cobalah metode 20-20-20: setiap 20 menit, lihatlah objek sejauh 20 kaki (sekitar 6 meter) selama 20 detik. Ini membantu mengurangi ketegangan mata yang disebabkan oleh paparan layar terus-menerus.

                        3. Gunakan Pelindung Mata 
                        Paparan sinar UV dari matahari bisa merusak retina dan meningkatkan risiko katarak. Gunakan kacamata hitam yang mampu melindungi dari sinar UV A dan UV B saat berada di luar ruangan. Selain itu, gunakan pelindung mata saat bekerja di lingkungan berisiko, seperti saat mengelas atau bekerja dengan bahan kimia.

                        4. Periksa Mata Secara Rutin  
                        Melakukan pemeriksaan mata setidaknya setahun sekali penting untuk mendeteksi gangguan penglihatan sejak dini. Deteksi dini memudahkan perawatan yang efektif sebelum kerusakan semakin parah.

                        Menjaga kesehatan mata merupakan investasi jangka panjang. Dengan pola hidup sehat, pemeriksaan rutin, serta pelindung mata yang tepat, kita bisa menjaga penglihatan tetap optimal di usia lanjut.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['judul' => 'Single Post', 'post' => $post]);
});
Route::get('/teams', function () {
    return view('teams', ['URLTitle'=>'Halaman Teams','title' => 'Teams']);
});
