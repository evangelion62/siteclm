<!-- NAVBAR
================================================== -->
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
						<li><a href="#">Parents</a></li>
						<li><a href="#">Elèves</a></li>
						<li><a href="#">Personnels</a></li>
						<li><a href="#">Visiteurs</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><span class="glyphicon glyphicon-th-large"></span>
						Vie du Collège<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="?controler=actu&action=allActu">Actualité</a></li>
						<li><a href="?controler=album&action=allAlbum">Collège en images</a></li>
						<li><a href="#">Les Projets</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Les blogs du collège</li>
						<li><a href="#">Blog 1</a></li>
						<li><a href="#">Blog 2</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span>
						admin zone<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="?controler=media">Médias</a></li>
						<li class="divider"></li>
						<li><a href="?controler=user&action=listUser">Utilisateurs</a></li>
					</ul></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?controler=user&action=connectUser"><span
						class="glyphicon glyphicon-user"></span> Connexion</a></li>
			</ul>
		</div>
	</div>
</div>