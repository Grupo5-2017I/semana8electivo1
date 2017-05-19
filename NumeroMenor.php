<html>

<script>
function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
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
       <title>Obtener el menor de 2 numeros naturales</title>
    </head>
     <center><h3>Obtener el menor de 2 numeros naturales</h3></center>
    <body bgcolor="orange">
        <form method="post">
            <center>
            <table>
                <tr>
                    <td><h3>Ingrese el Primer Numero :</h3></td><td><input name="nn1" type="text" size="30"  onKeyPress="return SoloNumeros(event)"></td>
                </tr>
                <tr>
                    <td><h3>Ingrese el Segundo Numero :</h3></td><td><input type="text" size="30" name="nn2"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="Calcular" name="ver"</td>
                </tr>
            </table>
            </center>
        </form>
    </body>
</html>
<?php
if($_POST['ver']!= ""){
   
    if($_POST['nn1']== ""){
        echo "<center><h3>Debe de ingresar el primer Numero !!!</h3></center>";
    }else{
       
        if($_POST['nn2']== ""){
            echo "<center><h3>Debe de ingresar el segundo Numero !!!</h3></center>";
        }else{
            $nnn1 = $_POST['nn1'];
            $nnn2 = $_POST['nn2'];
           
            if($nnn1 < $nnn2){
                echo "<center><h3>El numero Menor es : $nnn1 </h3></center><br>";
            }else if($nnn1 == $nnn2){
                echo "<center><h3>Los dos Numeros Son Iguales !!! <h3></center><br>";
            }else{
                echo "<center><h3>El numero Menor es : $nnn2 </h3></center><br>";
            }
        }
    }
   
}
?>
