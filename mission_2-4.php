<html>

	<head>

		<title>��</title>
	</head>

	<!���̓t�H�[�����쐬����>
	
		<form 
		
		action="mission_2-4.php" method="post">

	    	���O<br>
		<input type="text" name="answer1" value=""><br>

	    	�R�����g<br>
		<input type="text" name="answer2" value=""><br>
	    	<input type="submit" value="�𓚂���" name="registration"><br>




		�폜�w��ԍ�<br>
		<input type="text" name="delete"><br>
		<input type="submit" name="submitdel" value="���M")><br>
		
		�p�X���[�h<br>
		<input type="text" name="password"><br>
		<input type="submit" name="submitdel" value="���M")>

</form>

<?php

//header('Content-Type: text/html; charset=UTF-8');

//�A���T�[�P,�A���T�[�Q�̓��e�ǂݍ��ށ�
//if(!empty($_POST['answer1']))
//	{
		if(isset($_POST['answer1'], $_POST['answer2'])) 
			{
//��̃A���T�[�̓��e��mission_2-4.txt�ɕۑ���(�^�u��؂�)
//a�łǂ�ǂ�ǉ��ۑ�
//\n�ŉ��s�\��
//\t�ŉ��s���Ȃ�
//.�Ō����A������""�ň͂�
	$a= file('mission_2-4.txt');

// �z������[�v����HTML��HTML�\�[�X�Ƃ��ĕ\�����A�s�ԍ������܂��B
	$line_num=count($a);
		$line_n=1+$line_num;
//foreach ($a as $line)
// 	{
//    		$line_num++;
		

    		$fp = fopen("mission_2-4.txt", "a");
    		$write_str =$line_n."<>".$_POST['answer1']."<>".$_POST['answer2']."<>".date("Y/m/d H:i:s");
		fwrite($fp, $write_str."\n");
  		fclose($fp);		
//		}
//	}

    		$fp = fopen("mission_2-4.txt", "r");
		for($i=0;$i<count($a);$i++)
		{
		$line=explode('<>', $a[$i]);
		var_dump($line);
		}
		fclose($fp);
			}
		
//	}
	
//�����܂łɁAPOST��GET����($_POST['delete']�ɔԍ������Ă���

	if(isset($_POST['delete']))
		{
//			$filedata=file('mission_2-4.txt');// 1�s���z��
			$fp=fopen('mission_2-4.txt','w+');// ���e�������ĊJ��
			foreach($a as $line)
				{//�z�񂩂������o��
					$data=explode('<>', $a);//<>�Ő؂��Ĕz���
						if($data[0]!=$_POST['delete'])
							{// ($_POST['delete']�ƈႤ�Ƃ��Ɋ��ʓ�������l
								fputs($fp, $data);// �t�@�C���ɒǋL
							} // $del�Ɠ����Ƃ��͉������Ȃ�
				}
			fclose($fp);
//	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		//	fclose($fp);//�t�@�C�������
		}

//	$fp = fopen("mission_2-4.txt", "r");
//		$a=file("mission_2-4.txt");
//		$data=explode('<>', $a);
//		
//		foreach ($lines as $line_num => $line)
// 		{
//    		$line_num++;	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
//		}
//		fclose($fp);
		


?>

</html>
