// var url = "https://api.ppdb.smktibazma.sch.id/api/v1/public/daftar-pesertai";
// var data = {
//     tahun_pelajaran_id : "",
//     nama_lengkap       : "",
//     nisn               : "",
//     nik                : "",
//     nama_fasilitator   : "",
//     tempat_lahir       : "",
//     tanggal_lahir      : "",
//     alamat             : "",
//     provinsi_id        : "",
//     kota_kabupaten     : "",
//     no_whatsapp_telp   : "",
//     sosial_media       : "",
//     smp_derajat        : "",
//     npsn               : "",
//     tahun_lulus_id     : "",
//     anak_ke_sodara     : "",
//     keadaan_orang_tua_id                : "",
//     status_dalam_keluarga_id            : "",
//     tinggal_bersama_status_id           : "",
//     penerimaan_bantuan_sosial_id        : "",
//     nama_fasilitator                    : "",
//     hubungan_calon_siswa_fasilitator    : "",
//     no_whatsapp_fasilitator             : "",
//     email_fasilitator                   : "",
//     saudara_beasiswa_di_smk_fasilitator : "",
//     rapor_matematika_3  : "",
//     rapor_matematika_4  : "",
//     rapor_matematika_5  : "",
//     rapor_ipa_3         : "",
//     rapor_ipa_4         : "",
//     rapor_ipa_5         : "",
//     rapor_indo_3        : "",
//     rapor_indo_4        : "",
//     rapor_indo_5        : "",
//     rapor_inggris_3     : "",
//     rapor_inggris_4     : "",
//     rapor_inggris_5     : "",
//     rapor_islam_3       : "",
//     rapor_islam_4       : "",
//     rapor_islam_5       : "",
//     status_kepemilikan_rumah_id         : "",
//     tahun_perolehan_status_kepemilikan  : "",
//     kualitas_rumah_id   : "",
//     luas_tanah_id       : "",
//     mandi_cuci_kakus_id : "",
//     sumber_air_id       : "",
//     daya_listrik_id     : "", 
//     harta_tidak_bergerak_id     : "",
//     status_kepemelikan_htb_id   : "",
//     kepemilikan_kendaraan_id    : "",
//     status_kepemilikan_kendaraan_id : "",
//     tinggi_badan        : "",
//     berat_badan         : "",
//     penyakit_di_derita  : "",
//     penyakit_menular    : "",
//     golongan_darah_id   : "",
//     perokok             : "",
//     buta_warna          : "",
//     asuransi_bpjs_kis   : "",
//     bahasa_asing        : "",
//     jumlah_hafalan_juz  : "",
//     hafalan_juz         : "",
//     riwayat_prestasi_calon_peserta_didik        : "",
//     riwayat_organisasi_sekolah_dan_non_sekolah  : "",
//     hal_hal_khusus      : "",
//     cita_cita           : "",
//     hobi_kegemaran      : "",
//     nama_ayah_kandung   : "",
//     pendidikan_terakhir : "",
//     pekerjaan_ayah_kandung                      : "",
//     penghasilan_pokok_pensiunan_ayah            : "", 
//     pendapatan_diluar_penghasilan_perbulan_ayah : "",
//     domisili_ayah_kandung       : "",
//     no_whatsapp_ayah_kandung    : "",
//     nama_ibu_kandung            : "",
//     pekerjaan_ibu_kandung       : "",
//     penghasilan_pokok_pensiunan_ibu : "",
//     pendapatan_diluar_penghasilan_perbulan_ibu  : "",
//     domisili_ibu_kandung        : "",
//     no_whatsapp_ibu_kandung     : "",
//     harapan_orang_tua           : "",
//     nama_wali                   : "",
//     pekerjaan_wali              : "",       
//     alamat_domisili_wali        : "",
//     hubungan_wali               : "",
//     email_wali                  : "",
//     jumlah_tanggungan_dalam_keluarga   : "",
//     informasi_ppdb_id           : "",
//     sumber_penghasilan_id       : "",
//     rangkaian_tes               : "",
//     dokumen_jika_palsu          : "",
//     pelanggaran_keputusan       : "",
//     kartu_keluarga              : "",
//     pas_foto                    : "",
//     sktm                        : "",
//     upload_surat_rekomendasi    : "",
//     upload_pdf_foto_rumah       : "",
//     essay_karangan              : ""
// };

// // Kirim permintaan POST dengan menggunakan fetch
// fetch(url, {
//     method: "POST",
//     headers: {
//         "Content-Type": "application/json"
//     },
//     body: JSON.stringify(data)
// })
//     .then(response => response.json())
//     .then(data => {
//         // Tanggapan dari API
//         console.log(data);
//     })
//     .catch(error => {
//         // Tangani kesalahan
//         console.error('Error:', error);
//     });

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
            console.log(data);

            // Show success modal
            $('#successModal').modal('show');

            // Clear form data from localStorage after a successful API request
            clearFormDataFromLocalStorage();
        } else {
            // Handle non-successful response
            console.error('Error:', response.message);
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