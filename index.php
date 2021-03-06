<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Billard à Haguenau</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="CSS/style_nav.css">
</head>
<body>

	<!-- Navigation -->
	<nav>
		<ul class="nav-menu">
			<li class="nav-item"><a href="index.php?page=accueil">Accueil</a></li>
			<li class="nav-item">
				<a href="#">Comment jouer ?</a>
				<div class="sub-nav">
					<ul class="sub-nav-group">
						<li><a href="index.php?page=howtoplay_english">Billard anglais</a></li>
						<li><a href="index.php?page=howtoplay_american">Billard américain</a></li>
						<li><a href="index.php?page=howtoplay_french">Billard français</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item"><a href="index.php?page=tarifs">Tarifs</a></li>
			<li class="nav-item"><a href="index.php?page=contact">Contact</a></li>
		</ul>

		<div class="nav-search">
			<input type="search" id="nav-search-input" name="search" aria-label="Rechercher à travers le site" placeholder="Rechercher..">
			<button class="nav-search-btn">Search</button>
		</div>
	</nav>

	<?php
	$current_page = isset($_GET['page']) ? $_GET['page'] : null;

    switch ($current_page) {
        case ('tarifs'):
            include 'contents/tarifs.php';
            break;
        case ('contact'):
            include 'contents/contact.php';
            break;
        case ('howtoplay_american'):
            include 'contents/howtoplay_american.php';
			break;
		case ('howtoplay_french'):
			include 'contents/howtoplay_french.php';
			break;
		case ('howtoplay_english'):
			include 'contents/howtoplay_english.php';
			break;
        default:
            include 'contents/accueil.php';
    }
	?>

	<script src="app.js"></script>

	<!-- include jquery -->
	<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>

	<!-- include the jquery-accessibleMegaMenu plugin script -->
	<script src="js/jquery-accessibleMegaMenu.js"></script>

	<!-- initialize a selector as an accessibleMegaMenu -->
	<script>
		$("nav:first").accessibleMegaMenu({
			/* prefix for generated unique id attributes, which are required
			to indicate aria-owns, aria-controls and aria-labelledby */
			uuidPrefix: "accessible-megamenu",

			/* css class used to define the megamenu styling */
			menuClass: "nav-menu",

			/* css class for a top-level navigation item in the megamenu */
			topNavItemClass: "nav-item",

			/* css class for a megamenu panel */
			panelClass: "sub-nav",

			/* css class for a group of items within a megamenu panel */
			panelGroupClass: "sub-nav-group",

			/* css class for the hover state */
			hoverClass: "hover",

			/* css class for the focus state */
			focusClass: "focus",

			/* css class for the open state */
			openClass: "open"
		});
</script>
</body>
</html>