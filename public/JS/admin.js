const listas = ['Categor&iacute;as', 'Pel&iacute;culas', 'Comentarios', 'Valoraciones', 'Usuarios'];
const fichas = ['Categor&iacute;as', 'Pel&iacute;culas', 'Usuarios'];

window.onload = async () => {
	const nav = document.getElementById('nav');
	const p = document.getElementsByClassName('v')[0];

	await cargarListas(nav, p);
	const aside = await document.getElementById('aside');
	await addEventListeners(nav, aside, p);
}

const cargarListas = async (nav, p) => {
	if(p.children[0]) p.removeChild(p.children[0]);
	if(nav.children[0].classList.contains('active')) {
		const aside = document.createElement('ul');
		aside.id = 'aside';
		listas.forEach( (item) => {
			const li = document.createElement('li');
			li.innerHTML = item;
      li.addEventListener('click', (e) => {
        if(e.target.classList.contains('active')) return;
			  const active = document.getElementsByClassName('active')[1];
			  active.classList.remove('active');
			  e.target.classList.add('active');
      });
			aside.appendChild(li);
		});
		aside.children[0].classList.add('active');
		p.appendChild(aside);
	}

	if(nav.children[1].classList.contains('active')) {
		const aside = document.createElement('ul');
		aside.id = 'aside';
		fichas.forEach((item) => {
			const li = document.createElement('li');
			li.innerHTML = item;
      li.addEventListener('click', (e) => {
        if(e.target.classList.contains('active')) return;
			  const active = document.getElementsByClassName('active')[1];
			  active.classList.remove('active');
			  e.target.classList.add('active');
      });
			aside.appendChild(li);
		});
		aside.children[0].classList.add('active');
		p.appendChild(aside);
	}
}

const addEventListeners = async (nav, aside, p) => {
	const allItems = [...nav.children, ...aside.children];

	allItems.forEach((item) => {
		item.addEventListener('click', async (e) => {
			if(e.target.classList.contains('active')) return;
			const active = document.getElementsByClassName('active')[0];
			active.classList.remove('active');
			item.classList.add('active');
			await cargarListas(nav, p);
		});
	});
}

const load = async (resource) => {

}
