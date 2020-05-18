====================================

Zerance Home Page

====================================

====================================

Pour lancer l’application il suffit d’uploader, sur un serveur apache local(type MAMP ou WAMP) ou distant, le repository téléchargé au nom de votre choix puis d’ouvrir la page index.php.


====================================


1-Header
Langage : css3,HTML5,jquery
Fonctionnement : le header est responsive en 4 points de cassure, pour une version desktop(1325px) et (800px), tablette(760px) et mobile(380px) 
Pour la version mobile la nav vient se positionner à la verticale avec un menu burger permettant d’accéder au lien. 
Difficultés : conserver une lecture claire du contenu, avec un logo en longueur notamment, choix volontaire de le conserver afin de respecter l’image de marque.
A améliorer : remplacement du logo du header par un svg pour éviter de charger une image trop lourde en mobile.

2-	Portfolio
Langage : php,css3,html5 
Fonctionnement : l’idée était de proposer une grille dynamique à l’aide d’un tableau php
Afin de renseigner les images du portfolio plus facilement et d’éviter la redondance du code ou un copier-coller, les images s’affichent en colonne. Pour rajouter une image il suffit de rajouter un élément dans le tableau image
Difficultés : pouvoir rentrer un nombre qui n’est pas un multiple de 3 comme image.
A améliorer : rajouter un paramètre inline ou bloc pour décider de l’alignement en colonne on en bloc d’image du portfolio 

3-	Slider
Langage : jquery,ccs3,htlm5
Fonctionnement : le slider utilise le système de grid. Les éléments initiaux du slider son dupliqués puis rajouter au dom, donnant l’illusion d’une boucle infinie
Difficultés : faire arriver l’image suivante dans le plan de l’image affichée.
A améliorer : détacher en jquery les éléments ne se retrouvant plus sur le plan visible de la fenêtre.

4-Footer infinite
Langage : css3
Fonctionnement : 
Difficultés : faire fonctionner l’animation sans faire exploser le responsive en version mobile.
A améliorer : faire défiler chaque élément du li séparément pour faire boucler le texte à l’infinie.

Temps développement du projet : > 1,5 journée  
