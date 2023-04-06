<?php
session_start();

//$user_imie = $POST['imie'];
$user_imie = filter_input(INPUT_POST, 'imie');
$user_nazwisko = filter_input(INPUT_POST, 'nazwisko');
$user_email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$user_numer = filter_input(INPUT_POST, 'numer', FILTER_VALIDATE_INT);
$user_ulica = filter_input(INPUT_POST, 'ulica');
$user_numerdomu = filter_input(INPUT_POST, 'numerdomu');
$user_kod = filter_input(INPUT_POST, 'kod');
//$user_wojewodztwo = filter_input(INPUT_POST, 'wojewodztwo');
$user_miasto = filter_input(INPUT_POST, 'miasto');

//$user_nazwa =  item.querySelector('.productName').innerHTML;
//$user_id = filter_input(INPUST_POST, 'id');
//$user_counts = filter_input(INPUT_POST,'counts');
//$user_price = item.querySelector('.priceValue').innerHTML;
//$user_basePrice = item.querySelector('.priceValue').innerHTML;

if(empty($user_imie)) {
    $_SESSION['imie_error'] = '<span style="color:red">Podaj imię</span>';
}
else {
    if(ctype_space($user_imie)) {
        
        $_SESSION['imie_error'] = '<span style="color:red">Nieprawidłowe imię</span>';
    }
    else {
        $_SESSION['imie'] = $user_imie;
        
    }
}

if(empty($user_nazwisko)) {
    $_SESSION['nazwisko_error'] = '<span style="color:red">Podaj nazwisko</span>';
}
else {
    if(ctype_space($user_nazwisko)) {
        $_SESSION['nazwisko_error'] = '<span style="color:red">Nieprawidłowe nazwisko</span>';
    }
    else {
        $_SESSION['nazwisko'] = $user_nazwisko;
    }
}

if(empty($user_email)) {
    $_SESSION['email_error'] = '<span style="color:red">Podaj email</span>';
}
else {
    if(ctype_space($user_email)) {
        $_SESSION['email_error'] = '<span style="color:red">Nieprawidłowy email</span>';
    }
    else {
        $_SESSION['email'] = $user_email;
    }
}

if(empty($user_numer)) {
    $_SESSION['numer_error'] = '<span style="color:red">Podaj numer</span>';
}
else {
    if(ctype_space($user_numer)) {
        $_SESSION['numer_error'] = '<span style="color:red">Nieprawidłowy numer</span>';
    }
    else {
        $_SESSION['numer'] = $user_numer;
    }
}

if(empty($user_ulica)) {
    $_SESSION['ulica_error'] = '<span style="color:red">Podaj ulicę</span>';
}
else {
    if(ctype_space($user_ulica)) {
        $_SESSION['ulica_error'] = '<span style="color:red">Nieprawidłowa ulica</span>';
    }
    else {
        $_SESSION['ulica'] = $user_ulica;
    }
}

if(empty($user_numerdomu)) {
    $_SESSION['numerdomu_error'] = '<span style="color:red">Podaj numer domu/mieszkania</span>';
}
else {
    if(ctype_space($user_numerdomu)) {
        $_SESSION['numerdomu_error'] = '<span style="color:red">Nieprawidłowy numer</span>';
    }
    else {
        $_SESSION['numerdomu'] = $user_numerdomu;
    }
}

if(empty($user_kod)) {
    $_SESSION['kod_error'] = '<span style="color:red">Podaj kod</span>';
}
else {
    if(ctype_space($user_kod)) {
        $_SESSION['kod_error'] = '<span style="color:red">Nieprawidłowy kod</span>';
    }
    else {
        $_SESSION['kod'] = $user_kod;
    }
}


if(empty($user_miasto)) {
    $_SESSION['miasto_error'] = '<span style="color:red">Podaj miasto</span>';
}
else {
    if(ctype_space($user_miasto)) {
        $_SESSION['miasto_error'] = '<span style="color:red">Nieprawidłowe miasto</span>';
    }
    else {
        $_SESSION['miasto'] = $user_miasto;
    }
}

if(empty($_SESSION['imie_error']) && empty($_SESSION['nazwisko_error']) && empty($_SESSION['email_error']) && empty($_SESSION['numer_error']) && empty($_SESSION['ulica_error']) && empty($_SESSION['numerdomu_error']) && empty($_SESSION['kod_error'])  && empty($_SESSION['miasto_error']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email']) && isset($_POST['numer']) && isset($_POST['ulica']) && isset($_POST['numerdomu']) && isset($_POST['kod']) && isset($_POST['miasto'])) {
    
    $link = mysqli_connect("mysql.agh.edu.pl:3306", "juliawo1", "pFj4SNa6NDWA6E4X", "juliawo1");

    $sql = "INSERT INTO orders(imie,nazwisko,email,numer,ulica,numerdomu,kod,miasto) VALUES(?,?,?,?,?,?,?,?)";
    //$sql1= "INSERT INTO products(nazwa,id,counts,price,basePrice) VALUES(?,?,?,?,?)";

    $stmt = $link->prepare($sql);
    //$stmt1 = $link->prepare($sql1);

    $stmt->bind_param("ssssssss", $_POST['imie'], $_POST['nazwisko'], $_POST['email'], $_POST['numer'], $_POST['ulica'], $_POST['numerdomu'], $_POST['kod'], $_POST['miasto']);
    //$stmt1->bind_param("ssss", $_POST['imie'], $_POST['nazwisko'], $_POST['email'], $_POST['numer'], $_POST['ulica'], $_POST['numerdomu'], $_POST['kod'], $_POST['wojewodztwo'], $_POST['miasto']);
    //$stmt1->bind_param("sss", $_POST[''])
    $result = $stmt->execute();
    if (!$result) {
        printf("Query failed: %s\n", mysqli_error($link));
    }
    $stmt->close();
    //$_SESSION['blad'] = '<span style="color:red">Dziekujemy za zgloszenie!</span>';
    
    header("Location: podsumowanie.php");
}
else {
   
    header("Location: formpage.php");
}

?>
