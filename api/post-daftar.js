async function postData() {
    // Get form data
    var formData = new FormData(document.getElementById('formRegis'));

    // Save form data to localStorage before making the API request
    saveFormDataToLocalStorage(formData);

    // URL of the API endpoint
    var apiUrl = "https://api.ppdb.smktibazma.sch.id/api/v1/public/daftar-peserta";

    try {
        // Send POST request using fetch with async/await
        const response = await fetch(apiUrl, {
            method: 'POST',
            body: formData,
        });

        // Check if the request was successful (status code in the range 200-299)
        if (response.ok) {
            const data = await response.json();
            // Handle the response from the API
            // console.log(data);

            // Show SweetAlert2 success message
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Berhasil Terkirim',
            }).then((result) => {
                // Check if the user clicked "OK"
                if (result.isConfirmed || result.dismiss === Swal.DismissReason.backdrop) {
                    // Clear form data from localStorage after a successful API request
                    clearFormDataFromLocalStorage();
        
                    // Reload the page
                    window.location.reload();
                }
            });
        } else {
            // Handle non-successful response
            const errorData = await response.json(); // Assuming the API returns error messages in JSON format
            // console.log('Error:', errorData.errors);

            // Data Diri
            const errorTahunPelajaran = document.getElementById('error-tahun-pelajaran');
            const errorMessageTP = `<small><i>${errorData.errors.tahun_pelajaran_id[0]}</i></small>`;
            errorTahunPelajaran.innerHTML = errorMessageTP; 
            
            const errorNik = document.getElementById('error-nik');
            const errorMessageNik = `<small><i>${errorData.errors.nik[0]}</i></small>`;
            errorNik.innerHTML = errorMessageNik;
            
            const errorNisn = document.getElementById('error-nisn');
            const errorMessageNisn = `<small><i>${errorData.errors.nisn[0]}</i></small>`;
            errorNisn.innerHTML = errorMessageNisn;

            const errorNamaLengkap = document.getElementById('error-nama-lengkap');
            const errorMessageNL = `<small><i>${errorData.errors.nama_lengkap[0]}</i></small>`;
            errorNamaLengkap.innerHTML = errorMessageNL;

            const errorTempatLahir = document.getElementById('error-tempat-lahir');
            const errorMessageTL = `<small><i>${errorData.errors.tempat_lahir[0]}</i></small>`;
            errorTempatLahir.innerHTML = errorMessageTL;

            const errorTanggalLahir = document.getElementById('error-tanggal-lahir');
            const errorMessageTglL = `<small><i>${errorData.errors.tempat_lahir[0]}</i></small>`;
            errorTanggalLahir.innerHTML = errorMessageTglL;

            const errorAlamat = document.getElementById('error-alamat');
            const errorMessageAlamat = `<small><i>${errorData.errors.alamat[0]}</i></small>`;
            errorAlamat.innerHTML = errorMessageAlamat;

            const errorProvinsi = document.getElementById('error-provinsi');
            const errorMessageProvinsi = `<small><i>${errorData.errors.provinsi_id[0]}</i></small>`;
            errorProvinsi.innerHTML = errorMessageProvinsi;

            const errorKotaKabupaten = document.getElementById('error-kota-kabupaten');
            const errorMessageKB = `<small><i>${errorData.errors.kota_kabupaten[0]}</i></small>`;
            errorKotaKabupaten.innerHTML = errorMessageKB;

            const errorNoWhatsappTelp = document.getElementById('error-no-whatsapp-telp');
            const errorMessageNWT = `<small><i>${errorData.errors.no_whatsapp_telp[0]}</i></small>`;
            errorNoWhatsappTelp.innerHTML = errorMessageNWT;

            // const errorSosialMedia = document.getElementById('error-sosial-media');
            // const errorMessageSM = `<small><i>${errorData.errors.sosial_media[0]}</i></small>`;
            // errorSosialMedia.innerHTML = errorMessageSM;

            const errorSmpDerajat = document.getElementById('error-smp-derajat');
            const errorMessageSmpD = `<small><i>${errorData.errors.smp_derajat[0]}</i></small>`;
            errorSmpDerajat.innerHTML = errorMessageSmpD;

            const errorNpsn = document.getElementById('error-npsn');
            const errorMessageNpsn = `<small><i>${errorData.errors.npsn[0]}</i></small>`;
            errorNpsn.innerHTML = errorMessageNpsn;

            const errorTahunLulus = document.getElementById('error-tahun-lulus');
            const errorMessageTLid = `<small><i>${errorData.errors.tahun_lulus_id[0]}</i></small>`;
            errorTahunLulus.innerHTML = errorMessageTLid;

            const errorAnakKeSodara = document.getElementById('error-anak-ke-sodara');
            const errorMessageAkS = `<small><i>${errorData.errors.anak_ke_sodara[0]}</i></small>`;
            errorAnakKeSodara.innerHTML = errorMessageAkS;

            const errorKeadaanOrtu = document.getElementById('error-keadaan-orang-tua');
            const errorMessageKOid = `<small><i>${errorData.errors.keadaan_orang_tua_id[0]}</i></small>`;
            errorKeadaanOrtu.innerHTML = errorMessageKOid;

            const errorStatusDalamKeluarga = document.getElementById('error-status-dalam-keluarga');
            const errorMessageSDK = `<small><i>${errorData.errors.status_dalam_keluarga_id[0]}</i></small>`;
            errorStatusDalamKeluarga.innerHTML = errorMessageSDK;
            
            const errorTinggalBersamaStatus = document.getElementById('error-tinggal-bersama-status');
            const errorMessageTBS = `<small><i>${errorData.errors.tinggal_bersama_status_id[0]}</i></small>`;
            errorTinggalBersamaStatus.innerHTML = errorMessageTBS;

            const errorPenerimaBantuanSosial = document.getElementById('error-penerima-bantuan-sosial');
            const errorMessagePBS = `<small><i>${errorData.errors.penerimaan_bantuan_sosial_id[0]}</i></small>`;
            errorPenerimaBantuanSosial.innerHTML = errorMessagePBS;

            // Prestasi
            const errorRaporMtk3 = document.getElementById('error-rapor-matematika-3');
            const errorMessageRMtk3 = `<small><i>${errorData.errors.rapor_matematika_3[0]}</i></small>`;
            errorRaporMtk3.innerHTML = errorMessageRMtk3;

            const errorRaporMtk4 = document.getElementById('error-rapor-matematika-4');
            const errorMessageRMtk4 = `<small><i>${errorData.errors.rapor_matematika_4[0]}</i></small>`;
            errorRaporMtk4.innerHTML = errorMessageRMtk4;

            const errorRaporMtk5 = document.getElementById('error-rapor-matematika-5');
            const errorMessageRMtk5 = `<small><i>${errorData.errors.rapor_matematika_5[0]}</i></small>`;
            errorRaporMtk5.innerHTML = errorMessageRMtk5;

            const errorRaporIpa3 = document.getElementById('error-rapor-ipa-3');
            const errorMessageRIpa3 = `<small><i>${errorData.errors.rapor_ipa_3[0]}</i></small>`;
            errorRaporIpa3.innerHTML = errorMessageRIpa3;

            const errorRaporIpa4 = document.getElementById('error-rapor-ipa-4');
            const errorMessageRIpa4 = `<small><i>${errorData.errors.rapor_ipa_4[0]}</i></small>`;
            errorRaporIpa4.innerHTML = errorMessageRIpa4;

            const errorRaporIpa5 = document.getElementById('error-rapor-ipa-5');
            const errorMessageRIpa5 = `<small><i>${errorData.errors.rapor_ipa_5[0]}</i></small>`;
            errorRaporIpa5.innerHTML = errorMessageRIpa5;
 
            const errorRaporIndo3 = document.getElementById('error-rapor-indo-3');
            const errorMessageRIndo3 = `<small><i>${errorData.errors.rapor_indo_3[0]}</i></small>`;
            errorRaporIndo3.innerHTML = errorMessageRIndo3;

            const errorRaporIndo4 = document.getElementById('error-rapor-indo-4');
            const errorMessageRIndo4 = `<small><i>${errorData.errors.rapor_indo_4[0]}</i></small>`;
            errorRaporIndo4.innerHTML = errorMessageRIndo4;
            
            const errorRaporIndo5 = document.getElementById('error-rapor-indo-5');
            const errorMessageRIndo5 = `<small><i>${errorData.errors.rapor_indo_5[0]}</i></small>`;
            errorRaporIndo5.innerHTML = errorMessageRIndo5;

            const errorRaporInggris3 = document.getElementById('error-rapor-inggris-3');
            const errorMessageRInggris3 = `<small><i>${errorData.errors.rapor_inggris_3[0]}</i></small>`;
            errorRaporInggris3.innerHTML = errorMessageRInggris3;

            const errorRaporInggris4 = document.getElementById('error-rapor-inggris-4');
            const errorMessageRInggris4 = `<small><i>${errorData.errors.rapor_inggris_4[0]}</i></small>`;
            errorRaporInggris4.innerHTML = errorMessageRInggris4;

            const errorRaporInggris5 = document.getElementById('error-rapor-inggris-5');
            const errorMessageRInggris5 = `<small><i>${errorData.errors.rapor_inggris_5[0]}</i></small>`;
            errorRaporInggris5.innerHTML = errorMessageRInggris5;

            const errorRaporIslam3 = document.getElementById('error-rapor-islam-3');
            const errorMessageRIslam3 = `<small><i>${errorData.errors.rapor_islam_3[0]}</i></small>`;
            errorRaporIslam3.innerHTML = errorMessageRIslam3;

            const errorRaporIslam4 = document.getElementById('error-rapor-islam-4');
            const errorMessageRIslam4 = `<small><i>${errorData.errors.rapor_islam_4[0]}</i></small>`;
            errorRaporIslam4.innerHTML = errorMessageRIslam4;

            const errorRaporIslam5 = document.getElementById('error-rapor-islam-5');
            const errorMessageRIslam5 = `<small><i>${errorData.errors.rapor_islam_5[0]}</i></small>`;
            errorRaporIslam5.innerHTML = errorMessageRIslam5;

            // const errorBahasaAsing = document.getElementById('error-bahasa-asing');
            // const errorMessageBahasaAsing = `<small><i>${errorData.errors.bahsa_asing[0]}</i></small>`;
            // errorBahasaAsing.innerHTML = errorMessageBahasaAsing;

            const errorJumlahHafalanJuz = document.getElementById('error-jumlah-hafalan-juz');
            const errorMessageJumlahHafalanJuz = `<small><i>${errorData.errors.jumlah_hafalan_juz[0]}</i></small>`;
            errorJumlahHafalanJuz.innerHTML = errorMessageJumlahHafalanJuz;

            const errorHafalanJuz = document.getElementById('error-hafalan-juz');
            const errorMessageHafalanJuz = `<small><i>${errorData.errors.hafalan_juz[0]}</i></small>`;
            errorHafalanJuz.innerHTML = errorMessageHafalanJuz;

            // const errorRiwayatPrestasi = document.getElementById('error-riwayat-prestasi');
            // const errorMessageRiwayatPrestasi = `<small><i>${errorData.errors.riwayat_prestasi[0]}</i></small>`;
            // errorRiwayatPrestasi.innerHTML = errorMessageRiwayatPrestasi;

            // const errorRiwayatOrganisasi = document.getElementById('error-riwayat-organisasi');
            // const errorMessageRiwayatOrganisasi = `<small><i>${errorData.errors.riwayat_prestasi[0]}</i></small>`;
            // errorRiwayatOrganisasi.innerHTML = errorMessageRiwayatOrganisasi;

            const errorHalKhusus = document.getElementById('error-hal-khusus');
            const errorMessageHalKhusus = `<small><i>${errorData.errors.hal_hal_khusus[0]}</i></small>`;
            errorHalKhusus.innerHTML = errorMessageHalKhusus;

            const errorCitaCita = document.getElementById('error-cita-cita');
            const errorMessageCitaCita = `<small><i>${errorData.errors.cita_cita[0]}</i></small>`;
            errorCitaCita.innerHTML = errorMessageCitaCita;

            const errorHobiKegemaran = document.getElementById('error-hobi-kegemaran');
            const errorMessageHobiKegemaran = `<small><i>${errorData.errors.hobi_kegemaran[0]}</i></small>`;
            errorHobiKegemaran.innerHTML = errorMessageHobiKegemaran;

            // Orang Tua/Wali
            // Data Ayah
            const errorNamaAyahKandung = document.getElementById('error-nama-ayah-kandung');
            const errorMessageNamaAyahKandung = `<small><i>${errorData.errors.nama_ayah_kandung[0]}</i></small>`;
            errorNamaAyahKandung.innerHTML = errorMessageNamaAyahKandung;

            const errorPendidikanTerakhirAyah = document.getElementById('error-pendidikan-terakhir-ayah');
            const errorMessagePendidikanTerakhirAyah = `<small><i>${errorData.errors.pendidikan_terakhir_ayah_id[0]}</i></small>`;
            errorPendidikanTerakhirAyah.innerHTML = errorMessagePendidikanTerakhirAyah;
            
            const errorPekerjaanAyahKandung = document.getElementById('error-pekerjaan-ayah-kandung');
            const errorMessagePekerjaanAyahKandung = `<small><i>${errorData.errors.pekerjaan_ayah_kandung[0]}</i></small>`;
            errorPekerjaanAyahKandung.innerHTML = errorMessagePekerjaanAyahKandung;

            const errorPenghasilanPokokAyah = document.getElementById('error-penghasilan-pokok-ayah');
            const errorMessagePenghasilanPokokAyah = `<small><i>${errorData.errors.penghasilan_pokok_pensiunan_ayah[0]}</i></small>`;
            errorPenghasilanPokokAyah.innerHTML = errorMessagePenghasilanPokokAyah;

            const errorPendapatanDiluarPenghasilanAyah = document.getElementById('error-pendapatan-diluar-penghasilan-ayah');
            const errorMessagePendapatanDiluarPenghasilanAyah = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ayah[0]}</i></small>`;
            errorPendapatanDiluarPenghasilanAyah.innerHTML = errorMessagePendapatanDiluarPenghasilanAyah;

            const errorDomisiliAyahKandung = document.getElementById('error-domisili-ayah-kandung');
            const errorMessageDomisiliAyahKandung = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ayah[0]}</i></small>`;
            errorDomisiliAyahKandung.innerHTML = errorMessageDomisiliAyahKandung;

            const errorNoWhatsappAyahKandung = document.getElementById('error-no-whatsapp-ayah-kandung');
            const errorMessageNoWaAyah = `<small><i>${errorData.errors.no_whatsapp_ayah_kandung[0]}</i></small>`;
            errorNoWhatsappAyahKandung.innerHTML = errorMessageNoWaAyah;

            // Data Ibu
            const errorNamaIbuKandung = document.getElementById('error-nama-ibu-kandung');
            const errorMessageNamaIbuKandung = `<small><i>${errorData.errors.nama_ibu_kandung[0]}</i></small>`;
            errorNamaIbuKandung.innerHTML = errorMessageNamaIbuKandung;

            const errorPendidikanTerakhirIbu = document.getElementById('error-pendidikan-terakhir-ibu');
            const errorMessagePendidikanTerakhirIbu = `<small><i>${errorData.errors.pendidikan_terakhir_ibu_id[0]}</i></small>`;
            errorPendidikanTerakhirIbu.innerHTML = errorMessagePendidikanTerakhirIbu;
            
            const errorPekerjaanIbuKandung = document.getElementById('error-pekerjaan-ibu-kandung');
            const errorMessagePekerjaanIbuKandung = `<small><i>${errorData.errors.pekerjaan_ibu_kandung[0]}</i></small>`;
            errorPekerjaanIbuKandung.innerHTML = errorMessagePekerjaanIbuKandung;

            const errorPenghasilanPokokIbu = document.getElementById('error-penghasilan-pokok-ibu');
            const errorMessagePenghasilanPokokIbu = `<small><i>${errorData.errors.penghasilan_pokok_pensiunan_ibu[0]}</i></small>`;
            errorPenghasilanPokokIbu.innerHTML = errorMessagePenghasilanPokokIbu;

            const errorPendapatanDiluarPenghasilanIbu = document.getElementById('error-pendapatan-diluar-penghasilan-ibu');
            const errorMessagePendapatanDiluarPenghasilanIbu = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ibu[0]}</i></small>`;
            errorPendapatanDiluarPenghasilanIbu.innerHTML = errorMessagePendapatanDiluarPenghasilanIbu;

            const errorDomisiliIbuKandung = document.getElementById('error-domisili-ibu-kandung');
            const errorMessageDomisiliIbuKandung = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ibu[0]}</i></small>`;
            errorDomisiliIbuKandung.innerHTML = errorMessageDomisiliIbuKandung;

            const errorNoWhatsappIbuKandung = document.getElementById('error-no-whatsapp-ibu-kandung');
            const errorMessageNoWaIbu = `<small><i>${errorData.errors.no_whatsapp_ibu_kandung[0]}</i></small>`;
            errorNoWhatsappIbuKandung.innerHTML = errorMessageNoWaIbu;

            const errorJumlahTanggunganDalamKeluarga = document.getElementById('error-jumlah-tanggungan-dalam-keluarga');
            const errorMessageJumlahTanggunganDalamKeluarga = `<small><i>${errorData.errors.jumlah_tanggungan_dalam_keluarga[0]}</i></small>`;
            errorJumlahTanggunganDalamKeluarga.innerHTML = errorMessageJumlahTanggunganDalamKeluarga;

            const errorHarapanOrangTua = document.getElementById('error-harapan-orang-tua');
            const errorMessageHarapanOrangTua = `<small><i>${errorData.errors.harapan_orang_tua[0]}</i></small>`;
            errorHarapanOrangTua.innerHTML = errorMessageHarapanOrangTua;

            // Data Kerabat/Fasilitator
            const errorNamaFasilitator = document.getElementById('error-nama-fasilitator');
            const errorMessageNamaFasilitator = `<small><i>${errorData.errors.nama_fasilitator[0]}</i></small>`;
            errorNamaFasilitator.innerHTML = errorMessageNamaFasilitator;

            const errorHubunganFasilitator = document.getElementById('error-hubungan-calon-siswa-fasilitator');
            const errorMessageHubunganFasilitator = `<small><i>${errorData.errors.hubungan_calon_siswa_fasilitator[0]}</i></small>`;
            errorHubunganFasilitator.innerHTML = errorMessageHubunganFasilitator;
            
            const errorNoWhatsappFasilitator = document.getElementById('error-no-whatsapp-fasilitator');
            const errorMessageNoWhatsappFasilitator = `<small><i>${errorData.errors.no_whatsapp_fasilitator[0]}</i></small>`;
            errorNoWhatsappFasilitator.innerHTML = errorMessageNoWhatsappFasilitator;

            const errorInformasiPpdb = document.getElementById('error-informasdi-ppdb');
            const errorMessageInformasiPpdb = `<small><i>${errorData.errors.informasi_ppdb_id[0]}</i></small>`;
            errorInformasiPpdb.innerHTML = errorMessageInformasiPpdb;

            const errorSaudaraDiSMK = document.getElementById('error-saudara-di-smk-fasilitator');
            const errorMessageSaudaraDiSMK = `<small><i>${errorData.errors.saudara_beasiswa_di_smk_fasilitator[0]}</i></small>`;
            errorSaudaraDiSMK.innerHTML = errorMessageSaudaraDiSMK;

            // Tempat Tinggal
            const errorStatusKepemilikanRumah = document.getElementById('error-status-kepemilikan-rumah');
            const errorMessageStatusKepemilikanRumah = `<small><i>${errorData.errors.status_kepemilikan_rumah_id[0]}</i></small>`;
            errorStatusKepemilikanRumah.innerHTML = errorMessageStatusKepemilikanRumah;

            const errorTahunPerolehan = document.getElementById('error-tahun-perolehan');
            const errorMessageTahunPerolehan = `<small><i>${errorData.errors.tahun_perolehan_status_kepemilikan[0]}</i></small>`;
            errorTahunPerolehan.innerHTML = errorMessageTahunPerolehan;

            const errorKualitasRumah = document.getElementById('error-kualitas-rumah');
            const errorMessageKualitasRumah = `<small><i>${errorData.errors.kualitas_rumah_id[0]}</i></small>`;
            errorKualitasRumah.innerHTML = errorMessageKualitasRumah;

            const errorLuasTanah = document.getElementById('error-luas-tahun');
            const errorMessageLuasTanah = `<small><i>${errorData.errors.luas_tanah_id[0]}</i></small>`;
            errorLuasTanah.innerHTML = errorMessageLuasTanah;

            const errorMandiCuciKakus = document.getElementById('error-mandi-cuci-kakus');
            const errorMessageMandiCuciKakus = `<small><i>${errorData.errors.mandi_cuci_kakus_id[0]}</i></small>`;
            errorMandiCuciKakus.innerHTML = errorMessageMandiCuciKakus;

            const errorSumberAir = document.getElementById('error-sumber-air');
            const errorMessageSumberAir = `<small><i>${errorData.errors.sumber_air_id[0]}</i></small>`;
            errorSumberAir.innerHTML = errorMessageSumberAir;
            
            const errorDayaListrik = document.getElementById('error-daya-listrik');
            const errorMessageDayaListrik = `<small><i>${errorData.errors.daya_listrik_id[0]}</i></small>`;
            errorDayaListrik.innerHTML = errorMessageDayaListrik;

            const errorHartaTidakBergerak = document.getElementById('error-harta-tidak-bergerak');
            const errorMessageHartaTidakBergerak = `<small><i>${errorData.errors.harta_tidak_bergerak_id[0]}</i></small>`;
            errorHartaTidakBergerak.innerHTML = errorMessageHartaTidakBergerak;

            const errorStatusKepemilikanHarta = document.getElementById('error-status-kepemilikan-harta');
            const errorMessageStatusKepemilikanHarta = `<small><i>${errorData.errors.status_kepemelikan_htb_id[0]}</i></small>`;
            errorStatusKepemilikanHarta.innerHTML = errorMessageStatusKepemilikanHarta;

            const errorKepemilikanKendaraan = document.getElementById('error-kepemilikan-kendaraan');
            const errorMessageKepemilikanKendaraan = `<small><i>${errorData.errors.kepemilikan_kendaraan_id[0]}</i></small>`;
            errorKepemilikanKendaraan.innerHTML = errorMessageKepemilikanKendaraan;

            const errorStatusKepemilikanKendaraan = document.getElementById('error-status-kepemilikan-kendaraan');
            const errorMessageStatusKepemilikanKendaraan = `<small><i>${errorData.errors.status_kepemilikan_kendaraan_id[0]}</i></small>`;
            errorStatusKepemilikanKendaraan.innerHTML = errorMessageStatusKepemilikanKendaraan;

            // Riwayat Kesehatan
            const errorTinggiBadan = document.getElementById('error-tinggi-badan');
            const errorMessageTinggiBadan = `<small><i>${errorData.errors.tinggi_badan[0]}</i></small>`;
            errorTinggiBadan.innerHTML = errorMessageTinggiBadan;

            const errorBeratBadan = document.getElementById('error-berat-badan');
            const errorMessageBeratBadan = `<small><i>${errorData.errors.berat_badan[0]}</i></small>`;
            errorBeratBadan.innerHTML = errorMessageBeratBadan;

            const errorGolonganDarah = document.getElementById('error-golongan-darah');
            const errorMessageGolonganDarah = `<small><i>${errorData.errors.golongan_darah_id[0]}</i></small>`;
            errorGolonganDarah.innerHTML = errorMessageGolonganDarah;

            const errorPenyakitDiDerita = document.getElementById('error-penyakit-di-derita');
            const errorMessagePenyakitDiDerita = `<small><i>${errorData.errors.penyakit_di_derita[0]}</i></small>`;
            errorPenyakitDiDerita.innerHTML = errorMessagePenyakitDiDerita;

            const errorPenyakitMenular = document.getElementById('error-penyakit-menular');
            const errorMessagePenyakitMenular = `<small><i>${errorData.errors.penyakit_menular[0]}</i></small>`;
            errorPenyakitMenular.innerHTML = errorMessagePenyakitMenular;

            const errorPerokok = document.getElementById('error-perokok');
            const errorMessagePerokok = `<small><i>${errorData.errors.perokok[0]}</i></small>`;
            errorPerokok.innerHTML = errorMessagePerokok;

            const errorButaWarna = document.getElementById('error-buta-warna');
            const errorMessageButaWarna = `<small><i>${errorData.errors.buta_warna[0]}</i></small>`;
            errorButaWarna.innerHTML = errorMessageButaWarna;

            const errorAsuransiBpjsKis = document.getElementById('error-asuransi-bpjs-kis');
            const errorMessageAsuransiBpjsKis = `<small><i>${errorData.errors.asuransi_bpjs_kis[0]}</i></small>`;
            errorAsuransiBpjsKis.innerHTML = errorMessageAsuransiBpjsKis;

            // Upload Dokumen
            const errorKartuKeluarga = document.getElementById('error-kartu-keluarga');
            const errorMessageKartuKeluarga = `<small><i>${errorData.errors.kartu_keluarga[0]}</i></small>`;
            errorKartuKeluarga.innerHTML = errorMessageKartuKeluarga;

            const errorPasFoto = document.getElementById('error-pas-foto');
            const errorMessagePasFoto = `<small><i>${errorData.errors.pas_foto[0]}</i></small>`;
            errorPasFoto.innerHTML = errorMessagePasFoto;

            const errorSktm = document.getElementById('error-sktm');
            const errorMessageSktm = `<small><i>${errorData.errors.sktm[0]}</i></small>`;
            errorSktm.innerHTML = errorMessageSktm;

            const errorUploadSuratRekomendasi = document.getElementById('error-upload-surat-rekomendasi');
            const errorMessageUploadSuratRekomendasi = `<small><i>${errorData.errors.upload_surat_rekomendasi[0]}</i></small>`;
            errorUploadSuratRekomendasi.innerHTML = errorMessageUploadSuratRekomendasi;

            const errorUploadPdfFotoRumah = document.getElementById('error-upload-pdf-foto-rumah');
            const errorMessageUploadPdfFotoRumah = `<small><i>${errorData.errors.upload_pdf_foto_rumah[0]}</i></small>`;
            errorUploadPdfFotoRumah.innerHTML = errorMessageUploadPdfFotoRumah;

            const errorEssayKarangan = document.getElementById('error-essay-karangan');
            const errorMessageEssayKarangan = `<small><i>${errorData.errors.essay_karangan[0]}</i></small>`;
            errorEssayKarangan.innerHTML = errorMessageEssayKarangan;

            // Pernyataan
            const errorRangkaianTes = document.getElementById('error-rangkaian-tes');
            const errorMessageRangkaianTes = `<small><i>${errorData.errors.rangkaian_tes[0]}</i></small>`;
            errorRangkaianTes.innerHTML = errorMessageRangkaianTes;

            const errorDokumenJikaPalsu = document.getElementById('error-dokumen-jika-palsu');
            const errorMessageDokumenJikaPalsu = `<small><i>${errorData.errors.dokumen_jika_palsu[0]}</i></small>`;
            errorDokumenJikaPalsu.innerHTML = errorMessageDokumenJikaPalsu;

            const errorPelanggaranKeputusan = document.getElementById('error-pelanggaran-keputusan');
            const errorMessagePelanggaranKeputusan = `<small><i>${errorData.errors.pelanggaran_keputusan[0]}</i></small>`;
            errorPelanggaranKeputusan.innerHTML = errorMessagePelanggaranKeputusan;
        }
    } catch (error) {
        // Handle errors
        console.error('Error:', error);
    }
}

// Function to save form data to localStorage
function saveFormDataToLocalStorage(formData) {
    const formDataJSON = JSON.stringify(Array.from(formData.entries()));
    localStorage.setItem('formData', formDataJSON);
}

// Function to clear form data from localStorage
function clearFormDataFromLocalStorage() {
    localStorage.removeItem('formData');
}
