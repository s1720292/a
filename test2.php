<?php
	$num=$_POST["bangou2"];//�ҏW�ԍ��̎󂯎��
	$line=file('sousin_2-2.txt');//�z����i�[
 for($i=0;$i<count($line);$i++)//�z��̐���
 {
 	$data=explode("<>",$line[$i]);//�z�����؂�
 if($data[0]==$num)//����ꂽ���M�ԍ��Ɣԍ�����v����Ƃ�
  {
	 $num_edit=$data[0];
    	 $name=$data[1];//�ϐ������[
  	 $comment=$data[2];//�ϐ������[
  }
 }
?>
<html>
<head>
<title>�ҏW�t�H�[��</title>
</head>
<body>
<h1>����u���O</h1>
<!--���o���̍쐬-->
<form action="mission_2-5_kakikomi.php" method="POST">
	<input type="hidden" name="num_edit" value="<?php echo$num_edit;?>"><br>
	���O�F<input type="text" name="name_edit" value="<?php echo$name;?>"><br>
	<!--���O�̓��̓e�L�X�g���쐬-->
	�R�����g�F<textarea name="comment_edit"  cols="20" rows="3"><?php echo$comment;?></textarea><br>
	<!--�R�����g�̓��̓e�L�X�g�̍쐬-->
	<input type="reset"name="reset">
	<!--���Z�b�g�{�^�����쐬-->
	<input type="submit"name="submit"value="���M">
	<!--���M�{�^�����쐬-->
</form>
</body>
</html>

<?php
	$name_edit=$_POST["name_edit"];//���O�̃f�[�^�̎󂯎��
	$comment_edit=$POST["comment_edit"];//�R�����g�f�[�^�̎󂯎��
if(!empty($name_edit))
{
	$filename='sousin_2-2.txt';//�t�@�C����ݒ�
 	$fp=fopen($filename,'w+');//�t�@�C�����J��
 for($i=0;$i<count($line);$i++)//�z��̐������[�v
 {
   	$data2=explode("<>",$line[$i]);//�z�����؂�
	$re_num=$data2[0];//�ϐ������[
	$re_date=$data2[3];//�ϐ������[

  if($data2[0]==$num)//���M�ԍ��Ɣԍ�����v����Ƃ�
  {
	$text="$re_num"."<>"."$name_edit"."<>"."$comment_edit"."<>"."$re_date";//�ϐ������
	fwrite($fp,$text);//�t�@�C���ɏ����o��
  }else//��v���Ȃ��Ƃ�
  {
	fwrite($fp,$line[$i]);//�t�@�C���ɏ����o��
  }
 }
fclose($fp);
}
?>