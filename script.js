/* script.js */

// Membuat fungsi untuk validasi form login sebelum data dikirimkan ke backend
function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Memeriksa apakah field username dan password telah diisi
    if (username === '' || password === '') {
        alert('Mohon isi semua field!');
        return false;
    }

    // Jika semua validasi berhasil, form akan di-submit ke backend
    return true;
}
