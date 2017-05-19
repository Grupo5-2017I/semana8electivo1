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
        <title>Factorial de un número natural</title>
    </head>
   
  <center><h2>Factorial de un número natural</h2></center>
    <body bgcolor="orange">
        <form method="post">
            
            <form>
                <tr>
                    <td><h3>Ingrese Número :</h3></td><td><input name="nn1" type="text" size="30"  onKeyPress="return SoloNumeros(event)"></td>
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
   
        if($_POST['nn1']== ""){
                echo "<center><h3>Debe de ingresar Número !!!</h3></center>";
        }else{

            if($_POST['nn1']<= "0"){
                    echo "<center><h3>El número debe ser mayor a cero !!!</h3></center>";
            }else{

                $factorial= $_POST['nn1'];

                echo "<hr>"."<hr>"."Número Factorial"." - ".""."$factorial";

                $svar=1;

                for($matte=2; $matte<=$factorial; $matte++){

                $svar=$svar * $matte;

                }
                echo " = ".$svar;
            }	
        }
    }
   

?>
