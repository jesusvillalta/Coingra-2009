
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
</head>

<body>
 <form name="busqueda" method="post" action="a.php">

           <input id="submit" type="submit" value="Buscar" class="botonbuscar">
            </form>
			
			   <form name="datos" action="a.php" method="post">
   
	<p>nombre: <input type="text" name="nombre" tabindex="8"> Apellidos:<input type="text" name="apellidos"></p>
	<p> e-mail:<input type="text" name="email">
	Estado civil: <select name = "estado">
		<option value="soltero">soltero</option>
		<option value="casado">casado</option>
		<option value="divorciado">divorciado</option>
	</select><br />
	N&uacute;mero de hijos: 0 
	<input type="radio" name="hijos" value="0">
							1 <input type="radio" name="hijos" value="1">
							2 <input type="radio" name="hijos" value="2">
							3 <input type="radio" name="hijos" value="3"><br />
	Aficiones: Programacion <input type="checkbox" name="prog" value="si"><br />
							Dise&ntilde;o 
							<input type="checkbox" name="dise" value="si"><br />
	</p>

              <select name="tipos" id="tipos" tabindex="1" size="1">
				<option value="all">todos</option>
  				  							<option value="Piso">Piso</option>
  						  							<option value="Adosado">Adosado</option>
  						  							<option value="Apartamento">Apartamento</option>
				 </select>
              </p>
            <p class="subtitulos">Localidad</p>
              <select name="localida" id="localidad" tabindex="2">
				<option value="all">todos</option>
  				  							<option  selected value="GRANADA">GRANADA</option>
  						  							<option value="ATARFE">ATARFE</option>
  						  							<option value="ARMILLA">ARMILLA</option>
				 </select>
          <p class="subtitulos">Precio &#8364;</p>
            <select name="precio" id="precio" tabindex="3">
              <option selected>Todos</option>
              <option value="between 0 and 99999">menos de 100.000 &euro;</option>
            </select>
            <p>
              <input id="garaje" tabindex="6" type="checkbox" value="s">
              <span class="subtitulos">garaje</span></p>
			  

	<input type="submit">
   </form>
</body>
</html>
