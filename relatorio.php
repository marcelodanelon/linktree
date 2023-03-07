<?php
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$conteudo = '';

$conteudo .= '<table border="1" align="center">';
$conteudo .= "<thead>";
$conteudo .= "<tr align='center' bgcolor='#CDCDCD'>";
$conteudo .= "<td><b>Id</b></td>";
$conteudo .= "<td><b>Nome</b></td>";
$conteudo .= "<td><b>Profissão</b></td>";
$conteudo .= "<td><b>E-mail</b></td>";
$conteudo .= "</thead>";
$conteudo .= "</tr>";
include "conexao.php";
$sql = "select * from t_perfis";
$result = mysqli_query($conexao,$sql);
while($perfil = mysqli_fetch_assoc($result)){
    $id = $perfil['id'];
    $nome = $perfil['nome'];
    $profissao = $perfil['profissao']; 
    $email = $perfil['email'];

    $conteudo .= "<tr>";
    $conteudo .= "<td>$id</td>";
    $conteudo .= "<td>$nome</td>";
    $conteudo .= "<td>$profissao</td>";
    $conteudo .= "<td>$email</td>";
    $conteudo .= "</tr>";
}
$conteudo .= "</table>";

$dompdf->loadhtml($conteudo);

$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream('relatórioDePerfis.pdf');
?>