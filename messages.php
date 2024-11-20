<?php
include"db-connection.php"

if(isset($_POST['login'], $_POST['haslo'])){
    $username=$_POST['login'];
    $password=$_POST['haslo'];
    $username=stripcslashes($username);
    $password=stripcslashes($password);

    $sql="SELECT * FROM uzytkownicy where login= '$username' and haslo='$password'";
    $result=mysqli_query($link, $sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    
    if(count==1){
        $_SESSION["name"]=$username;
        echo "jesteś zalogowany";
    }else{
        echo "błędny login lub hasło";
    }
}
mysqli_close($link);



#<footer>
#<p>wyloguj się</p>
#    <a class="link" href="logout.php">wyloguj się</a>



?>