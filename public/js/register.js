const root = document.currentScript.getAttribute('root');
$(function(){

    $('#registerForm').submit(function(e){
        e.preventDefault();
        clearErrors();
        const formData = new FormData($('form')[0]);
        $.ajax({
            url: `${root}api/register.php`,
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(data){
            $('#successMsg').text('Thank you for registering with us!');
            setTimeout(() => {
                window.location.replace(`${root}`);
            }, 2000);
        })
        .fail(function(err){
            const errors = $.parseJSON(err.responseText);
            for(err in errors){
                $(`#${err}Error`).text(errors[err]);
            };
        });
    });

    const clearErrors = ()=>{
        $(`#nameError`).text('');
        $(`#emailError`).text(''); 
        $(`#passwordError`).text(''); 
        $(`#numberError`).text('');
        $(`#addressError`).text('');
    };

});