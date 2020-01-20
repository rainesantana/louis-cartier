<!DOCTYPE html>
<html lang="pt">

<?php require_once ("inc/head.php"); ?>

<body>
    <?php require_once ("inc/header.php"); ?>

      <div class="container">
        <section class="mt-5 text-center text-dark">
            <h1>Cadastre-se</h1>
            <p>Seja um cliente Louis-cartier</p>
        </section>

            <form class="mt-5" method="POST" action="" name="">
                <div class="row float-center">
                    <div class="col-sm-6">
                        <label for="nomeCompleto" class="mt-3 text-dark">Nome:</label>
                        <input type="text" class="form-control" id="nomeCompleto" placeholder="Insira seu nome completo" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="Email" class="mt-3 text-dark">E-mail:</label>
                        <input type="text" class="form-control" id="Email"  placeholder="Insira um e-mail alternativo" required>
                    </div>
                </div>
                
                <div class="row float-center">
                    <div class="col-sm-6">
                        <label for="CPF" class="mt-3 text-dark">CPF:</label>
                        <input type="text" class="form-control" id="CPF"  placeholder="Insira seu CPF" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="Telefone" class="mt-3 text-dark">Telefone:</label>
                        <input type="text" class="form-control" id="Telefone"  placeholder="Insira Telefone(celular)" required>
                    </div>
                </div>

                <div class="row float-center">
                    <div class="col-sm-6">
                        <label for="senha" class="mt-3 text-dark">Senha:</label>
                        <input type="password" class="form-control" id="senha"  placeholder="Informe senha com letra e numero" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="Senha" class="mt-3 text-dark">Insira novamente:</label>
                        <input type="password" class="form-control" name="Senha" id="Senha"  placeholder="Informe senha novamente" required>
                    </div>
                </div>

                <div class="area-text mt-5 text-center">
                    <label for="exampleFormControlTextarea3">Deixe aqui suas observações</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="6"></textarea>
                </div>

                <div class="botoes-cadastro mt-5 text-center">
                    <button type="submit" class="botao mt-4  btn btn-success">Cadastrar</button>
                    <button  type="reset" class=" botoes-limpar mt-4  btn btn-primary ">Limpar</button>
                </div>
       
            </form>
     </div>
                   
        <footer class="mt-5">
                <?php @include_once "inc/footer.php"; ?>
        </footer>
                           
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#061326"/></svg></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js" integrity="sha256-91c9XEM8yFH2Mn9fn8yQaNRvJsEruL7Hctr6JiIY7Uw=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js" integrity="sha256-aQ6KGDKk7w8XQNZsQaQnbfeC//XPUIphSp/X/ZEwtV0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="assets/js/main.js"></script>
        
    </body>
</html>