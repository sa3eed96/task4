const root = document.currentScript.getAttribute('root');
$(function(){

    $('#loginForm').submit(function(e){
        clearErrors();

        e.preventDefault();
        const formData = new FormData($('form')[0]);
        $.ajax({
            url: `${root}api/login.php`,
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(data){
            window.location.replace('/t4/');
        })
        .fail(function(err){
            const errors = $.parseJSON(err.responseText);
            for(err in errors){
                $(`#${err}Error`).text(errors[err]);
            };
        });
    });

    const clearErrors = ()=>{
        $(`#emailError`).text(''); 
        $(`#passwordError`).text(''); 
        $(`#serverError`).text('');
        
    };


});