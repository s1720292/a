
<?php

//アンサー１のフォームを作る↓
if(isset($_POST['answer1'])) 
{
//上のアンサーの内容をmission_1-6.txtに保存↓(タブ区切り)
    $fp = fopen("mission_1-6.txt", "a");
    $write_str = $_POST['answer1']."\t";
    fwrite($fp, $write_str."\n");
    fclose($fp);

	//$fp = fopen("mission_1-6.txt", "r");
	//$write_str = $_POST['answer1']."\t";
    	//fwrite($fp, $write_str);
	//while ($line = fgets($fp))
	//	{
  	//		echo "$line<br />";
	//	}
	//fclose($fp);
}

?>