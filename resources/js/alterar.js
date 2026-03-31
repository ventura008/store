$(document).ready(function(){

    alert("Tudo funcionando");


    $("#meu").click(function(){

        $.ajax({
            url: "../api/alterar_carro" ,
            method: "PUT",
            data: { 
                id_carro :$("#id_carro").val(),
                modelo : $("#modelo").val() ,
                email: $("#email").val(),
                cor: $("#cor").val(),
                ano: $("#ano").val(),
                placa : $("#placa").val() ,
                dono: $("#dono").val(),
                valor: $("#valor").val(),
                potencia: $("#potencia").val(),
                tipo_gasolina: $("#tipo_gasolina").val(),
                fabricante: $("#fabricante").val(),
                sobre: $("#sobre").val(),
                img: $("#img").val(),

             },
            success: function (res) {

                alert("Salvo com sucesso")
                console.log(res);
            },

        });

    });



});