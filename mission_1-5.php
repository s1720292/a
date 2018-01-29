
<?php
//アンサー１、２、３のフォームを作る↓
if(isset($_POST['answer1'], $_POST['answer2'], $_POST['answer3'])) 

{

//上のアンサーの内容をmission_1-5.txtに保存↓(タブ区切り)
    $fp = fopen("mission_1-5.txt", "w");
    $write_str = $_POST['answer1']."\t".$_POST['answer2']."\t".$_POST['answer3'];
    fwrite($fp, $write_str);
    fclose($fp);

}

?>
