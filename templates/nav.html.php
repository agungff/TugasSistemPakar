<?php include_once __DIR__.'/../includes/constant.php'; ?>
<nav class="navbar navbar-inverse">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
	    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    			<span class="icon-bar"></span>
	    			<span class="icon-bar"></span>
	    			<span class="icon-bar"></span>
	    		</button>
	    		<a class="navbar-brand" href="/">Sistem Pakar</a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav">
		    	  	<li class="active"><a href="/">Home</a></li>
		    	  	<?php if(isset($_SESSION['id'])): ?>
		    	  		
		    	  	<?php endif ?>
		    	  	<li><a href="/penyakit.php">Penyakit</a></li>
		    	  	<li><a href="/gejala.php">Gejala</a></li>
		    	  	<li><a href="/pencegahan.php">Pencegahan</a></li>
		    	  	<li><a href="/about.php">About</a></li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right">
		    		<?php if(isset($_SESSION['id'])): ?>
		    			<li class="dropdown">
			    	    	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $_SESSION['nama'] ?>
			    	    	<span class="caret"></span></a>
			    	    	<ul class="dropdown-menu">
			    	      		<li><a href="/logout.php">Keluar</a></li>
			    	    	</ul>
			    	  	</li>
		    		<?php else: ?>
			    	  	<!-- <li><a href="/signup.php">Daftar</a></li> -->
			    	  	<li><a href="/login.php">Masuk</a></li>
		    		<?php endif ?>
		    	</ul>
	    	</div>
	  	</div>
	</nav>
