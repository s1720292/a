
<html>

	<head>
		
		<title>TEST</title>

	<head>

		<!入力フォームを作成する>
			<form 
			
			 action="test.php" method="post">
			
			TEST
			
			<br>			
			<br>
			
			名前：<br>
			<input type="text" name="name" value=""><br>
			

			コメント：<br>
			<textarea name="comment" cols="50" rows="5"></textarea>
			

			<br>
			<input type="submit" name="editnum" value="送信">
			

<!--			パスワード：<br>
			<input type="text" name="password"><br>
			<input type="submit" name="time" value="送信")>

			<br>
			<br>

			削除指定番号：<br>//削除する
			<input type="text" name="delete"><br>

			パスワード：<br>
			<input type="text" name="password"><br>
			<input type="submit" name="submitdel" value="送信")>

			<br>
			<br>

			編集指定番号：<br>//編集する
			<input type="text" name="edit"><br>

			<br>

			パスワード：<br>
			<input type="text" name="password"><br>
			<input type="submit" name="submitedit" value="送信")>
-->
			</form>

<a href="test.txt">test.txt</a><br>

<body>

<!-この記号の間に入れるとブラウザでは表示されない->	


	<?php

	//文字化け防止	

//	header('Content-Type: text/html; charset=UTF-8');

/*-----------------------------------------------------------------------------

	//echoで文字列を表示する

	$moji="hello world";//行末に;を忘れない
	
	echo $moji;//変数の場合は""で囲まない


	//条件分岐:$mojiが文字列とそうでないときで別の表示を出す

	//条件分岐やループを使う場合はインデント（字下げ）を行う

	if(is_string($moji)){

			echo"文字列でした！";
		
	}else{

			echo"文字列じゃなかった！";

	}//次はフォームを作ってフォームから送った文字が$mojiに入るようにする
			
*//*________________________________________________________________________

	//$aaに１足した値を代入する
	
	$aa=$i+1;

	echo"check1|".$aa."|<hr>";

*//*//------------------------------------------------------------------------

	echo"<hr>loop0|"

	//print_r() は,変数の値に関する情報を解り易い形式で表示します。

	$array=1;
	
	print_r($array);

	//var_damp($array);//どちらか

	echo"<hr>";

	for($i=0;$i<count($array);$i++){

		echo "loop|".$i."|";

		echo $array[$i]."<hr>";

	}

	echo"loopend".$i."|<hr>";

*//*--------------------------------------------------------------------------


	$contents=$_POST['comment'];//投稿内容（comment）を受け取る

	//フォームの投稿内容がある場合は動かす

	if(ISSET($contents)){
		
		//ここから条件に当てはまるときの動作を書く

		echo"投稿ないようはあります";

		//ここまで

	}

	
	//上記は投稿内容が「空でない」ときと言い換えられる

	//否定を表すときは「！」を使う

	if(!empty($contents)){

		echo"投稿内容はやっぱりあります";

	}

*//*-------------------------------------------------------------------------------------

	$contents=$_POST['contents'];//ここでフォーム内容を受け取る

	if($contents){

		$fp=fopen('test.txt','a+');//ファイルを開く

		fputs($fp,$contents."\r\n");

		fclose($fp);

		print"書き込み完了しました";

	}

	$test="test.txt";

	$hyoji=file($test);

	print $hyoji[0]."<br/>"

//	print $hyoji[1]."<br/>"

//	print $hyoji[2]."<br/>"

*//*------------------------------------------------------------------------------

	$data=file("test.txt");//中身を配列として取り出す。

	$num=count($data);//$dataの項目数を数える

	echo$num;//$numの内容を表示

*///--------------------------------------------------------------------------------
		
	$filedata=file("test.txt");//一行ずつ配列

	foreach($filedata as $line){//配列から一つずつ取り出す

		$data=explode("<>",$line);//<>で切って配列に

		echo'番号:'.$data[0].'<br/>';//投稿番号
		
/*		echo $data[2]'<br/>';//コメント内容

		echo'By:'.$data[1].'<br/>'//投稿日時

		echo'<hr/>'//区切りの見栄えのための水平線。 */

	}






































	?>
</body>
</html>