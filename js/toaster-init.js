let x = getCookie('alert');

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

console.log(x);
if (x == 1) {
    eraseCookie('alert');
    Swal.fire({
        confirmButtonColor: '#cdaa7c',
        title: 'Thank you for your request!',
        text: 'We will get back to you shortly.',
        imageUrl: 'https://restaurents.dotest.live/images/alert-logo.png',
        imageWidth: 400,
        imageHeight: 100,
        imageAlt: 'Custom image',
    }).then(function() {
        window.location = "/";
    });
}

function eraseCookie(name) {
    document.cookie = name + '=;';
}
