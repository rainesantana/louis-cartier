<!DOCTYPE html>
<html lang="pt">

<?php require_once("inc/head.php"); ?>

<body>
  <?php require_once("inc/header.php"); ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">

      <!-- para o h1 e p que já tínhamos, somente adicionar as respectivas classes -->
      <h1 class="display-4">Ótima escolha!</h1>
      <p class="lead">Obrigado por dar preferência na Louis Cartier!</p>

    </div><!-- fim .container dentro do jumbotron -->
  </div><!-- fim .jumbotron -->
  <!-- Aqui é o card do carrinho que mostra o produto -->
  <div class="container">
    <div class="row">
    <div class="border rounded col-6">
      <img class="card-img-top" src="assets/images/produtos/r2.webp" alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">SUA COMPRA</h5>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">Produto</th>
              <th scope="col">Cor</th>
              <th scope="col">Preço</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="col">Relógio pulso</th>
              <td>Marrom</td>
              <td>R$ 2.5000</td>
            </tr>
        </tbody></table>
      </div>
    </div>
    <!-- Aqui é  um formulário -->
      <form class="col-6">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Endereço a ser entregue</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCEP">Valor do frete</label>
            <input type="text" class="form-control" id="inputCEP">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEstado">Quantidade</label>
            <select id="inputEstado" class="form-control">
              <option selected="">Selecione...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </div>

        </div>
        <button type="submit" class="btn btn-primary">Comprar tudo</button>
      </form>
    </div>
  </div>
  <!--Aqui termina um container -->
  <!-- Aqui começa a prateleira de sugestão-->


  <?php require_once "inc/footer.php"; ?>

  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#061326" /></svg></div>

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