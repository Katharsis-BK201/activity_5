document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.querySelector('#togglePassword');
    const togglePassword_confirm = document.querySelector('#togglePassword_confirm');
    const password = document.querySelector('#password');
    const password_comfirmation = document.querySelector('#password_confirmation');

    if(togglePassword && password) {
        togglePassword.addEventListener('click', function() {
            if(password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });
    }

    if(togglePassword_confirm && password_comfirmation) {
        togglePassword_confirm.addEventListener('click', function() {
            if(password_comfirmation.type === 'password') {
                password_comfirmation.type = 'text';
            } else {
                password_comfirmation.type = 'password';
            }
        });
    }
});

