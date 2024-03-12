     $("#registro").submit(function () {  
    if($("#nombre").val().length < 1) {  
        alert("Complete el campo 'Nombres' antes de continuar.");  
        return false;  
    }  
    return false;  
});  
     $("#registro").submit(function () {  
    if($("#mail").val().length < 1) {  
        alert("Complete el campo del 'Correo electrónico' antes de continuar.");  
        return false;  
    }  
    return false;  
});  
     $("#registro").submit(function () {  
    if($("#telefono").val().length < 1) {  
        alert("Complete el campo del 'Teléfono' antes de continuar.");  
        return false;  
    }  
    return false;  
});  