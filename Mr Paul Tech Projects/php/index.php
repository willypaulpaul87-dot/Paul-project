<?php
echo"Hello Tanzania wageni wetu";
// variables
echo "<br>";
$number1= 7;
$number2= 9;
echo $number1 < $number2;
echo "<br>";

// concatination variables
$firstname= "John";
$lastname="Paul";
echo "$firstname"." $lastname";
echo "<br>";
echo "<br>";

// contral statements
$num1= 8;
$num2= 9;
if($num1 > $num2){
    echo "Mkubwa";
}else{
    echo "Mdogo";
}
echo "<br>";
echo "<br>";

// 4 age chakeup
// kama ana miaka 4 ni mdogo
// kama ana miaka 5-12 "yupo shule ya msingi"
// kama aa miaka 13-18 "yupo shule ya sekondari"
// kama ana miaka 19 na zaidi " ni mtu mzima"

$age = "11";
if($age<=4){
    echo "Ni mdogo";
}else if($age>=5 && $age <=12){
    echo "Yupo shule ya msingi";
}else if($age >=13 && $age <=18){ 
    echo "Yupo shule ya sekondari";
}else{
    echo "Ni mtu mzima";
}
echo "<br>";
echo "<br>";

// Switch statements
$name = "John";
switch($name){
    case "John":
        echo "Jina lako ni John";
        break;
    case "Anna":
        echo "Jina lako ni Anna";
        break;
    case "Paul":
        echo "Jina lako ni Paul";
        break;
    case "Jane":
        echo "Jina lako nii Jane";
        break;
    default:
    echo "Sijui jina lako";
}
echo "<br>";
echo "<br>";
//repeatition statements
// for loops
//while loop
// do while loop

// for loop inatumika tukiwa tunajua mwisho wa kitu.

for($a =1; $a<=20; $a++){
    echo $a."<br>";
}
echo "<br>";
echo "<br>";

// while loop inafanya kazi kama hathui mwisho.

$a = 1;
while($a<=20){
 echo "*";
 $a++;
}

echo "<br>";
echo "<br>";

 // do while
 $a = 1;
 do{
    echo "$a";
    $a++;
 }while ($a<=10);

echo "<br>";
echo "<br>";

// php fuction


// nyongeza inyoongezewa paramatres

function jumlishaNamba(int $a, int $b){
    echo $a * $b;
}
$a = 10;
$b = 30;
echo jumlishaNamba($a,$b);

echo "<br>";
echo "<br>";

//Array

$Matunda = array("Machungwa", "maparachichi", "maparachichi");
echo $Matunda [2];

echo "<br>";
echo "<br>";

//OOP 
// Kwenye oop kuna vitu 2 (class na object) kwa mfano
// ukitaka kujenga nyumba
// Ramani ya nyumba ni - class
// Nyumba yenyewe ni - object

  

// inharitance
// hii ni parent class inherits its from parent class

class Vehicle{
    public $aina;
    public $rangi;

    public function washaGari(){
        return $this->rangi. " imewaka";
    }
}
class Motobicyle extends Vehicle{

}

$bicyle1 = new Motobicyle();
$bicyle1 -> rangi ="Nyeusi";
echo $bicyle1->washaGari();


?>