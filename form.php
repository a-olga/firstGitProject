<?php session_start(); ?>

<form action="info.php?name=value" method="GET">
    <p> Your name: <br><input type="text" name = "name"></p>
    <p> Your password:<br><input type="password" name = "userPassword"></p>
    <p> Comment: <br>
    <textarea name="userComment" cols="22" rows="5"></textarea></p>
    <input type="submit" name = "submit" value = "Submit">
</form>


<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    setcookie('name', $_POST['name']);
    $_SESSION['user'] = ['name' => $_POST['name'], 
                        'password' => $_POST['userPassword'], 
                         'comment' => $_POST['userComment']];
} else {
    if (isset($_COOKIE['name'])) {
        print_r($_SESSION['user']);

    } 
}
