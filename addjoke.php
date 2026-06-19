<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';

        // :joketext is placeholder, which dislay exactly what users typed in the boxtext.
        $sql = 'INSERT INTO joke SET
        joketext = :joketext, 
        jokedate = CURDATE(),
        jokeimage = :jokeimage';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':jokeimage', $_POST['jokeimage']);
        $stmt->execute();

        header('location: jokes.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new joke';
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';