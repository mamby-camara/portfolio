

<?php 
include_once('navbar.php');

// Je dois insérer mon menu
//$page = ;



switch ($_GET['page']) {
	case 'accueil':
		include_once('pages/accueil.php');
		break;

	case 'realisations':
		echo "realisations";
		include_once('pages/realisations.php');
		break;

	case 'contact':
		echo "realisations";
		include_once('pages/contact.php');
		break;

	default:
		include_once('pages/accueil.php');
		break;
}

include_once('footer.php');



?>

