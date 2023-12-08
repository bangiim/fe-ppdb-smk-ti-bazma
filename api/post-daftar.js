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
