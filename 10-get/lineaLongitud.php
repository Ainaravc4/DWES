<?php
$longitud = rand(10, 100);

print "  <p>Longitud: $longitud</p>";

print "    <svg width=\"" . $longitud . "px\" >";
print "    <line  x2=\"$longitud\" stroke=\"black\" stroke-width=\"10\" />";
print "    </svg>";

?>

