function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = 'ge2024!b'; 

    if (enteredPassword === correctPassword) {
        window.location.href = 'GE_3AS_C.html';
    } else {
        window.location.href = 'Ps.html';
    }

}
