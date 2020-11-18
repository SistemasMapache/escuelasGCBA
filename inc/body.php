<body>
    <div id="sidebar" class="sidebar collapsed">
        <!-- Nav tabs -->
        <div class="sidebar-tabs">
            <ul role="tablist">
                <li><a href="#tabhome" role="tab"><i class="fa fa-bars"></i></a></li>
                <li><a href="#tabinfo" role="tab"><i class="fa fa-info-circle"></i></a></li>
				
                
            </ul>

            <ul role="tablist">
                <li><a href="#tabcontacto" role="tab"><i class="fa fa-question-circle"></i></a></li>
            </ul>
			
        </div>

		
        <!-- Tab panes --> 
        <div class="sidebar-content">
		
		
		
		
		
		
		
		
		
		
            <div class="sidebar-pane" id="tabhome">
                <h1 class="sidebar-header"><?php echo $titulo; ?>
                <span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>

				
				
				<div class="padd">
				
					<p id="tabhome_contenido" style="text-align:justify;">
						<?php echo $texto_inicio; ?>
					</p>
					
					<hr>


					
					

					
					<form id="form_filtra">

						<div class="form-group">
							<label for="form_edades">Edades : </label>
							<select id="form_edades" class="selectpicker_edades pull-right" multiple>
							<option value="edad_4">4 años</option>
							<option value="edad_5">5 años</option>
							<option value="edad_6">6 años</option>
							<option value="edad_7_14">Entre 7 y 14 años</option>		
							</select>
						</div>
										
						<div class="form-group">
							<label for="form_instrumentos">Instrumentos : </label>
							<select id="form_instrumentos" class="selectpicker_instrumentos pull-right"  multiple data-actions-box="true">
							<option value="iniciacion_musical">Iniciación musical</option>
							<option value="arpa">Arpa</option>
							<option value="bandoneon">Bandoneón</option>
							<option value="clarinete">Clarinete</option>		
							<option value="contrabajo">Contrabajo</option>
							<option value="fagot">Fagot</option>
							<option value="flauta_dulce">Flauta dulce</option>
							<option value="flauta_traversa">Flauta traversa</option>	
							<option value="guitarra">Guitarra</option>
							<option value="instrumentos_autoctonos">Instrumentos autóctonos</option>
							<option value="instrumentos_oboe">Oboe</option>
							<option value="instrumentos_piano">Piano</option>	
							<option value="instrumentos_trompeta">Trompeta</option>
							<option value="instrumentos_violin">Violín</option>
							<option value="instrumentos_violoncello">Violoncello</option>
							<option value="instrumentos_saxofon">Saxofón</option>
							<option value="instrumentos_teclado">Teclado</option>
							<option value="grupales_canto_coral">Canto coral</option>
							<option value="grupales_conjunto_camara">Conjunto de cámara</option>
							<option value="grupales_danzas_folkloricas">Danzas folklóricas</option>
							<option value="grupales_expresion_corporal">Expresión corporal</option>
							<option value="grupales_lenguaje_musical">Lenguaje musical</option>
							<option value="grupales_ritmica_musical">Rítmica musical</option>
							
							</select>
						</div>
						
					
						
					  </form>
						<hr>
						<button id="form_submit" class="btn btn-info">Consultar</button>
						<button id="form_borrar" class="btn btn-warning pull-right">Limpiar filtros</button>
						

				</div>


			</div>
			
			
			
			
			
            <div class="sidebar-pane" id="tabinfo">
                <h1 class="sidebar-header">Datos de Escuela
				<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
				</h1>
				
				
				<div class="padd">

					<p id="tabinfo_contenido" >
					Haga clic sobre una escuela para más información.			
					</p>

				</div>
				
				
            </div>

			
			
            <div class="sidebar-pane" id="tabcontacto">
                <h1 class="sidebar-header">Sobre el mapa
				<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
				</h1>
				
				
				<div class="padd" style="text-align:justify;">
				
					<p id="tabcontacto_contenido">
					La idea del presente mapa surgió como iniciativa tras una reunión de padres y docentes de la escuela N°7 de 11 y tiene como objetivo ayudar a los vecinos de la Ciudad a buscar escuelas de música por intrumentos y edades. 
					<br>
					Se agradece a la directora de la escuela N°7 de 11, Rosa Chalkho, por suministrarnos el conjunto de datos.
					</p>
					<p>
					Mayor información: <a href="http://www.buenosaires.gob.ar/inscripcion-escolar/escuelas-de-musica" target="_blank">Web escuelas GCBA</a>
					</p>
					<p>
					Descargá el dataset <a href="json/escuelas_musica_gcba.geojson" target="_blank">GeoJSON</a>
					</p>					<hr>
					<p>
					Hecho con <i class="glyphicon glyphicon-heart" style="color:red;"></i>  por <a href="http://www.smapache.com.ar" target="_blank" >Sistemas Mapache</a>
					</p>
					
				</div>
				
            </div>
			
        </div>
    </div>

    <div id="map" class="sidebar-map"></div>

	
</body>
