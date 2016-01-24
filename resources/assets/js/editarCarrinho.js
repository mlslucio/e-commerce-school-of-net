$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("input[name=qtd_item]").change(function() {

        var id =$(this).attr('id');
        var qtd = $(this).val();


        $("#alerta").css('display','block');


            $.post('alterarQtdItem', {'qtd':qtd, 'id':id}, function(data) {

            })
                .done(function(){

                    window.location.reload();

            });

        });
});





