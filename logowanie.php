<?php session_start();


if (isset($_POST['zaloguj'])) {
    if (isset($_POST['login']) && isset($_POST['haslo']) && !empty($_POST['login']) && !empty($_POST['haslo'])) {
 
        $login = $_POST['login']; //variable that retrieves content from the input fied
        $haslo = hash('sha512', $_POST['haslo']); //password 
        
        $link = mysqli_connect("mysql.agh.edu.pl:3306", "juliawo1", "pFj4SNa6NDWA6E4X", "juliawo1");
        $sql1 = "SELECT * FROM  `users`  WHERE `login`='$login' and `haslo`='$haslo'";
        $result1 = mysqli_query($link,$sql1);
        $sql2 = "SELECT * FROM  `admini`  WHERE `login`='$login' and `haslo`='$haslo'";
        $result2 = mysqli_query($link,$sql2);

        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);

        if($row1['login'] == $login && $row1['haslo'] == $haslo ) {
            $_SESSION['zalogowany'] = 1;
            $_SESSION['login'] = $login;
            header("Location: formpage.php");  
        }
        else if($row2['login'] == $login && $row2['haslo'] == $haslo ) {
            $_SESSION['zalogowanyAdmin'] = 1;
            $_SESSION['login'] = $login;
            header("Location: administracja.php"); 

        }
        else{
            $_SESSION['blad'] = '<span style="color:red;margin:auto;text-align:center;position:relative;left:27%">Niepoprawny email lub hasło!</span>';
            header("Location: stronalog.php");
        }

}
else{
    header("Location: stronalog.php");
}
}
    
?>
