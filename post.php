<?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $tgl = $_POST['tgl'];
        $asal = $_POST['asal'];
        $paket = $_POST['paket'];
        $destinasi = $_POST['destinasi'];
        $jml_peserta = $_POST['jml_peserta'];
        $catatan = $_POST['catatan'];


        if (empty($nama) || empty($email) || empty($telp) || empty($tgl) || empty($asal) || empty($paket) || empty($destinasi) || empty($jml_peserta) || empty($catatan) || $nama == "" || $email == "" || $telp == "" || $tgl == "" || $asal == "" || $paket == "" || $destinasi == "" || $jml_peserta == 0 || $catatan == "" || $jml_peserta == ""){
            echo "<script>alert('Data tidak boleh kosong!');</script>";
            return;
        }

        $query = "INSERT INTO riwayat_booking (nama, email, telp, tgl, asal, paket, destinasi, jml_peserta, catatan, tgl_pesanan) VALUES ('$nama', '$email', '$telp', '$tgl', '$asal', '$paket', '$destinasi', '$jml_peserta', '$catatan', now())";
        $result = mysqli_query($koneksi, $query);   

        header('Location: booking_result.php');

        // if ($result) {
        //     echo "<script>alert('Data berhasil disimpan!');</script>";
        //     header('Location: riwayat_booking.php');
        // } else {
        //     echo "<script>alert('Data gagal disimpan!');</script>";
        // }
    }
?>