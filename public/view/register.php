
<html>
    <head>
    <title>Tak</title>
        <meta charset="utf-8">
        <meta name="description" content="My bisness">
        <meta name="author" content="Konrad Tatomir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="icon" type="image/x-icon" href="public/view/img/favicon.ico">
        
    </head>
    <body>
        <div class="logo"><a href="main"><img name="google_icon" src="public/img/logo2.png"></a></div>
        
        <div class="login-container">

            <h1>Zaloguj się</h1>
            <form action="register" method="POST">
                <div class="messages">
                    <?php if(isset($messages)){
                        foreach($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input type="email" placeholder="Email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                <input type="password" placeholder="Hasło" name="password" required>
                <input type="password" placeholder="Hasło" name="repeat_password" required>

                <button type="submit"  class="confirm-button">Stwórz konto</button>
            
                
               
              
               
            </form>
            <a href="login" class="create-account-button">
            zaloguj się
            </a>
        </div>
        


    </body>
</html>
