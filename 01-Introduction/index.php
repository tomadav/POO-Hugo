<?php

include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $UnArticle est un Objet de la classe Article.
* En ce sens, elle a accès à l'ensemble des propriétés et fonction qui la composent.
*/

$Auteur = new Auteur('DAVY', 'Thomas', 'tomadav@hotmail.com');

$UnArticle = new Article("La Formation WF3", "Une Formation Certifiante en 3 mois", "Rejoignez nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");

$UnArticle->SetAuteur($Auteur);

// -- Afficher l'objet Article
echo '<pre>';
print_r($UnArticle);
'</pre>';


$DeuxArticle = new Article("Des souris et des hommes", "Un film avec un drôle de titre", "Essayer de voir ce que c'est", "film.jpg", "04/08/2017");
$DeuxArticle->SetAuteur($Auteur);

$TroisArticle = new Article("Une Nuit en Enfer", "Un film drôle en fait", "A decouvrir absolument", "night.jpg", "04/08/2017");
$TroisArticle->SetAuteur($Auteur);

$QuatreArticle = new Article("Batman", "Une bonne trilogie à voir", "Seulement ceux de Ch Nolan", "bat.jpg", "04/08/2017");
$QuatreArticle->SetAuteur($Auteur);

echo '<pre>';
print_r($DeuxArticle);
'</pre>';

// -- je veux afficher le Titre de mon Premier Article
// echo $UnArticle->Titre;
# :  Uncaught Error: Cannot access private property Article::$Titre

echo $UnArticle->getTitre();
echo '<br />';
echo $UnArticle->getAccroche();
echo '<br />';
echo $UnArticle->getDescription();
echo '<br />';
echo $UnArticle->getFeaturedImage();
echo '<br />';
echo $UnArticle->getDateCreationArticle();


//** ici je vais modifier le titre de mon Article
echo '<br />';
$UnArticle->setTitre('La Formation WebForce 3');
echo $UnArticle->getTitre();

echo '<pre>';
print_r($UnArticle);
echo '</pre>';

//Création nouvel Auteur

$UnAuteur = new Auteur("DAVY", "Thomas", "tomadav@hotmail.com");

echo '<pre>';
print_r($UnAuteur);
'</pre>';

echo $UnAuteur->getNom();
echo '<br />';
echo $UnAuteur->getPrenom();
echo '<br />';
echo $UnAuteur->getEmail();

echo '<br />';
$UnAuteur->setPrenom('Pierre');
echo $UnAuteur->getPrenom();

//Création nouvelle categorie

$UneCategorie = new Categorie("Aventure");

echo '<pre>';
print_r($UneCategorie);
'</pre>';

echo $UneCategorie->getLibelle();
echo '<br />';

echo '<br />';
$UneCategorie->setLibelle('Action');
echo $UneCategorie->getLibelle();

//et encore une catégorie

$UneCategorie = new Categorie('Formation Info');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($DeuxArticle);
$UneCategorie->AjouterUnArticle($TroisArticle);
$UneCategorie->AjouterUnArticle($QuatreArticle);
#UneCategorie->AjouterUnArticle("Titre de mon article");

//afficher les articles d'une catégorie dans un tableau
echo '<pre>';
print_r($UneCategorie);
echo'</pre>';

echo '<ol>';
  echo '<li>';
    echo $UneCategorie->getLibelle();
  echo '</li>';
  echo '<ul>';
    $articles = $UneCategorie->getCollectionArticles();
    foreach ($articles as $article) :
      echo"<li>". $article->getTitre() ."-".
        $article->getAuteur()->getNomComplet() ."</li>";
    endforeach;
  echo'</ul>';
echo'</ol>';
