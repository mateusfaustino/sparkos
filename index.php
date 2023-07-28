<?php
    require_once('db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/components/atoms.css">
    <link rel="stylesheet" href="styles/components/molecules.css">
    <title>Login System</title>
</head>
<body>
    <?php
        // echo password_hash("@1234567",PASSWORD_DEFAULT);
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($data["email"])) {
            $query = 'SELECT id, email, name, lastname from users WHERE email=:user_email LIMIT 1;';
            $result = $pdo->prepare($query);
            $result->bindParam(':user_email', $data["email"],PDO::PARAM_STR);
            $result->execute();
            $row_user = $result->fetch(PDO::FETCH_ASSOC);
            var_dump($row_user);
           
        }

    ?>
    <main class="main">
        <div class="brand">
            <div class="brand__logo">
                <img class="brand__logo__img" src="assets/logo.svg" alt="">
            </div>
            <div class="brand__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consequuntur, modi sequi, asperiores expedita, rerum eligendi quisquam consectetur debitis beatae corrupti amet recusandae 
            </div>
        </div>
        <div class="auth">
            <div class="auth__box">
                <form class="auth__form" method="POST" action="">
                    <div class="input-wrapper">
                        <input type="text" name="email" placeholder="email">
                    </div>
    
                    <div class="input-wrapper">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    
                    <div class="input-wrapper">
                        <input class="c-button s-large" type="submit" value="Login">
                    </div>
                </form>
                <div class="auth__forgot-password-wrapper">
                    <a href="" class="auth__forgot-password__link">
                        Forgot password?
                    </a>
                </div>
                <div class="auth__line"></div>
                <div class="auth__create-account-wrapper">
                    <button class="c-button">
                        Criar nova conta
                    </button>
                </div> 
            </div>
        </div>
        <div class="signup">
            <div class="signup__modal">
                <div class="signup__modal__header">
                    <div class="c-button signup__modal__header__title">
                        Cadastre-se
                    </div>
                    <div class="signup__modal__header__description">
                        É rápido e fácil.
                    </div>
                </div>
                <div class="signup__modal__body">
                    <form action="" class="signup__form">
                        <div class="auth__input-wrapper">
                            <input type="text">
                        </div>
                        <div class="input-group">
                            <div class="input-group__title">
                                data de nascimento
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group__title">
                                Gênero
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                            <div class="signup__input-wrapper">
                                <input type="text">
                            </div>
                        </div>
                        <div class="signup__terms">
                            Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você poderá receber notificações por SMS e cancelar isso quando quiser.
                        </div>
                        <div class="auth__create-account-wrapper">
                            <button>
                                Cadastre-se
                            </button>
                        </div> 
                    </form>
                    <div class="signup__modal__close">
                        x
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>