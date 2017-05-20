<html>

<script>
function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango num�rico y que teclas no recibir�.
 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}
</script>


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Factorial de un n�mero natural</title>
    </head>
   
  <center><h2>Factorial de un n�mero natural</h2></center>
    <body bgcolor="orange">
        <form method="post">
            
            <form>
                <tr>
                    <td><h3>Ingrese N�mero :</h3></td><td><input name="numero" type="text" size="30"  onKeyPress="return SoloNumeros(event)"></td>
                </tr>
                
                <tr>
                    <td></td><td><input type="submit" value="Calcular" name="ver"</td>
                </tr>
            </form>
            
        </form>
    </body>
</html>

<?php
   if($_POST['ver']!= ""){
   
        if($_POST['numero']== ""){
                echo "<center><h3>Debe de ingresar Numero !!!</h3></center>";
        }else{

			          $numero=0;
$numero=$_POST["numero"];
$cont=0;
for ($i=1; $i <=$numero; $i++){
    if ($numero % $i==0){
        $cont= $cont+1;
        
    }
}
if ($cont==2){
    echo "<B>EL NUMERO ES PRIMO</B>";
}
else {
    echo "<B>El numero no es Primo </B>";
} 
    
			
			
		}
   }

?>
