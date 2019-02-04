<html>
<head>
    <title>API Example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <style type="text/css">
        bot.body { width: 500px; margin: 0 auto; margin-top: 20px; }
        bot.div {  position: absolute; }
        bot.input { width: 400px; }
        bot.button { width: 50px; }
        bot.textarea { width: 100%; }
    </style>
</head>
<body>
    <div class="bot">
  <textarea readOnly = true; id="response" cols="40" rows="20" style="resize: none;"></textarea>
  <br />
    <input id="input" type="text" placeholder="Type here..." autocomplete="off" /><button id="rec">Speak</button>
    </div>
</body>
</html>