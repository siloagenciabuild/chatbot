<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chat Bot</title>
        
        <!-- The stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css" />
        
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
<link rel="stylesheet" href="/fonts/stylesheet.css" type="text/css" charset="utf-8" />
        
    </head>
    
    <body>
            <div class="container">
        <div class="row">
             <div class="col-md-1"><img src="img/logo.png" alt="logo" class="logo">

        </div>            
        </div>
        <div class="container">
        <div class="row">


</div>            
        </div>

        <div class="row row-footer">
            <div class="col-md-4 hidden-sm hidden-xs"><h1 class="h1">Olá!</h1><p class="text">Eu sou a Nina, a<br> assistente virtual<br> 
da Seguros Unimed.</p></div>
            <div class="col-md-4 hidden-sm hidden-xs"></div>
            <div class="col-md-4 col-sm-12 col-xs-12">

                <div class="chatContainer">
                  <div class="flowChat">
                   
                  </div>
                  

                  <div class="footerChat">
                      <div class="loading"><i class="fas fa-spinner fa-spin"></i></div>

                      <div class="userText">
                          <input type="text" id="msgText" placeholder="Digite aqui">
                          <button class=' btnSendMsg'>Enviar</button>
                      </div>
                  
                  </div>
                </div>


            </div>
        </div>


    </div>

<footer class="footer">
      <div class="container">
        <p class="text-muted">2018 @ Seguros Unimed • Menções legais</p>
      </div>
    </footer>

   
    </body>
</html>