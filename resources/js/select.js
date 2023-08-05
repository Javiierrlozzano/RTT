$(function(){
    $('#Ciclos').on('change',onSelectRuta);
    
});
function onSelectRuta(){
    var  ciclo_id = $(this).val();
    if (ciclo_id==null) {
        document.getElementById('Buscar').disabled = false;
        document.getElementById('Crear').disabled = false;
    }else{
        document.getElementById('Buscar').disabled = true;
        document.getElementById('Crear').disabled = true; 
    }
    if(!ciclo_id){
        $('#Ruta').html('<option value ="">SeleccioneRuta</option>');
        return
    }
    $.get('catastros/'+ciclo_id+'/rutas',function(data){
        var html_select ='<option value ="">SeleccioneRuta</option>';
        for(var i=0;i<data.length ;++i){
            html_select +='<option value ="'+data[i].id+'">'+data[i].NombreRuta+'</option>';
            $('#Ruta').html(html_select);
        }
    });
}

$(function (){
    $('#Ruta').on('change',onSelectSub);
});
function onSelectSub(){
    var  ruta_id = $(this).val();
    
    if(!ruta_id){
        $('#Ruta').html('<option value ="">SeleccioneRuta</option>');
        document.getElementById('Buscar').disabled = true;
        document.getElementById('Crear').disabled = true; 
        return
    }else{
        document.getElementById('Buscar').disabled = false;
        document.getElementById('Crear').disabled = false; 
    }
    
 
}

$(function (){
    $('#Crear').on('click',Create);
});
function Create(){
    var rutas_id = $('#Ruta').val();
    window.location.href = 'catastros/'+rutas_id+'/creates';
}

$(function(){
    $('#Buscar').on('click',Buscar);
});
function Buscar(){
    var rutas_id = $('#Ruta').val();
    
    window.location.href = '../public/catastros/'+rutas_id+'/Buscar';
}