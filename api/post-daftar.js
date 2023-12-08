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

            const errorSosialMedia = document.getElementById('error-sosial-media');
            const errorMessageSM = `<small><i>${errorData.errors.sosial_media[0]}</i></small>`;
            errorSosialMedia.innerHTML = errorMessageSM;

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

            const errorBahasaAsing = document.getElementById('error-bahasa-asing');
            const errorMessageBahasaAsing = `<small><i>${errorData.errors.bahsa_asing[0]}</i></small>`;
            errorBahasaAsing.innerHTML = errorMessageBahasaAsing;

            const errorJumlahHafalanJuz = document.getElementById('error-jumlah-hafalan-juz');
            const errorMessageJumlahHafalanJuz = `<small><i>${errorData.errors.jumlah_hafalan_juz[0]}</i></small>`;
            errorJumlahHafalanJuz.innerHTML = errorMessageJumlahHafalanJuz;

            const errorHafalanJuz = document.getElementById('error-hafalan-juz');
            const errorMessageHafalanJuz = `<small><i>${errorData.errors.hafalan_juz[0]}</i></small>`;
            errorHafalanJuz.innerHTML = errorMessageHafalanJuz;

            const errorRiwayatPrestasi = document.getElementById('error-riwayat-prestasi');
            const errorMessageRiwayatPrestasi = `<small><i>${errorData.errors.riwayat_prestasi[0]}</i></small>`;
            errorRiwayatPrestasi.innerHTML = errorMessageRiwayatPrestasi;

            const errorRiwayatOrganisasi = document.getElementById('error-riwayat-organisasi');
            const errorMessageRiwayatOrganisasi = `<small><i>${errorData.errors.riwayat_prestasi[0]}</i></small>`;
            errorRiwayatOrganisasi.innerHTML = errorMessageRiwayatOrganisasi;

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
            const errorNamaAyahKandung = document.getElementById('error-nama-ayah-kandung');
            const errorMessageNamaAyahKandung = `<small><i>${errorData.errors.nama_ayah_kandung[0]}</i></small>`;
            errorNamaAyahKandung.innerHTML = errorMessageNamaAyahKandung;

            const errorPendidikanTerakhirAyah = document.getElementById('error-pendidikan-terakhir-ayah');
            const errorMessagePendidikanTerakhirAyah = `<small><i>${errorData.errors.pendidikan_terakhir_ayah_id[0]}</i></small>`;
            errorPendidikanTerakhirAyah.innerHTML = errorMessagePendidikanTerakhirAyah;
            
            const errorPekerjaanAyahKandung = document.getElementById('error-pekerjaan-ayah-kandung');
            const errorMessagePekerjaanAyahKandung = `<small><i>${errorData.errors.pekerjaan_ayah_kandung[0]}</i></small>`;
            errorPekerjaanAyahKandung.innerHTML = errorMessagePekerjaanAyahKandung;

            const errorPenghasilanPokokAyah = document.getElementById('error-penghaslan-pokok-ayah');
            const errorMessagePenghasilanPokokAyah = `<small><i>${errorData.errors.penghasilan_pokok_pensiunan_ayah[0]}</i></small>`;
            errorPenghasilanPokokAyah.innerHTML = errorMessagePenghasilanPokokAyah;

            const errorPendapatanDiluarPenghasilanAyah = document.getElementById('error-pendapatan-diluar-penghasilan-ayah');
            const errorMessagePendapatanDiluarPenghasilanAyah = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ayah[0]}</i></small>`;
            errorPendapatanDiluarPenghasilanAyah.innerHTML = errorMessagePendapatanDiluarPenghasilanAyah;

            const errorDomisiliAyahKandung = document.getElementById('error-domisili-ayah-kandung');
            const errorMessageDomisiliAyahKandung = `<small><i>${errorData.errors.pendapatan_diluar_penghasilan_perbulan_ayah[0]}</i></small>`;
            errorDomisiliAyahKandung.innerHTML = errorMessageDomisiliAyahKandung;
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
