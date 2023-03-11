<footer>
	<div class="container">
		<div class="row">

		
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">
					2215 John Daniel Drive
					<br />
					Clark, MO 65243
				</p>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
				<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
			</div>
			<!-- Footer About Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">
					Freelance is a free to use, MIT licensed Bootstrap theme created by
					<a href="http://startbootstrap.com">Start Bootstrap</a>
					.
				</p>
			</div>
			
			<div class="col-lg-6 text-center text-lg-left">
				<p>&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-right">
				<p>Um desenvolvimento <a href="https://imadeveloper.com.br/" target="_blank" rel="noopener" title="IMADEVELOPER">
						<img
							src="<?= THEMEROOT ?>/assets/img/logo/LOGO-BLACK.png"
							alt="Comet" height="28"
						>
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php support_comments_facebook(); ?>
<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
        <!-- <script src="<?= THEMEROOT ?>/assets/js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
