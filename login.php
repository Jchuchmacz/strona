<?php
include"db-connection.php";
if(isset($_POST['login'], $_POST['haslo'])){
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];
    $login=stripcslashes($login);
    $haslo=stripcslashes($haslo);

    $sql="SELECT * FROM uzytkownicy where login = '$login' and haslo ='$haslo'";
    $result=mysqli_query($link, $sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    
    if($count==1){
        session_start();
        $_SESSION["name"]=$login;
        header("Location: wiadomosci.php");
    }
    else{
        echo "błędny login lub hasło";
    }
}
else{
    echo "nigger";
}
mysqli_close($link);




#<footer>
#<p>wyloguj się</p>
#    <a class="link" href="logout.php">wyloguj się</a>



?>