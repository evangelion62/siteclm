<div class="container">
	<hr />
	<footer>		
		<div class="row" style="text-align:center">
			Réalisé par Ronger Sébastien avec <a href="http://twitter.github.com/bootstrap/index.html" target=_blank>BootStrap</a>, nous contacter <a data-toggle="modal" href="#nousContacter"> ici.</a>	
		</div>'
			
	</footer>
</div>

<div id="nousContacter" class="modal hide fade">
	<div class="modal-header">
	<a class="close" data-dismiss="modal" >&times;</a>
	<h3>Nous contacter</h3>
	


	</div>	
	<div class="modal-body">
	   	<form class="form-horizontal" method="POST" action="../include/contact.php">	        
		    <div class="control-group">
		    	<label>Nom</label>
		        <div class="controls">
		         	<input type="text" class="span3 form-inline" name="nom" placeholder="Votre nom">
		        </div>
		    </div>			  
			<div class="control-group">
		        <label>Prenom</label>
		        <div class="controls">
		             <input type="text" class="span3 form-inline" name="prenom" placeholder="Votre prenom">
		        </div>
		    </div>			  
		    <div class="control-group">
		        <label>Adresse Mail</label>
		        <div class="controls">
		             <input type="text" class="span3 form-inline" name="mail" placeholder="Votre mail">
		        </div>
		    </div>			  
		    <div class="control-group">
		        <label>Sujet</label>
		        <div class="controls">
		            <input type="text" class="span3 form-inline" name="sujet" placeholder="Votre sujet">
		        </div>
		    </div>			  
		    <div class="control-group">
		        <label>Votre contenu</label>
		        <div class="controls">
		            <textarea cols="25" rows="25" name="contenu" placeholder="Placer ici votre contenu de mail" style="width: 298px; height: 50px;"></textarea>
		        </div>
		        <input type="text" class="span3 form-inline" name="type" value="contact" style="display:none;">
		    </div>	          
			<div style="text-align:center;"><button type="submit" class="btn">Validation</button></div>
		</form>
	</div></div>


<script type="text/javascript">
	var konamicode = "71,79,79,71,76,69";
	var kkeys = [];
	$(window).keydown(function (e) {
	    kkeys.push(e.keyCode);
	    while (kkeys.length > konamicode.split(',').length) {
	        kkeys.shift();
	    }
	    if (kkeys.toString().indexOf(konamicode) >= 0) {
	    	window.location.replace("http://www.google.com");
	        kkeys = [];
	    }
	});
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39292803-1']);
  _gaq.push(['_setDomainName', '195.146.240.74.']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>

</body>
</html>
