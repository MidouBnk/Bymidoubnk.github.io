function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = '3ma2th+'; 

    if (enteredPassword === correctPassword) {
        window.location.href = 'MT_3AS_C.html';
    } else {
        window.location.href = 'Ps.html';
    }

}
