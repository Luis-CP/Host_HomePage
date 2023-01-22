<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 
class  coche{
var   $ruedas;
var  $color;

var  $motor;
function coche(){ ///contructor
this->ruedas=4;
this->color="";
this->motor=1600;
}
function arrancar(){
echo "estoy arrancado";

}
function girar(){
echo "estoy girando";
	
}
function frenar(){
echo "estoy frenad";
	
}
}
$nissan=new coche();
$renault=new coche();
$nissan->girar();

 ?>
</body>
</html>