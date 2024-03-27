<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pet shop Márcio Dutra</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-form">
                    <div class="">
                        <h3 style="background-color: #ffff;font-weight: bold;"><img src="images/1627478.png" height="30px" width="30px">&nbsp;&nbsp;Pet shop Management System</h3>
                        <hr>
                        </hr>
                    </div>
                    <form enctype="multipart/form-data" role="form" method="POST">
                        <div id="msg"></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" onkeypress="return /[a-z]/i.test(event.key)" id="first_name" alt="first_name" placeholder="Nome..." type="text" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nome do meio </label>
                                    <input class="form-control" onkeypress="return /[a-z]/i.test(event.key)" id="middle_name" alt="middle_name" placeholder="Nome do meio..." type="text" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Sobrenome</label>
                                    <input class="form-control" onkeypress="return /[a-z]/i.test(event.key)" id="last_name" alt="last_name" placeholder="Sobrenome..." type="text" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Data de nascimento</label>
                                    <input class="form-control" id="birth_date" alt="birth_date" placeholder="Data de nascimento..." type="date" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <textarea rows="2" class="form-control" id="complete_address" alt="complete_address" placeholder="Endereço..." name="username" id="username" type="text" autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input class="form-control" id="contact_number" alt="contact_number" placeholder="Telefone..." minlength="11" maxlength="11" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" id="email_address" alt="email_address" placeholder="Email ..." type="email" autocomplete="off">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Estado civil</label>
                                    <select class="custom-select" id="civil_status" alt="civil_status">
                                        <option selected disabled value="">&larr; Selecione &rarr;</option>
                                        <option value="Single">Solteiro</option>
                                        <option value="Married">Casado</option>
                                        <option value="Widow/er">Viuvo</option>
                                        <option value="Married">Divorciado</option>                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Idade</label>
                                    <input class="form-control" id="age" alt="age" maxlength="3" placeholder="Idade..." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  type="text" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select" id="gender" name="gender">
                                        <option selected disabled value="">&larr; Selecione &rarr;</option>
                                        <option value="Male">Masculino</option>
                                        <option value="Female">Feminino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input class="form-control" id="username" alt="username" placeholder="Usuario..." type="text" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="form-control" pattern=".{8,}" title="Eight or more characters" id="password" alt="password" placeholder="Senha..." type="password" autocomplete="off">
                                </div>
                            </div> 
                            <input type="hidden" id="status" alt="status" value="Active">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Imagem do perfil</label>
                                    <input class="form-control" id="image_profile" placeholder="Avatar..." type="file" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-success btn-flat m-b-30 m-t-30"><span id="reg-customer">Cadastrar</span></button><br><br>
                        <div>
                            <label class="pull-left">
                                <a href="index.php" style="color:#2c6ed5"><u>Logar.</u></a>
                            </label>

                        </div><br>

                    </form>

                </div>
                <footer class="alert alert-info align-content-center">
                    <center>Todos os direitos reservados © 2024 Criado por:Márcio Dutra</center>
                </footer>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/customer-registration.js"></script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="js/validate_field.js"></script>

</body>
</html>