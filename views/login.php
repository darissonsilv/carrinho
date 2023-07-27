<?php 

require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/cabecalho.php';


?>

<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <p class="mt-5 mb-3 text-muted">© 2017–2022</p><label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
  </form>
</main>


    
  

</body>





<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/rodape.php';
?>