<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PHP Practice </title>

<link rel="stylesheet" href="style.css" />

</head>


<body>
<div class="flex-container">
<div class="header">
<?php include 'logo.php' ?>
<?php include 'menu.php' ?>
</div>
<div class="about_me">
<h1><?php  echo $p  ?> </h1>

<div class="data">
<div class="myImg">
<?php  echo '<img src="/img/php.jpg">'; ?>
</div>


<div class="fullname">

<p> My name is  <?php echo $name, ' ', $surname . '<br>';
echo 'town', ' ', $town; ?>
</p><p> I am
  <?php  echo $years;   ?>   years old </p>


<p> Variables </p>
</div>
</div>

<div class="knowledge">
<?php  include 'knowledge.php'; ?>
<?php   echo $a, ' ', $b, ' ', $c; ?> <br><?php
 $a = 1;
$b = 2;
$c = $a + $b; echo $c;?> <br><?php echo $d;
?></div>

<div class="article">
<p class="text">
 Test text test text
</p>
</div>
</div>


<?php include 'footer.php' ?>

</div>



</body>

</html>
