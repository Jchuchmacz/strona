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
                </ul>
            </h1>
        </nav>
    </header>
    <main class="form1">
        <div class="form">
            <form action="insert.php" method="POST">
              <div class="title">Hello</div>
              <div class="subtitle">Wpisz wiadomość</div>
              <div class="input-container ic1">
               <input Name="Name" class="input" type="text" placeholder=" " required/>
                <div class="cut"></div>
                <label for="Name" class="placeholder">Name</label>
              </div>
              <div class="input-container ic2">
                <input Name="Surname" class="input" type="text" placeholder=" " required/>
                <div class="cut cut-short"></div>
                <label for="Surname" class="placeholder">Surname</label >
              </div>
              <div class="input-container ic1">
                <input Name="Message" class="input" type="text" placeholder=" " required/>
                <div class="cut"></div>
                <label for="Message" class="placeholder">Message</label>
                </div> 
              <input type="submit" name="submit" class="submit" value="Wyślij">
          </form>   
        </div>
        
    </main>
    <footer>
        <p>&copy 2024 maczek.</p>
    </footer>
</body>
</html>