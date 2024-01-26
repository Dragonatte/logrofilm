const listas = ['Categor&iacute;as', 'Pel&iacute;culas', 'Comentarios', 'Valoraciones', 'Usuarios'];
const fichas = ['Categor&iacute;as', 'Pel&iacute;culas', 'Usuarios'];
const url = 'http://localhost:8000/logrofim-api/api/';

window.onload = async () => {
	const nav = document.getElementById('nav');
	const p = document.getElementsByClassName('v')[0];

	await cargarListas(nav, p);
	const aside = await document.getElementById('aside');
	await addEventListeners(nav, aside, p);
	await load('generos');
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
				switch (e.target.innerHTML) {
					case 'Categorías':
						load('generos');
						break;
					case 'Películas':
						load('pelis');
						break;
					case 'Comentarios':
						load('comentarios');
						break;
					case 'Valoraciones':
						load('valoraciones');
						break;
					case 'Usuarios':
						load('usuarios');
						break;
					default:
						break;
				}
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

const load = (resource) => {
	fetch(url + resource)
		.then(response => response.json())
		.then(data => {
			const main = document.getElementsByClassName('main-admin')[0];
			while (main.firstChild) main.removeChild(main.firstChild);
			const table = document.createElement('table');
			table.id = 'table';
			const thead = document.createElement('thead');
			const tbody = document.createElement('tbody');
			const tr = document.createElement('tr');
			Object.keys(Object.values(data)[0]).forEach((i) => {
				if(i === 'POSTER') return;
				if(i === 'BACKDROP') return;
				if(i === 'SINOPSIS') return;
				const th = document.createElement('th');
				th.innerHTML = i;
				tr.appendChild(th);
			});

			thead.appendChild(tr);
			table.appendChild(thead);
			Object.values(data).forEach((value) => {
				const tr = document.createElement('tr');
				for(let i = 0; i < Object.keys(value).length ; i++) {
					if(Object.keys(value)[i] === 'POSTER') continue;
					if(Object.keys(value)[i] === 'BACKDROP') continue;
					if(Object.keys(value)[i] === 'SINOPSIS') continue;
					const td = document.createElement('td');
					td.innerHTML = Object.values(value)[i];
					tr.appendChild(td);
				}
				const tdEd = document.createElement('td');
				const buttonEd = document.createElement('button');
				buttonEd.innerHTML = 'Editar';
				buttonEd.classList.add('edit');
				buttonEd.addEventListener('click', () => {
					console.log('Editar');
				});
				tdEd.appendChild(buttonEd);
				tr.appendChild(tdEd);
				const tdDe = document.createElement('td');
				const buttonDe = document.createElement('button');
				buttonDe.innerHTML = 'Eliminar';
				buttonDe.classList.add('delete');
				buttonDe.addEventListener('click', () => {
					console.log('Eliminar');
				});
				tdDe.appendChild(buttonDe);
				tr.appendChild(tdDe);

				tbody.appendChild(tr);
			});
			table.appendChild(tbody);
			main.appendChild(table);
		})
		.catch(error => console.error(error))
}
