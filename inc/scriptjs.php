<script> 

	function whenClicked(e) {
		$('#form_borrar').prop('disabled', false);

		$('#tabinfo_contenido').html('');
		sidebar.open('tabinfo');
		
		var propiedades = e.target.feature.properties;
		latlon = '';
		latlon_bsas = '';
		direccion = '';

		for (var key in propiedades) 
		{

			if (propiedades.hasOwnProperty(key)) 
			{
			
				if (key == 'nro' ) {
					$('#tabinfo_contenido').append('<span style="font-weight: bold; font-size:20px;">Escuela N° ' + propiedades[key] + '</span>');
				}
				 
				else if (key == 'de_nro') {
					$('#tabinfo_contenido').append('<span style="font-weight: bold; font-size:20px;"> de '+propiedades[key] + '</span><br>');
				}
				
				else if (key == 'long' ) {
					latlon += propiedades[key];
					
					latlon_bsas += 'lat='+propiedades[key];
				}

				else if ( key == 'lat' ) {
					console.log(propiedades[key]);
					latmodif = propiedades[key]; //-0.005;
					latlon += ', '+latmodif;
					latlon_bsas += '&lng='+propiedades[key];
				}				

				
				
				else if ( key == 'edad_min' ) {
					$('#tabinfo_contenido').append('<hr>');
				}

				else if (propiedades[key] == null) {
				}

				
				else if ( key == 'edad_4_iniciacion_musical' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Iniciación músical (4 años) <br>');
				}

				else if ( key == 'edad_5_iniciacion_musical' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Iniciación músical (5 años) <br>');
				}

				else if ( key == 'edad_6_iniciacion_musical' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Iniciación músical (6 años) <br>');
				}
				


				else if ( key == 'edad_7_14_arpa' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Arpa (7 / 14 años) <br>');
				}

				else if ( key == 'edad_7_14_bandoneon' ) {
				$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Bandoneón (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_clarinete' ) {
				$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Clarinete (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_contrabajo' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Contrabajo (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_flauta_dulce' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Flauta dulce (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_flauta_traversa' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Flauta traversa (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_guitarra' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Guitarra (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_autoctonos' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Instrumentos autóctonos (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_oboe' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Oboe (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_piano' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Piano (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_trompeta' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Trompeta (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_violin' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Violín (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_violoncello' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Violoncello (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_saxofon' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Saxofón (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_instrumentos_teclado' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Teclado (7 / 14 años) <br>');
				}
				
				else if ( key == 'edad_7_14_grupales_canto_coral' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Canto coral (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_grupales_conjunto_camara' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Conjunto de cámara (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_grupales_danzas_folkloricas' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Danzas folklóricas (7 / 14 años) <br>');
				}

				
				else if ( key == 'edad_7_14_grupales_expresion_corporal' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Expresión corporal (7 / 14 años) <br>');
				}

				else if ( key == 'edad_7_14_grupales_lenguaje_musical' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Lenguaje musical (7 / 14 años) <br>');
				}

				else if ( key == 'edad_7_14_grupales_ritmica_musical' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-ok"></span> Rítmica musical (7 / 14 años) <br>');
				}
				
				else if ( key == 'web' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-link"></span>  <a href="' + propiedades[key] + '" target="_blank">Web de la escuela</a><br>');
				}

				else if ( key == 'web_oficial' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-link"></span>  <a href="' + propiedades[key] + '" target="_blank">Web GCBA</a><br>');
				}
				
				else if ( key == 'telefono' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-earphone"></span>  ' + propiedades[key] + ' (15.30 / 19.30 hrs)<br>');
				}

				
				else if ( key == 'email' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-envelope"></span>  ' + propiedades[key] + '<br>');
				}

				
				else if ( key == 'direccion' ) {
					$('#tabinfo_contenido').append('<span class="glyphicon glyphicon-home"></span>  ' + propiedades[key] + '<br>');
					direccion = '&dir='+propiedades[key];
				}

				
				else {
					$('#tabinfo_contenido').append('<span style="font-weight: bold;">' + key + '</span>  : ' + propiedades[key] + '<br>');
				}
			
			}
			
		}
		$('#tabinfo_contenido').append('<p><button style="margin-top:5px;" class="btn btn-info padd" onclick="javascript: sidebar.close(\'tabhome\');map.setView(['+latlon+'],16);">Acercarse a la escuela</button></p>');

		$('#tabinfo_contenido').append('<p><a class="btn btn-info padd" href="https://mapa.buenosaires.gob.ar/informacion/?'+latlon_bsas+'&zl=16&modo=transporte'+direccion+'" target="_blank">Ver en Mapa Buenos Aires</a></p>');
		
	}

	

	function onEachFeature(feature, layer) {
		layer.on({
			click: whenClicked
		});
	}




	
	
$(document).ready(function() {
	
	
	/* map */	
	map = L.map('map', {
		center: [-34.614279029238546,-58.50138549804687],
		zoom: 12, zoomControl: false
	});
	
	L.control.zoom({
		 position:'topright'
	}).addTo(map);
	
	
	/* layer basemap */
	L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {        maxZoom: 18, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, &copy;        <a href="https://carto.com/attribution">CARTO</a>' }).addTo(map);

	

	/* sidebar */
	sidebar = L.control.sidebar('sidebar').addTo(map);	
	sidebar.open('tabhome');

  
   var redMarker = L.AwesomeMarkers.icon({
    icon: 'building',
    markerColor: 'cadetblue',
	prefix: 'fa'
  });
  
	/* layer escuelas geojson */
	$.getJSON('<?php echo $json_markers; ?>', function (geojson) {
	  layerEscuelas = L.geoJson(geojson, {
		
		onEachFeature: onEachFeature,

 pointToLayer: function(feature, latlng) {
    return L.marker(latlng, {icon: redMarker})
  }
		
	  }).addTo(map);
	});


	
	$('.selectpicker_edades').selectpicker({
	style: 'btn-default',
	header: 'Seleccione y cierre',
	title: 'Seleccione edades',
	size: 4
	});
	

	$('.selectpicker_instrumentos').selectpicker({
	style: 'btn-default',
	header: 'Seleccione y cierre',
	title: 'Seleccione instrumentos',	  
	size: 4
	});

$('#form_borrar').prop('disabled', true);
$('#form_submit').prop('disabled', true);
	
$('.selectpicker_edades').on('hidden.bs.select', function (e) {

	if ( $('.selectpicker_edades option:selected').length  > 0 || $('.selectpicker_instrumentos option:selected').length  > 0  )
	{
	$('#form_borrar').prop('disabled', false);
	$('#form_submit').prop('disabled', false);

	}


	else {
	$('#form_borrar').prop('disabled', true);
	$('#form_submit').prop('disabled', true);
		
	}

});
	
$('.selectpicker_instrumentos').on('hidden.bs.select', function (e) {

	if ( $('.selectpicker_edades option:selected').length  > 0 || $('.selectpicker_instrumentos option:selected').length  > 0  )
	{
	$('#form_borrar').prop('disabled', false);
	$('#form_submit').prop('disabled', false);

	}


	else {
	$('#form_borrar').prop('disabled', true);
	$('#form_submit').prop('disabled', true);
		
	}

});


	
	$('#form_borrar').on('click',function(e){
		$('#tabinfo_contenido').html('Haga click sobre una escuela para su información.');

		$('.selectpicker_edades').selectpicker('deselectAll');
		$('.selectpicker_instrumentos').selectpicker('deselectAll');
		$('#form_borrar').prop('disabled', true);
		$('#form_submit').prop('disabled', true);
		
		map.removeLayer(layerEscuelas);
		/* layer escuelas geojson */
		$.getJSON('<?php echo $json_markers; ?>', function (geojson) {
		  layerEscuelas = L.geoJson(geojson, {
			
			onEachFeature: onEachFeature,

 pointToLayer: function(feature, latlng) {
    return L.marker(latlng, {icon: redMarker})
  }
			
		  }).addTo(map);
		});
		map.setView([-34.614279029238546,-58.50138549804687],12);
	
	});
	
	
	
	
	$('#form_submit').on('click',function(e){ 
	e.preventDefault();
	sidebar.close('tabhome');
	map.setView([-34.614279029238546,-58.50138549804687],12);
	$('#tabinfo_contenido').html('Haga click sobre una escuela para su información.');

	if ( ( $('.selectpicker_edades option:selected').length + $('.selectpicker_instrumentos option:selected').length ) < 1 ) 
	{
		console.log('entra');
		

		
	} else {
	
	
	map.removeLayer(layerEscuelas);

	/* layer escuelas geojson */
	$.getJSON('<?php echo $json_markers; ?>', function (geojson) {
	  layerEscuelas = L.geoJson(geojson, {
		
		onEachFeature: onEachFeature,
		
		filter: function(feature, layer) {

			var edadesArray = $('.selectpicker_edades option:selected');
			var edadesLength = edadesArray.length;
			
			
			for (var i = 0; i < edadesLength; i++) {
				
				stringEdades = edadesArray[i].value;
				
				propiedadesFiltro = feature.properties;

				for (var key in propiedadesFiltro) 
				{

					if (propiedadesFiltro.hasOwnProperty(key)) 
					{
					
						if ( key.indexOf(stringEdades) !== -1 ) {
							
							if ( propiedadesFiltro[key] == 'si' ) {
								
								return true;
							}
							
						}
					
					}
					
				}				
				
				
				
			}


			var instrumentosArray = $('.selectpicker_instrumentos option:selected');
			var instrumentosLength = instrumentosArray.length;
			for (var i = 0; i < instrumentosLength; i++) {
				
				stringInstrumentos = instrumentosArray[i].value;
				
				propiedadesFiltro = feature.properties;

				for (var key in propiedadesFiltro) 
				{

					if (propiedadesFiltro.hasOwnProperty(key)) 
					{
					
						if ( key.indexOf(stringInstrumentos) !== -1 ) {
							
							if ( propiedadesFiltro[key] == 'si' ) {
								
								return true;
							}
							
						}
					
					}
					
				}
			
				
			}

		
		
		
		},
	

 pointToLayer: function(feature, latlng) {
    return L.marker(latlng, {icon: redMarker})
  }

		
	  }).addTo(map);
	});





	}	
	});
 
 
 

});
</script>
