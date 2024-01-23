const url = 'https://www.cineslascanas.com/'

const pelisLasCanas = {};
const diasValues = {};

const pelisLasCanasPromise = fetch(url)
    .then(response => response.text())
    .then(html => {

      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');

      const semana = doc.querySelector('.semana');
      return Array.from(semana.children).map( ( dia ) => {
        const cartelera = doc.getElementById('cartelera' + dia.id);
        const pelis = Array.from(cartelera.children);
        pelis.pop(); // Elimina el último elemento que es un div con el botón de ver más
        return pelis.map( (peli) => {
          const cartel = peli.querySelector('.cartel img').src;
          const titulo = peli.querySelector('h2').innerText;
          const horas = [];
          Array.from(peli.querySelectorAll('.horas>a>strong')).forEach( e => horas.push(e.innerText));
          const genero = peli.querySelector('.genero') ? peli.querySelector('.genero').innerText : '';
          const duracion = peli.querySelector('.duracion').innerText;
          return {cartel, titulo, horas, genero, duracion, dia: dia.children[0].innerText};
        });
      });
    })
    .catch(error => {
      console.error('Error al raspar la página:', error);
    });

const diasPromise = fetch(url)
    .then(response => response.text())
    .then( ( html ) => {
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');

      const semana = doc.querySelector('.semana');
      return Array.from(semana.children).map( ( dia ) => {
        return dia.children[0].innerText
      });
    })
    .catch(error => {
      console.error('Error al raspar la página:', error);
    });

window.onload = async () => {
  await pelisLasCanasPromise.then( pelis => Object.assign(pelisLasCanas, pelis));
  await diasPromise.then( dias => Object.assign(diasValues, dias));

  await loadPelis();

  await Object.values(diasValues).forEach( ( dia , index ) => {
    const btn = document.getElementById(index++ + "");
    if(dia === 'HOY EN CARTELERA')
      btn.innerText = 'HOY';
    else if(dia === 'Miercoles')
      btn.innerText = 'X';
    else btn.innerText = dia.toUpperCase().slice(0, 1);
  });

  const btns = Array.from(document.getElementsByClassName('dia'));
  const selector = document.getElementsByClassName('dia-select')[0];

  btns.forEach(( i ) => {
    i.addEventListener('click', (e) => {
      btns.forEach(( i ) => {
        i.classList.remove('active');
      });
      e.target.classList.add('active');
      for (let i = 0; i < 7; i++) {
        selector.classList.remove('_' + i);
      }
      switch (e.target.id) {
        case '0':
          selector.classList.add('_0');
          break;
        case '1':
          selector.classList.add('_1');
          break;
        case '2':
          selector.classList.add('_2');
          break;
        case '3':
          selector.classList.add('_3');
          break;
        case '4':
          selector.classList.add('_4');
          break;
        case '5':
          selector.classList.add('_5');
          break;
        case '6':
          selector.classList.add('_6');
          break;
        default:
          selector.classList.add('_0');break;
      }
      loadPelis();
    });
  });
}

const loadPelis = async () => {
  const dia = document.getElementsByClassName('dia active')[0];
  const cartelera = document.getElementById('cartelera');
  let pelis = document.getElementById('pelis');
  if (pelis) {
    // Elimina todos los hijos del div#pelis
    while (pelis.firstChild) {
      pelis.removeChild(pelis.firstChild);
    }
  } else {
    pelis = document.createElement('div');
    pelis.id = 'pelis';
  }
  let diaActivo;
  const dias = Object.keys(pelisLasCanas);
  switch ( dia.id ) {
    case "0":
      diaActivo = dias[0];
      break;
    case "1":
      diaActivo = dias[1];
      break;
    case "2":
      diaActivo = dias[2];
      break;
    case "3":
      diaActivo = dias[3];
      break;
    case "4":
      diaActivo = dias[4];
      break;
    case "5":
      diaActivo = dias[5];
      break;
    case "6":
      diaActivo = dias[6];
      break;
    default:
      diaActivo = dias[0];
      break;
  }
  let divPeli;
  if(pelisLasCanas[diaActivo].length === 0) {
    divPeli = document.createElement('div');
    divPeli.classList.add('peli');
    divPeli.classList.add('no-peli');
    const h3 = document.createElement('h3');
    h3.innerText = 'Aún no hay películas disponibles';
    divPeli.appendChild(h3);
    pelis.appendChild(divPeli);
  } else {
    pelisLasCanas[diaActivo].forEach(peli => {
      divPeli = document.createElement('div');
      divPeli.classList.add('peli');
      const img = document.createElement('img');
      img.src = peli.cartel;
      divPeli.appendChild(img);
      const divInfo = document.createElement('div');
      divInfo.classList.add('info');
      const h3 = document.createElement('h3');
      h3.innerText = peli.titulo;
      divInfo.appendChild(h3);
      const divHoras = document.createElement('div');
      divHoras.classList.add('horas');
      peli.horas.forEach(hora => {
        const span = document.createElement('span');
        span.innerText = hora;
        divHoras.appendChild(span);
      });
      divInfo.appendChild(divHoras);
      const divGenero = document.createElement('p');
      divGenero.classList.add('genero');
      divGenero.innerText = peli.genero;
      divInfo.appendChild(divGenero);
      const divDuracion = document.createElement('p');
      divDuracion.classList.add('duracion');
      divDuracion.innerText = peli.duracion + ' ';
      const timeIcon = document.createElement('ion-icon');
      timeIcon.name = 'time-outline';
      divDuracion.appendChild(timeIcon);
      divInfo.appendChild(divDuracion);
      divPeli.appendChild(divInfo);
      pelis.appendChild(divPeli);
    });
  }

  cartelera.appendChild(pelis);
}