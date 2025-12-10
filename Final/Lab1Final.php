<h4>1.Calculating the Area and Parameter of a Rectangle:</h4>
<?php
$Length=10;
$Width=15;
$Area=$Length*$Width;
$Parameter=2*($Length+$Width);
echo"Length: $Length <br>";
echo"Width: $Width <br>";
echo"The Area of Rectangle: $Area <br>";
echo"Parameter: $Parameter <br>";
?>

<h4>2.Calculating the Value Added Tax over an Amount:</h4>
<?php
$Amount=5000;
$Vat=$Amount*0.15;
echo"Amount: $Amount<br>";
echo"Value Added Tax: $Vat<br>";
?>

<h4>3.Showing a given Number is Odd or Even:</h4>
<?php
$num=25;
echo"Number: $num<br>";
if($num%2==0)
{
    echo"The given Number is Even";
}
else
{
    echo"The given Number is Odd.";
}
?>

<h4>4.Finding the Largest Number from three given Numbers:</h4>
<?php
$a=5;
$b=8;
$c=29;
echo"Three Numbers are:<br> a=$a <br> b=$b <br> c=$c <br>";
if($a>$b && $a>$c)
{
echo"a is the Largest Number<br>";
}
else if($b>$c)
{
    echo"b is the Largest Number<br>";
}
else
{
    echo"c is the Largest Number<br>";
}
?>

<h4>5.Printing all the Odd Numbers Between 10 and 100:</h4>
<?php
for($i=10;$i<=100;$i++)
{
    if($i%2!=0)
    {
        echo"The Odd Numbers are $i<br>";
    }   
}
?>
    
        
