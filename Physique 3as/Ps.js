function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = 'bac24+ph'; 

    if (enteredPassword === correctPassword) {
        window.location.href = 'PH_3AS_C.html';
    } else {
        window.location.href = 'Ps.html';
    }

}
