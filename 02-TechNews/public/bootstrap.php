<?php

# Affichage des erreurs en DEV = 1, en PROD = 0
ini_set('display_errors', 1);


# Racine du Site Internet
# Necessite php 7 et +
# http://php.net/manual/fr/function.dirname.php

define('RACINE_SITE', dirname(__FILE__, 2));

# Chemin relatif vers le dossier Public
define ('PUBLIC_URL', '/POO-Hugo/02-TechNews/public');

# en tête du Site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

# pied de page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

# les vues
define('VIEW_SITE', RACINE_SITE.'/Application/Views');

#Autoloader
require_once 'Autoloader.php';
Autoloader::register();
