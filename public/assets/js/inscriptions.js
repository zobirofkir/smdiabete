/**
 * Toggle Other Laboratoire Input
 */
function toggleOtherLaboratoireInput(select) {
    const otherInputDiv = document.getElementById("other_laboratoire_input");
    if (select.value === "other") {
        otherInputDiv.classList.remove("hidden");
    } else {
        otherInputDiv.classList.add("hidden");
        document.getElementById("other_laboratoire").value = "";
    }
}

/**
 * Toggle Payment Fields
 */
function togglePaymentFields(method) {
    const ribPdfUpload = document.getElementById("rib_pdf_upload");
    const laboratoireList = document.getElementById("laboratoire_list");

    if (method === "laboratoire") {
        laboratoireList.classList.remove("hidden");
        ribPdfUpload.classList.add("hidden");
    } else if (method === "virement") {
        ribPdfUpload.classList.remove("hidden");
        laboratoireList.classList.add("hidden");
    } else if (method === "sur-place") {
        laboratoireList.classList.add("hidden");
        ribPdfUpload.classList.add("hidden");
    }
}

document.addEventListener("DOMContentLoaded", function () {
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

    if (specialiteSelect && otherSpecialiteInput) {
        specialiteSelect.addEventListener("change", function () {
            if (this.value === "Autres") {
                otherSpecialiteInput.classList.remove("hidden");
                otherSpecialiteInput.setAttribute("required", "true");
            } else {
                otherSpecialiteInput.classList.add("hidden");
                otherSpecialiteInput.removeAttribute("required");
                otherSpecialiteInput.value = "";
            }
        });
    }
});

/**
 * Toggle Status Select
 */
const laboratoireElement = document.getElementById("laboratoire");
if (laboratoireElement) {
    laboratoireElement.addEventListener("change", function () {
        let statusSelect = document.getElementById("status_select");
        if (statusSelect) {
            if (this.value) {
                statusSelect.classList.remove("hidden");
            } else {
                statusSelect.classList.add("hidden");
            }
        }
    });
}

/**
 * Toggle Arrival And Departure Date
 */
document.addEventListener("DOMContentLoaded", function () {
    const arrivalSelect = document.getElementById("arrival_date");
    const departureSelect = document.getElementById("departure_date");

    arrivalSelect.addEventListener("change", function () {
        const selectedArrivalDate = new Date(this.value);

        Array.from(departureSelect.options).forEach((option) => {
            option.disabled = false;
        });

        let validOptions = false;
        Array.from(departureSelect.options).forEach((option) => {
            if (option.value) {
                const optionDate = new Date(option.value);
                if (optionDate <= selectedArrivalDate) {
                    option.disabled = true;
                } else {
                    validOptions = true;
                }
            }
        });

        if (
            !validOptions ||
            (departureSelect.value &&
                new Date(departureSelect.value) <= selectedArrivalDate)
        ) {
            departureSelect.value = "";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const inscriptionTypeRadios = document.querySelectorAll(
        'input[name="inscription_type"]'
    );
    const arrivalDate = document.getElementById("arrival_date");
    const departureDate = document.getElementById("departure_date");

    // Function to handle inscription type change
    function handleInscriptionTypeChange() {
        const selectedType = document.querySelector(
            'input[name="inscription_type"]:checked'
        )?.value;

        if (selectedType === "hebergement") {
            arrivalDate.disabled = false;
            departureDate.disabled = false;
            // Set default values if not already set
            if (!arrivalDate.value) {
                arrivalDate.value = "2025-05-29";
            }
            if (!departureDate.value) {
                departureDate.value = "2025-05-30";
            }
        } else if (selectedType === "seule") {
            arrivalDate.disabled = true;
            departureDate.disabled = true;
            arrivalDate.value = "";
            departureDate.value = "";
        }
    }

    // Add event listeners for radio button changes
    inscriptionTypeRadios.forEach((radio) => {
        radio.addEventListener("change", handleInscriptionTypeChange);
    });

    // Initialize the state based on the current selection
    handleInscriptionTypeChange();
});

function handlePaymentChoice(choice) {
    const paymentFields = document.getElementById("payment_fields");
    const contactMessage = document.getElementById("contact_message");

    if (choice === "yes") {
        paymentFields.classList.remove("hidden");
        contactMessage.classList.add("hidden");
    } else {
        paymentFields.classList.add("hidden");
        contactMessage.classList.remove("hidden");
    }
}
