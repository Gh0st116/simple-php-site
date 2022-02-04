<?php
require_once("../TCPDF-main/tcpdf.php");
require_once("./connect.php");

$obj_pdf=new TCPDF ('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$obj_pdf->SetCreator (PDF_CREATOR);

$obj_pdf->SetTitle("Banco Toyota MySQL - TCPDF");

$obj_pdf->SetHeaderData('','60','Tabela Cadastro' );

$obj_pdf->setHeaderFont (Array (PDF_FONT_NAME_MAIN, '',PDF_FONT_SIZE_MAIN));

$obj_pdf->setFooterFont (Array (PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));

$obj_pdf->SetDefaultMonospacedFont ('helvetica');

$obj_pdf->SetHeaderMargin('15');

$obj_pdf->SetFooterMargin('30');

$obj_pdf->SetMargins (PDF_MARGIN_LEFT, '40', PDF_MARGIN_RIGHT) ;

$obj_pdf->setPrintHeader (true) ;

$obj_pdf->setPrintFooter (true) ;

$obj_pdf->SetAutoPageBreak (TRUE, 10) ;

$obj_pdf->SetFont ("helvetica",'',11);

$obj_pdf->AddPage();

// definindo colunas
$title = "Lista de Cadastros";
$cod = "Código";
$num = "Telefone";
$nome = "Nome";

$obj_pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

//Titulo relatorio
$obj_pdf->Cell(185, 15,$title, 1, 1, 'C', 0, '', 0);

//Cabeçalho relatorio
$obj_pdf->MultiCell(25, 5,''.$cod, 1, 'C', 1, 0, '', '', true);

$obj_pdf->MultiCell(50, 5,''.$nome, 1, 'C', 1, 0, '', '', true);

$obj_pdf->MultiCell(55, 5,''.$num, 1, 'C', 1, 0, '', '', true);

$obj_pdf->MultiCell(55, 5,'', 1, 'C', 1, 1, '', '', true);

$sql="SELECT * FROM cadastro";

// executa o comando select
$result=mysqli_query($connection,$sql);

//dados do relatorio
while ($linha = mysqli_fetch_row($result))
{
$obj_pdf->writeHTMLCell(25, 0, '', '', $linha[0], 1, 0, 0, true, '', true);
$obj_pdf->writeHTMLCell(50, 0, '', '', $linha[1], 1, 0, 0, true, '', true);
$obj_pdf->writeHTMLCell(55, 0, '', '', $linha[2], 1, 0, 0, true, '', true);
$obj_pdf->writeHTMLCell(55, 0, '', '', $linha[3], 1, 1, 0, true, '', true);
}
/*limpar/iniciar o buffer de saída que gera o arq. PDF para evitar o erro
TCPDF ERROR: Some data has already been output, can't send PDF file*/
ob_start ();
//gerar o relatório para tela (I) gerar relatorio PDF para arquivo (D)
$obj_pdf->Output('../php/relatorio.pdf','I');
?>