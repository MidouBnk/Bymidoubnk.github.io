function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = ''; 

    if (enteredPassword === correctPassword) {
        window.location.href = '';
    } else {
        window.location.href = 'Ps.html';
    }

}
