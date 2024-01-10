var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
    tableRoles = $('#tableRoles').dataTable( {
		"aProcessing":true, 
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Roles/getRoles",
            
            "dataSrc":""
        },
        "columns":[
            {"data":"idrol"},
            {"data":"nombrerol"},
            {"data":"descripcion"},
            {"data":"status"},
            {"data":"options"}
        ],
        "responsive":true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

    //NUEVO ROL
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e) {
        e.preventDefault();

        var strNombre = document.querySelector("#txtNombre").value;
        var strDescripcion = document.querySelector("#txtDescripcion").value;
        var intStatus = document.querySelector("#listStatus").value;
        if(strNombre == '' || strDescripcion == '' || intStatus == '')
        {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
              });
        }
    }
});

$('#tableRoles').DataTable();

function openModal(){
    $('#modalFormRol').modal('show');
}