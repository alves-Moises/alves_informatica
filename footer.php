<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-left">
				<p>&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-right">
				<p>Um desenvolvimento <a href="https://imadeveloper.com.br/" target="_blank" rel="noopener" title="IMADEVELOPER">
						<img
							src="<?= THEMEROOT ?>/assets/img/logo/LOGO-BLACK.png"
							alt="Comet" height="28">
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php support_comments_facebook(); ?>

</body>

</html>
