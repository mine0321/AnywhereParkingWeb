<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
/*
echo htmlspecialchars("http://anywhereparkingnodered.mybluemix.net/client");
echo "<pre>";
echo "<pre>";
*/


$json=file_get_contents("http://anywhereparkingnodered.mybluemix.net/client");
$array =json_decode($json, true );
//echo $json;

$arr = json_decode($json,true);


echo "データベースから得た情報は以下の通り。";
echo "<pre>";
var_dump($arr);


echo "</pre>";

echo "つまり登録された駐車場の位置は";
echo "<pre>";


$counter=0;
while ($counter < 4){
$arry0=$arr[$counter];

$key1="lat";

echo $counter."番目の緯度:";
echo $arry0[$key1];

$key2="alt";

echo "　経度:";
echo $arry0[$key2];
echo "<pre>";


$counter=$counter+1;
}


?>
