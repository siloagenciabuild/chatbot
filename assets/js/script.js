 var url     = "http://webapp77061.ip-45-56-127-189.cloudezapp.io:8002/api/message";
 
    var context = {};
    var input   = {};
    input.text = "";

    function DrawResponse(data)
    {
      context = data.context;
      console.log("Retorno", data);

       for(var x = 0; x<data.output.generic.length; x++)
        {
          if(data.output.generic[x]['response_type'] == 'text')
            $(".flowChat").append("<div class='flexRow'><img src='assets/img/nina.png' class='nina'><div class='botMsg'>"+data.output.generic[x]['text']+"</div></div>");
          else if(data.output.generic[x]['response_type'] == 'option')
          {
            var aux = "";
            for(var y=0;y<data.output.generic[x]['options'].length;y++)
            {
              aux += "<div class='col-md-6'><div class='btnOption' texto='"+data.output.generic[x]['options'][y]["value"]["input"]["text"]+"'>"+data.output.generic[x]['options'][y]["label"]+"</div></div>";
            }

            console.log(aux);

            $(".flowChat").append("<div class='flexRow'><img src='assets/img/nina.png' class='nina'><div class='botMsg'><div class='row'>"+aux+"</div></div></div>");

          }
        }
    }

    function BeginChat()
    {
          $.ajax({
            type: "POST",
            url: url,
            async: false,
            contentType: "application/json",
            beforeSend:function(){
              $(".userText").hide();
                $(".loading").show();
            },
            success: function (data) {
              DrawResponse(data);
              
              $(".loading").hide();
              $(".userText").show();
              $("#msgText").focus();
              
            },
            error: function(){

              alert("ta off");
            }
        });
    }

    function SendMsg()
    {

        $(".flowChat").append("<div class='flexRow'><div class='humanMsg'>"+$("#msgText").val()+"</div></div>");

        input.text = $("#msgText").val();

        $("#msgText").val('');


        $.ajax({
            type: "POST",
            url: url,
            async: false,
            data:JSON.stringify({"input":input,"context":context}),
            contentType: "application/json",
            beforeSend:function(){
                      
              
            },
            success: function (data) {

              DrawResponse(data);

              $(".flowChat").animate({ scrollTop: $('.flowChat').prop("scrollHeight")}, 1000);

              input = {};
              input.text = "";



              
            },
            complete: function(){
              window.setTimeout(function(){

                $(".loading").hide();
              $(".userText").show();
              $("#msgText").focus();

              },300)
              
            },
            done:function(){
              console.log("done");
            },
            error:  function(){
               $(".flowChat").append("<div class='flexRow'><div class='botMsg'>Desculpe, não entendi sua pergunta.</div></div>");
               $(".flowChat").animate({ scrollTop: $('.flowChat').prop("scrollHeight")}, 1000);


              $(".loading").hide();
              $(".userText").show();
              $("#msgText").focus();
            }
        });
    }

    $(document).ready(function(){

      BeginChat();

      $(document).on("click", '.btnOption', function(event) { 
    
        $("#msgText").val($(this).attr("texto"));
        $(".btnSendMsg").trigger("click");
    });

      $('#msgText').bind('keypress', function(e) {
          if(e.keyCode==13){
              $(".btnSendMsg").trigger("click");
          }
      });

      $(".btnSendMsg").click(function(e){

        e.preventDefault();

        if($.trim($("#msgText").val()) != "")
        {
          $(".userText").hide();
          $(".loading").show();
          SendMsg();
        }
      })
    })