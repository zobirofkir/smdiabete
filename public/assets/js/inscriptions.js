/**
 * Toggle Other Laboratoire Input
 */
function toggleOtherLaboratoireInput(select) {
    const otherInputDiv = document.getElementById('other_laboratoire_input');
    if (select.value === 'other') {
        otherInputDiv.classList.remove('hidden');
    } else {
        otherInputDiv.classList.add('hidden');
        document.getElementById('other_laboratoire').value = '';
    }
}



/**
 * Toggle Payment Fields
 */
function togglePaymentFields(method) {
    const ribPdfUpload = document.getElementById('rib_pdf_upload');
    const laboratoireList = document.getElementById('laboratoire_list');

    if (method === 'laboratoire') {
        laboratoireList.classList.remove('hidden');
        ribPdfUpload.classList.add('hidden');
    } else if (method === 'virement') {
        ribPdfUpload.classList.remove('hidden');
        laboratoireList.classList.add('hidden');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const selectedMethod = "{{ old('payment_method') }}";
    if (selectedMethod) {
        togglePaymentFields(selectedMethod);
    }
});


/**
 * Username and Lastname Uppercase
 */
document.addEventListener("DOMContentLoaded", function () {
    const lastnameInput = document.getElementById("lastname");
    const firstnameInput = document.getElementById("firstname");

    lastnameInput.addEventListener("input", function () {
        this.value = this.value.toUpperCase();
    });

    firstnameInput.addEventListener("input", function () {
        this.value = this.value.toUpperCase();
    });
});


/**
 * Specialite Autocomplete
 */
document.addEventListener("DOMContentLoaded", function () {
    const specialiteSelect = document.getElementById("specialite");
    const otherSpecialiteInput = document.getElementById("otherSpecialite");

    specialiteSelect.addEventListener("change", function () {
        if (this.value === "Autres") {
            otherSpecialiteInput.classList.remove("hidden");
            otherSpecialiteInput.setAttribute("required", "true");
        } else {
            otherSpecialiteInput.classList.add("hidden");
            otherSpecialiteInput.removeAttribute("required");
            otherSpecialiteInput.value = ""; // مسح القيمة عند عدم الحاجة إليها
        }
    });
});
