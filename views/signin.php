<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Entrar</title>
    </head>
    <body>
        <header class="vh-100">            
            <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-end">
                <div class="d-flex">
                    <div id="toggletheme" class="mx-3">
                        <span id="light-mode-icon" style="display: none;">
                            <?php include "../assets/icons/mode_light.svg"; ?>
                        </span>
                        <span id="dark-mode-icon">
                            <?php include "../assets/icons/mode_dark.svg"; ?>
                        </span>
                    </div>
                </div>
            </nav>

            <section class="h-75 d-flex align-items-center">
                <div class="container ">
                    <div class="row d-flex">
                        <div class="col-md-6 offset-md-3 bg-body-secondary p-3 rounded-4">
                            <h1 class="text-center">Identifique-se</h1>
                            <form action="../php/login.php" method="POST">
                                <div class="mb-3">
                                    <label for="login" class="form-label">Email ou RM</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/person.svg"; ?>
                                        </span>
                                        <input type="login" class="form-control" id="login" name="login" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/lock.svg"; ?>
                                        </span>
                                        <input type="password" class="form-control" id="senha" name="senha" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                                <button type="button" class="btn btn-secondary w-100 mt-3" onclick="signup()">Registrar-se</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </header>




        <script src="../js/bootstrap.js"></script>
        <script src="../js/theme.js"></script>

        <script>
            function signup() {
                window.location.href = "signup.php";
            }
        </script>
    </body>
</html>