

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GiveMeJobs - Página Principal</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php require ("header.php"); ?>
    <div class="col-md-9 slider pad">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/img01.png" alt="..." style="width: 100%; height: 59.3vh;">
      <div class="carousel-caption">
        <h2>UFAL</h2>
        <p>Campus Arapiraca</p>
      </div>
    </div>
    <div class="item">
      <img src="img/img02.png" alt="..." style="width: 100%; height: 59.3vh;">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/vaga.jpg" alt="..." style="width: 100%; height: 59.3vh;">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div class="col-md-3 pad">
    <ul class="list-group">
      <li class="list-group-item active wborder bol">Vagas Abertas</li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
    </ul>
    <ul class="list-group">
      <li class="list-group-item active wborder bol">Editais</li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
    </ul>
  </div>
  <div class="col-md-12 pad">
    <div class="col-md-4 pad">
      <ul class="list-group">
      <li class="list-group-item active wborder bol">Notícias</li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
    </ul></div>
    <div class="col-md-8 pad">
      <ul class="list-group">
      <li class="list-group-item active wborder bol">Processos de Seleção</li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
      <li><a href="" class="list-group-item wborder">15/04 - Técnico de T.I.</a></li>
    </ul></div>
  </div>

    <div class="col-md-12 pad">
      <?php require ("footer.php"); ?>
      
    </div>


    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 10000
      })
    </script>
   
  </body>
</html>