const root = document.currentScript.getAttribute('root');

$(function(){
    $('#logout').click(function(){
        $.ajax(`${root}api/logout.php`)
        .done(function(data){
            window.location.replace(`${root}login.php`);
        });
    });
});