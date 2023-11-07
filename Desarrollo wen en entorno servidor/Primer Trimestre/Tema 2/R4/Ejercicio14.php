<?php
$telefono = "123-456789";

// Comprobamos que la cadena tiene 9 dígitos y está en el formato NNN-NNNNNN
if (preg_match("/^\d{3}-\d{6}$/", $telefono)) {
  echo "El número de teléfono es válido";
} else {
  echo "El número de teléfono no es válido";
}
?>
