<?php
        include 'koneksi.php';
        $nama = "";
        $email = "";
        $telp = "";
        $tgl = "";
        $asal = "";
        $paket = "";
        $destinasi = "";
        $jml_peserta = 0;
        $catatan = "";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latihan Kuis</title>
    <script src="https://kit.fontawesome.com/2d99d9dc75.js" crossorigin="anonymous"></script>
    <link href="dist/css/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <script>
    if (
        localStorage.theme === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }
    </script>
    <script>
    function validateform() {
        // var email = document.getElementById("email").value;
        // if (!str_contains($email, '@')) {
        //     alert("Penulisan email belum benar");
        //     document.getElementById("email").style.backgroundColor = "#ff6666";
        //     return false;
        // } else {
        //     document.getElementById("email").style.backgroundColor = "white";
        // }


        return true;
    }
    </script>
</head>

<body>
    <!-- Header Start -->
    <header class="absolute left-0 top-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="./index.php" class="block py-6 text-lg font-bold text-primary">kelana</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#homeSec"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#paketSec"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Paket</a>
                            </li>
                            <li class="group">
                                <a href="#destinasiSec"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Destinasi</a>
                            </li>
                            <li class="group">
                                <a href="#bookingSec"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Booking</a>
                            </li>
                            <li class="mt-3 flex items-center pl-8 lg:mt-0">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle" />
                                    <label for="dark-toggle">
                                        <div
                                            class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div
                                                class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- History Section Start -->
    <section id="historySec" class="pb-32 pt-36 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary">Booking</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">
                        Riwayat Booking
                </div>
            </div>



            <div class="flex flex-wrap justify-center">
                <?php
                 $query = mysqli_query($koneksi, "select * from riwayat_booking ORDER BY tgl_pesanan DESC");
                 while ($data = mysqli_fetch_array($query)) {
                ?>
                <div class="w-[420px] px-4">
                    <div class=" bg-white shadow-lg dark:bg-slate-800 mb-10 overflow-hidden rounded-xl ">
                        <div class="bg-slate-200 p-5">
                            <p class=" font-bold text-lg"><?php echo $data['tgl_pesanan'];?></p>
                        </div>

                        <div class="p-5">
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Nama Lengkap</p>
                                <p class="text-base text-secondary"><?php echo $data['nama'];?></p>

                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Email</p>
                                <p class="text-base text-secondary"><?php echo $data['email'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Nomor Telepon</p>
                                <p class="text-base text-secondary"><?php echo $data['telp'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Tanggal Perjalanan</p>
                                <p class="text-base text-secondary"><?php echo $data['tgl'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Asal Kota</p>
                                <p class="text-base text-secondary"><?php echo $data['asal'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Pilihan Paket Wisata</p>
                                <p class="text-base text-secondary"><?php echo $data['paket'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Pilihan Destinasi</p>
                                <p class="text-base text-secondary"><?php echo $data['destinasi'];?></p>
                            </div>

                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Jumlah Peserta</p>
                                <p class="text-base text-secondary"><?php echo $data['jml_peserta'];?></p>
                            </div>
                            <div class="mb-8  ">
                                <p class="text-base font-bold text-primary">Catatan</p>
                                <p class="text-base text-secondary"><?php echo $data['catatan'];?></p>
                            </div>
                            <?php 
                    $createDate = new DateTime($data['tgl_pesanan']);
                    $strip = $createDate->format('Y-m-d');
                    $time = new DateTime($data['tgl']);
                    $difference = $time->diff($createDate, true);

                    $hargaPaket = $data['paket'];
                    $hargaPaket = substr($hargaPaket, strpos($hargaPaket, ".")+1);
                    $hargaPaket = str_replace(".","",$hargaPaket);
                    $hargaPaket = (float)$hargaPaket;

                    if ($difference->days > 4) {
                        $hargaPaket = $hargaPaket - ($hargaPaket * 0.1);
                        $hargaPaket = number_format($hargaPaket, 0, ',', '.');
                        echo "<div class='mb-8'>";
                        echo "<p class='text-base font-bold text-primary'>Total</p>";
                        echo "<p class='text-base text-secondary'> Rp. ". $hargaPaket ."</p>";
                        echo "</div>";
                    } else {
                        echo "<div class='mb-8'>";
                        echo "<p class='text-base font-bold text-primary'>Total</p>";
                        echo "<p class='text-base text-secondary'> $hargaPaket </p>";
                        echo "</div>";
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>


    </section>
    <!-- Booking Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pb-12 pt-10">
        <div class="container">
            <div class="w-full border-slate-700">
                <p class="text-center text-xs font-medium text-slate-500">
                    Dibuat dengan <span class="text-pink-500">❤️</span> oleh
                    <a href="https://instagram.com/umarfthrz" target="_blank" class="font-bold text-primary">Umar
                        Andika</a>, menggunakan
                    <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home"
        class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse"
        id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-l-2 border-t-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="dist/js/script.js"></script>
</body>

</html>