<!--bai1-->
<?php
$st1 ="13112003";

$day = substr($st1,0,2);
$moth = substr($st1,2,2);
$year = substr($st1,4,4);
$hienthi =  $day."/".$moth."/".$year ;
echo "Ngay thang nam sau dinh dang la ". $hienthi."<br>";
?>
 <br/>
<!--bai2-->
<?php
function kiemTraChuoiDoiXung($st1): void
{
    $st2 = strrev($st1);
    if($st1=== $st2){
        echo "Chuoi \"$st1\" la chuoi doi xung"."<br>";
    }   else {
    echo "Chuoi \"$st1\" la chuoi khong doi xung"."<br>";
        }  
}
$st1 = "ABCBA";
kiemTraChuoiDoiXung($st1);
$st2 = "ABCD";
kiemTraChuoiDoiXung($st2);  
?>
<br/>
<!--bai3-->
<?php
$st1 = "22T1020198@husc.edu.vn";
function tachChuoi(string $st1): void{
    list($ten, $ncc) = explode("@",$st1);
    echo "usename: ".$ten."<br>";
    echo "nha cung cap: ".$ncc."<br>";
}
$st1 = "22T1020198@husc.edu.vn";
tachChuoi("$st1");
?>
<br/>
<!--bai4-->
<?php 
$st1 = "https://w3schools.com/web/learn_php/index.php";
    $tach = explode("/",    $st1);
    $phancuoi = end( $tach);
    echo "Thanh phan cuoi cung: ". $phancuoi ."<br>";
    $tachphancuoi = explode(".", $phancuoi);
    $tachphancuoi = explode(".",    $phancuoi);
    echo "ten file: ". $tachphancuoi[0] ."<br>";
    echo "Phan mo rong: ". $tachphancuoi[1] ."<br>";

?>
<br/>
<!--bai5-->
<?php
$st5 = "aabcccccaaa";

$result = "";
$count = 1;
$len = strlen($st5);

for ($i = 0; $i < $len; $i++) {
    if ($i + 1 < $len && $st5[$i] == $st5[$i + 1]) {
        $count++;
    } else {
        $result .= $st5[$i] . $count;
        $count = 1;
    }
}

echo $result;
?>
