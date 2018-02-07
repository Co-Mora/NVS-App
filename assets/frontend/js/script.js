$(document).ready(function() {

    $('.star-button').click(function(){
        if(!$(this).hasClass('star-button-change'))
            $(this).addClass('star-button');
            $(this).toggleClass('star-button-change');
    });

    $('a.btn-all').click(function(){
        if(!$(this).hasClass('star-button-change'))
            $('.star-button').addClass('star-button-change');
    });

    $("#first-button").click(function(){
        var intrest = 87;
        var p = 22;
        $("#result").val(intrest  +p);


    });

    $('.submit-button').click(function(){
        swal("Submit it Successfully", "we sending message for you", "success");

    });


});

