<?php
session_start();

$fname = $_SESSION['fname']; 
$email = $_SESSION['email']; 
?>

<?php

require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config1.php');
	
if(isset($_POST['Submit'])){

	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
	if(in_array($_FILES["file"]["type"],$mimes)){

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		
		$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

		$Reader = new SpreadsheetReader($uploadFilePath);

		$totalSheet = count($Reader->sheets());

		echo "You have total ".$totalSheet." sheets".

		$html="<table border='1'>";
		$html.="<tr><th>Title</th><th>Description</th>
		<th>Title</th><th>Description</th>
		<th>Title</th><th>Description</th>
		<th>Title</th><th>Description</th>
		<th>Title</th><th>Description</th>
		<th>Title</th>

		</tr>";


		/* For Loop for all sheets */
		for($i=0;$i<$totalSheet;$i++){

			$Reader->ChangeSheet($i);
			foreach ($Reader as $Row)
	        {
	        	$html.="<tr>";
				/* Check If sheet not emprt */
		        $Sr = isset($Row[0]) ? $Row[0] : '';
				$Name = isset($Row[1]) ? $Row[1] : '';
				$Code = isset($Row[2]) ? $Row[2] : '';
				$Reason = isset($Row[3]) ? $Row[3] : '';
				$tt = isset($Row[4]) ? $Row[4] : '';
				$Weekend = isset($Row[5]) ? $Row[5] : '';
				$Credit = isset($Row[6]) ? $Row[6] : '';
				$Debit = isset($Row[7]) ? $Row[7] : '';
				$Closing = isset($Row[8]) ? $Row[8] : '';
				$Type = isset($Row[9]) ? $Row[9] : '';
				$Nature = isset($Row[10]) ? $Row[10] : '';

				$html.="<td>".$Sr."</td>";
				$html.="<td>".$Name."</td>";
				$html.="<td>".$Code."</td>";
				$html.="<td>".$Reason."</td>";
				$html.="<td>".$tt."</td>";
				$html.="<td>".$Weekend."</td>";
				$html.="<td>".$Credit."</td>";
				$html.="<td>".$Debit."</td>";
				$html.="<td>".$Closing."</td>";
				$html.="<td>".$Type."</td>";
				$html.="<td>".$Nature."</td>";

				$html.="</tr>";

				$query = "insert into excel(Sr,Name,Code,Reason,tt,Weekend,Credit,Debit,Closing,Type,Nature) values('".$Sr."','".$Name."','".$Code."','".$Reason."','".$tt."','".$Weekend."','".$Credit."','".$Debit."','".$Closing."','".$Type."','".$Nature."')";
	 // echo $query;die();
				$mysqli->query($query);
	        }

		}

		$html.="</table>";
		echo $html;
		echo "<br />Data Inserted in dababase";

	}else { 
		die("<br/>Sorry, File type is not allowed. Only Excel file."); 
	}

}

?>