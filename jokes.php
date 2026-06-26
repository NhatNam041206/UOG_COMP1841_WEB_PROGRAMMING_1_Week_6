<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseBaseFunctions.php';
    $sql = '
        SELECT joke.id, joketext, jokedate, jokeimage, author.name AS author_name, email, category.name AS category_name 
        FROM joke 
        INNER JOIN author ON joke.authorid = author.id 
        INNER JOIN category ON joke.categoryid = category.id
        ORDER BY jokedate DESC;
    ';
    $jokes = $pdo->query($sql);
    $title = 'Joke List';
    $totalJokes = totalJokes($pdo);
    
    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database Error:' . $e->getMessage();
}
include 'templates/layout.html.php';