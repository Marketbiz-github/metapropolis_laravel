<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PengertianMetapropolis;
use App\Models\TentangKami;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Manfaat;
use App\Models\PerluAndaTahu;
use App\Models\Testimoni;
use App\Models\Faq;
use App\Models\Province;
use App\Models\RanchMarket;
use App\Models\Regency;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Blog::factory(4)->create();

        // User::create([
        //     'name' => 'Admin',
        //     'username' => 'adminmeta',
        //     'password' => bcrypt('1234qwer')
        // ]);

        // Banner::create([
        //     'gambar_banner' => '1669617335-75x75.png',
        //     'text_1' => 'APA ITU PROPOLIS',
        //     'text_2' => 'KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?'
        // ]);
        // PengertianMetapropolis::create([
        //     'gambar_pengertian' => 'IMG_6769.JPG',
        //     'judul' => 'Meta Propolis',
        //     'pengertian' => 
        //     'Meta Propolis merupakan propolis asli 100%. Meta Propolis dapat Anda gunakan untuk menjaga kekebalan tubuh Anda dan keluarga Anda agar tidak mudah sakit, mengurangi peradangan dan luka yang terkadang terjadi tanpa terduga, dan menjaga agar organ tubuh Anda tetap dalam kondisi prima.<br>
        //      Meta Propolis cocok untuk dikonsumsi oleh Anda yang sibuk dan memiliki banyak aktivitas. Dimana Anda dituntut untuk selalu prima dalam setiap situasi. Meta Propolis akan menjadi teman terpercaya yang akan membantu Anda untuk menjaga kesehatan dan memulihkannya pada saat Anda membutuhkan.'
        // ]);

        // TentangKami::create([
        //     'gambar_tentang_kami' => 'IMG_6769.JPG',
        //     'visi' => 
        //     'VISI <br>
        //      Menjadi perusahaan obat tradisional dengan mengolah bahan herbal yang dapat memberikan manfaat bagi masyarakat, lingkungan dan ekosistemnya.
        //      Menciptakan 1 juta Pengusaha Mandiri di Indonesia',
        //     'misi' => 
        //     'MISI <br>
        //     Mengembangkan produk-produk herbal secara berkesinambungan <br>
        //     Menjadi perusahaan global dengan mefokuskan pada obat herbal <br>
        //     Membantu serta mendorong pemerintah, dunia pendidikan dan kedokteran agar lebih berperan dalam penelitian dan pengembangan obat serta pengobatan herbal <br>
        //     Membantu menciptakan 1juta pengusaha lokal serta menciptakan lapangan kerja baru' 
        // ]);

        // Manfaat::create([
        //     // 'gambar_banner_manfaat' => 'IMG_6769.JPG',
        //     'ikon_manfaat' => 'imunomodulator.png',
        //     'gambar_manfaat' => 'IMG_6769.JPG',
        //     'nama_manfaat' => 'Imunomodulator',
        //     'pengertian' => 
        //     'Jika sistem imun tubuh melemah maka tubuh akan rentan terkena berbagai penyakit ringan, akut, bahkan kronis. 
        //     Dalam hal ini propolis adalah suplemen paling efektif meningkatkan kerja sistem imun atau sebagai imunomodulator 
        //     sehingga memperkuat sistem pertahanan tubuh melawan berbagai penyakit. Propolis bekerja sebagai imunomodulator 
        //     yaitu meningkatkan aktivitas sel-sel imun dan memodulasi respon inflamasi dalam jumlah yang cukup, juga sebagai 
        //     antioksidan yang memproteksi sel-sel tubuh dari kerusakan'
        // ]);
        // Manfaat::create([
        //     // 'gambar_banner_manfaat' => 'IMG_6769.JPG',
        //     'ikon_manfaat' => 'antioksidan.png',
        //     'gambar_manfaat' => 'IMG_6769.JPG',
        //     'nama_manfaat' => 'Anti Oksidan',
        //     'pengertian' => 
        //     'Propolis memiliki kekuatan antioksidan yang unggul. Semakin besar nilai ORAC (Oxygen Radical Absorbance Capacity) semakin kuat herbal tersebut melawan radikal bebas. Senyawa radikal bebas merupakan penyebab beragam penyakit kronis serta penuaan dini seperti kanker, Hipertensi, stroke, sakit jantung, aterosklerosis, radang sendi, preeklamsia, Alzheimer dan lainnya <br>
        //      Propolis memiliki nilai antioksidan yang paling tinggi dibandingkan buah-buahan lain yang kita ketahui kaya akan antioksidan. Hal ini karena kandungan flavonoid yang sangat tinggi pada propolis. Senyawa flavonoid dalam propolis dapat menangkap radikal bebas atau racun yang berbahaya bagi tubuh sehingga tubuh tidak terkena berbagai penyakit kronis dan tetap awet muda'
        // ]);
        // Manfaat::create([
        //     // 'gambar_banner_manfaat' => 'IMG_6769.JPG',
        //     'ikon_manfaat' => 'antivirus.png',
        //     'gambar_manfaat' => 'IMG_6769.JPG',
        //     'nama_manfaat' => 'Anti Virus',
        //     'pengertian' => 
        //     'Meta Propolis setelah diteliti melalui metode in silico tentang aktivitas anti virus SARS CoV-2. Puluhan senyawa yang terdapat dalam Meta Propolis terbukti dapat menghambat masuknya virus SARS CoV-2 ke dalam sel tubuh juga mencegah replikasi virus yang lebih baik dari obat anti virus Nelfinavir dan Pravastatin berdasarkan kajian in silico. Terdapat 4 senyawa yang paling unggul sebagai anti virus yaitu neoblavaisoflavon, methylophiopogonone A, 3′-Methoxydaidzin, dan genistin.'
        // ]);
        // Manfaat::create([
        //     // 'gambar_banner_manfaat' => 'IMG_6769.JPG',
        //     'ikon_manfaat' => 'antikanker.png',
        //     'gambar_manfaat' => 'IMG_6769.JPG',
        //     'nama_manfaat' => 'Anti Kanker dan Tumor',
        //     'pengertian' => 
        //     'Propolis memiliki efek sinergitas yang dapat mencegah tumbuhnya tumor atau kanker serta membunuh sel kanker. Efek tersebut disebabkan propolis memiliki aktivitas antioksidan, imunomodulator, penghambatan siklus sel kanker, anti-angiogenesis, aktivitas sitotoksik dan apoptosis sel kanker sehingga dapat efektif sebagai suplemen pendamping terapi kanker dan pencegahan penyakit kanker. <br>
        //     Melalui uji laboratorium, Meta Propolis teruji memiliki aktivitas anti kanker. Propolis konsentrasi 0,14% diujikan terhadap sel kanker payudara (MCF7) dan hasilnya propolis dapat membunuh sebagian besar sel kanker pada tahap akhir (fase 5) pertumbuhan sel kanker payudara, dimana efektivitasnya hampir sama dengan Obat anti kanker Doxorubicin'
        // ]);


        // PerluAndaTahu::create([
        //     'ikon_perlu' => 'bees.png',
        //     'gambar_perlu' => 'IMG_6769.JPG',
        //     'nama_perlu' => 'Apa Itu Propolis',
        //     'pengertian' => 
        //     'Propolis atau sering disebut lem lebah adalah zat yang dihasilkan oleh lebah madu. Zat ini dikumpulkan oleh lebah dari pucuk daun muda atau getah pohon dan kemudian dicampur dengan air liur mereka (resin) yang digunakan untuk menambal dan mensterilkan sarang. Hasilnya bertekstur lengket, berwarna coklat kehijauan dan digunakan sebagai pelapis untuk membangun sarang lebah. Nah, inilah yang disebut propolis.'
        // ]);

        // PerluAndaTahu::create([
        //     'ikon_perlu' => 'documents.png',
        //     'gambar_perlu' => 'IMG_6769.JPG',
        //     'nama_perlu' => 'Fakta Propolis',
        //     'pengertian' => 
        //     'Propolis umumnya memiliki kandungan zat dan nutrisi yang mirip dengan madu, sehingga baik digunakan untuk kesehatan dan kecantikan. Berikut ini adalah beberapa zat dan nutrisi yang terkandung di dalam propolis: <br>
        //     ⦁ Karbohidrat <br>
        //     ⦁ Lemak <br>
        //     ⦁ Protein <br>
        //     ⦁ Magnesium <br>
        //     ⦁ Kalium <br>
        //     ⦁ Natrium <br>
        //     ⦁ Zat besi <br>
        //     ⦁ Vitamin B <br>
        //     ⦁ Vitamin C <br>
        //     ⦁ Vitamin E <br>
            
        //     Propolis juga mengandung zat lain, seperti antioksidan polifenol dan flavonoid, serta minyak esensial. polifenol (flavonoid, asam fenolat, dan esternya), terpenoid, steroid, dan asam amino.'
        // ]);

        // PerluAndaTahu::create([
        //     'ikon_perlu' => 'plus.png',
        //     'gambar_perlu' => 'IMG_6769.JPG',
        //     'nama_perlu' => 'Apa Itu Penyakit Degeneratif',
        //     'pengertian' => 
        //     'Penyakit degeneratif adalah kondisi kesehatan yang menyebabkan jaringan atau organ memburuk dari waktu ke waktu. Ada cukup banyak jenis penyakit generatif yang terkait dengan penuaan, atau memburuk selama proses penuaan. <br>
        //     Penyakit degeneratif diklasifikasikan menjadi tiga kelompok utama, yaitu: kardiovaskular, neoplastik, dan sistem saraf. Penyakit kardiovaskular yang paling umum adalah hipertensi, penyakit koroner dan infark miokard. Penyakit neoplastik termasuk tumor dan kanker. Penyakit yang mempngaruhi sistem saraf termasuk Parkinson dan Alzheimer.'
        // ]);

        // Testimoni::create([
        //     'data_testimoni' => 
        //     '<iframe width="560" height="315" src="https://www.youtube.com/embed/xoBJnpzymss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //     'kategori' => 
        //     'Youtube',
        //     'kutipan' => 
        //     'Ini adalah penjelasan tentang Meta Propolis pertama'
        // ]);

        // Testimoni::create([
        //     'data_testimoni' => 
        //     '<iframe width="560" height="315" src="https://www.youtube.com/embed/4nqg6lsbFsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //     'kategori' => 
        //     'Youtube',
        //     'kutipan' => 
        //     'Ini adalah penjelasan tentang Meta Propolis kedua'
        // ]);

        // Faq::create([
        //     'pertanyaan' => 'Apa itu Propolis ?',
        //     'jawaban' =>  'Propolis atau sering disebut lem lebah adalah zat yang dihasilkan oleh lebah madu. Zat ini dikumpulkan oleh lebah dari pucuk daun muda atau getah pohon dan kemudian dicampur dengan air liur mereka (resin) yang digunakan untuk menambal dan mensterilkan sarang. Hasilnya bertekstur lengket, berwarna coklat kehijauan dan digunakan sebagai pelapis untuk membangun sarang lebah.'
        // ]);

        // $provinceCsv = fopen(base_path("database/data/provinces.csv"), "r");

        // $firstlineProvince = true;
        // while (($data = fgetcsv($provinceCsv, 2000, ",")) !== FALSE) {
        //     if (!$firstlineProvince) {
        //         Province::create([
        //             'id' => $data[0],
        //             'name' => $data[1]
        //         ]);
        //     }
        //     $firstlineProvince = false;
        // }

        // $regencyCsv = fopen(base_path("database/data/regencies.csv"), "r");

        // $firstlineRegency = true;
        // while (($data = fgetcsv($regencyCsv, 2000, ",")) !== FALSE) {
        //     if (!$firstlineRegency) {
        //         Regency::create([
        //             'id' => $data[0],
        //             'province_id' => $data[1],
        //             'name' => $data[2]
        //         ]);
        //     }
        //     $firstlineRegency = false;
        // }

        // $ranchMarkets = [
        //     [
        //         'name' => 'Ranch Market Pondok Indah Mall 3',
        //         'regency_id' => 3171,
        //         'address' => 'LG Floor West Lobby
        //                 Jl. Kartika Utama RT.1/RW.16
        //                 Pondok Pinang, Kebayoran Lama
        //                 Jakarta Selatan',
        //         'post_code' => null,
        //         'telp' => '0823927392',
        //         'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008741170261!2d106.78160997512973!3d-6.262577893726048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11a9814be53%3A0x683854d4d8b148ac!2sRanch%20Market%20-%20Pondok%20Indah!5e0!3m2!1sen!2sid!4v1686535885406!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        //     ],
        //     [
        //         'name' => 'Ranch Market Lippo Mall Puri',
        //         'regency_id' => 3174,
        //         'address' => 'Lippo Mall Puri, GF
        //                 Jl. Puri Indah Raya Blok U1
        //                 Puri Indah CBD
        //                 Jakarta',
        //         'post_code' => '11610',
        //         'telp' => '0823927392',
        //         'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008741170261!2d106.78160997512973!3d-6.262577893726048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11a9814be53%3A0x683854d4d8b148ac!2sRanch%20Market%20-%20Pondok%20Indah!5e0!3m2!1sen!2sid!4v1686535885406!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        //     ],
        //     [
        //         'name' => 'Ranch Market The Breeze',
        //         'regency_id' => 3671,
        //         'address' => 'BSD Green Office Park
        //                 Jl. Grand Boulevard BSD City,
        //                 Tangerang',
        //         'post_code' => '12345',
        //         'telp' => '0823927392',
        //         'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008741170261!2d106.78160997512973!3d-6.262577893726048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11a9814be53%3A0x683854d4d8b148ac!2sRanch%20Market%20-%20Pondok%20Indah!5e0!3m2!1sen!2sid!4v1686535885406!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        //     ],
        //     [
        //         'name' => 'Ranch Market Citywalk Elvee',
        //         'regency_id' => 3671,
        //         'address' => 'Millenium Village
        //                 Jl. Boulevard Jend. Sudirman 1525 Unit GF 05-06
        //                 Kelapa Dua, Tangerang',
        //         'post_code' => '15811',
        //         'telp' => '0823927392',
        //         'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008741170261!2d106.78160997512973!3d-6.262577893726048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11a9814be53%3A0x683854d4d8b148ac!2sRanch%20Market%20-%20Pondok%20Indah!5e0!3m2!1sen!2sid!4v1686535885406!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        //     ],
        //     [
        //         'name' => 'Ranch Market Citywalk Elvee',
        //         'regency_id' => 3671,
        //         'address' => 'Millenium Village
        //                 Jl. Boulevard Jend. Sudirman 1525 Unit GF 05-06
        //                 Kelapa Dua, Tangerang',
        //         'post_code' => '15811',
        //         'telp' => '0823927392',
        //         'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.008741170261!2d106.78160997512973!3d-6.262577893726048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11a9814be53%3A0x683854d4d8b148ac!2sRanch%20Market%20-%20Pondok%20Indah!5e0!3m2!1sen!2sid!4v1686535885406!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        //     ],
        // ];

        // foreach($ranchMarkets as $ranchMarket){
        //     RanchMarket::create($ranchMarket);
        // }

        $this->call([
            TutorialSeeder::class,
            EventSeeder::class,
        ]);
    }
}
