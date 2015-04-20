<section class="programacion Principal">
	<!-- Al hacer click sobre cada programa se despliega informacion completa -->
	<?php 
		//print_r($programa);
		foreach ($programa as $key ) { 
			$id 		= $key->ID;
			$programa 	= $key->Programa;
			$horario 	= $key->Horario;
			$imgProg 	= $key->img1;
			$imgLoc 	= $key->img2;
			$desc 		=  $key->Descripcion;
			?>
			<section class="MainProg hvr-glow" id = <?= "P".$id; ?> >
				<img class="progArt" src=<?=$imgProg?> alt="">
				<header class="Prog" >
					<div class="progDesc">
						<h2><?=$programa?></h3>
						<p><?=$horario?></p>
					</div>
				</header>
				<article class="oculto artProg">
					<img src=<?=$imgLoc?> alt="">
					<p><?=$desc?></p>
					<audio  controls>
					  <source src="audio/bano.ogg" type="audio/ogg">
					  <source src="audio/bano.mp3" type="audio/mpeg">
					Your browser does not support the audio element.
					</audio> 
				</article>
			</section>		
	<?php } ?>
</section>
<?php $this->load->view("aside.php") ?>