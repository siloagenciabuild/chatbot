<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-mail enviado com sucesso</title>

		<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/style">

		<!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- LOADING CHAT CONFIG -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">          
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css?<?= uniqid();?>" ">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="assets/js/script.js?<?= uniqid();?>"></script>

		<!-- Fontes -->
        <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" /> 
	</head>

<body class="enviado" style="background-color: #00a2e3;">

	<div class="col-md-1">
		<img src="img/logo.png" alt="logo" class="logoenviado">
    </div>

	<div class="col-md-12">
		<h1 class="enviado" style="text-align: center; font-size: 35px;">Obrigada!</h1>
		<p class="enviado" style="color: #fff; text-align: center; font-size: 20px; padding-bottom: 20px;">Aguarde, entraremos em contato em breve.</p>
		
		<div class="botao" style="text-align: center; width: 100%;">
			<a href="index.php"><button class="bt-voltar">Voltar</button></a>
		</div>
	</div>

	<footer class="footer">
        <div class="container">
           <p class="text-muted"><?php echo date('Y'); ?> @ Seguros Unimed • Menções legais</p>
        </div>
    </footer>

</body>
</html>