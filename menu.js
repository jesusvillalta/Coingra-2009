//PARA ACTUALIZAR EL MENU CON NUEVAS CAPAS:
//añadir a las funciones main_menu(capa) y oculta() una linea por cada nueva capa que agreguemos en el menu.

function main_menu(capa) {
	//i vale hasta 3 para que me anule mediante clearTimeout(retardo) los 4 ultimos posibles setTimeout en cola para ejecutarse, 
	//ya que cada vez que se pasa por la capa ocultar se crea un setTimeout.
	var retardo, i=0;

	if(capa=='ocultar'){
		retardo = setTimeout("oculta()",5000);}
		
	else if(capa=='ocultaSinRetardo'){
		oculta();}
	else{
		// cada vez que creamos un setTimeout se crea un numero ej: 11111111 al que hay que referirse
		// como parámetro en la funcion cleartimeout para anularlo.

		// obtengo el siguiente numero de setTimeout creando uno nuevo, para poder anular los anteriores.
		retardo = setTimeout("oculta()",5000);
		
		// Anulo el que acabo de crear.
		clearTimeout(retardo);
		
		// Anulo los 4 anteriores
		for(i=0;i<4;i++){
			retardo-=1;
			clearTimeout(retardo);}
		// Fin anulacion
		
		//oculto todas las capas. 
		///////////////AÑADIR AQUÍ LAS NUEVAS CAPAS/////////////////
		document.getElementById("inicio").style.visibility="hidden";
		document.getElementById("prom").style.visibility="hidden";
		document.getElementById("cons").style.visibility="hidden";
		
		// muestro la que me entra como parametro.
		document.getElementById(capa).style.visibility="visible";}
}

function oculta() {
	//oculto todas las capas. 
	///////////////AÑADIR AQUÍ LAS NUEVAS CAPAS/////////////////
	document.getElementById("inicio").style.visibility="hidden";
	document.getElementById("prom").style.visibility="hidden";
	document.getElementById("cons").style.visibility="hidden";}
	

function popup(imagen,ancho,alto) {

	var ancho= parseInt(ancho)+40;
	var alto=parseInt(alto)+40;
	
	var prop_ventana = '"toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,top=0px,left=0px,width='+ ancho + 'px, height=' + alto + 'px"';
	var ventana=window.open(imagen,"popup",prop_ventana);
	
	if(ventana.closed==true)
		{
		ventana=window.open(imagen,"popup",prop_ventana);
		}
	else{
		ancho+=20;alto+=21;
		ventana.resizeTo(ancho,alto);
		ventana.location.href=imagen;
}
	ventana.focus();
	}