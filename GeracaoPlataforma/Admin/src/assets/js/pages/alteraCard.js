$(document).ready(function () {
    $("button.plus").on("click", function () {
        var newCard = $('#cardPrototype').clone(true); // clone the card html
        $(newCard).css('display','block').removeAttr('id');
        $('#newCardHolder').append(newCard);
    });
    
    $('body').on('click','.card',function(){ // event delegation syntax
      $(this).find('form').show();    
    });
});