$(document).on("click", "#btnModal", function(){
    var id =$(this).data("id");

    $.ajax({
            
            url: "FormUpdateUsers.php?codigo="+id
            
        })
        .done(function(data){
            $("#add  .modal-body").html(data);  
        })
        .fail(function(){

            console.log('fallo');
        }); 
        $('#add').modal('toggle');

});

function close(){
    const closeModal = document.getElementById('btnAdd');

    closeModal.style.remove("display: block");
    closeModal.style.add("display: none");
}


function mostrar(x){

    swal({
        title: "¿Estas Seguro?",
        text: "Una vez eliminado no se puede acceder a la informacion",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {

            swal("Listo!", "Usuario Eliminado con Exito!", "success")
            .then((value) => {
                window.location.replace('DeleteUsers.php?codigo='+x);
            }) 
        }
    });
}