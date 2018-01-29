<html>
	<head>
		<title>筋トレの館</title>
	</head>
	<body>
		<h1>筋トレの館</h1>

	</body>
	<p>筋トレのイメージ</p>

<form 
	action="mission_2-3.php" method="post">

    	名前<input type="text" name="answer1" value="">

    	コメント<input type="text" name="answer2" value="">

    	<input type="submit" value="解答する" name="registration">
</form>

<?php

//アンサー１,アンサー２のフォームを作る↓
	if(isset($_POST['answer1'], $_POST['answer2'])) 
		{
//上のアンサーの内容をmission_2-3.txtに保存↓(タブ区切り)
//aでどんどん追加保存
//\nで改行表示
//\tで改行しない
//.で結合、文字は""で囲む
    			$fp = fopen("mission_2-3.txt", "a");
    			$write_str =$_POST['answer1']."\t".$_POST['answer2']."\t".date("Y/m/d H:i:s");
    			fwrite($fp, $write_str."\n");
  			fclose($fp);
		}

// ファイルの内容を配列に取り込みます。
// この例ではHTTPを通してURL上のHTMLソースを取得します。
	$lines = file('mission_2-3.txt');

// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
	$line_num= 1;
	foreach ($lines as $line_num => $line)
 		{
    		$line_num++;	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}



?>

</html>
