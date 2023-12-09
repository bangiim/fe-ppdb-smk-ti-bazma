async function postData() {
    const formData = new FormData(document.getElementById('formRegis'));

    const apiUrl = "https://api.ppdb.smktibazma.sch.id/api/v1/public/daftar-peserta";

    try {
        const response = await fetch(apiUrl, {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData)),
            cache: "no-cache",
            headers: {
                "Content-Type": "application/json",
            },
        });

        if (response.ok) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Berhasil Terkirim',
            }).then((result) => {
                if (result.isConfirmed || result.dismiss === Swal.DismissReason.backdrop) {
                    window.location.reload();
                }
            });
        } else {
            const errorData = await response.json();
            handleErrors(errorData.errors);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

function handleErrors(errors) {
    Object.keys(errors).forEach((fieldName) => {
        const errorElement = document.getElementById(`error-${fieldName}`);

        if (errorElement) {
            const errorMessage = `<small><i>${errors[fieldName][0]}</i></small>`;
            errorElement.innerHTML = errorMessage;
        } else {
            console.error(`Elemen dengan ID 'error-${fieldName}' tidak ditemukan.`);
        }
    });
}

