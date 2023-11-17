function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = 'g20!23e'; 

    if (enteredPassword === correctPassword) {
        window.location.href = 'GE_2AS_C.html';
    } else {
        window.location.href = 'Ps.html';
    }

}
