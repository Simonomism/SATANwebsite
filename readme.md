PLEASE, READ ME
_______________

Coucou Lucas, voici les différents points à traiter, si tu l'acceptes!


1- Menu

	Tu trouveras dans ../site/snippets/menu.php la structure du menu
	J'ai grossièrement ajouté un # dans le code suivant, avant le formule php. 

				      <a href="#<?= $item ?>" alt="<?= $item ?>" title="<?= $item ?>"><?= $item->title()->html() ?></a>

	Cela fonctionne sur index.php mais quand nous nous trouvons sur une fiche artiste, le menu ne trouve pas l'ancre (c'est très logique)
	Tu trouveras dans home.php la structure de la page d'index, dans laquelle sont appelés les différents snippets. 
	+
	Peut-on rediriger par exemple index.php/benevolat vers index.php? Afin de ne pas laisser l'accès à ces "pages fantômes"



2- Liste artiste

	Tu trouveras dans ..content/2-programme/ une somme de dossier correspondant à chaque artiste et qui sont appelé dans ../site/snippets/programme.php lui même appelé dans home.php

	A la marge du titre "Programme" tu trouveras les mentions "par jours", "par artistes" et "par scène". L'enjeu est de pouvoir choisir l'organisation des artistes en fonction de ces critères ("par artistes" = par ordre alphabétique). Dans le .txt de chaque dossier "artiste" sont précisés la date de passage et la scène concernée (en tous cas nous pouvons le préciser via le backoffice, mais je n'ai pas encore les données et nous les auront surement tard mais faisons "comme si")


3- Partenaires

	C'est très bête, mais je ne parviens pas à afficher les images contenues dans ../content/8-partenaires
	pourtant via le backoffice les images sont chargées grâce à la fonctionnalité "gallery" de kirby. 
	Voici la doc correspondante: https://getkirby.com/docs/cookbook/handling-images-in-kirby


4- Contact

	De la même façon, je ne parviens pas à afficher le formulaire de contact pourtant visible sur index.php/contact
	De plus je ne pense pas qu'il fonctionne


5- Fiche artiste

	a) Pour chaque artiste, j'ai ouvert la possibilité d'ajouter un lien vers bandcamp, soundcloud etc... Seulement le logo correspondant s'affiche systèmatiquement, et si le lien n'a pas était renseigné, il pointe vers index.php. Comment conditionner l'affiche des logos au fait que le lien ait été renseigné? 

	b) J'ai voulu ajouter une colonne de texte flottant à droite de l'image artiste mais je pense que j'ai fait ça n'importe comment, si tu as une solution plus saine je suis preneur. (pas primordial car cela fonctionne pourtant)

	c) Tu peux aussi voir que la page de déroule sur autant de hauteur que la div "pics" (../site/snippets/pics.php) qui contient les images en bordure du site à droite. Comment limiter la hauteur de la page à la quantité de contenu textuel? J'ai totalement conscience qu'il est un peu barbare d'avoir placé les images de cette façon dans le code mais je n'ai pas eu de meilleure idée.

	d) Ce qui serait magique c'est les fiches artistes s'affichent en mode "ajax" avec éventuellement une animation "balayage depuis la gauche" mais c'est quand même assez accessoire, c'est purement esthétique. 

6- Divers

	Les 5 premiers points sont de loin les plus importants, ils touchent aux fonctionnalités même du site.
	Néanmoins si tu as le temps de jeter un oeil aux points suivant:

		
		a) Le responsive est largement perfectible

		Je n'arrive pas à imposer une marge à gauche sur les téléphones, les titres deviennent rikiki, le header n'est pas tout a fait centré, d'ailleurs la taille du lettrage "visions" ne diminue pas au redimmensionnement de la fenêtre (gênant pour le format tablette qui globalement tient la route à ce détail prêt), je ne parviens pas à centrer correctement la div "réseaux sociaux"

		b) J'ai du mal à positionner correctement le footer

		c) J'aimerais mettre une sorte de "easter eggs" en lien sur les images en bordure à droite, mais le lien n'est pas actif. Je me demande si ce n'est pas une histoire de plan (z-index ou je ne sais quoi) mais je ne trouve pas la solution

		d) Et attention, l'effet JACKY, j'aimerais que le lettrage "VISIONS" réagisse en mode "stroboscope" au survol, j'ai tenté des choses à base keyframe, animation, fill: #fffff; sur le path svg etc mais sans succès