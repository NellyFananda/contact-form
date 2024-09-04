<?php
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form fields are set
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($koneksi, $_POST['nama']) : '';
$nim = isset($_POST['NIM']) ? mysqli_real_escape_string($koneksi, $_POST['NIM']) : '';
$kelas = isset($_POST['kelas']) ? mysqli_real_escape_string($koneksi, $_POST['kelas']) : '';
$gender = isset($_POST['gender']) ? mysqli_real_escape_string($koneksi, $_POST['gender']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($koneksi, $_POST['email']) : '';
$message = isset($_POST['komentar']) ? mysqli_real_escape_string($koneksi, $_POST['komentar']) : '';
$submit = isset($_POST['submit']) ? mysqli_real_escape_string($koneksi, $_POST['submit']) : '';

// Prepare SQL query
$query = "INSERT INTO registrasi (Nama, NIM, Kelas, Gender, Email, Message, Submit) 
        VALUES ('$nama', '$nim', '$kelas', '$gender', '$email', '$message', '$submit')";

// Execute SQL query
if (mysqli_query($koneksi, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Close connection
mysqli_close($koneksi);
?>
