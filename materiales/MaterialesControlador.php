<?php
include("../clasedb.php");
extract($_REQUEST);

class MaterialesControlador
{
	public function index(){
		
		extract($_REQUEST);

		$db=new clasedb();//instanciando clase db
		$conex=$db->conectar();//conectando co la base de datos

		$sql="SELECT * FROM registrar_materiales";

		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos traer la consulta
		$filas=mysqli_num_rows($res);//cuantos registro trae la consulta
		$i=0;
		$datos[]=array();//Inicializando array
        //extrayendo datos
        while($data=mysqli_fetch_array($res)){
        	for ($j=0; $j <$campos ; $j++) { 
        		$datos[$i][$j]=$data[$j];
 	        }
 	        $i++;
        }
       mysqli_close($conex);
           header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}//fin de la funcion index

    public function registrar()
       {
       	header("location: registrar.php");
       }//fin de registrar

       public function guardar(){
       	extract($_POST);//extrayendo variables del formulario 
       	$db=new clasedb();
       	$conex=$db->conectar();//conectado con la base de datos

       	$sql="SELECT * FROM registrar_materiales WHERE nombre=".$nombre."";
       	$res=mysqli_query($conex,$sql);
       	$cuantos=mysqli_num_rows($res);
       	if ($cuantos>0) {
       		?> <script type="text/javascript">
       			alert("El Material Ya Existe");
       			window.location="MaterialesControlador.php?operacion=registrar";
       		</script>
       		<?php
       	} else {
       		$sql="INSERT INTO registrar_materiales
       		(nombre,tipo,peso,longitud,utilidad) VALUES 
       		('".$nombre."','".$tipo."',".$peso.",".$longitud.",".$utilidad.")";
       		$result=mysqli_query($conex,$sql);
       		if ($result) {
       			?>
       			<script type="text/javascript">
       				if (confirm("Registro Existoso, Desea Resgitrar Otro")) {
       					window.location="MaterialesControlador.php?operacion=index";
       				}else{
       					window.location="MaterialesControlador.php?operacion=index";
       				}
       			</script>
       			<?php
       		} else {
       			?> 
       			<script type="text/javascript">
       				if (confirm("Registro Fallido, Desea Volver A Intentarlo")){
       					window.location="MaterialesControlador.php?operacion=index";
       				} else {
       					window.location="MaterialesControlador.php?operacion=index";
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

	   $sql="SELECT * FROM registrar_materiales WHERE id=".$id_materiales."";
	   $res=mysqli_query($conex,$sql);//ejecutando consulta
	   $data=mysqli_fetch_array($res);//extrayendo datos en array
	   header("Location: editar.php?data=".serialize($data));
	  }//Fin de la funcion modificar

	  public function actualizar()
	{
      extract($_POST);//extrayendo variables del formulario
	  $db=new clasedb();
	  $conex=$db->conectar();//conectando con la base de datos

      	$sql="SELECT * FROM registrar_materiales WHERE nombre=".$nombre." AND id<>".$id_materiales;
      	//echo $sql;
       
       	$res=mysqli_query($conex,$sql);
       	$cuantos=mysqli_num_rows($res);
       	if ($cuantos>0) {
       		?> <script type="text/javascript">
       			alert("El Material Ya Existe");
       			window.location="MaterialesControlador.php?operacion=index";
       		</script>
       		<?php
       	} else {
	
	$sql="UPDATE registrar_materiales SET nombre='".$nombre."',tipo='".$tipo."',peso=".$peso.",longitd='".$longitud."',utilidad='".$utilidad."' WHERE id=".$id_materiales;
	$res=mysqli_query($conex,$sql); }
            if ($res) {
		    	?>
		    	 <script type="text/javascript">
		    	 	alert("Registro Modificado");
		    	 	window.location="MaterialesControlador.php?operacion=index";
		    	 </script>
		    	<?php
		    } else {
		    	?> 
		    	 <script type="text/javascript">
		    	 	alert("Error Al Modificar Registro");
		    	 	window.location="MaterialesControlador.php?operacion=index";
		    	 </script>
		    	<?php
		      }
       }//fin de la funcion actualizar

       public function eliminar()
       {
       	extract($_REQUEST);//extrayendo variables del url
       	$db=new clasedb();
       	$conex=$db->conectar();//conectando la base de datos

       	$sql="DELETE FROM registrar_materiales WHERE id=".$id_materiales;

       	  $res=mysqli_query($conex,$sql);
       	  if ($res) {
       	   	?> 
       	   	   <script type="text/javascript">
       	   	   	alert("Registro Eliminado");
       	   	   	window.location="MaterialesControlador.php?operacion=index";
       	   	   </script>
       	   	<?php
       	   } else {
       	   	?>
       	   	   <script type="text/javascript">
       	   	   	alert("Registro No Eliminado");
       	   	   	window.location="MaterialesControlador.php?operacion=index";
       	   	   </script>
       	   	<?php
       	   }
       }//fin de la funcion eliminar
       static function controlador ($operacion)
     {
		$materiales=new MaterialesControlador();
	switch ($operacion) {
		case 'index':
			$materiales->index();
			break;
		case 'registrar':
			$materiales->registrar();
			break;
		case 'guardar':
			$materiales->guardar();
			break;
		case 'modificar':
			$materiales->modificar();
			break;
		case 'actualizar':
			$materiales->actualizar();
			break;
		case 'eliminar':
			$materiales->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="MaterialesControlador.php?operacion=index";
				</script>
			<?php
			break;
	   }//fin del switch
     }//fin del controlador 
   }//fin de la clase
{MaterialesControlador::controlador($operacion);}