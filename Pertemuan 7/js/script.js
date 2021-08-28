let $form = document.querySelector('.form');
let $error = document.querySelector('.error');
let $inputFields = document.querySelectorAll('.input-field');
let $email = document.getElementById('email');
let $password = document.getElementById('password');

const addError = message => {
    $error.innerHTML = message;
    $error.style.display = 'block'
}

const removeError = () => {
    $error.innerHTML = '';
    $error.style.display = 'hidden';
}

const validate = event => {
    event.preventDefault();
    $error.style.display = 'none';

    if ($email.value !== 'riifkiramadhan2@gmail.com' || $password.value !== 'admin') {
        addError('Email atau password Anda salah');
    } else {
        removeError();
        alert('Anda berhasil login')
        window.location.assign('./feature/latihan.html');
    }
}

$form.addEventListener('submit', validate);