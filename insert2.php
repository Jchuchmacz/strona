<?php
include "db-connection.php";
if(isset($_POST['submit']) && !empty($_POST['naglowek']) && !empty($_POST['ogloszenie']) && !empty($_POST['date']))
{
    $naglowek=$_POST['naglowek'];
    $ogloszenie=$_POST['ogloszenie'];
    $date=$_POST['date'];
    $sql=mysqli_query($link, "INSERT INTO ogloszenia(naglowek, ogloszenie,  data) VALUES ('$naglowek', '$ogloszenie', '$date')");
    if (!$sql){
        printf ("wystąpił bląd: %s/n", mysql_error($link));
    }else{
        echo("twoja wiadomość została wysłana ");
    }
}else{
    echo ("brak danych w formularzu");
}
mysqli_close($link);
?>