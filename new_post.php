<!doctype html>
<?php include('addpost.php') ?>
<html>
<head>
<meta charset="utf-8">
<title>Reddit page</title>
	<link href='' rel='stylesheet'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<script src="https://kit.fontawesome.com/67753fd32b.js" crossorigin="anonymous"></script>
	<
</head>

<body>
	 
  <section class="nav-bar">
  <div class="nav-container">
    <div class="brand">
      <a href="home.php"><img src="slike/redditlogo.png"></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
       
        <li>
			<a ><button class="search"><img src="slike/src.png" id="srcb"></button><input type="text"></a>
        </li>
        
        <li>
          <a href="#">Home</a>
	    <ul class="nav-dropdown">
            <li>
              <a href="#">Popular</a>
            </li>
            <li>
              <a href="#">All</a>
            </li>
            <li>
              <a href="#">Original content</a>
            </li>
			</ul> 
		</li>
			
		<li>
          <a href="#">User</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#">My profile</a>
            </li>
            <li>
              <a href="#">User settings</a>
            </li>
			   <li>
              <a href="#">Log out</a>
            </li>
          </ul>
        </li>
    </nav>
  </div>
</section>
 			
	      <div class="dodajanje">
        <form action="dodajanje.php" method="post" class="dodaj">
  

       <div>Uporabnik: <?php echo $_SESSION['usern'];?> 
            
        <div class="dodajanje">Post name:&nbsp;<input type="text" class="dodajanje_input" name="ime">
			<p>
  		</div>  
            
        <div class="dodajanje">Post:&nbsp;
        <textarea name="besedilo" rows="15">Write description here..</textarea><br>   
        <button type="submit" name="dodajbesedilo" class="btn">Dodaj</button>  
            <p><br>
  		<a href="home.php">Back</a>
                
  	</p>
            <div class="error">
  			<?php foreach ($errors as $error) : ?>
  	 		 <p><?php echo $error ?></p>
  			<?php endforeach ?>
  			</div>
        </div>
        </form>
	  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script  src="function.js"></script>
	</body>
</html>