<?php
try{
    include 'includes/DatabaseConnection.php';
    $sql = 'SELECT id, joketext, jokedate, jokeimage FROM joke';
    $jokes = $pdo->query($sql);
    $title = 'Joke List';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database Error:' . $e->getMessage();
}
include 'templates/layout.html.php';