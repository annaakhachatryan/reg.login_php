////////////////////// delete error alert in register and login page
document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("close")) {
            let errorElement = event.target.closest(".error-message");
            if (errorElement) {
                errorElement.style.display = "none";
            }
        }
    });
});


/////////////////////// password/confirm pasword/ invalid input
document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("close")) {
            let errorElement = event.target.closest(".errorpas-message");
            if (errorElement) {
                errorElement.style.display = "none";
            }
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("close")) {
            let errorElement = event.target.closest(".errorinp-message");
            if (errorElement) {
                errorElement.style.display = "none";
            }
        }
    });
});


////////////////////// delete success alert in register and login page

document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("close")) {
            let errorElement = event.target.closest(".success-message");
            if (errorElement) {
                errorElement.style.display = "none";
            }
        }
    });
});


const inputs = document.querySelectorAll('input');
inputs.forEach(input => {
    input.addEventListener('input', () => {
        if (input.value.trim() === '') {
            input.classList.remove('valid');
            input.classList.add('invalid');
        } else {
            input.classList.remove('invalid');
            input.classList.add('valid');
        }
    });
});
