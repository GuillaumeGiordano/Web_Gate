		<!-- *********************************** SESSION ***********************************   -->
		<?php
		if (isset($_SESSION["user"])) {

		?>
			<div class="container">
				<ul id="gn-menu" class="gn-menu-main">

					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"><span>Menu</span></a>

						<nav class="gn-menu-wrapper" style="z-index: 0;">
							<div class="gn-scroller">
								<ul class="gn-menu">
									<!-- <li class="gn-search-item">
									<input placeholder="Recherche" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Recherche</span></a>
								</li> -->
									<li>
										<a class="gn-icon gn-icon-earth" href="/">Accueil</a>
									</li>

									<li>
										<a class="gn-icon gn-icon-archive" href="">Les Utilisateurs</a>
									</li>

									<!-- <li>
										<a class="gn-icon gn-icon-archive" href="batindex.php">Référence Patrimoine</a>
									</li> -->

									<!-- <li>
										<a class="gn-icon gn-icon-archive" href="dtindex.php">Demandes de Travaux</a>
										<ul class="gn-submenu">
											<li>
												<a class="gn-icon gn-icon-article" href="dtnew.php">Nouvelle Demande</a>
											</li>
										</ul>
									</li> -->

									<li>
										<a class="gn-icon gn-icon-photoshop" href="profiledite.php">Mon profil</a>
									</li>


									<!-- verification si je le droit d'aller dans les parametres -->
									<!-- ACCEE AU PARAMETRE -->
									<?php
									if ($_SESSION["user"]["droit"] == "Responsable") {
									?>
										<li>
											<a class="gn-icon gn-icon-cog" href="userindex.php">Utilisateurs</a>
										</li>
									<?php
									} else {
										// RIEN
									}
									?>

									<li>
										<a class="gn-icon gn-icon-help" href="aide.php">Aide</a>
									</li>
								</ul>
							</div><!-- /gn-scroller -->
						</nav>

					</li>

					<li>
						<a href="logout.php">Deconnexion</a>
					</li>

				</ul>

			</div><!-- /container -->

		<?php

		} else {
		?>
			<div class="container">
				<ul id="gn-menu" class="gn-menu-main">

					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"><span>Menu</span></a>

						<nav class="gn-menu-wrapper">
							<div class="gn-scroller">
								<ul class="gn-menu">
									<li>
										<a class="gn-icon gn-icon-earth" href="/">Accueil</a>
									</li>

									<li>
										<a class="gn-icon gn-icon-archive" href="user">Les Utilisateurs</a>
									</li>

									<!-- <li>
										<a class="gn-icon gn-icon-archive" href="batindex.php">Référence Patrimoine</a>
									</li> -->
									<!-- <li>
										<a class="gn-icon gn-icon-archive" href="dtindex.php">Demandes de Travaux</a>
									</li> -->
									<!-- <li>
										<a class="gn-icon gn-icon-cog" href="userindex.php">Utilisateurs</a>
									</li> -->
									<li>
										<a class="gn-icon gn-icon-help" href="">Aide</a>
									</li>
								</ul>
							</div><!-- /gn-scroller -->
						</nav>

					</li>

					<li>
						<a href="connexion.php">Connexion</a>
					</li>

				</ul>

			</div><!-- /container -->

		<?php
		}
		?>

		<script src="/js/classie.js"></script>
		<script src="/js/gnmenu.js"></script>
		<script>
			new gnMenu(document.getElementById('gn-menu'));
		</script>