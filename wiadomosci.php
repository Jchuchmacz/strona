<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="o_nas">
    <header>
        <nav>
            <h1>
                <ul>
                
                
                    <li><a href="index.php"><img src="logo ipad (6).png" alt="MENU" style="width: 400px;height: auto";></a></li>
                    <li> <a href="kontakt.html" class="button b1">Kontakt</a></li>
                    <li><a href="oferta.html" class="button b2">Oferta</a></li>
                    <li><a href="o_nas.html" class="button b3">O nas</a></li>
                    <li><a href="wylogowanie.php" class="button b4">Wyloguj</a></li>
                </ul>
            </h1>
        </nav>
    </header>
    <main>
    <?php
include "db-connection.php";
session_start();
if(isset($_SESSION["name"])){
    $sql="SELECT Id, Name, Surname, Message FROM text";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        echo "<table>"; echo "<tr> <th>  Id </th> <th>  Name </th> <th>  Surname </th> <th>  Message </th>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td class=\"table data\">"; echo  $row["Id"]."<br>"; echo "</td>";
            echo "<td class=\"table data\">"; echo  $row["Name"]."<br>"; echo "</td>";
            echo "<td class=\"table data\">"; echo  $row["Surname"]."<br>"; echo "</td>";
            echo "<td class=\"table data\">"; echo  $row["Message"]."<br>"; echo "</td>";
            echo "</tr>";
        }    
        echo "</table>";
   }
   
   else{
      echo "Brak danych";
    }
}


mysqli_close($link);
?>
        <!-- <li><a href="messagesshow.php" class="button b5">pokaz dane</a></li> -->
        
        
        
    </main>
    <footer>
        <p>&copy 2024 maczek.</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.onas1', {delay: 300});

    </script>
</body>
</html>