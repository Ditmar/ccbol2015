//Desarrollo de modulos javascript especificos para el sitio
//Modulos desarrollados a partir de jquery

//variable global que define en que vista se encuentra el usuario
//teniendo en cuenta la vista cargada por medio de un controlador
$donde_estoy="principal";

jQuery(document).ready(function($) {
	//Controlando el  estilo del menu
	setCssSelectClass();
	$("#mainmenu li").each(function(index, el) {
		$(el).click(function(event) {
			//event.preventDefault();
			//alert(donde_estoy);
		});
	});
});
var setCssSelectClass=function() {
	var value  = $("#menuSelection").val();
	donde_estoy = value;
	var values = Array();
	// recorrer menu
	$("#mainmenu li").each(function(index, el) {
		if ($(el).attr("id")!="") {
			values.push( $(el).attr("id") );
		}
	});
	for ( var i=0;i<values.length;i++ ) {
		$("#"+values[i]).removeClass('active');		
	}
	for ( var i=0;i<values.length;i++ ) {
		if(value==values[i])
		{
			$("#"+values[i]).addClass('active');
			return;
		}
	}

};