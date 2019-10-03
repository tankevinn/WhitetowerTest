<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">

			<?php 
			$social_media_list = get_field("social_media_list");
			if ($social_media_list): 
			?>

			<ul class="list-inline text-center">

			<?php 
			foreach ($social_media_list as $social_media):
				$social_media_class = "fab ";
				if ($social_media == "facebook"):
					$social_media_class .= "fa-" . $social_media . "-f";
				else:
					$social_media_class .= "fa-" . $social_media;
				endif;
				$social_media_class .= " fa-stack-1x fa-inverse";
			?>

				<li class="list-inline-item">
					<a href="#">
						<span class="fa-stack fa-lg">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="<?php echo $social_media_class?>"></i>
						</span>
					</a>
				</li>

			<?php endforeach; ?>
			</ul>
			<?php endif; ?>

			<p class="copyright text-muted">Copyright &copy; <?php echo get_field("copyright")?></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
