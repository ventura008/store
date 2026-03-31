$(document).ready(function(){

    alert("Tudo funcionando");


    $("#meu").click(function(){

        $.ajax({
            url: "../api/cadastro_de_usuario" ,
            method: "POST",
            data: { 

                genero : $("#genero").val() ,
                nascimento: $("#nascimento").val(),
                telefone: $("#telefone").val(),
                senha: $("#senha").val(),
                email : $("#email").val() ,
                nome: $("#nome").val(),
                

             },

            success: function (res) {

                alert("Salvo com sucesso")
            },

        });

    });

});
