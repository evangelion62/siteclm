<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://www.collegelouisemichellille.fr"
				style="color: #5bc0de;">Collège Louise Michel Lille</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="?controler=index"><span
						class="glyphicon glyphicon-home"></span> Accueil</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><span
						class="glyphicon glyphicon-folder-close"></span> Espace Perso<span
						class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="http://84.14.30.198/pronote/parent.html" target="blanck">Parents</a></li>
						<li><a href="http://84.14.30.198/pronote/eleve.html" target="blanck">Elèves</a></li>
						<li><a href="http://84.14.30.198/pronote/professeur.html" target="blanck">Professeurs</a></li>
						<li><a href="http://84.14.30.198/pronote/entreprise.html" target="blanck">Entreprises</a></li>
						<li><a href="http://84.14.30.198/pronote/academie.html" target="blanck">Académie</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><span class="glyphicon glyphicon-th-large"></span>
						Vie du Collège<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="?controler=actu&action=allActu"><span class="glyphicon glyphicon-tags"></span> Actualité</a></li>
			<?php if (!empty($_SESSION['token'])){?>
						<li><a href="?controler=album&action=allAlbum">Collège en images</a></li>
						<li><a href="#">Les Projets</a></li>
			<?php }?>
						<li class="divider"></li>
						<li class="dropdown-header">Les blogs du collège</li>
						<li><a href="https://fablablouisemichel.wordpress.com/" target="blanck"><span class="glyphicon glyphicon-paperclip"></span> Le Fablab</a></li>
						<li><a href="http://bloggy-jazz.over-blog.com/" target="blanck"><span class="glyphicon glyphicon-paperclip"></span> Jazz Festival </a></li>
					</ul></li>
			<?php if (!empty($_SESSION['token'])){?>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span>
						admin zone<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="?controler=media">Médias</a></li>
						<li><a href="#">Les Blogs</a></li>
						<li><a href="#">Liens pied-de-page</a></li>
						<li class="divider"></li>
						<li><a href="?controler=user&action=listUser">Utilisateurs</a></li>
						<li><a href="#">Les Espace Perso</a></li>
					</ul></li>
			<?php }?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?php if (empty($_SESSION['token'])){?>
				<li><a href="?controler=user&action=connectUser"><span
						class="glyphicon glyphicon-user"></span> Connexion</a></li>
			<?php }else{?>
				<li><a href="?controler=user&action=disconnectUser"><span
						class="glyphicon glyphicon-user"></span> Déconnexion</a></li>
			<?php }?>
			</ul>
		</div>
	</div>
</div>