<?php

use Illuminate\Database\Seeder;
use App\Articles;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Pantai Losari, Kidul', 'Pantai Kuta, Bali', 'Pantai Nihiwatu, NTT', 'Puncak Jaya Wijaya, Papua', 'Taman Safari Indoensia, Bogor'
        ];

        $category_id = [
            1, 1, 1, 2, 5
        ];

        $image = [
            'pantailosari.jpg', 'pantaikuta.jpg', 'nihiwatu.jpg', 'jayawijaya.jpg', 'tamansafari.jpg'
        ];

        $description = [
            'Pantai Losari adalah sebuah pantai yang terletak di sebelah barat kota Makassar, provinsi Sulawesi Selatan, Indonesia. Pantai ini menjadi tempat bagi warga Makassar untuk menghabiskan waktu pada pagi, sore dan malam hari menikmati pemandangan matahari tenggelam yang sangat indah. Jarak pantai Losari dari Bandar Udara Internasional Sultan Hasanuddin kurang lebih 20 KM dan akan memakan waktu sekitar 30 menit jika melalui Jalan Tol Insinyur Sutami.',
            'Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.',
            'Punya pantai di negeri sendiri tapi tidak bebas dikunjungi. Hmm, kedengarannya sedikit aneh. Tapi itulah kenyataan yang berlaku untuk Pantai Nihiwatu. Pantai berpasir putih sepanjang 2,5 km ini merupakan satu dari sepuluh pantai yang terbaik di Asia. Banyak peselancar dari mancanegara yang terpesona dengan ombak Pantai Nihiwatu. Mereka menjulukinya dengan Left God Waves. Terletak di arah 30 km dari Kota Waikabubak, Kabupaten Sumba Barat, Propinsi Nusa Tenggara Timur, Pantai Nihiwatu dikelola oleh sebuah resort internasional bernama Resort Nihiwatu. Tidak semua orang bisa bebas memasuki lokasi pantai ini . Hanya tamu Resort Nihiwatu saja yang diperbolehkan. Jika anda ingin menikmati keindahan Pantai Nihiwatu, anda harus memesan kamar untuk menginap di Resort Nihiwatu terlebih dahulu.',
            'Pegunungan Jayawijaya adalah rangkaian pegunungan yang membujur di Provinsi Papua, Indonesia. Pegunungan Jayawijaya adalah rangkaian pegunungan tertinggi di Indonesia, dengan puncak tertingginya yaitu Puncak Jaya (4.884 meter dari permukaan laut). Di puncak pegunungan Jayawijaya terdapat salju abadi yang jumlahnya semakin menipis akibat pemanasan global. Selain Puncak Jaya, Pegunungan Jayawijaya memiliki beberapa puncak lain yang lebih rendah.',
            'Taman Safari Indonesia adalah tempat wisata keluarga berwawasan lingkungan yang berorientasi pada habitat satwa di alam bebas. Taman Safari Indonesia terletak di Desa Cibeureum Kecamatan Cisarua, Kabupaten Bogor, Jawa Barat atau yang lebih dikenal dengan kawasan Puncak. Taman ini berfungsi menjadi penyangga Taman Nasional Gunung Gede Pangrango di ketinggian 900-1800 m di atas permukaan laut, serta mempunyai suhu rata-rata 16 - 24 derajat Celsius. Memberi makan hewan dengan wortel. Keunikan tempat wisata ini dari kebun binatang lainnya di Indonesia adalah pengunjungnya bisa berkeliling ke berbagai tempat untuk bisa melihat dari dekat semua jenis binatang dengan memakai mobil pribadi ataupun naik bus yang sudah disediakan pihak pengelola Taman Safari. Pengunjung juga bisa berinteraksi langsung dengan memberi makan hewan-hewan tersebut.',
        ];

        for($i = 0; $i < 5; $i++) {
            $articles = new Articles;
            $articles->fill([
                'user_id' => 1,
                'category_id' => $category_id[$i],
                'title' => $titles[$i],
                'description' => $description[$i],
                'image' => $image[$i]
            ]);
            $articles->save();
        }
    }
}