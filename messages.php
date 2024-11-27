<?php
include"db-connection.php";
session_start();
if(isset($_SESSION["name"])){
    $sql="SELECT Id, Name, Surname, Message FROM text";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        echo "hello";
        while($row=mysqli_fetch_assoc($result)){
            echo "Id: ".$row["Id"]. "Imie: ".$row["Name"]. "Nazwisko: ".$row["Surname"] "Wiadomość: ".$row["Message"]."/br";

        }

    }else{
       echo "Brak danych";
    }
}


mysqli_close($link);







?>