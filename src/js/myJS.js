const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');

usernameInput.addEventListener('keyup', function(event) {
  if (event.key === 'Enter') {
    passwordInput.focus();
  }
});

passwordInput.addEventListener('keyup', function(event) {
  if (event.key === 'Enter') {
    document.querySelector('form').submit();
  }
});
