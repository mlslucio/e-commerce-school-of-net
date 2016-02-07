/**
 * Created by Mauro Lucio on 05/02/2016.
 */
$(document).ready(function(){


    $(':button[name=alterar_pedido]').click(function(){

        $(this).after("<p id='aguarde'> Aguarde </p> ");

        var id = $(this).val();
        $.post("alterarStatusPedido",{status:$("#select"+id).val(),idPedido:$(this).val()})

        .done(function(data) {

            $('#aguarde').html();
            $('#aguarde').html("<p id='sucesso'> Status alterado com sucesso. </p> ");

            setTimeout(function(){
                $('#aguarde').remove();
            }, 3000);



        });


    });

});
