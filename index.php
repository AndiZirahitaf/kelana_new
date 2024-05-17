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
        $tgl_pesanan = "";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KELANA NEW</title>
    <script src="https://kit.fontawesome.com/2d99d9dc75.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist/css/output.css">
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
</head>

<body>
    <!-- Header Start -->
    <header class="absolute left-0 top-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#homeSec" class="block py-6 text-lg font-bold text-primary">kelimanaaa</a>
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

    <!-- Hero Section Start -->
    <section id="homeSec" class="py-28 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        Halo👋, kami kelana,
                        <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Solusi
                            Perjalanan Anda.</span>
                    </h1>
                    <p class="mb-10 font-medium leading-relaxed text-secondary">
                        <span class="font-bold text-dark dark:text-white">Jelajahi </span>
                        keindahan DIY bersama kami.

                    </p>

                    <a href="#bookingSec"
                        class="rounded-full bg-primary px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Booking
                        Perjalanan</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:right-0 lg:mt-9">
                        <img src="dist/img/yogya.png" alt="Yogyakarta" class="relative z-10 mx-auto max-w-full" />
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6"
                                    d="M53.1,-13.2C62.6,11.9,59.7,45,42,58C24.2,70.9,-8.4,63.7,-30.6,46.5C-52.9,29.3,-64.8,2.2,-58,-19.3C-51.2,-40.8,-25.6,-56.6,-1.9,-56C21.8,-55.4,43.6,-38.3,53.1,-13.2Z"
                                    transform="translate(100 100) scale(1.1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Paket Section Start -->
    <section id="paketSec" class="bg-slate-100 pb-32 pt-36 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-2xl text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary">Paket</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">
                        Sendiri, bersama pasangan atau keluarga?
                    </h2>
                    <p class="text-md font-medium text-secondary md:text-lg">
                        Pilih paket perjalanan yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <div class="px-6 py-8">

                            <a href="#"
                                class="block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Self
                                Discovery Escape</a>
                            <div class="mb-3 block">
                                1 Orang
                            </div>



                            <p class="mb-6 text-base font-medium text-secondary">
                                - 1 Day <br />
                                - Include Consumption <br />
                                - All Destination Same Price <br />
                                - With Professional Tour Guide
                            </p>
                            <a href="#"
                                class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <div class="px-6 py-8">



                            <a href="#"
                                class="block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Couple's
                                Paradise</a>
                            <div class="mb-3 block">
                                2 Orang
                            </div>

                            <p class="mb-6 text-base font-medium text-secondary">
                                - 1 Day <br />
                                - Include Consumption <br />
                                - All Destination Same Price <br />
                                - With Professional Tour Guide
                            </p>
                            <a href="#"
                                class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <div class="px-6 py-8">



                            <a href="#"
                                class=" block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Family
                                Fun Adventures</a>
                            <div class="mb-3 block">


                                3-5 Orang
                            </div>

                            <p class="mb-6 text-base font-medium text-secondary">
                                - 1 Day <br />
                                - Include Consumption <br />
                                - All Destination Same Price <br />
                                - With Professional Tour Guide
                            </p>
                            <a href="#"
                                class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <div class="px-6 py-8">
                            <h3>


                                <a href="#"
                                    class="block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Regular
                                    Group</a>
                                <div class="mb-3 block">


                                    6-10 Orang
                                </div>
                            </h3>
                            <p class="mb-6 text-base font-medium text-secondary">
                                - 1 Day <br />
                                - Include Consumption <br />
                                - All Destination Same Price <br />
                                - With Professional Tour Guide
                            </p>
                            <a href="#"
                                class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <div class="px-6 py-8">
                            <a href="#"
                                class="block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">Large
                                Group</a>
                            <div class="mb-3 block">
                                12-15 Orang
                            </div>



                            <p class="mb-6 text-base font-medium text-secondary">
                                - 1 Day <br />
                                - Include Consumption <br />
                                - All Destination Same Price <br />
                                - With Professional Tour Guide
                            </p>
                            <a href="#"
                                class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Paket Section End -->

    <!-- Destinasi Section Start -->
    <section id="destinasiSec" class="bg-slate-100 pb-16 pt-36 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary">Destinasi</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">
                        Enaknya kemana, ya?
                    </h2>
                    <p class="text-md font-medium text-secondary md:text-lg">
                        Pilih destinasi yang ingin Anda kunjungi.
                    </p>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="dist/img/destinasi/1.jpg" alt="Landing Page" width="w-full" />
                    </div>
                    <h3 class="mb-3 mt-5 text-xl font-semibold text-dark dark:text-white">
                        Yogyakarta
                    </h3>
                    <p class="text-base font-medium text-secondary">
                        Pusat kebudayaan Jawa yang kaya akan warisan sejarah, seni
                        tradisional, dan pesona alam yang memukau.
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="dist/img/destinasi/2.jpg" alt="E-Commerce" width="w-full" />
                    </div>
                    <h3 class="mb-3 mt-5 text-xl font-semibold text-dark dark:text-white">
                        Sleman
                    </h3>
                    <p class="text-base font-medium text-secondary">
                        Menawarkan panorama alam yang memesona, kearifan lokal, dan
                        suasana kota yang bersemangat.
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class=" overflow-hidden rounded-md shadow-md">
                        <img class="" src="dist/img/destinasi/3.jpg" alt="Technical Documentation" />
                    </div>
                    <h3 class="mb-3 mt-5 text-xl font-semibold text-dark dark:text-white">
                        Kulon Progo
                    </h3>
                    <p class="text-base font-medium text-secondary">
                        Terkenal dengan keindahan alamnya, keberagaman budaya, dan pesona
                        kehidupan pedesaan yang damai.
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="dist/img/destinasi/4.jpg" alt="Tribute Page" width="w-full" />
                    </div>
                    <h3 class="mb-3 mt-5 text-xl font-semibold text-dark dark:text-white">
                        Bantul
                    </h3>
                    <p class="text-base font-medium text-secondary">
                        Memukau dengan pantai indah, kegiatan pertanian, dan kehidupan
                        masyarakat yang ramah serta berbudaya.
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="dist/img/destinasi/5.webp" alt="Tribute Page" width="w-full" />
                    </div>
                    <h3 class="mb-3 mt-5 text-xl font-semibold text-dark dark:text-white">
                        Gunung Kidul
                    </h3>
                    <p class="text-base font-medium text-secondary">
                        Terkenal dengan pantainya yang eksotis, gua-gua alam, dan
                        keindahan alam karst yang menakjubkan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Destinasi Section End -->

    <!-- Booking Section Start -->
    <section id="bookingSec" class="pb-32 pt-36 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-semibold text-primary">Booking</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">
                        Reservasi Perjalanan
                    </h2>
                    <p class="text-md font-medium text-secondary md:text-lg">
                        Pesan perjalanan anda sekarang.
                    </p>
                    <p class="text-md font-medium text-secondary md:text-lg">
                        <a href="riwayat_booking.php" target="_blank" class="text-primary underline-offset-2">Lihat
                            Riwayat Reservasi
                            Anda</a>
                        atau buat reservasi baru
                    </p>
                </div>
            </div>

            <form action="post.php" method="post">
                <div class="w-full lg:mx-auto lg:w-2/3">
                    <div class="mb-8 w-full px-4">
                        <label for="nama" class="text-base font-bold text-primary">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="email" class="text-base font-bold text-primary">Alamat Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="telp" class="text-base font-bold text-primary">Nomor Telepon</label>
                        <input type="tel" id="telp" name="telp" placeholder="0812-3456-7890" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none
                        focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="tgl" class="text-base font-bold text-primary">Tanggal Perjalanan</label>
                        <input type="date" id="tgl" name="tgl"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="asal" class="text-base font-bold text-primary">Asal Kota</label>
                        <input type="text" id="asal" name="asal"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="paket" class="text-base font-bold text-primary">Pilihan Paket Wisata</label>

                        <select name="paket" id="paket" name="paket"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                            <option value="Self Discovery Escape - Rp. 275.000">
                                Self Discovery Escape - Rp. 275.000
                            </option>
                            <option value="Couples Paradise - Rp. 520.000">
                                Couple's Paradise - Rp. 520.000
                            </option>
                            <option value="Family Fun Adventures - Rp. 1.225.000">
                                Family Fun Adventures - Rp. 1.225.000
                            </option>
                            <option value="Regular Group - Rp. 2.300.000">
                                Regular Group - Rp. 2.300.000
                            </option>
                            <option value="Large Group - Rp. 3.300.000">
                                Large Group - Rp. 3.300.000
                            </option>
                        </select>
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="destinasi" class="text-base font-bold text-primary">Destinasi Wisata</label>

                        <select name="destinasi" id="destinasi" name="destinasi"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Sleman">Sleman</option>
                            <option value="Kulon Progo">Kulon Progo</option>
                            <option value="Bantul">Bantul</option>
                            <option value="Gunung Kidul">Gunung Kidul</option>
                        </select>
                    </div>

                    <div class="mb-8 w-full px-4">
                        <label for="jml_peserta" class="text-base font-bold text-primary">Jumlah Peserta</label>
                        <input type="number" id="jml_peserta" name="jml_peserta"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="catatan" class="text-base font-bold text-primary">Catatan</label>
                        <textarea id="catatan" name="catatan"
                            class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
                    </div>
                    <div class="w-full px-4 text-center">
                        <button type="submit" name="submit"
                            class="rounded-full bg-primary px-8 py-3 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">
                            Booking Sekarang
                        </button>

                    </div>
                </div>
            </form>
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
    <a href="#homeSec"
        class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse"
        id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-l-2 border-t-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="dist/js/script.js"></script>
</body>

</html>