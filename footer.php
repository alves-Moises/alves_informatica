<footer>
	<div class="container">
		<div class="row">

		
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0 adress-footer">
				<h4 class="text-uppercase mb-4 text-right footer-title">Localização</h4>
				<p class="lead mb-0 pb-1 text-right">
					Itaperuna RJ
				</p>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0 text-center contact-footer">
				<h4 class="text-uppercase mb-4 footer-title">Contato</h4>

				<a 
					class="btn btn-outline-light btn-social mx-1 btn-wpp-footer" 
					href="https://wa.me/5522999668509?text=Olá,+encontrei+sua+empresa+pelo+seu+site!+Gostaria+de+fazer+um+orçamento+:)"
					target="_blank"
				>
					<i class="fab fa-whatsapp"></i>
				</a>

				<a 
					class="btn btn-outline-light btn-social mx-1 btn-lkn-footer" 
					href="https://www.linkedin.com/in/moises-alves-b1272a204/"
					target="_blank"
				>
					<i class="fa-brands fa-linkedin"></i>
				</a>

				<a 
					class="btn btn-outline-light btn-social mx-1 btn-gtb-footer" 
					href="https://github.com/alves-Moises"
					target="_blank"
				>
					<i class="fa-brands fa-github"></i>
				</a>
				
			</div>

			<!-- Footer links Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4 footer-title" id="about-title">Serviços</h4>
				<p class="lead mb-0 pb-1 text-justify">
					<a href="<?php esc_url(home_url("/dev-services")); ?>">Desenvolvimento</a>
				</p>
			</div>
			
			<div class="col-lg-6 text-center text-lg-left">
				<p class="text-center" id="l-copyright">&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-right">
				<p id="r-copyright">Um desenvolvimento 
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
