<?php
//Déclaration d'un tableau multidimensionnel
$listeDesQuiz = [
    'Quiz 1' => [
        'Titre' => 'New York',
        'Illustration' => '<img src="images/nyc.jpg" border="0">',
        'Auteur' => 'Serge Boniver',
        'Questions' => [
            'Question 1' => 'Quels sont les noms des 5 boroughs de New York ?',
            'Question 2' => 'Comment s\'appelait New York avant ?',
            'Question 3' => 'Qui a créé la structure de la Statue de la Liberté ?',
        ],

    ],
    'Quiz 2' => [
        'Titre' => 'Tokyo',
        'Illustration' => '<img src="images/tokyo.jpg" border="0">',
        'Auteur' => 'Serge Boniver',
        'Questions' => [
            'Question 1' => 'Dans quel quartier se trouve l\'Hôtel de ville de Tokyo ?',
            'Question 2' => 'Quel est le nom du quartier avec le passage piétons le plus célèbre au monde ?',
            'Question 3' => 'Quel est le nom du chien qui se trouve devant la gare de Shinjuku ?',
        ],
    ],
    'Quiz 3' => [
        'Titre' => 'Sydney',
        'Illustration' => '<img src="images/sydney.jpg" border="0">',
        'Auteur' => 'Serge Boniver',
        'Questions' => [
            'Question 1' => 'Dans quelle région de l\'Australie se trouve Sydney ?',
            'Question 2' => 'Comment s\'appele le nom du pont en face de l\'Opéra de Sydney ?',
            'Question 3' => 'Quel film célèbre a été tourné à Sydney ?',
        ],
    ]
];
//echo '<pre>', var_dump ($listeDesQuiz),'</pre>';
//Récupération des données du champs du formulaire
$search = '';
$message ='Valeur invalide. Veuillez choisir entre Quiz 1, Quiz 2 ou Quiz 3 !!!';

if(isset($_POST['search'])) {
       $search = $_POST['search']; 
}
//var_dump ($_POST);

if($_POST['search']=='' || $_POST['search']!='Quiz 1' && $_POST['search']!='Quiz 2'&& $_POST['search']!='Quiz 3'){
    echo $message;
}
//Utilisation des données pour affichage du Quiz sélectionné
if($_POST['search']=='Quiz 1'){
    foreach ($listeDesQuiz['Quiz 1'] as $key => $value){ 
        echo "<p>".$key." : ".$value."</p>";
        foreach ($value as $k => $v){
            echo "$k : $v <br>";
         }
    }  
 }
//var_dump($value);
//var_dump($listeDesQuiz['Quiz 1']);

if($_POST['search']=='Quiz 2'){
    foreach ($listeDesQuiz['Quiz 2'] as $key => $value){ 
        echo "{$key} : {$value}.<br>";
        foreach ($value as $k => $v){
            echo $k. ' : '.$v. '<br>';
         }
    }  
 }
//var_dump($listeDesQuiz['Quiz 2']);


if($_POST['search']=='Quiz 3'){
    foreach ($listeDesQuiz['Quiz 3'] as $key => $value){ 
        echo "{$key} : {$value}.<br>";
        foreach ($value as $k => $v){
            echo $k. ' : '.$v. '<br>';
         }
    }  
 }
//var_dump($listeDesQuiz['Quiz 3']);

/*foreach($utilisateurs as $nb => $infos){
    echo 'Utilisateur n°' .($nb + 1). ' :<br>';
    foreach ($infos as $c => $v){
        echo $c. ' : ' .$v. '<br>';
    }
    echo '<br>';*/

?>