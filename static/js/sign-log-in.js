const container = document.querySelector('#container');
const logInButton = document.querySelector('#logIn');
const signUpButton = document.querySelector('#signUp');

signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));
logInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));