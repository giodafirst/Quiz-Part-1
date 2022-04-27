<?php
//var_dump($_FILES);
session_start();

if(isset($_FILES['photo'])){
if($_FILES['photo']['error']==0){
    if($_FILES['photo']['size']<300000 && $_FILES['photo']['type']=='image/png'){
$source = $_FILES['photo']['tmp_name'];
$destination = getcwd().'/images/quiz-logo.png';
if(move_uploaded_file($source,$destination)){
    echo "<p>Le fichier est valide et a été téléchargé avec succès</p>";
}else{
    echo "<p>Erreur lors du téléchargement</p>";
}
}else{
    echo "<p>Une erreur est survenue !</p>";
}
}
}
//var_dump($destination);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Projet Quiz</title>
</head>
<body id="body">
<header>
<div id="logo">
    <a href="#">
        <img src="images/quiz-logo.png" alt="logo quiz">
    </a>
    
</div>
<div id="titre">Projet Quiz</div>
</header>
<aside class="pub">Pub</aside>
<section id="section">
    <form action="traiter.php" method="post" name="frm">
        <label for="search">Recherche du quiz :</label>
        <input type="search" id="search" name="search" for="search">
        <button name="btSearch">Chercher</button>
    </form>
    <ul>
        <li id="liste">Quiz 1</li>
        <ul><img src="images/nyc.jpg" alt="nyc">
            <li id="info">New York</li>
            <li id="info">Serge Boniver</li>
            <li id="info">Nombre de questions 3</li>
        </ul>
        <li id="liste">Quiz 2</li>
        <ul><img src="images/tokyo.jpg" alt="tokyo">
            <li id="info">Tokyo</li>
            <li id="info">Serge Boniver</li>
            <li id="info">Nombre de questions 3</li>
        </ul>
        <li id="liste">Quiz 3</li>
        <ul><img src="images/sydney.jpg" alt="sydney">
            <li id="info">Sydney</li>
            <li id="info">Serge Boniver</li>
            <li id="info">Nombre de questions 3</li>
        </ul>
        
    </ul>
    <br>
    <br>
 <h2>Changer de logo</h2>
 <form enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="300000">

    <label>Photo</label><br>
     <input name="photo" type="file"><br>
    <br>
    <input type="submit" value="Modifier le logo">
</form>
</a>
</section>
<footer>
    <h2 class="footer">Copyright 2022.</h2>
    <a href="">
        <h2 class="footer">Conditions d'utilisation</h2>
    </a>
    
</footer>       
</body>
</html>