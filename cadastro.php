<!DOCTYPE html>
<html lang="pt">
<?php require_once ("inc/head.php"); ?>
<body> 
<?php require_once ("inc/header.php"); ?>

<div class="container">
<section class="mt-5 text-center text-dark">
    <h2>Cadastre-se</h2>
    <p>Seja um cliente Louis-cartier</p>
</section>

<form  method="POST" action="" name="">
        <div class="row"> 
                    <div class="col">
                        <label for="nomeCompleto" class="text-dark">Nome:</label>
                        <input type="text" class="form-control" id="nomeCompleto" placeholder="Insira seu nome completo" required>
                    </div>
                        <div class="col">
                        <label for="Email" class="text-dark">E-mail:</label>
                        <input type="text" class="form-control" id="Email"  placeholder="Insira um e-mail alternativo" required><br>
                    </div>
        </div>
        <div class="row">
                    <div class="col">
                        <label for="CPF" class="text-dark">CPF:</label>
                        <input type="text" class="form-control" id="CPF"  placeholder="Insira seu CPF" required>
                    </div>

                    <div class="col">
                        <label for="Telefone" class="text-dark">Telefone:</label>
                        <input type="text" class="form-control" id="Telefone"  placeholder="Insira Telefone(celular)" required>
                    </div>
        </div>
        <div class="row">
                   
                <div class="col">
                    <label for="senha" class="text-dark">Senha:</label>
                    <input type="password" class="form-control" id="senha"  placeholder="Informe senha com letra e numero" required>
                </div>
                <div class="col">
                    <label for="Senha" class="text-dark">Insira novamente:</label> 
                    <input type="password" class="form-control" name="Senha" id="Senha"  placeholder="Informe senha novamente" required>
                </div>

        </div>   
    <button type="submit" class="btn btn-success">confirmar cadastro</button>     
    <button  type="reset" class="btn btn-primary">cadastrar novamente</button>  
   </form>
  </div>
  <?php @require_once ("inc/footer.php"); ?>
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#061326"/></svg></div>

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








