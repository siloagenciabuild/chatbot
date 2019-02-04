
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Fontes -->
        <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
    </head>

    
    <body class="fundo2" style="background-color: #002760;">
          
        <div class="container">

          <div class="container">
            <div class="row">
            </div>            
          </div>

          <div class="row row-footer">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1">
                      <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
                    </div>            
                </div>
            </div>

            <div class="col-md-2 hidden-sm hidden-xs"></div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="formContainer">
                  
                  <div class="flowChat">

                    <form id="formenvio" action="envio/envio.php" method="get">
                        <div class="form-group">
                          <input type="nome" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Nome Completo">
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="email@nome.com">
                        </div>
                        
                        <div class="form-group">
                          <input type="telefone" class="form-control" name="telefone" id="telefone" placeholder="DDD+Telefone">
                        </div>
                  
                  <div>
                        <br>
                        <h2>Produto de interesse</h2>
                      
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="previdencia" value="Previdência" id="defaultCheck1">
                        <label class="form-check-label" >Previdênica</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="responsabilidade" value="Responsabilidade Cívil Profissional" id="defaultCheck2">
                        <label class="form-check-label" >Responsabilidade Cívil Profissional</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="segclinica" value="sSeguro Clínicas e Consultórios" id="defaultCheck3">
                        <label class="form-check-label" >Seguro Clínicas e Consultórios</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="segvida" value="Seguro de Vida" id="defaultCheck4">
                        <label class="form-check-label" >Seguro de Vida</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="segmulher" value="Seguro Mulher" id="defaultCheck5">
                        <label class="form-check-label" >Seguro Mulher</label>
                      </div>
                        
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="segresidencial" value="Seguro Residencial" id="defaultCheck6">
                         <label class="form-check-label" >Seguro Residencial</label>
                      </div>
                        

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="segviagem" value="Seguro Viagem" id="defaultCheck7">
                        <label class="form-check-label" >Seguro Viagem</label>
                      </div>
                        

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="serit" value="Serit" id="defaultCheck8">
                        <label class="form-check-label" >Serit</label>
                      </div>
                        

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="unimedodonto" value="Unimed Odonto" id="defaultCheck9">
                        <label class="form-check-label" >Unimed Odonto</label>
                      </div>

                </div>

                      <button id=envio class="btn btn-primary btenvia">Enviar</button>

                    </form>

                  </div>
 
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted"><?php echo date('Y'); ?> @ Seguros Unimed • Menções legais</p>
      </div>
    </footer>


    <!--- JQUERY-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){
          $("#cpf").mask("000.000.000-00")
          $("#telefone").mask("(00) 0000-00009")
          $("#envio").click(function(ev){
            ev.preventDefault()
            var envio = $("#formenvio").serializeArray()
            $.get("envio/envio.php", envio, function(data){
              console.log(data)
              window.location.href="enviado.php"
            })
          })
        })
    </script>

    </body>
</html>