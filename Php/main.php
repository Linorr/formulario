<?
function limpiarDato($dato)
{
  $dato = trim($dato);
  $dato = htmlspecialchars($dato);
  return $dato;
} 
$nombre = limpiarDato($_POST['nombre']);
$fecha =  limpiarDato($_POST['fecha']);
$fisio = limpiarDato($_POST['Recep']);
$turno =  limpiarDato($_POST['Turno']);
$spa = "no";
$utf8 = "MIME-Version: 1.0\r\nContent-type: text/html; charset=\"UTF-8\"\r\nContent-Transfer-Encoding: 8bit\r\n";
if (isset($_POST['sala']))
   $sala = "si";
$destino = "recepción@hotelazar.com";
$mensaje =" $nombre se ha reservado para el día $fecha con $recep durante el turno de $turno y $sala usará la Sala ";
if (mail( $destino, "Confirmación de reserva", $mensaje, $utf8))
    echo "Mensaje enviado";
else
    echo "error"
?>