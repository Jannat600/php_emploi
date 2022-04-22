<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="Php_Proj/Ressources/css/style.css">
    <title>Page de Connexion</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form"  method="POST" action= "">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username/Email">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">

                    <input type="submit" value="login" class="btn solid">

                    
                </form>

                <form class="sign-up-form" method="POST" action="{{ route('Register') }}">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Sign up" class="btn solid">

                    
                </form>
            </div>
        </div>

        <div class="panels-container">
             <div class="panel left-panel">
                 <div class="content">
                     <h3>Vous n'avez pas de compte ?</h3>
                     <p>Créez-en un pour accéder à votre emploi du temps </p>
                     <button class="btn transparent" id="sign-up-btn">Sign up</button>

                 </div>

                 <img src="./images/undraw_Welcome_re_h3d9.svg" alt="" class="image">
             </div>

             <div class="panel right-panel">
                <div class="content">
                    <h3>Login</h3>
                    <p>Déjà enregistré </p>
                    <button class="btn transparent" id="sign-in-btn">Log in</button>

                </div>

                <img src="./images/undraw_teacher_35j2.svg" alt="" class="image">
            </div>
        </div>
    </div>


    <script src="Php_Proj/Ressources/js/script.js"></script>
</body>
</html>