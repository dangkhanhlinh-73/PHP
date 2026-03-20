<?php include "layout.php"; ?>
<?php define("PAGE_TITLE", "Contact us");?>
<?php template_header();?>


<?php
$doanhThuTheoThang = array(
    'Jan' => 10000000, 'Feb' => 12000000, 'Mar' => 15000000,
    'Apr' => 11000000, 'May' => 16000000, 'Jun' => 17000000,
    'Jul' => 14000000, 'Aug' => 11000000, 'Sep' => 12500000,
    'Oct' => 16500000, 'Nov' => 13000000, 'Dec' => 10000000
);

if (isset($_GET['thang'])) {
    $thang = $_GET['thang'];
    if (isset($doanhThuTheoThang[$thang])) {
        echo "Doanh thu của tháng $thang: " . $doanhThuTheoThang[$thang] . "<br>";
    } else {
        echo "Tháng không hợp lệ.". "<br>";
    }
}

if (isset($_GET['thongke'])) {
    $thongKe = $_GET['thongke'];
    
    if ($thongKe == 'max') {
        $maxDoanhThu = max($doanhThuTheoThang);
        $thangMaxDoanhThu = array_keys($doanhThuTheoThang, $maxDoanhThu);
        echo "Doanh thu cao nhất - Tháng ".implode(",", $thangMaxDoanhThu).": $maxDoanhThu". "<br>";
    } elseif ($thongKe == 'min') {
        $minDoanhThu = min($doanhThuTheoThang);
        $thangMinDoanhThu = array_keys($doanhThuTheoThang, $minDoanhThu);
        echo "Doanh thu thấp nhất - Tháng ". implode(",",$thangMinDoanhThu).": $minDoanhThu". "<br>";
    }
}
?>
<?php template_footer();
?>