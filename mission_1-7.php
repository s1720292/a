<?php

//�A���T�[�P�̃t�H�[������遫
if(isset($_POST['answer1'], $_POST['answer2'])) 
{
//��̃A���T�[�̓��e��mission_1-7.txt�ɕۑ���(�^�u��؂�)
//a�łǂ�ǂ�ǉ��ۑ�
//\n�ŉ��s�\��
    $fp = fopen("mission_1-7.txt", "a");
    $write_str = $_POST['answer1']."\t".$_POST['answer2'];
    fwrite($fp, $write_str."\n");
    fclose($fp);

}


// �t�@�C���̓��e��z��Ɏ�荞�݂܂��B
// ���̗�ł�HTTP��ʂ���URL���HTML�\�[�X���擾���܂��B
	$lines = file('mission_1-7.txt');

// �z������[�v����HTML��HTML�\�[�X�Ƃ��ĕ\�����A�s�ԍ������܂��B
	
	foreach ($lines as $line_num => $line)
 		{
    			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}
/*

// ���̗�Ƃ��āAWeb�y�[�W�𕶎���Ɏ�荞�݂܂��Bfile_get_contents()���Q�Ƃ��Ă��������B
$html = implode('', file('mission_1-7.txt'));

// �I�v�V�����̃p�����[�^�� PHP 5 �ȍ~�Ŏg�p�ł��܂�
$trimmed = file('mission_1-7.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

*/

?>