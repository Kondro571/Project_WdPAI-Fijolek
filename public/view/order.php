
<html>
    <head>
    <title>Tak</title>
        <meta charset="utf-8">
        <meta name="description" content="My bisness">
        <meta name="author" content="Konrad Tatomir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/bar.css">
        <link rel="stylesheet" href="public/css/edytuj.css">
        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="public/js/shop.js"></script>

    </head>
    <body>
        
    <header>
            <div class="logo">
                <a href="main"> <img src="public/img/logo.png" alt="Logo" height="70"></a>
            </div>
            <nav class="category">
                <div class="mobile-icon" onclick="toggleMenu()">&#9776;</div>
                <ol class="menu-list">
                    <li class="main-page-link"><a href="#">Strona główna</a></li>
                    <li><a href="zabawki">Zabawki</a>
                        <ul class="sub-menu">
                            <li><a href="pluszaki">pluszaki</a></li>
                            <li><a href="karciane">karciane</a></li>
                        </ul>
                    </li>
                    <li><a href="papiernicze">Papiernicze</a>
                        <ul class="sub-menu">
                            <li><a href="zeszyty">zeszyty</a></li>
                            <li><a href="bloki">bloki</a></li>
                            <li><a href="dlugopisy">dlugopisy</a></li>
                        </ul>
                    </li>
                    <li><a href="inne">Inne</a>
                        <ul class="sub-menu">
                            <li><a href="baterie">bateria</a></li>
                            <li><a href="kartki">kartki</a></li>
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
                        <span class="cart-item-count"><?php echo $_SESSION["car"] ?></span>
                    </a>
                    <div class="user-menu">
                        <?php 
                        
                        if($_SESSION['loggedin'] == true) { 
                                
                                $link = "profil";
                        
                            } else {

                                $link = "login";
                            }

                        ?>
                        <a href="<?php echo $link?>">
                            <img src="public/img/user.png" alt="Użytkownik" height="50">
                            <span class="info-text">Konto</span>
                        </a>
                        <?php if($_SESSION['loggedin'] == true) {?>
                            <?php if($_SESSION['isAdmin']) {?>
                                <a href="admin_staf" class="conto-btn btn1">Admin staf</a>
                                <a href="logout" class="conto-btn btn2">Wyloguj się</a>
                            <?php }else{?>
                                <a href="logout" class="conto-btn btn1">Wyloguj się</a>
                                <?php } ?>
                        
                        <?php }?>
                    </div>
                </div>
            </div>
            
        </header>
        <main>
        <div class="edit-data">
            
            <form action="order" method="post">
            <?php  ?>

                <!-- Dane osobowe -->
                <div class="personal-info">
                    <label for="imie">Imię:</label>
                    <input type="text" name="imie" placeholder="Imię" value="<?php echo $user->getName(); ?>" required><br>
        
                    <label for="nazwisko">Nazwisko:</label>
                    <input type="text" name="nazwisko" placeholder="Nazwisko" value="<?php echo $user->getSurname(); ?>" required><br>
        
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION["user_email"]; ?>" required><br>
                    
                    <label for="telefon">Telefon:</label>
                    <input type="text" name="telefon" placeholder="Telefon" value="<?php echo $user->getPhone(); ?>" required><br>
        
                </div>
        
                <div class="address-info">
                    <label for="miasto">Miasto:</label>
                    <input type="text" name="miasto" placeholder="Miasto" value="<?php echo $user->getCity(); ?>" required><br>
                    
                    <label for="ulica">Ulica:</label>
                    <input type="text" name="ulica" placeholder="Ulica" value="<?php echo $user->getStreet(); ?>" required><br>
                    
                    <label for="numer">Nr domu/mieszkania:</label>
                    <input type="number" name="numer" placeholder="Nr" value="<?php echo $user->getNumber(); ?>" required><br>
                    
                    <label for="kod_pocztowy">Kod pocztowy:</label>
                    <input type="text" name="kod_pocztowy" placeholder="Kod pocztowy" value="<?php echo $user->getPostCode(); ?>" required><br>
                    
                </div>
        
                
                
                <div class="summary">
                <div class="summary-box">
                    <h2>Podsumowanie</h2>
                    <p><span>Wartość produktów:</span> <span class="right wartosc"><?php $dostawa=50-$totoal; if( $total>50){ $dostatwa =0.00;} echo $total;  ?> zł</span></p>
                    <p><span>Dostawa od:</span> <span class="right dostawa" ><?php echo $dostawa  ?> zł</span></p>
                    <p><span>Do zapłaty:</span> <span class="right lacznie"><?php echo $total+$dostwawa ?> zł</span></p>
                    <input type="submit" value="zapłać">
                </div>
            </div>
            </form>
        </div>
        
        </main>
    </body>
</html>
