
<form action="/pdoWork.php" method="POST">
    <p>Book title: <br><input type="text" name="title" required></p>
    <p>Publication year:<br><input type="number" name="publication_year" required></p>
    <input type="submit" name="submit" value="Add">
</form>

<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=aolga_base;charset=utf8', 
    'aolga_user', 
    '0R3LQTHt', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);

if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['publication_year'])){
    $pdo->query('
        INSERT INTO `books` (`title`, `publication_year`) 
        VALUE ("'.$_POST['title'].'", '.$_POST['publication_year'].')
    ');
   
    header("Location: /pdoWork.php");
}

$stmt = $pdo->query('SELECT `title`, `publication_year` FROM `books`');
echo '<hr> Books in the base: <br><br>';
foreach ($stmt->fetchAll() as $row) {
    echo $row['title'].', '.$row['publication_year'].'<br>';
}
