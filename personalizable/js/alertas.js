//ALERTA DE CERRAR SESIÓN
function cerrarS(){
	swal({
		//title: "¿Desea cerrar sesión?",
		text: "¿Desea cerrar sesión?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
	if (willDelete) {
		swal("En segundos saldrá del sistema! ", {
			icon: "success",
		});
		setTimeout("location.href='../model/desconectar.php'", 1500);
		}else{
			//swal("Vuelva a seleccionar!");
			//mandar a recargar la pagina
			setTimeout("location.href='../view/indexUS.php'", 1500);
		}
	});
	//window.close();
}
