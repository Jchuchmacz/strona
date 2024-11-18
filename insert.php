<?php
include "db-connection.php";
if(isset($_POST['submit]']) && !empty($_POST['Name']) && !empty($_POST['Surname']) && !empty($_POST['Message']))
{
    $Name=$_POST['Name'];
    $Surname=$_Post['Surname'];
    $Message=$_POST['Message'];
    $sql=mysqli_query($conn, "INSERT INTO text(Name, Surname, Message) VALUES ('$Name', '$Surname', '$Message')");
    if (!$sql){
        printif ("wystąpił bląd: %s/n", mysql_error($link));
    }else{
        echo("twoja wiadomość została wysłana");
    }
}else{
    echo ("brak danych w formularzu");
}
mysqli_close($conn);
?>