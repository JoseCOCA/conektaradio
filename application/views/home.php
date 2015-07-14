    <section class="Principal">
	    <aside class="bPat">
	    	<div id="topBan">
	    	<ul id="banner-slider">
	    		<li>
			    	<img src="images/banners/MiFarmacia.png" alt="">
	    		</li>
	    		<li>
			    	<a target="_blank" href="http://facebook.com/amarantoband"><img src="images/Banner_amaranto.jpg" alt=""></a>
	    		</li>
	    	</ul>
	    	</div>
	    </aside>
	    <section class="programacion">
	    	<div id="headProg"><img src="images/progsHead.png" alt=""></div>
	    	<div id="prog-cont">
	    		<div class="col-3"><img src="images/prog1.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog2.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog3.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog4.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog5.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog6.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog7.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog9.png" alt=""></div>
	    	</div>
	    </section>
	    <section class="noticias">
	    	<img src="images/noticias1.png" alt="">
	    	<div>
	    		<ul id="pikame" >

	    			<?php foreach ($nota as $key => $value): ?>
	    			<?php  
	    				$idNota = $value->id_nota;
	    				$nota = $value->nota;
	    				$imgPrincipal = $value->imagen_principal;
	    				$imagenes = $value->imagenes;
	    			?>

					<li id="<?= $idNota ?>" >
					<a href="#overlay"><img src="<?php echo $imgPrincipal; ?>"/><span>CONEKTARADIO PRESENTE ... </span></a>
					</li>

	    			<?php endforeach; ?>
					<li><a  href="#overlay"><img src="images/nota1_foto2.jpg"/></a><span>CONEKTARADIO PRESENTE ... </span></li>
					<li><a  href="#overlay"><img src="images/nota1_foto5.jpg"/></a><span>CONEKTARADIO PRESENTE ... </span></li>
				</ul>
	    	</div>
	    	
	    </section>
	    <section class="videos">
	    	
	    		<img src="images/VideosHead.png" alt="" style="width:80%;">
	    	
	    	<div class="thumbVideos"><!-- LISTA DE VIDEOS  --></div>
	    </section>
	    <section class="musica">
		    <img id="musica-head" src="images/headMN.png" alt="">
	    	
	    	<?php 	foreach ($musicaNueva as $key => $value):?>
	    		<?php	
		    		$audio 			= $musicaNueva[$key]->url;
		    		$nombreCancion 	= $musicaNueva[$key]->cancion;
		    		$imagen 		= $musicaNueva[$key]->imagen;	    				
		    		$artista 		= $musicaNueva[$key]->artista;
		    		$posicion 		= $musicaNueva[$key]->posicion;
		    		$artRec			=  str_replace(' ', '', $artista);
	    		?>
	    		<?php if($posicion == 0): ?>
	    			<div class="musica-principal " data-audio = "<?= $audio ?>">
		    			<img id="img-princ" src="<?= $imagen ?>" alt="<?= $artista ?>">
		    			<div class="artista-princ">
		    				<h2 id="artista"><?= $artista; ?></h2>
		    				<h3 id="tema"><?= $nombreCancion; ?></h3>
		    			</div>
	    				<div class="oculto song" id="MN-audio-<?= $artista ?>">
	    					
	    				</div>
	    			</div>
	    		<?php else: ?>
			    	<div class="musica-principal clearfix  musica-otro ">
			    			<img id="img-otro" src="<?= $imagen ?>" alt="<?= $artRec ?>">
			    			<div>
				    			<h2 id="artista"><?= $artista; ?></h2>
				    			<h3 id="tema"><?= $nombreCancion; ?></h3>
			    			</div>
			    			<div class="oculto song" id="MN-audio-<?= $artRec ?>" data-audio = "<?= $audio ?>">
			    			
		    				</div>
	    			</div>	    	
	    		<?php endif; ?>
	    	<?php endforeach; ?>
	    </section>
	    <aside class="imgGalery">
	    	<a href=""><img src="images/banners/galerias.png" alt="" class="galery"></a>
	    </aside>
	</section>
