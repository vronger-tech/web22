<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vízvezeték szerelés</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/bootstrap.css">
       <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
      
		
		<header class="container-fluid ">
		
	    <div class="row">
		
	    <div class="container">
		
		<div class="row">
		
		    <h1 class="col-sm-2">Csőtörés esetén
			
			
			</h1>
			
		    <nav  class="col-sm-10">
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
			
		</div>
		
		
	    </div>
	    </div>
	    
	
	
	
	 
	 <div class="container">
	  <div class="row">
	 <h2 class="col-sm-8" >
	 <?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?>
	 </h2>
	 </div>
	 </div>
	  

	</header> 	
		<div class="container-fluid ">
	<div class="row">
	    <div class="container main-image hidden-xs center-block">
		<div class="row" >
		    <div class="col-xs-12">
			<img src="img/cso.jpg" class="img-responsive center-block">
		    </div>
		    
		</div>
	    </div>
	    
	</div>
    
    </div>
		
		
		
		
        
        
 
		<div class="container">
	    <div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		    <div class="box">
			
			<?php if($viewData['render']) include($viewData['render']); ?>
			
			
		    </div>
		</div>
		<div class="col-sm-2"></div>
	    </div>
	</div>
	
		
		
		
       <footer class=" container-fluid">
	    <div class="row">
		<div class="container">
		    <div class="row">
			<h2>Vízvezeték szerelés - Készítette: Teréki Zalán, Seres Tamás	</h2>
		    </div>
		    </div>
	    </div>
	</footer>
		
    </body>
</html>
