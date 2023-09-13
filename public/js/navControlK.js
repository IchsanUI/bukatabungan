document.addEventListener("DOMContentLoaded", function () {
    const formSteps = document.querySelectorAll(".kd-form");
    const nextButtons = document.querySelectorAll(".info_btn #buttonNext");
    const submitButton = document.querySelectorAll(".info_btn #buttonSubmit");

    nextButtons.forEach((button, index) => {
        button.addEventListener("click", function () {
            const currentStep = formSteps[index];
            if ((index === 0 || index === 2) && !validateForm(currentStep)) {
                alert("Harap isi Semua Form Sebelum Melanjutkan.");
                return; // Jika form 1 atau 3 tidak valid, jangan lanjutkan
            }

            currentStep.classList.remove("active");
            formSteps[index + 1].classList.add("active");
        });
    });

    function validateForm(step) {
        const inputs = step.querySelectorAll(
            "input:required, select:required, textarea:required, #PersetujuanSK ,#gcha"
        ); // Menyesuaikan dengan input dan select
        let isValid = true;

        inputs.forEach((input) => {
            if (input.type === "checkbox") {
                if (!input.checked) {
                    isValid = false;
                    input.classList.add("is-invalid");
                    input.addEventListener("change", function () {
                        if (input.checked) {
                            input.classList.remove("is-invalid");
                        }
                    });
                } else {
                    input.classList.remove("is-invalid");
                }
            } else if (input.value.trim() === "") {
                isValid = false;
                input.classList.add("is-invalid");
                input.addEventListener("input", function () {
                    if (input.value.trim() !== "") {
                        input.classList.remove("is-invalid");
                    }
                });
            } else {
                input.classList.remove("is-invalid");
            }
        });

        return isValid;
    }
    submitButton.forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // Menghentikan perilaku default tombol submit

            // Validasi form terakhir sebelum mengirim data
            const lastStep = formSteps[formSteps.length - 1];
            if (!validateForm(lastStep)) {
                alert("Harap isi Semua Form Terakhir Dengan Benar.");
                return;
            }
            // Mengumpulkan data dari semua langkah
            var csrfToken = $('meta[name="csrf-token"]').attr("content");
            var formData = {
                _token: csrfToken,
            };
            formSteps.forEach((step, index) => {
                const inputs = step.querySelectorAll(
                    "input, select, textarea, #PersetujuanSK"
                );

                inputs.forEach((input) => {
                    formData[input.id] = input.value;
                });
            });

            // Serialize object to JSON
            var formDataJSON = JSON.stringify(formData);

            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "{{ route('post.dataKredit.API') }}",
                data: {
                    dataToEncrypt: formDataJSON,
                },
                dataType: "json",
                success: function (response) {
                    // Menggunakan data terenkripsi yang diterima dari Laravel
                    var encryptedData = response.encryptedData;
                    // console.log('Sebelum di Encrypted Data:', formDataJSON);
                    console.log("Encrypted Data:", encryptedData);
                    alert("Data berhasil dikirim: " + encryptedData);
                },
                error: function (error) {
                    // console.log('Error:', error);
                    alert(
                        "Terjadi kesalahan saat mengirim data: " +
                            error.statusText
                    );
                },
            });
        });
    });
});
