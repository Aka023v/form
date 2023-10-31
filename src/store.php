<?php
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');

$pdo = new PDO(
    'mysql:dbname=contact;host=mysql;charset=utf8',
    'root',
    'password'
);

$sql = 'INSERT INTO `form` (`email`, `content`) VALUES (:email, :content)';
$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->bindValue(':content', $content, PDO::PARAM_STR);
$statement->execute();

header("Location: ./index.php");
?>