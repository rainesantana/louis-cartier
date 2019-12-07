<!DOCTYPE html>
  <html lang="pt">
  <?php require_once ("inc/head.php"); ?>
  <head>
    <head>
      <title>Louis Cartier - Relógios de luxo</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" href="assets/css/animate.css">

      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">

      <link rel="stylesheet" href="assets/css/aos.css">

      <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/cadastro.css">
    </head>
  </head>
  <body>
    <?php require_once ("inc/header.php"); ?>

    <div class="container">
      <section class="mt-5 text-center text-dark">
        <h1>Cadastre-se</h1>
        <p>Seja um cliente Louis-cartier</p>
      </section>

      <form class="mt-5" method="POST" action="" name="">
        <div class="row float-center">
          <div class="col">
            <label for="nomeCompleto" class="mt-3 text-dark">Nome:</label>
            <input type="text" class="form-control" id="nomeCompleto" placeholder="Insira seu nome completo" required>
          </div>
          <div class="col">
            <label for="Email" class="mt-3 text-dark">E-mail:</label>
            <input type="text" class="form-control" id="Email"  placeholder="Insira um e-mail alternativo" required>
          </div>
        </div>

        <div class="row float-center">
          <div class="col">
            <label for="CPF" class="mt-3 text-dark">CPF:</label>
            <input type="text" class="form-control" id="CPF"  placeholder="Insira seu CPF" required>
          </div>
          <div class="col">
            <label for="Telefone" class="mt-3 text-dark">Telefone:</label>
            <input type="text" class="form-control" id="Telefone"  placeholder="Insira Telefone(celular)" required>
          </div>
        </div>

        <div class="row float-center">
          <div class="col">
            <label for="senha" class="mt-3 text-dark">Senha:</label>
            <input type="password" class="form-control" id="senha"  placeholder="Informe senha com letra e numero" required>
          </div>
          <div class="col">
            <label for="Senha" class="mt-3 text-dark">Insira novamente:</label>
            <input type="password" class="form-control" name="Senha" id="Senha"  placeholder="Informe senha novamente" required>
          </div>
        </div>

        <div class="botoes">
          <button type="submit" class="botoes-cadastro mt-5  btn btn-success">Confirmar cadastrar</button>
          <button  type="reset" class=" botoes-limpar mt-5  btn btn-primary "> Cadastrar novamente</button>
        </div>

      </form>
    </div>

    <footer class="mt-5">
      <?php @require_once ("inc/footer.php"); ?>
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#061326"/></svg></div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
  </html>