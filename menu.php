<?php
  include('head.php')
?>

</head>
<body>
  
<div class="topnav" id="myTopnav">
  <a href="index.php" class="menuLogo"><img src="./icones/logo LIGA 2.png" alt=""></a>
  <a href="contato.php" class="item0">CONTATO</a>  
  <a href="orcamento.php" class="item">ORÇAMENTO</a>
  <a href="projetos.php" class="item">PROJETOS</a>
  <a href="atuacao.php" class="item">ÁREA DE ATUAÇÃO</a>
  <a href="nos.php" class="item">QUEM SOMOS</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <img height="10px" src="./icones/barras.png" alt="">
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>