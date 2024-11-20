<?php
$DATABASE_HOST="localhost";
$DATABASE_USER="admin1";
$DATABASE_PASS="admin1";
$DATABASE_NAME="stronaCh";
$link=mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_error()){
    exit("Nieudana próba połączenia z bazą danych".my_sqli_connect_error());
}else{
echo "połączenie nawiązano ";
}
?>