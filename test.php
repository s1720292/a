
<html>

	<head>
		
		<title>TEST</title>

	<head>

		<!���̓t�H�[�����쐬����>
			<form 
			
			 action="test.php" method="post">
			
			TEST
			
			<br>			
			<br>
			
			���O�F<br>
			<input type="text" name="name" value=""><br>
			

			�R�����g�F<br>
			<textarea name="comment" cols="50" rows="5"></textarea>
			

			<br>
			<input type="submit" name="editnum" value="���M">
			

<!--			�p�X���[�h�F<br>
			<input type="text" name="password"><br>
			<input type="submit" name="time" value="���M")>

			<br>
			<br>

			�폜�w��ԍ��F<br>//�폜����
			<input type="text" name="delete"><br>

			�p�X���[�h�F<br>
			<input type="text" name="password"><br>
			<input type="submit" name="submitdel" value="���M")>

			<br>
			<br>

			�ҏW�w��ԍ��F<br>//�ҏW����
			<input type="text" name="edit"><br>

			<br>

			�p�X���[�h�F<br>
			<input type="text" name="password"><br>
			<input type="submit" name="submitedit" value="���M")>
-->
			</form>

<a href="test.txt">test.txt</a><br>

<body>

<!-���̋L���̊Ԃɓ����ƃu���E�U�ł͕\������Ȃ�->	


	<?php

	//���������h�~	

//	header('Content-Type: text/html; charset=UTF-8');

/*-----------------------------------------------------------------------------

	//echo�ŕ������\������

	$moji="hello world";//�s����;��Y��Ȃ�
	
	echo $moji;//�ϐ��̏ꍇ��""�ň͂܂Ȃ�


	//��������:$moji��������Ƃ����łȂ��Ƃ��ŕʂ̕\�����o��

	//��������⃋�[�v���g���ꍇ�̓C���f���g�i�������j���s��

	if(is_string($moji)){

			echo"������ł����I";
		
	}else{

			echo"�����񂶂�Ȃ������I";

	}//���̓t�H�[��������ăt�H�[�����瑗����������$moji�ɓ���悤�ɂ���
			
*//*________________________________________________________________________

	//$aa�ɂP�������l��������
	
	$aa=$i+1;

	echo"check1|".$aa."|<hr>";

*//*//------------------------------------------------------------------------

	echo"<hr>loop0|"

	//print_r() ��,�ϐ��̒l�Ɋւ����������Ղ��`���ŕ\�����܂��B

	$array=1;
	
	print_r($array);

	//var_damp($array);//�ǂ��炩

	echo"<hr>";

	for($i=0;$i<count($array);$i++){

		echo "loop|".$i."|";

		echo $array[$i]."<hr>";

	}

	echo"loopend".$i."|<hr>";

*//*--------------------------------------------------------------------------


	$contents=$_POST['comment'];//���e���e�icomment�j���󂯎��

	//�t�H�[���̓��e���e������ꍇ�͓�����

	if(ISSET($contents)){
		
		//������������ɓ��Ă͂܂�Ƃ��̓��������

		echo"���e�Ȃ��悤�͂���܂�";

		//�����܂�

	}

	
	//��L�͓��e���e���u��łȂ��v�Ƃ��ƌ�����������

	//�ے��\���Ƃ��́u�I�v���g��

	if(!empty($contents)){

		echo"���e���e�͂���ς肠��܂�";

	}

*//*-------------------------------------------------------------------------------------

	$contents=$_POST['contents'];//�����Ńt�H�[�����e���󂯎��

	if($contents){

		$fp=fopen('test.txt','a+');//�t�@�C�����J��

		fputs($fp,$contents."\r\n");

		fclose($fp);

		print"�������݊������܂���";

	}

	$test="test.txt";

	$hyoji=file($test);

	print $hyoji[0]."<br/>"

//	print $hyoji[1]."<br/>"

//	print $hyoji[2]."<br/>"

*//*------------------------------------------------------------------------------

	$data=file("test.txt");//���g��z��Ƃ��Ď��o���B

	$num=count($data);//$data�̍��ڐ��𐔂���

	echo$num;//$num�̓��e��\��

*///--------------------------------------------------------------------------------
		
	$filedata=file("test.txt");//��s���z��

	foreach($filedata as $line){//�z�񂩂������o��

		$data=explode("<>",$line);//<>�Ő؂��Ĕz���

		echo'�ԍ�:'.$data[0].'<br/>';//���e�ԍ�
		
/*		echo $data[2]'<br/>';//�R�����g���e

		echo'By:'.$data[1].'<br/>'//���e����

		echo'<hr/>'//��؂�̌��h���̂��߂̐������B */

	}






































	?>
</body>
</html>