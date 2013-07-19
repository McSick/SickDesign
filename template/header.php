<?php

echo '<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="brand" href="#">Sick Design</a>
          <div class="nav-collapse collapse">
            <ul class="nav">';
			
				$active = basename($_SERVER['PHP_SELF']);
			
				$homeA = "";
				$aboutA ="";
				$contactA="";
				$pricingA="";
				$examplesA="";
				switch($active)
				{
					case 'index.php':
						$homeA = ' class="active" ';
						break;
					case "about.php":
					
						$aboutA = ' class="active" ';
						break;
					case 'contact.php':
						$contactA = ' class="active" ';
						break;
					case 'pricing.php':
						$pricingA = ' class="active" ';
						break;
					case 'examples.php':
						$examplesA= ' class="active" ';
						break;
					default:
				}
				echo '
              <li  '.$homeA.'><a href="index.php" >Home</a></li>
              <li '.$aboutA.'><a href="about.php">About</a></li>
              <li'.$contactA.'><a href="contact.php" >Contact</a></li>
			  <li'.$pricingA.'><a href="pricing.php" >Pricing</a></li>
			   <li'.$examplesA.'><a href="examples.php" >Examples</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>';
	echo $active;


?>