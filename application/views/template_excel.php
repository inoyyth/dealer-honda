<?php 
header('Content-Type: application/force-download');
header('Content-disposition: attachment; filename='.$file_name.'.xls');
$this->load->view($template_excel,$data);
header("Pragma: ");
header("Cache-Control: ");
//echo $_REQUEST['datatodisplay'];
?>