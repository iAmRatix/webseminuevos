    <?php 

// Guardamos el contenido de contenido.php en la variable html

session_start();


$html = $_SESSION['html'];


// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();


$_SESSION['dompdf'] = $dompdf;
header("location: enviarlocal.php");



// Output the generated PDF to Browser
// $dompdf->stream();




?>