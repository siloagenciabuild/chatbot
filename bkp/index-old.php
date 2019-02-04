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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    var accessToken ="44b98c2bf056429ea016cac570231532";
    var baseUrl = "https://api.dialogflow.com/v1/";
    $(document).ready(function() {
        $("#input").keypress(function(event) {
            if (event.which == 13) {
                event.preventDefault();
                send();
this.value = '';
            }
        });
        $("#rec").click(function(event) {
            switchRecognition();
        });
    });
    var recognition;
    function startRecognition() {
        recognition = new webkitSpeechRecognition();
        recognition.onstart = function(event) {
            updateRec();
        };
        recognition.onresult = function(event) {
            var text = "";
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                text += event.results[i][0].transcript;
            }
            setInput(text);
            stopRecognition();
        };
        recognition.onend = function() {
            stopRecognition();
        };
        recognition.lang = "en-US";
        recognition.start();
    }
    function stopRecognition() {
        if (recognition) {
            recognition.stop();
            recognition = null;
        }
        updateRec();
    }
    function switchRecognition() {
        if (recognition) {
            stopRecognition();
        } else {
            startRecognition();
        }
    }
    function setInput(text) {
        $("#input").val(text);
        send();
    }
    function updateRec() {
        $("#rec").text(recognition ? "Stop" : "Speak");
    }
function send() {
        var text = $("#input").val();
    conversation.push("Eu: " + text + '\r\n');
        $.ajax({
            type: "POST",
            url: baseUrl + "query?v=20150910",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            headers: {
                "Authorization": "Bearer " + accessToken
            },
            data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
            success: function(data) {
                var respText = data.result.fulfillment.speech;
                console.log("Respuesta: " + respText);
                setResponse(respText);
                $("#response").scrollTop($("#response").height());
            },
            error: function() {
                setResponse("Internal Server Error");
            }
        });
    }
    function setResponse(val) {
        //Edit "AI: " to change name
        conversation.push("Nina: " + val + '\r\n');
        $("#response").text(conversation.join(""));
    }
    var conversation = [];
</script>
    </head>
    
    <body>
            <div class="container">
        <div class="row">
             <div class="col-md-1"><img src="img/logo.png" alt="logo" class="logo">

        </div>            
        </div>
        <div class="container">
        <div class="row">
                     	<div class="col-md-3"><h1 class="h1">Olá!</h1><p class="text">Eu sou a Nina, a<br> assistente virtual<br> 
da Seguros Unimed.</p>
</div>

</div>            
        </div>

        <div class="row row-footer">
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4">

<div class="janelachat">
    
    <div class="bot">
  <textarea readOnly = true; id="response" cols="40" rows="20" style="resize: none;"></textarea>
  <br />
    <input id="input" type="text" placeholder="Digite aqui..." autocomplete="off" /><button id="rec">Enviar</button>
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

   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>