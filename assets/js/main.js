$(document).ready(function() {
    console.log("ready");

    new DataTable('#example', {
        order: [[3, 'desc']]
    });
    
    $("#confirm-form").on("submit", function(e){
        e.preventDefault();
        
        var datos = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: $("#confirm-form").attr('action'),
            data: datos,
            success: function(respuesta) {
                Swal.fire("Reserva realizada con exito!").then((result) => {
                    setTimeout(function() {
                        window.location.href = '/account';
                    }, 3000);
                });
                
            }
        });
    });

    $("#form-register").on("submit", function(e){
        e.preventDefault();
        
        var datos = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: $("#form-register").attr('action'),
            data: datos,
            success: function(respuesta) {
                if(respuesta=="1"){
                    Swal.fire("Registro con exito!").then((result) => {
                        setTimeout(function() {
                            window.location.href = 'login';
                        }, 3000);
                    });
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Algo salio mal, por favor vuelve a intentar!"
                    });
                }
                
                
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });

    $("#form-login").on("submit", function(e){
        e.preventDefault();
        
        var datos = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: $("#form-login").attr('action'),
            data: datos,
            success: function(res) {
                dato = JSON.parse(res);
                if(dato.tipo=='success'){
                    Swal.fire("Bienvenido!").then((result) => {
                        setTimeout(function() {
                            window.location.href = '/hotel';
                        }, 3000);
                    });
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: dato.msg
                    });
                }
                
                
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});