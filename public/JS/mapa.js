window.onload = () => {
		const logrono = {lat: 42.462720, lng: -2.444985};

		const map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 12,
		    center: logrono
		});

		const cines = [
		    {nombre: 'Yelmo Cines', ubicacion: {lat: 42.46282766404182, lng: -2.420358874311738}},
		    {nombre: 'Cines 7 Infantes', ubicacion: {lat: 42.45637171819895, lng: -2.4612750319817067}},
		    {nombre: 'Cines Las Cañas', ubicacion: {lat: 42.478103029201975, lng: -2.395314590285115}}
		];

		cines.forEach(function(cine) {
		    const marker = new google.maps.Marker({
		        position: cine.ubicacion,
		        map: map,
		        title: cine.nombre
		    });

		    const infowindow = new google.maps.InfoWindow({
		        content: cine.nombre
		    });

		    marker.addListener('click', function() {
		        infowindow.open(map, marker);
		    });
		});
}