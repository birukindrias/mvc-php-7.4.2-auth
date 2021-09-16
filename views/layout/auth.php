<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="/">mvx</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>
      <form class="d-flex">        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <?php
use App\core\App;

echo App::$app->session->getFlash('log');
?>        
        <li class="nav-item">

<?php if (App::isGuest()):?>
    <?php echo 'wellcome guest'; ?>
    
 <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/register">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">LOGIN</a>
        </li>
<?php else:?>
  <a class="nav-link active" aria-current="page" href="/"><?php
    echo 'wellcome ';
    echo App::$app->users->namedispaly();
        ?></a> 
<?php endif; ?>
</li>
  
        
      </ul>
      </form>
    </div>
  </div>
</nav>
      
<div class="container">
{{cont}}
</div>
</div>
</body>
</html>
