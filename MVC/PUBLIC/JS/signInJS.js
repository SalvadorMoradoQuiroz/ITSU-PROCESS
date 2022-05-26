document.addEventListener('DOMContentLoaded', function (e) {

    $('#formRegister').submit(function(ob){
        ob.preventDefault();
        console.log($(this).serialize());
        $.ajax({
            type:'POST',
            url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/createUser.php', 
            data:$(this).serialize(),
            //type:'text/json',
            success: function (response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                alert(jsonData);
            }
        });
    });

});