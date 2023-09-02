document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("closeWelcome")) {
            let errorElement = event.target.closest(".welcome");
            if (errorElement) {
                errorElement.style.display = "none";
            }
        }
    });
});