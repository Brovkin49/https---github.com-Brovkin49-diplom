<!Doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>"КХ ТУМАН"</title>
<title></title>
</head>
<body>
<?php require "blocks/header.php" ?>
<header class="p-3 bg-dark text-white">
<div class="container">
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
<use xlink:href="#bootstrap"></use>
</svg>
</a>

<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
<li><a href="#" class="nav-link px-2 text-secondary">Услуги</a></li>
<li><a href="#" class="nav-link px-2 text-white">Аренда</a></li>
<li><a href="#" class="nav-link px-2 text-white">О компании</a></li>
<li><a href="#" class="nav-link px-2 text-white">Техника</a></li>
<li><a href="#" class="nav-link px-2 text-white">Контакты</a></li>
</ul>

<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
<input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Поиск">
</form>

<div class="text-end">
<button type="button" class="btn btn-outline-light me-2">Вход</button>
<button type="button" class="btn btn-warning">Регистрация</button>
</div>
</div>
</div>
</header>
<div class="b-example-divider"></div>
<div>
  <div class = "container mt-5" >
    <h3 class = "mb-5"> "Крестьянское Хозяйство ТУМАН"</h3>
  </div>
  <div class = "d-flex flex-wrap">
  <?php
  for($i = 0; $i < 6; $i++):
    ?>
    </div>
<div class="col">
  <div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
      <h4 class="my-0 fw-normal"></h4>
    </div>
    <div class="card-body">
      <img src ="img/<?php echo ($i + 1) ?>.jpg" class = "img-thumbnail">
      <h1 class="card-title pricing-card-title">Хранение зерна<small class="text-muted fw-light"></small></h1>
      <ul class="list-unstyled mt-3 mb-4">
        <li>В компании «ТУМАН» вы можете заказать услугу хранения зерна в рукавах из полиэтилена с предварительным упаковыванием.</li>
        <li>Это позволит вашему сельскохозяйственному предприятию серьезно сэкономить </li>
        <li>на таком процессе, как хранение зерна – цена за тонну в таком случае будет гораздо ниже, чем при хранении на складах.</li>
      </ul>
      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Заказать</button>
    </div>
  </div>
  <?php endfor; ?>
  </div>
  </div> 
  </div> 
</div>
<div>
<footer class="container py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Услуги</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Аренда</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">О компании</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Техника</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Главная</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Контакты</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company, Inc</p>
  </footer>
  </div>
</body>
</html>