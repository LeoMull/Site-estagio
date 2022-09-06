<?php
    include('head.php');
    include('menu.php')
?>
<p class="titulo">ORÇAMENTO</p>

<body>
    <section class="orca">
        <center>

            <form method="get">

                <input type="text" id="nome" name="nome" class="orcamento" placeholder="Nome" >

                <input type="text" id="email" name="email" class="orcamento" placeholder="E-mail" >

                <input type="text" id="cll" name="cll" class="orcamento" placeholder="Celular">

                <input type="text" id="body" name="body" class="emailBody" placeholder="Explicação do projeto" >

                <input type="submit" class="btnOrc" value="enviar">                    

            </form>

        </center>
    </section>
</body>

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_GET["nome"];
    $to = "leonardluismuller@gmail.com";
    $subject = $_GET["cll"];
    $message = $_GET["body"];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>

<?php 
    include('footer.php')
?>