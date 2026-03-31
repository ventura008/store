$(document).ready(function(){

    alert("Tudo funcionando");


    $("#meu").click(function(){

        $.ajax({
            url: "../api/login_novo" ,
            method: "GET",
            data: { 

            
                senha: $("#senha").val(),
                email : $("#email").val() ,
                
                

             },

            success: function (response) {

                
                console.log(response)
                
                if(response['erro'] == 'n'){
                  
                    alert("logado com sucesso!");



                      $.cookie('token',response['token'],{expire:7});

                        setTimeout(function(){
                            window.location.href="/home";
                        }, 2000);




                }else{

                    alert("email ou senha incorretos!");
                }

            
            },

        });

    });

});
