<?php

/*Accessible à ?controler=user&action=projetetab*/

ob_start();?>
<h1>PROJET D'ETABLISSEMENT COLLEGE LOUISE MICHEL</h1>

<h2>Objectif 1 : Promouvoir l'excellence</h2>

<h3>1.1 Promouvoir l'excellence :</h3>
<ul>
	<li>Par une offre de parcours et d'options spécifiques;</li>
	<li>Par la mise en place de partenariats d'excellence;</li>
	<li>Par la recherche de l'excellence pour tous.</li>
</ul>

<h3>1.2 Renforcer l'éducation culturelle et artistique :</h3>
<ul>
	<li>En développant les rencontres avec les oeuvres, les personnalités et institutions culturelles et leur exploitation en classe;</li>
	<li>En développant, sur ce thème, le travail interdisciplinaire et le trvail de recherche autonome pour les élèves.</li>
	<li><i>L'éducation est à prendre au sens large, elle inclut notamment l'éducation scientifique.</i></li>
</ul>

<h2>Objectif 2 : Mener parallèlement une politique pédagogique qui prend en compte les difficultés spécifiques du secteur</h2>

<h3>2.1 Développer l'ambition de la réussite scolaire et en donner les clés :</h3>
<ul>
	<li>En donnant les moyens aux élèves d'accéder à une maîtise suffisante de leur pensée et de leur langage, oral et écrit;</li>
	<li>En donnant les moyens aux élèves d'acquérir les comportements requis pour apprendre en situation scolaire;</li>
	<li>En favorisant l'autonomie et la responsabilité.</li>
</ul>
<h3>Prévenir et combattre le décrochage scolaire</h3>
<ul>
	<li>En luttant contre l'absentéisme;</li>
	<li>En mettant en place et coordonnant des aides individualisées;</li>
	<li>En mettant en place, si nécessaire, des dispositifs spécifiques.</li>
</ul>
<h3>Développer les relations avec les familles</h3>

<h2>Objectif 3 : Développer et valoriser une politique de Réseau commune, cohérente et ambitieuse pour nos élèves.</h2>

<h3>Rechercher la continuité de l'enseignement et des méthodologies</h3>
<ul>
	<li>En favorisant les rencontres inter degrés;</li>
	<li>En mutualisant les ressources</li>
</ul>
<h3>Mener une politique de valorisation des élèves et des actions.</h3>
<ul>
	<li>En médiatisant toutes les résussites</li>
	<li>En ayant une politique de communication de réseau et interne au réseau</li>
<ul>
<h5>Adopté lors du conseil d'administration du 1er juillet 2010.</h5>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>