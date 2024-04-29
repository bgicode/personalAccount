window.onload = function() {
    let checkbox = document.getElementById("showPass");
    let passField = document.getElementById("passwordField");
    let checkImg = document.getElementById("checkImg");

    if (checkbox.checked) {
        passField.setAttribute("type", "text");
        checkImg.style.backgroundImage = 'url(img/hide.svg)';

    } else {
        passField.setAttribute("type", "password");
        checkImg.style.backgroundImage = 'url(img/show.svg)';
    };

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            passField.setAttribute("type", "text");
            checkImg.style.backgroundImage = 'url(img/hide.svg)';
        } else {
            passField.setAttribute("type", "password");
            checkImg.style.backgroundImage = 'url(img/show.svg)';
        }
    });
};
