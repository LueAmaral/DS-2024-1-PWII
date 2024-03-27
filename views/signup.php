<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Cadastro</title>
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

            <section class="h-auto d-flex align-items-center">
                <div class="container mt-5 mb-5">
                    <div class="row d-flex">
                        <div class="col-md-6 offset-md-3 bg-body-secondary p-3 rounded-4">
                            <h1 class="text-center">Cadastro</h1>
                            <form action="../php/register.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="rm" class="form-label">RM</label>
                                    <div class="input-group">
                                        <span for="rm" class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/123.svg"; ?>
                                        </span>
                                        <input type="number" class="form-control" id="rm" name="rm" maxlength="5" minlength="5" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/person.svg"; ?>
                                        </span>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="avatar" class="form-label">Avatar</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/image.svg"; ?>
                                        </span>
                                        <input type="file" class="form-control" id="avatar" name="avatar" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/mail.svg"; ?>
                                        </span>
                                        <input type="email" class="form-control" id="email" name="email" required>
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

                                <div class="mb-3">
                                    <label for="tipo" class="form-label">Tipe</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <?php include "../assets/icons/edit.svg"; ?>
                                        </span>
                                        <input type="text" class="form-control" id="tipo" name="tipo" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Registrar-se</button>
                                <button type="button" class="btn btn-secondary w-100 mt-3" onclick="signin()">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </header>




        <script src="../js/bootstrap.js"></script>
        <script src="../js/theme.js"></script>

        <script>
            function signin() {
                window.location.href = "signin.php";
            }
        </script>
    </body>
</html>