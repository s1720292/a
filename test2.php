<?php
	$num=$_POST["bangou2"];//編集番号の受け取り
	$line=file('sousin_2-2.txt');//配列を格納
 for($i=0;$i<count($line);$i++)//配列の数分
 {
 	$data=explode("<>",$line[$i]);//配列を区切る
 if($data[0]==$num)//送られた送信番号と番号が一致するとき
  {
	 $num_edit=$data[0];
    	 $name=$data[1];//変数を収納
  	 $comment=$data[2];//変数を収納
  }
 }
?>
<html>
<head>
<title>編集フォーム</title>
</head>
<body>
<h1>漫画ブログ</h1>
<!--見出しの作成-->
<form action="mission_2-5_kakikomi.php" method="POST">
	<input type="hidden" name="num_edit" value="<?php echo$num_edit;?>"><br>
	名前：<input type="text" name="name_edit" value="<?php echo$name;?>"><br>
	<!--名前の入力テキストを作成-->
	コメント：<textarea name="comment_edit"  cols="20" rows="3"><?php echo$comment;?></textarea><br>
	<!--コメントの入力テキストの作成-->
	<input type="reset"name="reset">
	<!--リセットボタンを作成-->
	<input type="submit"name="submit"value="送信">
	<!--送信ボタンを作成-->
</form>
</body>
</html>

<?php
	$name_edit=$_POST["name_edit"];//名前のデータの受け取り
	$comment_edit=$POST["comment_edit"];//コメントデータの受け取り
if(!empty($name_edit))
{
	$filename='sousin_2-2.txt';//ファイルを設定
 	$fp=fopen($filename,'w+');//ファイルを開く
 for($i=0;$i<count($line);$i++)//配列の数分ループ
 {
   	$data2=explode("<>",$line[$i]);//配列を区切る
	$re_num=$data2[0];//変数を収納
	$re_date=$data2[3];//変数を収納

  if($data2[0]==$num)//送信番号と番号が一致するとき
  {
	$text="$re_num"."<>"."$name_edit"."<>"."$comment_edit"."<>"."$re_date";//変数を一つに
	fwrite($fp,$text);//ファイルに書き出し
  }else//一致しないとき
  {
	fwrite($fp,$line[$i]);//ファイルに書き出し
  }
 }
fclose($fp);
}
?>