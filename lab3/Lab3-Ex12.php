<!--bai1a-->
<?php
echo "Bai 1a. " . "<br>";
$revenue = [10000000 ,   12000000  ,  15000000   , 11000000  ,  16000000  ,  17000000  , 14000000  ,  '11000000'   ,
                12500000   , 16500000  ,  13000000   , 10000000];

$revenue_min = min($revenue);
$revenue_max = max($revenue);

$sum = array_sum($revenue);
$count = count($revenue);
$medium_year = $sum / $count;
echo "Doanh thu thấp nhất(Tháng): " . $revenue_min . "<br>";
echo "Doanh thu cao nhất(Tháng):" .$revenue_max . "<br>";
echo "giá trị trung bình năm: " . $medium_year . "<br>";    
?>
<!--bai1b-->
<?php
    echo "Bai 1b. " . "<br>";
    $revenue_month = [
    'Jan' => 10000000,
    'Feb' => 12000000,
    'Mar' => 15000000,
    'Apr' => 11000000,
    'May' => 16000000,
    'Jun' => 17000000,
    'Jul' => 14000000,
    'Aug' => 11000000,
    'Sep' => 12500000,
    'Oct' => 16500000,
    'Nov' => 13000000,
    'Dec' => 10000000
];

    $revenue_min_month = min($revenue_month);
    $min_month = array_keys($revenue_month, $revenue_min_month);
    echo "Các tháng có doanh thu thấp nhất: " . implode(", ", $min_month) . "<br>";
    $revenue_max_month = max($revenue_month);
    $max_month = array_search($revenue_max_month , $revenue_month);
    echo "Doanh thu tháng cao nhất: " . $max_month . "<br>";
    ?>
<?php
echo "Bài 2a. " . "<br>";

$revenue = [10000000, 12000000, 15000000, 11000000, 16000000,
            17000000, 14000000, 11000000, 12500000, 16500000,
            13000000, 10000000];

function doanhThuThapNhat($revenue){
    return min($revenue); 
}

function doanhThuCaoNhat($revenue){
    return max($revenue);
}

function doanhThuTrungBinh($revenue){
    return array_sum($revenue) / count($revenue);
}

echo "Doanh thu tháng thấp nhất: " . doanhThuThapNhat($revenue) . "<br>";
echo "Doanh thu tháng cao nhất: " . doanhThuCaoNhat($revenue) . "<br>";
echo "Doanh thu trung bình năm: " . doanhThuTrungBinh($revenue) . "<br>";
?>


<!--bai2b-->
<?php
echo "Bài 2b. " . "<br>";

$revenue_month = [
    'Jan' => 10000000,
    'Feb' => 12000000,
    'Mar' => 15000000,
    'Apr' => 11000000,
    'May' => 16000000,
    'Jun' => 17000000,
    'Jul' => 14000000,
    'Aug' => 11000000,
    'Sep' => 12500000,
    'Oct' => 16500000,
    'Nov' => 13000000,
    'Dec' => 10000000
];

function tenThangDoanhThuThapNhat($revenue_month){
    $revenue_min_month = min($revenue_month);
    return array_keys($revenue_month, $revenue_min_month);
}

function tenThangDoanhThuCaoNhat($revenue_month){
    $revenue_max_month = max($revenue_month);
    return array_keys($revenue_month, $revenue_max_month);
}

echo "Tên tháng có doanh thu thấp nhất: " . implode(", ", tenThangDoanhThuThapNhat($revenue_month)) . "<br>";
echo "Tên tháng có doanh thu cao nhất: " . implode(", ", tenThangDoanhThuCaoNhat($revenue_month)) . "<br>";
?>
