# Form Register

Form Register adalah aplikasi web sederhana yang memungkinkan pengguna untuk mengisi formulir pendaftaran. Aplikasi ini menggunakan HTML untuk struktur, CSS untuk styling, dan PHP untuk memproses data formulir dan menyimpannya ke dalam basis data MySQL.

## Fitur

- Formulir pendaftaran dengan field Nama, NIM, Kelas, Gender, Email, dan Komentar.
- Penyimpanan data pendaftaran ke dalam basis data MySQL.
- Antarmuka yang responsif dan dirancang dengan tema profesional berwarna pink.

## Struktur Proyek

- **index.html**: Halaman utama dengan formulir pendaftaran.
- **proses.php**: Skrip PHP untuk memproses data formulir dan menyimpannya ke dalam basis data.
- **style.css**: Gaya CSS untuk mendesain formulir dan halaman.

## Persyaratan

- Server web dengan dukungan PHP (misalnya XAMPP, WAMP, atau server web yang sudah terkonfigurasi).
- Basis data MySQL dengan tabel `registrasi`.

## Langkah-langkah untuk Menjalankan Proyek

1. **Kloning atau Unduh Proyek**
   - Unduh atau klon repositori ini ke direktori lokal Anda.

2. **Konfigurasi Basis Data**
   - Buat basis data di MySQL dengan nama `registrasi` atau sesuaikan nama basis data pada file `proses.php`.
   - Buat tabel `registrasi` dengan struktur sebagai berikut:

     ```sql
     CREATE TABLE registrasi (
         ID INT AUTO_INCREMENT PRIMARY KEY,
         Nama VARCHAR(255) NOT NULL,
         NIM INT NOT NULL,
         Kelas VARCHAR(50) NOT NULL,
         Gender ENUM('Pria', 'Wanita') NOT NULL,
         Email VARCHAR(255) NOT NULL,
         Message TEXT,
         Submit TIME
     );
     ```

3. **Konfigurasi Koneksi Database**
   - Pastikan bahwa file `proses.php` memiliki pengaturan yang benar untuk koneksi basis data sesuai dengan pengaturan server Anda.

4. **Jalankan Server Web**
   - Jalankan server web lokal Anda (misalnya XAMPP atau WAMP).

5. **Akses Aplikasi**
   - Buka browser dan akses `index.html` melalui server web Anda untuk melihat formulir pendaftaran.

## Cara Penggunaan

1. Buka formulir pendaftaran di browser.
2. Isi semua field formulir yang diperlukan.
3. Klik tombol "Submit" untuk mengirimkan data formulir.
4. Data formulir akan diproses oleh `proses.php` dan disimpan ke dalam basis data MySQL.
## Run Locally

Clone the project

```bash
  git clone https://github.com/NellyFananda/contact-form
```

Go to the project directory

```bash
  cd contact-form
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```

## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Example Color | ![#ff69b4](https://www.colorhexa.com/ff69b4.png) #ff69b4 |
| Example Color | ![#555](https://www.colorhexa.com/555555.png) #555 |
| Example Color | ![#white](https://www.colorhexa.com/ffffff.png) #white |

## Authors

- [@nellyfananda](https://www.github.com/nellyfananda)


## 🔗 Links
[linkedin](https://id.linkedin.com/in/nelly-fananda-melani)

