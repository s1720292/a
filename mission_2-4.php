<html>

	<head>

		<title>館</title>
	</head>

	<!入力フォームを作成する>
	
		<form 
		
		action="mission_2-4.php" method="post">

	    	名前<br>
		<input type="text" name="answer1" value=""><br>

	    	コメント<br>
		<input type="text" name="answer2" value=""><br>
	    	<input type="submit" value="解答する" name="registration"><br>




		削除指定番号<br>
		<input type="text" name="delete"><br>
		<input type="submit" name="submitdel" value="送信")><br>
		
		パスワード<br>
		<input type="text" name="password"><br>
		<input type="submit" name="submitdel" value="送信")>

</form>

<?php

//header('Content-Type: text/html; charset=UTF-8');

//アンサー１,アンサー２の内容読み込む↓
//if(!empty($_POST['answer1']))
//	{
		if(isset($_POST['answer1'], $_POST['answer2'])) 
			{
//上のアンサーの内容をmission_2-4.txtに保存↓(タブ区切り)
//aでどんどん追加保存
//\nで改行表示
//\tで改行しない
//.で結合、文字は""で囲む
	$a= file('mission_2-4.txt');

// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
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
	
//ここまでに、POSTやGETから($_POST['delete']に番号を入れておく

	if(isset($_POST['delete']))
		{
//			$filedata=file('mission_2-4.txt');// 1行ずつ配列
			$fp=fopen('mission_2-4.txt','w+');// 内容を消して開く
			foreach($a as $line)
				{//配列から一つずつ取り出す
					$data=explode('<>', $a);//<>で切って配列に
						if($data[0]!=$_POST['delete'])
							{// ($_POST['delete']と違うときに括弧内を処理l
								fputs($fp, $data);// ファイルに追記
							} // $delと同じときは何もしない
				}
			fclose($fp);
//	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		//	fclose($fp);//ファイルを閉じる
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
