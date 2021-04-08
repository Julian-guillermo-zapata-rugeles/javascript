<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="master.css">
		<title>Cambiando Valores</title>
	</head>
	<body>
		<center>


			<script type="text/javascript">
					function cambiar_titulo(nuevo_valor){
						var  aleatorio = Math.floor(Math.random() * 8);
						var colores = ["blue","pink","red","green","yellow","purple","gray","black"];
						var color = colores[aleatorio];
						/*window.alert(color);*/
						document.getElementById('titulo').innerText = nuevo_valor;
						document.getElementById('mi_texto').value = "";
						/*document.getElementById('titulo').style["font-size"] = "60px";*/
						document.getElementById('titulo').style.setProperty('font-size','50px',)
						document.getElementById('titulo').style.setProperty('color',color,);
					}
			</script>


			<h3 id="titulo"></h3>

			<form class="formulario" action="index.html" method="post">
				<input id="mi_texto" type="text" name="mi_texto" value="" placeholder="ingrese un valor para reemplazar " required>
				<br>
				<input class="btn_aceptar" type="button" name="subir" value=" cambiar " onclick="cambiar_titulo(this.form.mi_texto.value)" >
			</form>
		</center>
	</body>
	<script type="text/javascript">
		document.getElementById('titulo').style["font-size"] = "50px";
	</script>
</html>
