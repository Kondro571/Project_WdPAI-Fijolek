
<html>
    <head>
    <title>Tak</title>
        <meta charset="utf-8">
        <meta name="description" content="My bisness">
        <meta name="author" content="Konrad Tatomir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/bar.css">
        <link rel="stylesheet" href="public/css/edytuj.css">

        <!-- <link rel="stylesheet" href="css/bar.css"> -->

        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="public/js/js1.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <script src="js/menu.js"></script> -->
    </head>
    <body>
        
    <header>
            <div class="logo">
                <a href="project"> <img src="public/img/logo.png" alt="Logo" height="70"></a>
            </div>
            <nav class="category">
                <div class="mobile-icon" onclick="toggleMenu()">&#9776;</div>
                <ol class="menu-list">
                    <li class="main-page-link"><a href="#">Strona główna</a></li>
                    <li><a href="#">Zabawki</a>
                        <ul class="sub-menu">
                            <li><a href="#">pluszaki</a></li>
                            <li><a href="#">karciane</a></li>
                            <li><a href="#">pole</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Papiernicze</a>
                        <ul class="sub-menu">
                            <li><a href="#">zeszyty</a></li>
                            <li><a href="#">bloki</a></li>
                            <li><a href="#">dlugopisy</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Inne</a>
                        <ul class="sub-menu">
                            <li><a href="#">bateria</a></li>
                            <li><a href="#">kartki</a></li>
                        </ul>
                    </li>
                </ol>
            </nav>
            
            
            <div class="top-bar">
                <div class="icons">
                    <div class="search-bar">
                        <img src="public/img/lupa.png">
                        <input type="text" placeholder="SZUKAJ">
                    </div>
                    <a href="koszyk">
                        <img src="public/img/sbag.png" alt="Kosz" height="50">
                        <span class="info-text">Koszyk</span>
                    </a>
                    <div class="user-menu">
                        <a href="login">
                            <img src="public/img/user.png" alt="Użytkownik" height="50">
                            <span class="info-text">Konto</span>
                        </a>
                        <a href="#" class="conto-btn btn1">Admin staf</a>
                        <a href="#" class="conto-btn btn2">Wyloguj się</a>
                    </div>
                </div>
            </div>
            
        </header>

    <main>
        <h1>Edytuj Profil</h1>
        <div class="edit-data">
            <form action="edytuj_profil.php" method="post">
                <!-- Dane osobowe -->
                <div class="personal-info">
                    <label for="imie">Imię:</label>
                    <input type="text" name="imie" placeholder="Imię" value="<?php echo $user_data['imie']; ?>" required><br>
        
                    <label for="nazwisko">Nazwisko:</label>
                    <input type="text" name="nazwisko" placeholder="Nazwisko" value="<?php echo $user_data['nazwisko']; ?>" required><br>
        
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $user_data['email']; ?>" required><br>
                    
                    <label for="telefon">Telefon:</label>
                    <input type="text" name="telefon" placeholder="Telefon" value="<?php echo $user_data['telefon']; ?>" required><br>
        
                </div>
        
                <div class="address-info">
                    <label for="miasto">Miasto:</label>
                    <input type="text" name="miasto" placeholder="Miasto" value="<?php echo $user_data['miasto']; ?>" required><br>
                    
                    <label for="ulica">Ulica:</label>
                    <input type="text" name="ulica" placeholder="Ulica" value="<?php echo $user_data['ulica']; ?>" required><br>
                    
                    <label for="numer">Nr domu/mieszkania:</label>
                    <input type="number" name="numer" placeholder="Nr" value="<?php echo $user_data['numer']; ?>" required><br>
                    
                    <label for="kod_pocztowy">Kod pocztowy:</label>
                    <input type="text" name="kod_pocztowy" placeholder="Kod pocztowy" value="<?php echo $user_data['kod_pocztowy']; ?>" required><br>
                    
                </div>
        
                
                <input type="submit" value="Zapisz Zmiany">
            </form>
        </div>
        
    </main>
</body>
</html>