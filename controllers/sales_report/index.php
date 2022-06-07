<?php
require 'fpdf/fpdf.php';
require '../../configurations/config.php';
require '../../libraries/connection.php';
require '../../models/queries.php';
require '../../models/model.php';

use Models\Model;
$model = new Model();

$query = 'SELECT users_tbl.firstname,
        users_tbl.lastname,
        purchase_records_tbl.product_name,
        purchase_records_tbl.price,
        purchase_records_tbl.quantity,
        purchase_records_tbl.cost,
        purchase_records_tbl.date
        FROM purchase_records_tbl
        JOIN users_tbl
        ON purchase_records_tbl.user_id = users_tbl.id';
        
$data = $model->runQuery($query);
$cost = $model->runQuery($model->sumColumn('cost', 'purchase_records_tbl'));
$mkCost = number_format($cost[0]->sumOfRecords, 2);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Tyre Trove',0,0);
$pdf->Cell(59	,5,'Sales Report',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[Zekas, Road]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Blantyre, Malawi, ZIP]',0,0);
$pdf->Cell(25	,5,'Issued Date:',0,0);
$pdf->Cell(34	,5,'['.date('n/j/Y').']',0,1);//end of line

$pdf->Cell(130	,5,'Phone: 01 388 224 3',0,0);
$pdf->Cell(25	,5,'Report:',0,0);
$pdf->Cell(34	,5,'Daily Sales Report',0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'',0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50	,5,'Customer Name',1,0);
$pdf->Cell(46	,5,'Product',1,0);
$pdf->Cell(38	,5,'Price(MK)',1,0);
$pdf->Cell(25	,5,'Quantity',1,0);
$pdf->Cell(30	,5,'Amount(MK)',1,1);//end of line

$pdf->SetFont('Arial','',12);

// //Numbers are right-aligned so we give 'R' after new line parameter
foreach($data as $display){

        $pdf->Cell(50	,5,$display->firstname.' '.$display->lastname,1,0);
        $pdf->Cell(46	,5,$display->product_name,1,0);
        $pdf->Cell(38	,5,number_format($display->price, 2),1,0);
        $pdf->Cell(25	,5,$display->quantity,1,0);
        $pdf->Cell(30	,5,number_format($display->cost,2),1,1,'R');//end of line
}

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(29	,5,'Total Amount',0,0);
$pdf->Cell(30	,5, $mkCost,1,1,'R');//end of line

$pdf->Output();
?>
