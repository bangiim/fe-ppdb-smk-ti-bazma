    <?php
    include "layout/header.php";
    ?>

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
                            <a class="btn btn-success btn-lg px-4 me-sm-2" href="#formulir">Daftar</a>
                            <a class="btn btn-outline-success btn-lg px-4" href="/informasi">Informasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Banner section-->
    <section class="bg-light py-5 border-bottom" id="banner">
        <!-- <div class="container p-5 mt-5">
            <div class="row gx-5"> -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-3.png" class="d-block w-100" alt="...">
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
            <!-- </div>
        </div> -->
    </section>

    <!-- Form section-->
    <section class="py-5 border-bottom" id="formulir">
        <div class="container px-4 mt-4">
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
                                            <!-- <div id="error-tahun-pelajaran" class="mt-1 text-danger small-text"></div> -->
                                            <div id="error-tahun_pelajaran_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIK<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="nik" id="nik" oninput="validateNumericInput(event, this)" minlength="16" maxlength="16">
                                            <div id="error-nik" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NISN<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="nisn" id="nisn" oninput="validateNumericInput(event, 'nisn')" minlength="10" maxlength="10">
                                            <div id="error-nisn" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Lengkap<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap">
                                            <div id="error-nama_lengkap" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tempat Lahir<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                                            <div id="error-tempat_lahir" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal Lahir<i class="text-danger">*</i></label>
                                            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir">
                                            <div id="error-tanggal_lahir" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat Saat Ini<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="alamat" id="alamat">
                                            <div id="error-alamat" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Provinsi Tempat Tinggal<i class="text-danger">*</i></label>
                                            <select class="form-control" name="provinsi_id" id="select-provinsi">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-provinsi_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Kota/Kabupaten Tempat Tinggal<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="kota_kabupaten" id="kota_kabupaten">
                                            <div id="error-kota_kabupaten" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">No. Telephone/Hp/Whatsapp<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="no_whatsapp_telp" id="no_whatsapp_telp" oninput="validateNumericInput(event, 'no_whatsapp_telp')" minlength="10" maxlength="15">
                                            <div id="error-no_whatsapp_telp" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Akun Media Sosial (instagram/fb/twitter jika ada)</label>
                                            <input class="form-control" type="text" name="sosial_media" id="sosial_media">
                                            <div id="error-sosial_media" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Asal SMP/MTs/Sederajat<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="smp_derajat" id="smp_derajat">
                                            <div id="error-smp_derajat" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NPSN<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="npsn" id="npsn" oninput="validateNumericInput(event, 'npsn')" minlength="0" maxlength="10">
                                            <div id="error-npsn" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tahun Lulus<i class="text-danger">*</i></label>
                                            <select class="form-control" name="tahun_lulus_id" id="select-tahun-lulus">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-tahun_lulus_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Anak ke....dari....bersaudara | <small><i>(Contoh: 2 dari 4)</i></small><i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="anak_ke_sodara" id="anak_ke_sodara">
                                            <div id="error-anak_ke_sodara" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Keadaan Orang Tua<i class="text-danger">*</i></label>
                                            <select class="form-control" name="keadaan_orang_tua_id" id="select-keadaan-ortu">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-keadaan_orang_tua_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status dalam Keluarga<i class="text-danger">*</i></label>
                                            <select class="form-control" name="status_dalam_keluarga_id" id="select-status-dalam-keluarga">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-status_dalam_keluarga_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Saat Ini Tinggal Bersama<i class="text-danger">*</i></label>
                                            <select class="form-control" name="tinggal_bersama_status_id" id="select-tinggal-bersama">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-tinggal_bersama_status_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penerima Bantuan Sosial<i class="text-danger">*</i></label>
                                            <select class="form-control" name="penerimaan_bantuan_sosial_id" id="select-penerima-bansos">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-penerimaan_bantuan_sosial_id" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-rapor_matematika_3" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_matematika_4" id="rapor_matematika_4" pattern="[0-9]*" min="0" max="100">
                                            <div id="error-rapor_matematika_4" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_matematika_5" id="rapor_matematika_5">
                                            <div id="error-rapor_matematika_5" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-rapor_ipa_3" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_ipa_4" id="rapor_ipa_4">
                                            <div id="error-rapor_ipa_4" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_ipa_5" id="rapor_ipa_5">
                                            <div id="error-rapor_ipa_5" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-rapor_indo_3" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_indo_4" id="rapor_indo_4">
                                            <div id="error-rapor_indo_4" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_indo_5" id="rapor_indo_5">
                                            <div id="error-rapor_indo_5" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-rapor_inggris_3" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_inggris_4" id="rapor_inggris_4">
                                            <div id="error-rapor_inggris_4" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_inggris_5" id="rapor_inggris_5">
                                            <div id="error-rapor_inggris_5" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-rapor_islam_3" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 4<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_islam_4" id="rapor_islam_4">
                                            <div id="error-rapor_islam_4" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Semester 5<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="rapor_islam_5" id="rapor_islam_5">
                                            <div id="error-rapor_islam_5" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mb-4 mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Bahasa Asing yang Dikuasai (Jika Ada)</label>
                                            <input class="form-control" type="text" name="bahasa_asing" id="bahasa_asing">
                                            <div id="error-bahasa_asing" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jumlah Hafalan (Juz)<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="jumlah_hafalan_juz" id="jumlah_hafalan_juz">
                                            <div id="error-jumlah_hafalan_juz" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Juz Yang Telah Dihafal<i class="text-danger">*</i></label>
                                            <br><small><i>(Contoh: Juz 30, Juz 29, dll)</i></small>
                                            <input class="form-control" type="text" name="hafalan_juz" id="hafalan_juz">
                                            <div id="error-hafalan_juz" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Riwayat Prestasi Calon Peserta Didik (Jika Ada)</label>
                                            <br><small><i>format pengisian : Jenis prestasi - tingkat - nama prestasi - tahun - penyelenggara</i></small>
                                            <input class="form-control" type="text" name="riwayat_prestasi_calon_peserta_didik" id="riwayat_prestasi_calon_peserta_didik">
                                            <div id="error-riwayat_prestasi_calon_peserta_didik" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Riwayat Organisasi Sekolah dan Non-Sekolah (Jika Ada)</label>
                                            <br><small><i>(format pengisian : bidang organisasi - tingkat - nama organisasi - tahun kepengurusan)</i></small>
                                            <input class="form-control" type="text" name="riwayat_organisasi_sekolah_dan_non_sekolah" id="riwayat_organisasi_sekolah_dan_non_sekolah">
                                            <div id="error-riwayat_organisasi_sekolah_dan_non_sekolah" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Hal-hal Khusus<i class="text-danger">*</i></label>
                                            <br><small><i>(Keunikan, Passion, Kebiasaan)</i></small>
                                            <input class="form-control" type="text" name="hal_hal_khusus" id="hal_hal_khusus">
                                            <div id="error-hal_hal_khusus" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Cita-cita<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="cita_cita" id="cita_cita">
                                            <div id="error-cita_cita" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Hobi<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="hobi_kegemaran" id="hobi_kegemaran">
                                            <div id="error-hobi_kegemaran" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-nama_ayah_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pendidikan Terakhir<i class="text-danger">*</i></label>
                                            <select class="form-control" name="pendidikan_terakhir_ayah_id" id="select-pendidikan-ayah">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-pendidikan_terakhir_ayah_id" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pekerjaan Ayah Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="pekerjaan_ayah_kandung" id="pekerjaan_ayah_kandung">
                                            <div id="error-pekerjaan_ayah_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penghasilan Ayah Kandung <i class="text-danger">*</i></label>
                                            <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                            <input class="form-control" type="number" name="penghasilan_pokok_pensiunan_ayah" id="penghasilan_pokok_pensiunan_ayah">
                                            <div id="error-penghasilan_pokok_pensiunan_ayah" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan<i class="text-danger">*</i></label>
                                            <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                            <input class="form-control" type="text" name="pendapatan_diluar_penghasilan_perbulan_ayah" id="pendapatan_diluar_penghasilan_perbulan_ayah">
                                            <div id="error-pendapatan_diluar_penghasilan_perbulan_ayah" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat Domisili Ayah Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="domisili_ayah_kandung" id="domisili_ayah_kandung">
                                            <div id="error-domisili_ayah_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ayah Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="no_whatsapp_ayah_kandung" id="no_whatsapp_ayah_kandung" oninput="validateNumericInput(event, 'no_whatsapp_ayah_kandung')" minlength="10" maxlength="15">
                                            <div id="error-no_whatsapp_ayah_kandung" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-nama_ibu_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pendidikan Terakhir<i class="text-danger">*</i></label>
                                            <select class="form-control" name="pendidikan_terakhir_ibu_id" id="select-pendidikan-ibu">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-pendidikan_terakhir_ibu_id" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pekerjaan Ibu Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="pekerjaan_ibu_kandung" id="pekerjaan_ibu_kandung">
                                            <div id="error-pekerjaan_ibu_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penghasilan Ibu Kandung <i class="text-danger">*</i></label>
                                            <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                            <input class="form-control" type="number" name="penghasilan_pokok_pensiunan_ibu" id="penghasilan_pokok_pensiunan_ibu">
                                            <div id="error-penghasilan_pokok_pensiunan_ibu" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan<i class="text-danger">*</i></label>
                                            <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                            <input class="form-control" type="text" name="pendapatan_diluar_penghasilan_perbulan_ibu" id="pendapatan_diluar_penghasilan_perbulan_ibu">
                                            <div id="error-pendapatan_diluar_penghasilan_perbulan_ibu" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat Domisili Ibu Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="domisili_ibu_kandung" id="domisili_ibu_kandung">
                                            <div id="error-domisili_ibu_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ibu Kandung<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="no_whatsapp_ibu_kandung" id="no_whatsapp_ibu_kandung" oninput="validateNumericInput(event, 'no_whatsapp_ibu_kandung')" minlength="10" maxlength="15">
                                            <div id="error-no_whatsapp_ibu_kandung" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jumlah Tanggungan Dalam Keluarga<i class="text-danger">*</i></label>
                                            <input class="form-control" type="number" name="jumlah_tanggungan_dalam_keluarga" id="jumlah_tanggungan_dalam_keluarga">
                                            <div id="error-jumlah_tanggungan_dalam_keluarga" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Harapan Orang Tua<i class="text-danger">*</i></label>
                                            <textarea class="form-control" name="harapan_orang_tua" id="harapan_orang_tua" cols="30" rows="5"></textarea>
                                            <div id="error-harapan_orang_tua" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark mb-4">
                                <!-- Data Wali -->
                                <div class="row p-3">
                                    <p class="text-sm text-uppercase">
                                        Data Wali <i>(Jika ada)</i>
                                    </p>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Wali</label>
                                            <input class="form-control" type="text" name="nama_wali" id="nama_wali">
                                            <div id="error-nama_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pekerjaan Wali</label>
                                            <input class="form-control" type="text" name="pekerjaan_wali" id="pekerjaan_wali">
                                            <div id="error-pekerjaan_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penghasilan Wali</label>
                                            <input class="form-control" type="number" name="penghasilan_wali" id="penghasilan_wali" oninput="validateNumericInput(event, 'penghasilan_wali')">
                                            <div id="error-penghasilan_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat Domisili Wali</label>
                                            <input class="form-control" type="text" name="alamat_domisili_wali" id="alamat_domisili_wali">
                                            <div id="error-alamat_domisili_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Hubungan dengan Wali</label>
                                            <input class="form-control" type="text" name="hubungan_wali" id="hubungan_wali">
                                            <div id="error-hubungan_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email Wali<i>(Jika ada)</i></label>
                                            <input class="form-control" type="text" name="email_wali" id="email_id">
                                            <div id="error-email_wali" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Sumber Penghasilan Lain</label>
                                            <br><small><i>Jika tidak ada isi dengan (-)</i></small>
                                            <select class="form-control" name="sumber_penghasilan_id" id="select-sumber-penghasilan">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-sumber_penghasilan_id" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-nama_fasilitator" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Hubungan dengan Calon Siswa<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="hubungan_calon_siswa_fasilitator" id="hubungan_calon_siswa_fasilitator">
                                            <div id="error-hubungan_calon_siswa_fasilitator" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nomor Hp/Whatsapp<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="no_whatsapp_fasilitator" id="no_whatsapp_fasilitator" oninput="validateNumericInput(event, 'no_whatsapp_fasilitator')" minlength="10" maxlength="15">
                                            <div id="error-no_whatsapp_fasilitator" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email Fasilitator (Jika Ada)</label>
                                            <input class="form-control" type="text" name="email_fasilitator" id="email_fasilitator">
                                            <div id="error-email_fasilitator" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Mengetahui informasi PPDB SMK TI BAZMA dari<i class="text-danger">*</i></label>
                                            <select class="form-control" name="informasi_ppdb_id" id="select-informasi-ppdb">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-informasi_ppdb_id" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-saudara_beasiswa_di_smk_fasilitator" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-status_kepemilikan_rumah_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tahun Perolehan<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="tahun_perolehan_status_kepemilikan" id="tahun_perolehan_status_kepemilikan" oninput="validateNumericInput(event, 'no_whatsapp_fasilitator')">
                                            <div id="error-tahun_perolehan_status_kepemilikan" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Kualitas Rumah<i class="text-danger">*</i></label>
                                            <select class="form-control" name="kualitas_rumah_id" id="select-kualitas-rumah">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-kualitas_rumah_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Luas Tanah<i class="text-danger">*</i></label>
                                            <select class="form-control" name="luas_tanah_id" id="select-luas-tanah">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-luas_tanah_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Mandi, Cuci, dan Kakus<i class="text-danger">*</i></label>
                                            <select class="form-control" name="mandi_cuci_kakus_id" id="select-mandi-cuci-kakus">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-mandi_cuci_kakus_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Sumber Air<i class="text-danger">*</i></label>
                                            <select class="form-control" name="sumber_air_id" id="select-sumber-air">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-sumber_air_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Daya Listrik<i class="text-danger">*</i></label>
                                            <select class="form-control" name="daya_listrik_id" id="select-daya-listrik">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-daya_listrik_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Harta Tidak Bergerak<i class="text-danger">*</i></label>
                                            <select class="form-control" name="harta_tidak_bergerak_id" id="select-harta-tidak-bergerak">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-harta_tidak_bergerak_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status Kepemilikan Harta Tidak Bergerak<i class="text-danger">*</i></label>
                                            <select class="form-control" name="status_kepemelikan_htb_id" id="select-status-harta-tidak-bergerak">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-status_kepemelikan_htb_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Kendaraan yang Dimiliki<i class="text-danger">*</i></label>
                                            <select class="form-control" name="kepemilikan_kendaraan_id" id="select-kepemilikan-kendaraan">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-kepemilikan_kendaraan_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Status Kepemilikan Kendaraan<i class="text-danger">*</i></label>
                                            <select class="form-control" name="status_kepemilikan_kendaraan_id" id="select-status-kepemilikan-kendaraan">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-status_kepemilikan_kendaraan_id" class="mt-1 text-danger small-text"></div>
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
                                    <h4 class="fw-bolder text-center mt-4">Riwayat Kesehatan Calon Peserta Didik</h4>
                                    <hr class="horizontal dark mb-3 mt-3">
                                </div>
                            </div>
                            <div class="multisteps-form__content">
                                <div class="row mt-3 p-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tinggi Badan<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="tinggi_badan" id="tinggi_badan" oninput="validateNumericInput(event, 'tinggi_badan')" min="0" max="250">
                                            <div id="error-tinggi_badan" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Berat Badan<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="berat_badan" id="berat_badan" oninput="validateNumericInput(event, 'berat_badan')" min="0" max="250">
                                            <div id="error-berat_badan" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Golongan darah<i class="text-danger">*</i></label>
                                            <select class="form-control" name="golongan_darah_id" id="select-golongan-darah">
                                                <option value="" disabled selected>Pilih</option>
                                            </select>
                                            <div id="error-golongan_darah_id" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penyakit yang pernah diderita/alergi<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="penyakit_di_derita" id="penyakit_di_derita">
                                            <div id="error-penyakit_di_derita" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Penyakit menular yang pernah diderita<i class="text-danger">*</i></label>
                                            <input class="form-control" type="text" name="penyakit_menular" id="penyakit_menular">
                                            <div id="error-penyakit_menular" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-perokok" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-buta_warna" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-asuransi_bpjs_kis" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Silakan upload scan/foto kartu asuransi kesehatan seperti BPJS atau KIS | <small><i>(Max file 2 MB)</i></small></label>
                                            <input class="form-control" type="file" name="scan_bpjs_kis" id="scan_bpjs_kis">
                                            <div id="error-scan_bpjs_kis" class="mt-1 text-danger small-text"></div>
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
                                            <div id="error-kartu_keluarga" class="mt-1 text-danger small-text"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Pas Foto Terbaru (Berwarna)<i class="text-danger">*</i></label>
                                            <input class="form-control" type="file" name="pas_foto" id="pas_foto">
                                            <div id="error-pas_foto" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Surat Keterangan Tidak Mampu dari Masjid Terdekat (SKTM)<i class="text-danger">*</i></label>
                                            <input class="form-control" type="file" name="sktm" id="sktm">
                                            <div id="error-sktm" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Surat Rekomendasi Kepala Sekolah/Wali Kelas/Guru SMP<i class="text-danger">*</i></label>
                                            <input class="form-control" type="file" name="upload_surat_rekomendasi" id="upload_surat_rekomendasi">
                                            <div id="error-upload_surat_rekomendasi" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Upload Foto Berwarna Rumah yang Ditempati (Tampak Depan, Tampak Samping, Kamar Tidur, Ruang Tamu, Dapur, dan Kamar Mandi)<i class="text-danger">*</i></label>
                                            <input class="form-control" type="file" name="upload_pdf_foto_rumah" id="upload_pdf_foto_rumah">
                                            <div id="error-upload_pdf_foto_rumah" class="mt-1 text-danger small-text"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Essay/Karangan Bebas Tentang "Peran Saya Sebagai Pemuda di Era Digital"<i class="text-danger">*</i></label>
                                            <input class="form-control" type="file" name="essay_karangan" id="essay_karangan">
                                            <div id="error-essay_karangan" class="mt-1 text-danger small-text"></div>
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
                                            <select class="form-control" name="rangkaian_tes" id="rangkaian_tes">
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="1">Online</option>
                                                <option value="0">Offline</option>
                                            </select>
                                            <div id="error-rangkaian_tes" class="mt-1 text-danger small-text"></div>
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
                                                <div id="error-dokumen_jika_palsu" class="mt-1 text-danger small-text"></div>
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
                                                <div id="error-pelanggaran_keputusan" class="mt-1 text-danger small-text"></div>
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

    <?php
    include "layout/footer.php";
    ?>