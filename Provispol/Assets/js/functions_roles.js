var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
<<<<<<< HEAD
    tableRoles = $('#tableRoles').dataTable({
=======
    tableRoles = $('#tableRoles').dataTable( {
>>>>>>> 8382d1ec36af96ecec6ccb28b4a609111cadcbd9
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

<<<<<<< HEAD
    var formRol = document.querySelector("#formRol");

=======
    //NUEVO ROL
    var formRol = document.querySelector("#formRol");
>>>>>>> 8382d1ec36af96ecec6ccb28b4a609111cadcbd9
    formRol.onsubmit = function(e) {
        e.preventDefault();

        var strNombre = document.querySelector("#txtNombre").value;
        var strDescripcion = document.querySelector("#txtDescripcion").value;
        var intStatus = document.querySelector("#listStatus").value;
<<<<<<< HEAD

        if (strNombre === '' || strDescripcion === '' || intStatus === '') {
            
            Swal.fire("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Roles/setRol'; 
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    Swal.fire("Roles de usuario", objData.msg ,"success");
                    tableRoles.api().ajax.reload(function(){ 
                        
                    });
                }else{
                    Swal.fire("Error", objData.msg , "error");
                }  
            }
=======
        if(strNombre == '' || strDescripcion == '' || intStatus == '')
        {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
              });
>>>>>>> 8382d1ec36af96ecec6ccb28b4a609111cadcbd9
        }
    }
});

$('#tableRoles').DataTable();

function openModal(){
    $('#modalFormRol').modal('show');
}