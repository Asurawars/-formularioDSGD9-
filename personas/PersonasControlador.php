<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();

		$sql="SELECT * FROM datos_personales";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
	 mysqli_close($conex);
		header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}//fin de la funcion index

   static function controlador ($operacion)
     {
		$persona=new PersonasControlador();
	switch ($operacion) {
		case 'index':
			$persona->index();
			break;
		case 'registrar':
			$persona->registrar();
			break;
		case 'guardar':
			$persona->guardar();
			break;
		case 'modificar':
			$persona->modificar();
			break;
		case 'actualizar':
			$persona->actualizar();
			break;
		case 'eliminar':
			$persona->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
	}//fin del switch
}//fin del controlador

    public function registrar()
       {
       	header("location: registrar.php");
       }//fin de registrar

       public function guardar(){
       	extract($_POST);//extrayendo variables del formulario 
       	$db=new clasedb();
       	$conex=$db->conectar();//conectado con la base de datos

       	$sql="SELECT * FROM datos_personales WHERE dni=".$dni."";
       	$res=mysqli_query($conex,$sql);
       	$cuantos=mysqli_num_rows($res);
       	if ($cuantos>0) {
       		?> <script type="text/javascript">
       			alert("La Cedula Ya Existe");
       			window.location="PersonasControlador.php?operacion=registrar";
       		</script>
       		<?php
       	} else {
       		$sql="INSERT INTO datos_personales(first name,last name,dni) VALUES ('".$nombres."','".$apellidos."',".$dni.")";
       		$result=mysqli_query($conex,$sql);
       		if ($result) {
       			?>
       			<script type="text/javascript">
       				if (confirm("Registro Existoso, Desea Resgitrar Otro")) {
       					window.location="PersonasControlador.php?operacion=index";
       				}else{
       					window.location="PersonasControlador.php?operacion=index";
       				}
       			</script>
       			<?php
       		} else {
       			?> 
       			<script type="text/javascript">
       				if (confirm("Registro Fallido, Desea Volver A Intentarlo")){
       					window.location="PersonasControlador.php?operacion=index";
       				} else {
       					window.location="PersonasControlador.php?operacion=index";
       				}
       			</script>
       			<?php
       		}
       	 }//cierre del else de $result = true 
       }//fin de la funcion guardar

	public function modificar() 
	  {
	   extract($_REQUEST);//extrayendo valores de url
	   $db=new clasedb();
	   $conex=$db->conectar();//conectando con la base de datos

	   $sql="SELECT * FROM datos_personales WHERE id=".$id_persona."";
	   $res=mysqli_query($conex,$sql);//ejecutando consulta
	   $data=mysqli_fetch_array($res);//extrayendo datos en array
	   header("Location: editar.php?data=".serialize($data));
	  }//Fin de la funcion modificar

	  public function actualizar()
	{
      extract($_POST);//extrayendo variables del formulario
	  $db=new clasedb();
	  $conex=$db->conectar();//conectando con la base de datos

	  $sql="SELECT * FROM datos_personales WHERE dni=".$dni."AND id<>".$id_persona;
	//echo $sql;
	$res=mysqli_query($conex,$sql);
	$cant=mysqli_num_rows($res);//trae los registros de la consulta
		if ($cant>0) {
		?>
		   <script type="text/javascript">
		      alert("DNI Ya Registrado");			        	   	
		      window.location="PersonasControlador.php?operacion=index";			       
		   </script>	   	 	   
		<?php			        	   
	}else{

	$sql="UPDATE datos_personales SET first_name='".$first_name."',last_name='".$last_name."',dni=".$dni." WHERE id=".$id_persona;
		$res=mysqli_query($conex,$sql);}
		    if ($res) {
		    	?>
		    	 <script type="text/javascript">
		    	 	alert("Registro Modificado");
		    	 	window.location="PersonasControlador.php?operacion=index";
		    	 </script>
		    	<?php
		    } else {
		    	?> 
		    	 <script type="text/javascript">
		    	 	alert("Error Al Modificar Registro");
		    	 	window.location="PersonasControlador.php?operacion=index";
		    	 </script>
		    	<?php
		      }
       }//fin de la funcion actualizar

       public function eliminar()
       {
       	extract($_REQUEST);//extrayendo variables del url
       	$db=new clasedb();
       	$conex=$db->conectar();//conectando la base de datos

       	$sql="DELETE FROM datos_personales WHERE id=".$id_persona;

       	  $res=mysqli_query($conex,$sql);
       	  if ($res) {
       	   	?> 
       	   	   <script type="text/javascript">
       	   	   	alert("Registro Eliminado");
       	   	   	window.location="PersonasControlador.php?operacion=index";
       	   	   </script>
       	   	<?php
       	   } else {
       	   	?>
       	   	   <script type="text/javascript">
       	   	   	alert("Registro No Eliminado");
       	   	   	window.location="PersonasControlador.php?operacion=index";
       	   	   </script>
       	   	<?php
       	   }
       }//fin de la funcion eliminar 
   }//fin de la clase
{PersonasControlador::controlador($operacion);}