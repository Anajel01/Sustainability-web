document.getElementById("openFormButton").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior (refresh)
    var popupForm = document.getElementById("popupForm");
    if (popupForm.style.display === "none" || popupForm.style.display === "") {
        popupForm.style.display = "block";
    } else {
        popupForm.style.display = "none";
    }
});

document.getElementById("closeFormButton").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior
    document.getElementById("popupForm").style.display = "none";
});


document.getElementById("openFormButton2").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior (refresh)
    var popupForm = document.getElementById("popupForm2");
    if (popupForm.style.display === "none" || popupForm.style.display === "") {
        popupForm.style.display = "block";
    } else {
        popupForm.style.display = "none";
    }
});

document.getElementById("closeFormButton2").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior
    document.getElementById("popupForm2").style.display = "none";
});

document.getElementById("openNewsletterButton").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior (refresh)
    var popupForm = document.getElementById("popupNewsletter");
    if (popupForm.style.display === "none" || popupForm.style.display === "") {
        popupForm.style.display = "block";
    } else {
        popupForm.style.display = "none";
    }
});

document.getElementById("closeNewsletterButton").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent the default button behavior
    document.getElementById("popupNewsletter").style.display = "none";
});


