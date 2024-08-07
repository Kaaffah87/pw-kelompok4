# pw-kelompok4
1.Apa fungsi dari database?
2.Apa fungsi echo"HELLO WORLD"?
3.Setiap variabel PHP diawali dengan simbol?
4.Berikut ini merupakan struktur perulangan php kecuali?
5.Apa fungsi $GET?
Jawaban
1.Mencegah terjadinya duplikat data manapun inkonsistensi data
2. Mencetak output ‘Hello World’ 
3.$
4.Struktur perulangan switch bukan termasuk dalam struktur perulangan di PHP.
5.Mengumpulkan nilai string query

1. Tuliskan query SQL untuk insert ke tabel list_kodam tanpa variabel (statis):
   sql
   INSERT INTO list_kodam (nama_kodam, jenis_kodam) VALUES ('nama', 'jenis');
2. Fungsi dari kode if (!empty($nama_kodam) && !empty($jenis_kodam)):
   Kode untuk memastikan bahwa kedua inputan, yaitu nama_kodam dan jenis_kodam, tidak kosong sebelum data diproses dan dimasukkan ke dalam database.
3. Method yang digunakan pada form di atas adalah:
   POST
4. Tuliskan kode program yang akan dijalankan ketika salah satu inputan tidak terisi:
   php
   if (empty($nama_kodam) || empty($jenis_kodam)) {
       echo '<p class="message error">Error: Semua field harus diisi.</p>';
   }
5. Fungsi dari kode $_POST['nama_kodam']:
   Kode $_POST['nama_kodam'] berfungsi untuk mengambil data yang diinputkan oleh pengguna pada form dengan name nama_kodam setelah form tersebut dikirim menggunakan method POST.
