<?php
include "db-connection.php";
if(isset($_SESSION["name"])){
    $sql="SELECT Id, Name, Surname, Message FROM text";
    $esult=mysqli_query($cinnm $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "Id: ".$row["id"]. "Imie: ".$row["Name"]. "Nazwisko: ".$row["Surname"] "Wiadomość: ".$row["Message"]."/br";

        }

    }else{
        echo "Brak danych";
    }
}


mysqli_close($link);



#wylogowanie: 


session_unset();
session_destroy();
header("Location: index.php")

?>