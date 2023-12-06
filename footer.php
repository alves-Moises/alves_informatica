<footer>
	<div class="container">
		<div class="row">

		
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Localização</h4>
				<p class="lead mb-0 pb-1">
					Rua General Osório, 424, apto 306
					<br />
					Centro, Itaperuna RJ
				</p>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0 text-center">
				<h4 class="text-uppercase mb-4">Contato</h4>
				<a 
					class="btn btn-outline-light btn-social mx-1 btn-wpp-footer" 
					href="https://wa.me/5522999668509?text=Olá,+encontrei+sua+empresa+pelo+seu+site!+Gostaria+de+fazer+um+orçamento+:)"
					target="_blank"
				>
					<i class="fab fa-whatsapp"></i>
				</a>
				
			</div>

			<!-- Footer About Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4">Sobre nós</h4>
				<p class="lead mb-0 pb-1">
					Somos uma empresa especializada em serviços de TI e desenvolvimento de software. 
					Nosso objetivo é oferecer soluções tecnológicas.
				</p>
			</div>
			
			<div class="col-lg-6 text-center text-lg-left">
				<p>&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-right">
				<p>Um desenvolvimento 
					<a href="<?php the_permalink("/") ?>" target="_blank" rel="noopener" title="Alves Informaticatem como">
						alves informática
					</a>
				</p>
			</div>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- <?php support_comments_facebook(); ?> -->
<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
