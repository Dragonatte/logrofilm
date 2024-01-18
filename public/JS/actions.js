window.onload = () => {
	const loginForm = document.getElementById('loginForm');
	const registerForm = document.getElementById('registerForm');
	const toLogin = document.getElementById('toLog');
	const toRegister = document.getElementById('toReg');

	const resetAnimation = () => {
		loginForm.classList.remove('slide-right');
		registerForm.classList.remove('slide-right');
		loginForm.classList.remove('slide-left');
		registerForm.classList.remove('slide-left');
	}

	toLogin.addEventListener('click', () => {
		resetAnimation();
		loginForm.classList.add('slide-right');
		registerForm.classList.add('slide-right');
	});

	toRegister.addEventListener('click', () => {
		resetAnimation();
		loginForm.classList.add('slide-left');
		registerForm.classList.add('slide-left');
	});
}