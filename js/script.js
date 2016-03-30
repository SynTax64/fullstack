$(document).ready(function () {
    $('#insertEmployee').click(function () {
        $(".insert-Employee-Modal").show();
    });

    $('#insertItem').click(function () {
        $(".insert-Item-Modal").show();
    });

    $('#insertInvoice').click(function () {
        $(".insert-invoice-Modal").show();
    });

    $("#saldo").click(function(event){
        $.ajax({
            url: 'result.txt',
            success:function(data){
                alert(data);
            }
        })
    })
});