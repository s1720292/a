
<?php

//�A���T�[�P�̃t�H�[������遫
if(isset($_POST['answer1'])) 
{
//��̃A���T�[�̓��e��mission_1-6.txt�ɕۑ���(�^�u��؂�)
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