// cupdate categorias
(function(){
    var divs =$(".update");

    for (var i=0; i< divs.length; i++) {
        divs[i].addEventListener("click",function() {
            $("#myModal").modal();
            // ***********Recupera,mos los valores de cada fila ***********************
           var nombre      = $(this).parents('div').parents('td').siblings('#nombre').text();
           var descripcion = $(this).parents('div').parents('td').siblings('#descripcion').text();
           var condicion   = $(this).parents('div').parents('td').siblings('#condicion').text();
           var id          = $(this).parents('div').parents('td').siblings('#id').text();
           
           // ***************Asignamos valores al formulario***************************

           $("#i_nombre").val(nombre);
           $("#t_descripcion").val(descripcion);
           $("#i_condicion").val(condicion);
           $("#i_id").val(id);
        });
    }
 })(); 

// delete categorias
(function(){
    var divs = $('.delete');
    for (var i=0; i< divs.length; i++) {
        divs[i].addEventListener("click",function() {
            $("#modalDelete").modal();
            // ***********Recupera,mos los valores de cada fila ***********************
           const id      = $(this).parents('div').parents('td').siblings('#id').text();
           $("#d_id").val(id);//input del form delete  
        });
    }
    
})();