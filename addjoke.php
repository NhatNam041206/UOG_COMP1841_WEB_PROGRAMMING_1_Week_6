<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO joke SET
        joketext = :joketext, 
        jokedate = :jokedate,
        jokeimage = :jokeimage,
        authorid = :authorid,
        categoryid = :categoryid';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':jokedate', $_POST['jokedate']);
        $stmt->bindValue(':jokeimage', $_POST['jokeimage']);
        $stmt->bindValue(':authorid', $_POST['authorid']);
        $stmt->bindValue(':categoryid', $_POST['categoryid']);
        $stmt->execute();

        header('location: jokes.php');
        exit;
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    try {
        include 'includes/DatabaseConnection.php';

        $authors = $pdo->query('SELECT id, name FROM author ORDER BY name');
        $categories = $pdo->query('SELECT id, name FROM category ORDER BY name');

        $title = 'Add a new joke';
        ob_start();
        include 'templates/addjoke.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'templates/layout.html.php';
