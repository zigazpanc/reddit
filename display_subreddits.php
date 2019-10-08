<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reddit page</title>
	<?php include('links.php'); ?>
</head>

<body>
	 
 <?php include('header.php'); ?>
 			
	  <?php include('subredditsdisplay.php'); ?>
	<table class="tabela">
	<tr>
		<th>Subreddit</th>
		<th>Moderator</th>
	</tr>
	  <?php foreach ($subreddits as $subreddit): ?>
   	<tr>
		<td><a href="post_display.php?id=<?php echo($subreddit['id']) ?>"><?php echo($subreddit['kategorija']);?></a></td>
		<td><?php echo($subreddit['nickname'])?></td>
	</tr>
		 <?php endforeach ?>
	</table>
	</body>
</html>