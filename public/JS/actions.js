window.onload = () => {
	const loginForm = document.getElementById('loginForm');
	const registerForm = document.getElementById('registerForm');
	const toLogin = document.getElementById('toLog');
	const toRegister = document.getElementById('toReg');
	const inputs = Array.from(document.querySelectorAll('.input'));

	inputs.forEach(input => {
		input.addEventListener('blur', () => {
			if (input.value.length > 0) {
				input.classList.add('written');
			} else {
				input.classList.remove('written');
			}
		});
	});

	const resetAnimation = () => {
		loginForm.classList.remove('slide-right');
		registerForm.classList.remove('slide-right');
		loginForm.classList.remove('slide-left');
		registerForm.classList.remove('slide-left');
	}

	if(toLogin !== null) {
		toLogin.addEventListener('click', () => {
			resetAnimation();
			loginForm.classList.add('slide-right');
			registerForm.classList.add('slide-right');
		});
	}

	if(toRegister !== null) {
		toRegister.addEventListener('click', () => {
			resetAnimation();
			loginForm.classList.add('slide-left');
			registerForm.classList.add('slide-left');
		});
	}
}