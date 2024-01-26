window.onload = () => {
	const valLabel = document.getElementById('val-val');
	const slider = document.getElementById('valoracion');
	valLabel.innerHTML = slider.value + ' / 10';

	slider.addEventListener('input', () => valLabel.innerHTML = slider.value + ' / 10');
}