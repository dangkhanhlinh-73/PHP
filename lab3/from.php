<?php
$doanhThuTheoThang = array(
    'Jan' => 10000000, 'Feb' => 12000000, 'Mar' => 15000000,
    'Apr' => 11000000, 'May' => 16000000, 'Jun' => 17000000,
    'Jul' => 14000000, 'Aug' => 11000000, 'Sep' => 12500000,
    'Oct' => 16500000, 'Nov' => 13000000, 'Dec' => 10000000
);

echo "<h2>Kết quả xử lý form</h2>";

// Xử lý theo tháng
if (!empty($_GET['thang'])) {
    $thang = $_GET['thang'];
    if (isset($doanhThuTheoThang[$thang])) {
        echo "Tháng $thang: Doanh thu " . number_format($doanhThuTheoThang[$thang]) . " VND.<br>";
    } else {
        echo "Tháng không hợp lệ.<br>";
    }
}

// Xử lý thống kê cao nhất / thấp nhất
if (!empty($_GET['thongke'])) {
    $thongKe = $_GET['thongke'];
    
    if ($thongKe == 'max') {
        $maxDoanhThu = max($doanhThuTheoThang);
        $thangMaxDoanhThu = array_keys($doanhThuTheoThang, $maxDoanhThu);
        echo "Doanh thu cao nhất - Tháng ".implode(", ", $thangMaxDoanhThu).": " . number_format($maxDoanhThu) . " VND.<br>";
    } elseif ($thongKe == 'min') {
        $minDoanhThu = min($doanhThuTheoThang);
        $thangMinDoanhThu = array_keys($doanhThuTheoThang, $minDoanhThu);
        echo "Doanh thu thấp nhất - Tháng ".implode(", ", $thangMinDoanhThu).": " . number_format($minDoanhThu) . " VND.<br>";
    }
}
?>
