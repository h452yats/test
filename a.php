#!/usr/bin/php
<?php 
$b='abc';
  foreach(file('/usr/share/dict/linux.words') as $line){
        $pos=strpos($line,$b);
    if ($pos !== false){
     echo $line;
    }
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。 
  } 
?>
