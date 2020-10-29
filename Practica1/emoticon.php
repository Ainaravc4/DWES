<?php
if ($_GET["ale"]>=128512&&$_GET["ale"]<=20128586)
    print "<p>&#".$_GET["ale"].";</p>";
else {
    echo "el numero introducido no es valido";
}
?>
