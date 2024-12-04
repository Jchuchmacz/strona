<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1>
                <ul>
                
                
                    <li><a href="index.php"><img src="logo ipad (6).png" alt="MENU" style="width: 400px;height: auto";></a></li>
                    <li> <a href="kontakt.html" class="button b1">Kontakt</a></li>
                    <li><a href="oferta.html" class="button b2">Oferta</a></li>
                    <li><a href="o_nas.html" class="button b3">O nas</a></li>
                    <li><a href="zaloguj.php" class="button b4">Zaloguj</a></li>
                </ul>
            </h1>
        </nav>
    </header>
    <main>
    <?php
include "db-connection.php";
session_start();
if(isset($_SESSION["name"])){
    $sql="SELECT Id, naglowek, ogloszenie, data FROM ogloszenia";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        
        while($row=mysqli_fetch_assoc($result)){
            echo "<div class=\"news\">"; 
                    echo "<img class=\"newsimg\" src=\"applehq.gif\"";
                echo "<br>";
                echo "<div class=\"naglowek\">";
                    echo $row["naglowek"]."<br>";
                echo "</div>";
                echo "<div class='date'>";
                    echo $row["data"]."<br>";
                echo "</div>";
                echo "<div class='ogloszenie'>";
                    echo $row["ogloszenie"]."<br>";
                echo "</div>";


            
        }    
        echo "</div>";
   }
   
   else{
      echo "Brak danych";
    }
}


mysqli_close($link);
?> 



    </main>
    <footer>
        <p>&copy 2024 maczek.</p>
    </footer>
</body>
</html>