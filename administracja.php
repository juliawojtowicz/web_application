<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>ProjekcikGrochocika</title>
        <script src="code.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

        
    </head>
    <body>
    <?php

        session_start();

        if (!isset($_SESSION['zalogowanyAdmin'])) 
        {
            header('Location: stronalog.php');
            exit();
        }

        $link = mysqli_connect("mysql.agh.edu.pl:3306", "juliawo1", "pFj4SNa6NDWA6E4X", "juliawo1");
        $sql = "SELECT * FROM orders";
        $result = $link->query($sql);

        if (isset($_SESSION["blad"])) {
            echo $_SESSION["blad"];
            unset($_SESSION["blad"]);
        }

        printf("<table border=\"1\">"); printf("<tr><th>IMIE</th><th>NAZWISKO</th><th>EMAIL</th><th>NUMER</th><th>ULICA</th><th>NUMERDOMU</th><th>KOD</th><th>WOJEWODZTWO</th><th>MIASTO</th></tr>");

        while ($obj = mysqli_fetch_object($result))
       
        printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
        $obj->imie, $obj->nazwisko, $obj->email, $obj->numer, $obj->ulica, $obj->numerdomu, $obj->kod, $obj->wojewodztwo, $obj->miasto); printf("</table>");
        
        $result->free();
        $link->close();

    ?>
        <form action="wylogowanie.php" method="post">
            <input type="submit" value="Wyloguj się" name="wyloguj">
        </form>
    </body>
</html>



    