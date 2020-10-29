<?php
$numero = rand(20, 30);


$emoticonos = [];
for ($i = 0; $i < $numero; $i++) {
    $emoticonos[$i] = rand(128000, 128060);
}

print "  <h2>$numero emoticonos</h2>\n";
print "\n";
print "  <p style=\"font-size: 400%; margin: 0;\">\n";
foreach ($emoticonos as $emoticono) {
    print "    &#$emoticono;\n";
}
print "  </p>\n";

// Emoticono a buscar
echo "<br>";

$busca = $emoticonos[array_rand($emoticonos)];
echo "<h2>el emoticono a eliminar es: </h2>";
print "  <p style=\"font-size: 400%; margin: 0;\">&#$busca;  </p>";

for ($i = 0; $i < $numero; $i++) {
    if($emoticonos[$i]==$busca){
        unset($emoticonos[$i]);
    }
}



// Mostramos el resultado 
print "  <h2>".count($emoticonos)." emoticonos</h2>\n";
print "  <p style=\"font-size: 400%; margin: 0;\">\n";
foreach ($emoticonos as $emoticono) {
    print "    &#$emoticono;\n";
}
print "  </p>\n";
?>
