window.onload = () => {
	const userInput = document.getElementById('user');
	const passInput = document.getElementById('pass');

	userInput.addEventListener('blur', () => {
		if (userInput.value.length > 0) {
			userInput.classList.add('written');
		} else {
			userInput.classList.remove('written');
		}
	});

	passInput.addEventListener('blur', () => {
		if (passInput.value.length > 0) {
			passInput.classList.add('written');
		} else {
			passInput.classList.remove('written');
		}
	});

	userInput.addEventListener('focus', () => {
		userInput.classList.remove('admin-input-error');
	});

	passInput.addEventListener('focus', () => {
		passInput.classList.remove('admin-input-error');
	});
}