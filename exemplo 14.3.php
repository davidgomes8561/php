<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Exemplo 12</h1>
<?php
function testStatic() {
static $a;
$a=25;
}
echo"<h1>Variavel estatica </h1>";
echo"<valor da variavel a=".testStatic();
echo"valor da variavel a=".testStatic();
?>
</body>
</html>
