<?php foreach ($noticia as $key => $value) {
	$nota 		= $value->nota;
	$imagenes 	= json_decode($value->imagenes);
} ?>
<section class="nota-sect">
	<ul id="nota-slider">
		<?php foreach ($imagenes as $key => $value) :?>
			<?php $srcImg = $value->src; ?>
			<li>
				<a href="#"><img src="<?php echo $srcImg; ?>"/></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<article class="nota-article">
	<?php echo $nota; ?>
	</article>
</section>