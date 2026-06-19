<?php
include 'includes/DatabaseConnection.php';
try{
    if(isset($_POST['joketext'])){
            // :joketext is placeholder, which dislay exactly what users typed in the boxtext.
            $sql = 'UPDATE joke SET
            joketext = :joketext,
            jokedate = :jokedate,
            jokeimage = :jokeimage,
            authorid = :authorid,
            categoryid = :categoryid
            WHERE id = :id';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':joketext', $_POST['joketext']);
            $stmt->bindValue(':jokedate', $_POST['jokedate']);
            $stmt->bindValue(':jokeimage', $_POST['jokeimage']);
            $stmt->bindValue(':authorid', $_POST['authorid']);
            $stmt->bindValue(':categoryid', $_POST['categoryid']);
            $stmt->bindValue(':id', $_POST['id']);
            $stmt->execute();

            header('location: jokes.php');
            exit;
        
    }else{
        $sql = 'SELECT * FROM joke WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $joke = $stmt->fetch();

        $authors = $pdo->query('SELECT id, name FROM author ORDER BY name');
        $categories = $pdo->query('SELECT id, name FROM category ORDER BY name');

        $title = 'Edit joke';
        ob_start();
        include 'templates/editjoke.html.php';
        $output = ob_get_clean();}
}
catch (PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';
