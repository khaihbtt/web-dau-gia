var testuser_pass = /^\w[a-zA-Z0-9\_]{0,15}$/;
function user() {
    var use = document.getElementById('username').value.trim();

    if (!testuser_pass.test(use) )
        document.getElementById("warn-user--incorrect").style.display = 'block';
    else
    document.getElementById("warn-user--incorrect").style.display = 'none';
}

function pass() {
    var password = document.getElementById('password').value.trim();

    if (!testuser_pass.test(password)) {
        document.getElementById("warn-pass--incorrect").style.display = 'block';
    }
    else
    document.getElementById("warn-pass--incorrect").style.display = 'none';
}

function repass() {
    var repassword = document.getElementById('repassword').value.trim();
    var password = document.getElementById('password').value.trim();
    if ( password != repassword ) {
        document.getElementById("warn-repass--incorrect").style.display = 'block';
    }
    else
    document.getElementById("warn-repass--incorrect").style.display = 'none';
}

function viewuser() {
    document.getElementById("warn-user--incorrect").style.display = 'none';
}

function viewpass() {
    document.getElementById("warn-pass--incorrect").style.display = 'none';
}

function viewrepass() {
    document.getElementById("warn-repass--incorrect").style.display = 'none';
}
