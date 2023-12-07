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
            const errorMessageTP = `<p><i>${errorData.errors.tahun_pelajaran_id[0]}</i></p>`;
            errorTahunPelajaran.innerHTML = errorMessageTP; 
            
            const errorNik = document.getElementById('error-nik');
            const errorMessageNik = `<p><i>${errorData.errors.nik[0]}</i></p>`;
            errorNik.innerHTML = errorMessageNik;
            
            const errorNisn = document.getElementById('error-nisn');
            const errorMessageNisn = `<p><i>${errorData.errors.nisn[0]}</i></p>`;
            errorNisn.innerHTML = errorMessageNisn;

            
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
