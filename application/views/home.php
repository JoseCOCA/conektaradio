    <section class="Principal">
	    <aside class="bPat">
	    	<div id="topBan"><img src="images/banners/MiFarmacia.png" alt=""></div>
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
	    		<div class="col-3"><img src="images/prog8.png" alt=""></div>
	    		<div class="col-3"><img src="images/prog9.png" alt=""></div>
	    	</div>
	    </section>
	    <section class="noticias">
	    	<img src="images/noticias1.png" alt="">
	    	<div>
	    		<ul id="pikame" >
					<li><a href="#"><img src="images/1.jpg"/></a></li>
					<li><a href="#"><img src="images/2.jpg"/></a></li>
					<li><a href="#"><img src="images/3.jpg"/></a></li>
				</ul>
	    	</div>
	    	
	    </section>
	    <section class="videos">
	    	
	    		<img src="images/VideosHead.png" alt="">
	    	
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
	    		?>
	    		<?php if($posicion == 0): ?>
	    			<div class="musica-principal " >
		    			<img id="img-princ" src="<?= $imagen ?>" alt="<?= $artista ?>">
		    			<div class="artista-princ">
		    				<h2 id="artista"><?= $artista; ?></h2>
		    				<h3 id="tema"><?= $nombreCancion; ?></h3>
		    			</div>
	    				<div class="oculto song" id="MN-audio-<?= $artista ?>">
	    					<audio controls preload>
	    						<!-- <source src="horse.ogg" type="audio/ogg"> -->
								<source src="<?= $audio ?>" type="audio/mpeg">
									Your browser does not support the audio tag.
	    					</audio>
	    				</div>
	    			</div>
	    		<?php else: ?>
			    	<div class="musica-principal clearfix  musica-otro ">
			    			<img id="img-otro" src="<?= $imagen ?>" alt="<?= $artista ?>">
			    			<div>
				    			<h2 id="artista"><?= $artista; ?></h2>
				    			<h3 id="tema"><?= $nombreCancion; ?></h3>
			    			</div>
			    			<div class="oculto song" id="MN-audio-<?= $artista ?>">
		    					<audio id ="player-mn" controls preload>
		    						<!-- <source src="horse.ogg" type="audio/ogg"> -->
									<source src="<?= $audio ?>" type="audio/mpeg">
  									Your browser does not support the audio tag.
		    					</audio>
		    				</div>
	    			</div>	    	
	    		<?php endif; ?>
	    	<?php endforeach; ?>
	    </section>
	    <aside class="imgGalery">
	    	<a href=""><img src="images/banners/galerias.png" alt="" class="galery"></a>
	    </aside>
	</section>
