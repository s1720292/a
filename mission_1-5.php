
<?php
//�A���T�[�P�A�Q�A�R�̃t�H�[������遫
if(isset($_POST['answer1'], $_POST['answer2'], $_POST['answer3'])) 

{

//��̃A���T�[�̓��e��mission_1-5.txt�ɕۑ���(�^�u��؂�)
    $fp = fopen("mission_1-5.txt", "w");
    $write_str = $_POST['answer1']."\t".$_POST['answer2']."\t".$_POST['answer3'];
    fwrite($fp, $write_str);
    fclose($fp);

}

?>
