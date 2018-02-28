<?php
ini_set("display_errors", "1");
error_reporting(E_ALL); 
require("doc2txt.class.php");

$docObj = new Doc2Txt("test.docx");
//$docObj = new Doc2Txt("test.doc");

$txt = $docObj->convertToText();
echo $txt;

$arr = explode('Name', $txt);
// foreach ($arr as $key => $value) {
	
// 	echo '<br>';
// 	if(filter_var($value, FILTER_VALIDATE_EMAIL)) {
//         echo $value;
//     }

// }
echo '<pre>';
print_r($arr);
?>