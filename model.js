$(document).on('click', '#read', function(e){
    console.log('read click');
    $('.modal').addClass('modal_active');
})

$(document).on('click', '#edit', function(e){
    console.log('read click');
    $('.modal_edit').addClass('modal_active');
})

$(document).on('click', '#modal__close-button', function(e){
    console.log('read click');
    $('.modal').removeClass('modal_active');
})