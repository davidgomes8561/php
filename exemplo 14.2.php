<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Exemplo 14.2</h1>
<?
function teste global(){
 global $a;
$a=25;
}
echo"<h1>variavel global</h1>";
$a=0;
testeglobal();
echo"valor da variavel a=$a";
?>
</body>
</html>
