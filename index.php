<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB SMK TI BAZMA 2024/2025</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles-fe.css" rel="stylesheet" />
    <!-- <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" /> -->
    <link href="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/css/argon-dashboard.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index">
                <img src="img/logos/logo-smk-ti-bazma-long-putih.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link-fe" aria-current="page" href="index">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link-fe" href="informasi">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link-fe" href="kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">PPDB SMK TI BAZMA</h1>
                        <h1 class="fw-bolder text-white mb-4">Tahun Pelajaran 2024/2025</h1>
                        <p class="lead text-white-50 mb-4">
                            Langkah Awal Belajar, Bertumbuh, dan Berubah di Era Digital
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <!-- <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#formulir">Daftar</a> -->
                            <a class="btn btn-outline-success btn-lg px-4" href="/informasi">Informasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Banner section-->
    <!-- <section class="bg-light py-5 border-bottom" id="banner">
        <div class="container px-5 my-5 py-5">
            <div class="row gx-5">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/slider-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/slider-2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sebelumnya</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Selanjutnya</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section> -->

    <!-- Form section-->
    <section class="py-6" id="formulir">
        <div class="container px-6 my-6">
            <!-- <div class="multisteps-form py-5"> -->
                <div class="text-center mb-3">
                    <h2 class="fw-bolder">Formulir Pendaftaran Peserta Didik Baru</h2>
                    <p class="lead mb-0">Islamic Boarding School SMK TI BAZMA</p>
                </div>
                <div class="row">
                    <div class="col-12 mx-auto my-5">
                        <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn js-active" type="button" title="Data Diri">
                                <span>Data Diri</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Prestrasi">
                                <span>Prestasi</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Orang Tua/Wali">
                                <span>Orang Tua/Wali</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Tempat Tinggal">
                                <span>Tempat Tinggal</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Riwayat Kesehatan">
                                <span>Riwayat Kesehatan</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Upload Dokumen">
                                <span>Upload Dokumen</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Pernyataan">
                                <span>Pernyataan</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 m-auto">
                        <form class="multisteps-form__form" id="formRegis">
                            <!-- Data Diri -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Data Diri Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun Pelajaran<i class="text-danger">*</i></label>
                                                <select class="form-control" name="tahun_pelajaran_id" id="select-tahun-pelajaran">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NIK<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="nik" id="nik">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NISN<i class="text-danger">*</i></label>
                                                <input class="form-control" type="email" name="nisn" id="nisn">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Lengkap<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tempat Lahir<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Lahir<i class="text-danger">*</i></label>
                                                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat Saat Ini<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="alamat" id="alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Provinsi Tempat Tinggal<i class="text-danger">*</i></label>
                                                <select class="form-control" name="provinsi_id" id="select-provinsi">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kota/Kabupaten Tempat Tinggal<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="kota_kabupaten" id="kota_kabupaten">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">No. Telephone/Hp/Whatsapp<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="no_whatsapp_telp" id="no_whatsapp_telp">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Akun Media Sosial (instagram/fb/twitter jika ada)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="sosial_media" id="sosial_media">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Asal SMP/MTs/Sederajat<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="smp_derajat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NPSN<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="npsn">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun Lulus<i class="text-danger">*</i></label>
                                                <select class="form-control" name="tahun_lulus_id" id="select-tahun-lulus">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Anak ke....dari....bersaudara | <small><i>(Contoh: 2 dari 4)</i></small><i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="anak_ke_sodara" id="anak_ke_sodara">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Keadaan Orang Tua<i class="text-danger">*</i></label>
                                                <select class="form-control" name="keadaan_orang_tua_id" id="select-keadaan-ortu">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status dalam Keluarga<i class="text-danger">*</i></label>
                                                <select class="form-control" name="status_dalam_keluarga_id" id="select-status-dalam-keluarga">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Saat Ini Tinggal Bersama<i class="text-danger">*</i></label>
                                                <select class="form-control" name="tinggal_bersama_status_id" id="select-tinggal-bersama">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penerima Bantuan Sosial | <small><i>Jika tidak, isi dengan <b>-</b></i></small><i class="text-danger">*</i></label>
                                                <select class="form-control" name="penerimaan_bantuan_sosial_id" id="select-penerima-bansos">
                                                    <option value="" disabled selected>Pilih</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Prestasi -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Data Prestasi Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <p class="text-sm text-uppercase">
                                            Nilai Rapor <b>Matematika</b>
                                            Semester 3-5
                                        </p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 3<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_matematika_3" id="rapor_matematika_3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_matematika_4" id="rapor_matematika_4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_matematika_5" id="rapor_matematika_5">
                                            </div>
                                        </div>
                                        <p class="text-sm text-uppercase">
                                            Nilai Rapor <b>IPA</b>
                                            Semester 3-5
                                        </p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 3<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_ipa_3" id="rapor_ipa_3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_ipa_4" id="rapor_ipa_4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_ipa_5" id="rapor_ipa_5">
                                            </div>
                                        </div>
                                        <p class="text-sm text-uppercase">
                                            Nilai Rapor <b>Bahasa Indonesia</b>
                                            Semester 3-5
                                        </p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 3<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_indo_3" id="rapor_indo_3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_indo_4" id="rapor_indo_4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_indo_5" id="rapor_indo_5">
                                            </div>
                                        </div>
                                        <p class="text-sm text-uppercase">
                                            Nilai Rapor <b>Bahasa Inggris</b>
                                            Semester 3-5
                                        </p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 3<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_inggris_3" id="rapor_inggris_3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_inggris_4" id="rapor_inggris_4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_inggris_5" id="rapor_inggris_5">
                                            </div>
                                        </div>
                                        <p class="text-sm text-uppercase">
                                            Nilai Rapor <b>Agama Islam</b>
                                            Semester 3-5
                                        </p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 3<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_islam_3" id="rapor_islam_3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_islam_4" id="rapor_islam_4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="rapor_islam_5" id="rapor_islam_5">
                                            </div>
                                        </div>
                                        <hr class="horizontal dark mb-4 mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Bahasa Asing yang Dikuasai (Jika Ada)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="bahasa_asing" id="bahasa_asing">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jumlah Hafalan (Juz)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="jumlah_hafalan_juz" id="jumlah_hafalan_juz">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Juz Yang Telah Dihafal<i class="text-danger">*</i></label>
                                                <br><small><i>(Contoh: Juz 30, Juz 29, dll)</i></small>
                                                <input class="form-control" type="text" name="hafalan_juz" id="hafalan_juz">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Riwayat Prestasi Calon Peserta Didik (Jika Ada)<i class="text-danger">*</i></label>
                                                <br><small><i>format pengisian : Jenis prestasi - tingkat - nama prestasi - tahun - penyelenggara</i></small>
                                                <input class="form-control" type="text" name="riwayat_prestasi_calon_peserta_didik" id="riwayat_prestasi_calon_peserta_didik">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Riwayat Organisasi Sekolah dan Non-Sekolah (Jika Ada)<i class="text-danger">*</i></label>
                                                <br><small><i>(format pengisian : bidang organisasi - tingkat - nama organisasi - tahun kepengurusan)</i></small>
                                                <input class="form-control" type="text" name="riwayat_organisasi_sekolah_dan_non_sekolah" id="riwayat_organisasi_sekolah_dan_non_sekolah">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hal-hal Khusus<i class="text-danger">*</i></label>
                                                <br><small><i>(Keunikan, Passion, Kebiasaan)</i></small>
                                                <input class="form-control" type="text" name="hal_hal_khusus" id="hal_hal_khusus">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Cita-cita<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="cita_cita" id="cita_cita">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobi<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="hobi_kegemaran" id="hobi_kegemaran">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Orang Tua/Wali -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Data Orang Tua/Wali Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <!-- Data Ayah -->
                                        <div class="col-md-6">
                                            <p class="text-sm text-uppercase">
                                                Data Ayah Kandung
                                            </p>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Ayah Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="nama_ayah_kandung" id="nama_ayah_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pendidikan Terakhir<i class="text-danger">*</i></label>
                                                <select class="form-control" name="pendidikan_terakhir_ayah_id" id="select-pendidikan-ayah">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pekerjaan Ayah Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="pekerjaan_ayah_kandung" id="pekerjaan_ayah_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penghasilan Ayah Kandung <i class="text-danger">*</i></label>
                                                <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                                <input class="form-control" type="number" name="penghasilan_pokok_pensiunan_ayah" id="penghasilan_pokok_pensiunan_ayah">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan<i class="text-danger">*</i></label>
                                                <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                                <input class="form-control" type="text" name="pendapatan_diluar_penghasilan_perbulan_ayah" id="pendapatan_diluar_penghasilan_perbulan_ayah">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat Domisili Ayah Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="domisili_ayah_kandung" id="domisili_ayah_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ayah Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="no_whatsapp_ayah_kandung" id="no_whatsapp_ayah_kandung">
                                            </div>
                                        </div>
                                        <!-- Data Ibu -->
                                        <div class="col-md-6">
                                            <p class="text-sm text-uppercase">
                                                Data Ibu Kandung
                                            </p>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Ibu Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="nama_ibu_kandung" id="nama_ibu_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pendidikan Terakhir<i class="text-danger">*</i></label>
                                                <select class="form-control" name="pendidikan_terakhir_ibu_id" id="select-pendidikan-ibu">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pekerjaan Ibu Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="pekerjaan_ibu_kandung" id="pekerjaan_ibu_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penghasilan Ibu Kandung <i class="text-danger">*</i></label>
                                                <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                                <input class="form-control" type="number" name="penghasilan_pokok_pensiunan_ibu" id="penghasilan_pokok_pensiunan_ibu">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan<i class="text-danger">*</i></label>
                                                <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                                <input class="form-control" type="text" name="pendapatan_diluar_penghasilan_perbulan_ibu" id="pendapatan_diluar_penghasilan_perbulan_ibu">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat Domisili Ibu Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="domisili_ibu_kandung" id="domisili_ibu_kandung">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ibu Kandung<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="no_whatsapp_ibu_kandung" id="no_whatsapp_ibu_kandung">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Harapan Orang Tua<i class="text-danger">*</i></label>
                                                <textarea class="form-control" name="harapan_orang_tua" id="harapan_orang_tua" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mb-4">
                                    <!-- Data Wali -->
                                    <p class="text-sm text-uppercase">
                                        Data Wali <i>(Jika ada)</i>
                                    </p>
                                    <div class="row p-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Wali<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="nama_wali" id="nama_wali">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pekerjaan Wali<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="pekerjaan_wali" id="pekerjaan_wali">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penghasilan Wali<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="penghasilan_wali" id="penghasilan_wali">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat Domisili Wali<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="alamat_domisili_wali" id="alamat_domisili_wali">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hubungan dengan Wali<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="hubungan_wali" id="hubungan_wali">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email Wali<i>(Jika ada)</i><i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="email_wali" id="email_id">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jumlah Tanggungan Dalam Keluarga<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="jumlah_tanggungan_dalam_keluarga" id="jumlah_tanggungan_dalam_keluarga">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Sumber Penghasilan Lain<i class="text-danger">*</i></label>
                                                <br><small><i>Jika tidak ada isi dengan (-)</i></small>
                                                <select class="form-control" name="sumber_penghasilan_id" id="select-sumber-penghasilan">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr class="horizontal dark mb-4">
                                        <p class="text-sm text-uppercase">
                                            Kerabat/Relawan yang Dapat Dihubungi
                                            <br><small><i>(Sebagai Fasilitator/Penghubung Calon Siswa dengan Sekolah Selama Proses Seleksi PPDB Berlangsung)</i></small>
                                        </p>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="nama_fasilitator" id="nama_fasilitator">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hubungan dengan Calon Siswa<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="hubungan_calon_siswa_fasilitator" id="hubungan_calon_siswa_fasilitator">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Hp/Whatsapp<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="no_whatsapp_fasilitator" id="no_whatsapp_fasilitator">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email Fasilitator (Jika Ada)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="email_fasilitator" id="email_fasilitator">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Mengetahui informasi PPDB SMK TI BAZMA dari<i class="text-danger">*</i></label>
                                                <select class="form-control" name="informasi_ppdb_id" id="select-informasi-ppdb">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Apakah Memiliki Saudara Yang Pernah/Masih Mendapatkan Beasiswa di SMK TI BAZMA<i class="text-danger">*</i></label>
                                                <select class="form-control" name="saudara_beasiswa_di_smk_fasilitator" id="saudara_beasiswa_di_smk_fasilitator">
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="1">Ya</option>
                                                    <option value="0">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tempat Tinggal -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Rumah Tinggal dan Fasilitas Keluarga</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status Kepemilikan Rumah<i class="text-danger">*</i></label>
                                                <select class="form-control" name="status_kepemilikan_rumah_id" id="select-kepemilikan-rumah">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun Perolehan<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="tahun_perolehan_status_kepemilikan" id="tahun_perolehan_status_kepemilikan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kualitas Rumah<i class="text-danger">*</i></label>
                                                <select class="form-control" name="kualitas_rumah_id" id="select-kualitas-rumah">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Luas Tanah<i class="text-danger">*</i></label>
                                                <select class="form-control" name="luas_tanah_id" id="select-luas-tanah">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Mandi, Cuci, dan Kakus<i class="text-danger">*</i></label>
                                                <select class="form-control" name="mandi_cuci_kakus_id" id="select-mandi-cuci-kakus">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Sumber Air<i class="text-danger">*</i></label>
                                                <select class="form-control" name="sumber_air_id" id="select-sumber-air">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Daya Listrik<i class="text-danger">*</i></label>
                                                <select class="form-control" name="daya_listrik_id" id="select-daya-listrik">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Harta Tidak Bergerak<i class="text-danger">*</i></label>
                                                <select class="form-control" name="harta_tidak_bergerak_id" id="select-harta-tidak-bergerak">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status Kepemilikan Harta Tidak Bergerak<i class="text-danger">*</i></label>
                                                <select class="form-control" name="status_kepemelikan_htb_id" id="select-status-harta-tidak-bergerak">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kendaraan yang Dimiliki<i class="text-danger">*</i></label>
                                                <select class="form-control" name="kepemilikan_kendaraan_id" id="select-kepemilikan-kendaraan">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status Kepemilikan Kendaraan<i class="text-danger">*</i></label>
                                                <select class="form-control" name="status_kepemilikan_kendaraan_id" id="select-status-kepemilikan-kendaraan">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Riwayat Kesehatan -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Riwayat Kesehatan Calon Peserta Didi</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tinggi Badan<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="tinggi_badan" id="tinggi_badan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Berat Badan<i class="text-danger">*</i></label>
                                                <input class="form-control" type="number" name="berat_badan" id="berat_badan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Golongan darah<i class="text-danger">*</i></label>
                                                <select class="form-control" name="golongan_darah_id" id="select-golongan-darah">
                                                    <option value="" disabled selected>Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penyakit yang pernah diderita/alergi<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="penyakit_di_derita" id="penyakit_di_derita">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Penyakit menular yang pernah diderita<i class="text-danger">*</i></label>
                                                <input class="form-control" type="text" name="penyakit_menular" id="penyakit_menular">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Apakah Anda Perokok ?<i class="text-danger">*</i></label>
                                                <select class="form-control" name="perokok" id="perokok">
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="1">Ya</option>
                                                    <option value="0">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Apakah Anda Buta Warna ?<i class="text-danger">*</i></label>
                                                <select class="form-control" name="buta_warna" id="buta_warna">
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="1">Ya</option>
                                                    <option value="0">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Apakah punya asuransi kesehatan seperti BPJS atau KIS ?<i class="text-danger">*</i></label>
                                                <select class="form-control" name="asuransi_bpjs_kis" id="asuransi_bpjs_kis">
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="1">Ya</option>
                                                    <option value="0">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Silakan upload scan/foto kartu asuransi kesehatan seperti BPJS atau KIS | <small><i>(Max file 2 MB)</i></small><i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="scan_bpjs_kis" id="scan_bpjs_kis">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Dokumen -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Upload Dokumen Pendukung</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-6">
                                            <small class="bg-danger text-white"><i>&nbsp;&nbsp;Maximal file 2 MB&nbsp;&nbsp;</i></small>
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kartu Keluarga (KK)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="kartu_keluarga" id="kartu_keluarga">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pas Foto Terbaru (Berwarna)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="pas_foto" id="pas_foto">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Surat Keterangan Tidak Mampu dari Masjid Terdekat (SKTM)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="sktm" id="sktm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Surat Rekomendasi Kepala Sekolah/Wali Kelas/Guru SMP<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="upload_surat_rekomendasi" id="upload_surat_rekomendasi">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Upload Foto Berwarna Rumah yang Ditempati (Tampak Depan, Tampak Samping, Kamar Tidur, Ruang Tamu, Dapur, dan Kamar Mandi)<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="upload_pdf_foto_rumah" id="upload_pdf_foto_rumah">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Essay/Karangan Bebas Tentang "Peran Saya Sebagai Pemuda di Era Digital"<i class="text-danger">*</i></label>
                                                <input class="form-control" type="file" name="essay_karangan" id="essay_karangan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pernyataan -->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <h4 class="fw-bolder text-center mt-4">Pernyataan</h4>
                                        <hr class="horizontal dark mb-3 mt-3">
                                    </div>
                                </div>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-12">
                                            <h6 class="fw-bolder">Pernyataan Bersedia Mengikuti Rangkaian Seleksi PPDB (Online/Offline)</h6>
                                            <small class="mb-5">
                                                Rangkaian seleksi PPDB SMK TI BAZMA TP 2024/2025 dilaksanakan secara online dan offline sesuai dengan kondisi yang berlaku. Silakan mengisi pilihan di bawah menyesuaikan dengan kesanggupan dan kesediaan Calon Peserta Didik.
                                            </small>
                                            <div class="form-group mt-3 mb-2">
                                                <p for="example-text-input" class="mb-4">
                                                    Saya bersedia mengikuti rangkaian tes yang diujikan, secara <b>online</b> <i>(mempersiapkan secara mandiri device/alat dan kuota internet/jaringan)</i> dan/atau secara <b>offline</b> di SMK TI BAZMA (Ciampea, Kab-Bogor) <a href="https://bit.ly/lokasismktibazma" target="_blank" class="bg-warning text-white"> bit.ly/lokasismktibazma</a> <i>(mengadakan akomodasi dan transportasi secara pribadi).</i>
                                                </p>
                                                <select class="form-control" name="rangkaian_tes" id="">
                                                    <option value="" disabled selected>Pilih</option>
                                                    <option value="1">Online</option>
                                                    <option value="0">Offline</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 p-3">
                                        <div class="col-md-6">
                                            <h6 class="fw-bolder">Pernyataan Calon Peserta Didik</h6>
                                            <small class="mb-5">
                                                Saya dengan sungguh-sungguh menyatakan bahwa :
                                                <ol>
                                                    <li>
                                                        Seluruh pernyataan data dan informasi beserta seluruh dokumen yang saya lampirkan dalam berkas pendaftaran PPDB SMK TI BAZMA TP 2024-2025 adalah benar;
                                                    </li>
                                                    <li>
                                                        Apabila diperlukan, saya bersedia memberikan informasi lebih lanjut untuk melengkapi dokumen pendaftaran ini.
                                                    </li>
                                                </ol>

                                                Demikian pernyataan ini saya buat dengan sebenarnya dan penuh rasa tanggung jawab.
                                            </small>
                                            <div class="form-group mt-3 mb-2">
                                                <p for="example-text-input" class="">
                                                    Apabila di kemudian hari ditemukan bahwa data/dokumen yang saya sampaikan tidak benar dan/atau ada pemalsuan, maka saya siap menerima keputusan dari pihak SMK TI BAZMA.
                                                </p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" name="dokumen_jika_palsu" id="fcustomCheck1">
                                                    <label class="custom-control-label" for="customCheck1">YA<i class="text-danger">*</i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="fw-bolder">Pernyataan Orangtua/Wali Calon Peserta Didik</h6>
                                            <small class="mb-4">
                                                Saya dengan sungguh-sungguh menyatakan bahwa :
                                                <ol>
                                                    <li>
                                                        Seluruh pernyataan data dan informasi beserta seluruh dokumen yang dilampirkan dalam berkas pendaftaran PPDB SMK TI BAZMA TP 2024-2025 adalah benar;
                                                    </li>
                                                    <li>
                                                        Saya mendukung dan memberi izin anak/tanggungan saya dalam mengikuti keseluruhan rangkaian seleksi PPDB SMK TI BAZMA yang ditentukan, jika mengundurkan diri maka bersedia mengembalikan biaya seleksi yang telah dikeluarkan;
                                                    </li>
                                                    <li>
                                                        Apabila anak/tanggungan saya dinyatakan lolos seleksi maka saya memberi izin untuk bertempat tinggal di asrama selama masa pendidikan berlangsung.
                                                    </li>
                                                </ol>

                                                Demikian pernyataan ini saya buat dengan sebenarnya dan penuh rasa tanggung jawab.
                                            </small>
                                            <div class="form-group mt-3 mb-4">
                                                <p for="example-text-input" class="">
                                                    Apabila di kemudian hari ditemukan pelanggaran atas pernyataan tersebut, maka saya siap menerima keputusan yang ditetapkan oleh pihak SMK TI BAZMA.
                                                </p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" name="pelanggaran_keputusan" id="pelanggaran_keputusan">
                                                    <label class="custom-control-label" for="customCheck1">YA<i class="text-danger">*</i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Sebelumnya</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Simpan" onclick="postData()">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </section>

    <!-- Contact section-->
    <section class="bg-light py-6">
        <div class="container px-5 my-5 py-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-whatsapp"></i></div>
                <h2 class="fw-bolder">Hubungi Admin PPDB</h2>
                <p class="lead mb-4">Kami siap membantu</p>
                <a class="btn btn-success btn-lg px-4 me-sm-3" href="https://wa.me/628111144339" target="_blank">WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; PPTIK SMK TI BAZMA 2023</p>
        </div>
    </footer>
    

    <!-- Script Js -->
    <script src="assets/js/plugins/multistep-form.js"></script>
    <!-- Bootstrap JS (you can replace this with your own modal implementation) -->
    <script src="assets/js/argon-dashboard.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- API Access -->
    <script type="module" src="api/public.js"></script>
    <script src="api/post-daftar.js"></script>
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>