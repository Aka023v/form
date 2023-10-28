<?php
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');

$pdo = new PDO(
    'mysql:dbname=contactform;host=mysql;charset=utf8',
    'root',
    'password'
);

$sql = 'INSERT INTO `contacts` (`email`, `content`) VALUES (:email, :content)';
$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->bindValue(':content', $content, PDO::PARAM_STR);
$statement->execute();
?>