function authenticate() {
    var enteredPassword = document.getElementById('password').value;
    var correctPassword = 'ma23th!'; 

    if (enteredPassword === correctPassword) {
        window.location.href = 'MT_2AS_C.html';
    } else {
        window.location.href = 'Ps.html';
    }

}
