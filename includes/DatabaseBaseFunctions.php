<?php
function totalJokes($pdo){
    $sql = 'SELECT COUNT(*) FROM joke';
    $query = $pdo->query($sql);
    $row = $query->fetch();
    return $row[0];
}