<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css"> 

</head>
<body>
<form class="main-login" action="" method="POST">

    <div class="login">
        <div class="card-login">
        
            <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control " id="floatingInput" >
            <label for="floatingInput" >Email</label>
            </div>

            <div class="form-floating">
            <input name="senha" type="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword" >Senha</label>
            </div>
            

        <div class="option-login">
            <div class="remember">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Lembrar</label>
                </div>
            </div>

            <div class="recover"><a href="#" target="_blank">Esqueci minha senha</a></div>
        </div>

            <button class="btn-login" name="login" type="submit">Login</button>
            <div class="autor"><h1>Desenvolvido por <a href="http://www.dinholima.com">Dinho Lima</a></h1>
            <h2>Entre em contato: <a href="https://api.whatsapp.com/send?phone=5524992380747" target="_blank">Whatsapp</a></h2>         
            </div>

        
        </div>
    </div>

</form>
</body>
</html>
