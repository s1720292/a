<html>
	<head>
		<title>�؃g���̊�</title>
	</head>
	<body>
		<h1>�؃g���̊�</h1>

	</body>
	<p>�؃g���̃C���[�W</p>

<form 
	action="mission_2-3.php" method="post">

    	���O<input type="text" name="answer1" value="">

    	�R�����g<input type="text" name="answer2" value="">

    	<input type="submit" value="�𓚂���" name="registration">
</form>

<?php

//�A���T�[�P,�A���T�[�Q�̃t�H�[������遫
	if(isset($_POST['answer1'], $_POST['answer2'])) 
		{
//��̃A���T�[�̓��e��mission_2-3.txt�ɕۑ���(�^�u��؂�)
//a�łǂ�ǂ�ǉ��ۑ�
//\n�ŉ��s�\��
//\t�ŉ��s���Ȃ�
//.�Ō����A������""�ň͂�
    			$fp = fopen("mission_2-3.txt", "a");
    			$write_str =$_POST['answer1']."\t".$_POST['answer2']."\t".date("Y/m/d H:i:s");
    			fwrite($fp, $write_str."\n");
  			fclose($fp);
		}

// �t�@�C���̓��e��z��Ɏ�荞�݂܂��B
// ���̗�ł�HTTP��ʂ���URL���HTML�\�[�X���擾���܂��B
	$lines = file('mission_2-3.txt');

// �z������[�v����HTML��HTML�\�[�X�Ƃ��ĕ\�����A�s�ԍ������܂��B
	$line_num= 1;
	foreach ($lines as $line_num => $line)
 		{
    		$line_num++;	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}



?>

</html>
