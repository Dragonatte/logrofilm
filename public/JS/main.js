window.onload = () => {
	const user = document.getElementsByClassName('user')[0];

	user.addEventListener('click', () => {
		const userMenu = document.getElementsByClassName('user-menu')[0];
		userMenu.classList.toggle('active');
	});
}