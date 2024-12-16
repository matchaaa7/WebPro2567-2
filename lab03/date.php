<?php


function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}


function dayInMonth($month, $year) {
    switch ($month) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            return 31;
        case 4: case 6: case 9: case 11:
            return 30;
        case 2:
            return isLeapYear($year) ? 29 : 28;
        default:
            return 0; 
    }
}


function getMonthName($month) {
    $months = [
        1 => "มกราคม", 2 => "กุมภาพันธ์", 3 => "มีนาคม",
        4 => "เมษายน", 5 => "พฤษภาคม", 6 => "มิถุนายน",
        7 => "กรกฎาคม", 8 => "สิงหาคม", 9 => "กันยายน",
        10 => "ตุลาคม", 11 => "พฤศจิกายน", 12 => "ธันวาคม"
    ];
    return $months[$month];
}


function payDay($month, $year_th) {
    $year = $year_th - 543; 
    $daysInMonth = dayInMonth($month, $year);
    $payday = $daysInMonth - 3; 
    return ["payday" => $payday, "monthName" => getMonthName($month), "year" => $year_th];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = isset($_POST['month']) ? (int)$_POST['month'] : 0;
    $year_th = isset($_POST['year']) ? (int)$_POST['year'] : 0;

    if ($month >= 1 && $month <= 12 && $year_th > 0) {
        $result = payDay($month, $year_th);
        echo "<h3>วันที่ชำระเงินเดือน:</h3>";
        echo "{$result['payday']} {$result['monthName']} {$result['year']}";
    } else {
        echo "<h3 style='color: red;'>กรุณากรอกเดือน (1-12) และปี พ.ศ. ให้ถูกต้อง</h3>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณวันจ่ายเงินเดือน</title>
</head>
<body>

    <h2>โปรแกรมคำนวณวันจ่ายเงินเดือน</h2>
    <form action="" method="POST">
        <div>
            <label for="month">เดือน (1-12): </label>
            <input type="number" name="month" min="1" max="12" >
        </div>
        <div>
            <label for="year">ปี พ.ศ.: </label>
            <input type="number" name="year" min="2400" >
        </div>
        <div>
            <button type="submit">ยืนยัน</button>
        </div>
    </form>

</body>
</html>
