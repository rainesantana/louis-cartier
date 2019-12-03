<!DOCTYPE html>
<html lang="en">
<?php require_once ("inc/head.php"); ?>



<body class="bg-dark"> 
<?php require_once ("inc/header.php"); ?>



<div class="container text-center">

<form  method="POST" action="" name="">

    <section class="mt-5 container text-center ">

    <h2 class="text-white">Cadastre-se</h2>
    <p class="text-white">Seja um cliente Louis-cartier</p>

    <br><br>
   
        <div class="row">
 
                    <div class="col">
                        <label for="nomeCompleto" class="text-white">Nome:</label>
                        <input type="text" class="form-control" id="nomeCompleto" placeholder="Insira seu nome completo" required>
                    </div>
                        <div class="col">
                        <label for="Email" class="text-white">E-mail:</label>
                        <input type="text" class="form-control" id="Email"  placeholder="Insira um e-mail alternativo" required><br>
                    </div>

        </div>
        <br>
        <div class="row">
                    <div class="col">
                        <label for="CPF" class="text-white">CPF:</label>
                        <input type="text" class="form-control" id="CPF"  placeholder="Insira seu CPF" required>
                    </div>

                    <div class="col">
                        <label for="Telefone" class="text-white">Telefone:</label>
                        <input type="text" class="form-control" id="Telefone"  placeholder="Insira Telefone(celular)" required>
                    </div>
        </div>
        <br>
        <div class="row">
                   
                <div class="col">
                    <label for="senha" class="text-white">Senha:</label>
                    <input type="password" class="form-control" id="senha"  placeholder="Informe senha com letra e numero" required>
                </div>
                <div class="col">
                    <label for="Senha" class="text-white">Insira novamente:</label> 
                    <input type="password" class="form-control" name="Senha" id="Senha"  placeholder="Informe senha novamente" required>
                </div>

        </div>

    <br><br><br>
    
   
    <button type="submit" class="btn btn-success">confirmar cadastro</button>
      
    <button  type="reset" class="btn btn-primary">cadastrar novamente</button>

     
   
    
    <br><br><br>

    <?php @require_once ("inc/footer.php"); ?>

</section>
   </form>
  </div>

</body>
</html>








