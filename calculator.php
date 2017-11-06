<html>
<body>
<?php
$Number1 = $_REQUEST["number1"];
$Number2 = $_REQUEST["number2"];
$cal=$_REQUEST['cal'];



if($cal=="sum")
{
echo $result = $Number1 + $Number2 ;

}
else if($cal=="mul")
{
echo $result = $Number1 * $Number2 ;

}
else if($cal=="divide")
{
echo $result = $Number1 / $Number2 ;

}
 else if($cal=="sub")
{
echo $result = $Number1 - $Number2 ;

}
 ?>

</body>
</html>