<?php



//アンサー１のフォームを作る↓
if(isset($_POST['answer1'], $_POST['answer2'])) 
{
//上のアンサーの内容をmission_2-2.txtに保存↓(タブ区切り)
//aでどんどん追加保存
//\nで改行表示
//\tで改行しない
//.で結合文字は""で囲む
    $fp = fopen("mission_2-2.txt", "a");
    $write_str ="%%" .$_POST['answer1']."\t"."%%".$_POST['answer2']."\t"."%%".date("Y/m/d H:i:s");
    fwrite($fp, $write_str."\n");
    fclose($fp);

}


// ファイルの内容を配列に取り込みます。
// この例ではHTTPを通してURL上のHTMLソースを取得します。
	$lines = file('mission_2-2.txt');

// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
	$line_num= 1;
	foreach ($lines as $line_num => $line)
 		{
    		$line_num++;	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}


?>