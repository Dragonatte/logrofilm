url = 'http://localhost:8000/logrofim-api/api/';

fetch(url + 'pelis')
		.then(response => response.json())
		.then(data => {
			const res = document.getElementById('resultado');
			let pelis = document.getElementById('pelis');
			if (pelis) {
				while (pelis.firstChild) {
					pelis.removeChild(pelis.firstChild);
				}
			} else {
				pelis = document.createElement('div');
				pelis.id = 'pelis';
			}

			Object.values(data).forEach((peli) => {
				const div = document.createElement('div');
				div.classList.add('peli');
				const img = document.createElement('img');
				img.src = peli.POSTER;
				img.alt = peli.TITULO;
				div.appendChild(img);
				const divInfo = document.createElement('div');
				divInfo.classList.add('info');
				const h3 = document.createElement('a');
				h3.innerHTML = peli.TITULO;
				h3.href = `peli.php?id_pelicula=${peli.ID}&titulo=${peli.TITULO}&titulo_original=${peli.TITULO_ORIGINAL}&poster=${peli.POSTER}&anno=${peli.ANNO}&sinopsis=${peli.SINOPSIS}&duracion=${peli.DURACION}`;
				divInfo.appendChild(h3);
				const p = document.createElement('p');
				p.innerHTML = peli.ANNO;
				divInfo.appendChild(p);
				div.appendChild(divInfo);
				pelis.appendChild(div);

			});
			res.appendChild(pelis);

			console.log(data);
		})
		.catch(error => console.log(error));