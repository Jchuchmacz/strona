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
    <main class="form1">
        <div class="form">
            <form action="login.php" method="POST">
                <div class="title">Zaloguj</div>
                <div class="subtitle">Podaj login i hasło</div>
                <div class="input-container ic1">
                    <input type="text" class="input1" Name="login" placeholder="" required/>
                    <div class="cut"></div>
                    <label for="Name" class="placeholder">Login</label>
                </div>
                <div class="input-container ic2">
                    <input type="password" class="input1" name="haslo" placeholder="">
                    <div class="cut"></div>
                    <label for="Name" class="placeholder">Hasło</label>
                </div>
                <input type="submit" name="submit" class="submit" value="Wyślij">
            </form>     
</div>
        
    </main>
    <footer>
        <p>&copy 2024 maczek.</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.form', {delay: 300});
        
    </script>
</body>
</html>