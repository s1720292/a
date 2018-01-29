<?php

//アンサー１のフォームを作る↓
if(isset($_POST['answer1'], $_POST['answer2'])) 
{
//上のアンサーの内容をmission_1-7.txtに保存↓(タブ区切り)
//aでどんどん追加保存
//\nで改行表示
    $fp = fopen("mission_1-7.txt", "a");
    $write_str = $_POST['answer1']."\t".$_POST['answer2'];
    fwrite($fp, $write_str."\n");
    fclose($fp);

}


// ファイルの内容を配列に取り込みます。
// この例ではHTTPを通してURL上のHTMLソースを取得します。
	$lines = file('mission_1-7.txt');

// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
	
	foreach ($lines as $line_num => $line)
 		{
    			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}
/*

// 他の例として、Webページを文字列に取り込みます。file_get_contents()も参照してください。
$html = implode('', file('mission_1-7.txt'));

// オプションのパラメータは PHP 5 以降で使用できます
$trimmed = file('mission_1-7.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

*/

?>