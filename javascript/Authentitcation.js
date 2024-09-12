// Auth Functions, two constant variables "signUpButton" and "signInButton" using the "document.getElementById()" method
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

//two event listener buttons , and the add and remove the right-panel-active are for the create a toggle effect.
signUpButton.addEventListener('click', function () {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', function () {
	container.classList.remove("right-panel-active");
});