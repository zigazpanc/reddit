<!doctype html>
<?php include('addsubreddit.php') ?>
<html>
<head>
<meta charset="utf-8">
<title>Reddit page</title>
	<link href='' rel='stylesheet'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<script src="https://kit.fontawesome.com/67753fd32b.js" crossorigin="anonymous"></script>
	
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
			<a href=""><button class="search"><img src="slike/src.png" id="srcb"></button><input type="text"></a>
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
              <a href="user.php">My profile</a>
            </li>
            <li>
              <a href="user_settings.php">User settings</a>
            </li>
			   <li>
              <a href="logout.php">Log out</a>
            </li>
          </ul>
        </li>
    </nav>
  </div>
</section>
 			
	  <div class="dodajanje">
	  	<form name="newsub" action="new_subreddit.php" method="post">
		  	<div class="dodajanj">Sub-reddit name:&nbsp;<input type="text" class="dodajanje_input" name="ime">
			<p>
  		</div>  
			<div class="dodajanj">Description: &nbsp; <input type="text" class="dodajanje_input" name="opis">
		</div>
			<div class="dodajanj">
			<button type="submit" class="dodaj" name="addsub">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</button>
			</div>
				</form>
	  </div>
	  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script  src="function.js"></script>
	</body>
</html>