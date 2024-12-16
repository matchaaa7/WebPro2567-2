<?php



function febyear($year){
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

function dayInMonth($month){
    switch ($month) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        return 31;
        break;
        case 4: case 6: case 9: case 11:
        return 30;
        break;
        case 2
        return if(febyear)($year){
            return 29;
        }
        else return 28;
        break;
    }
}

function payDay($month,$year_th){
   $year = $year_th - 543;
   $daysInMonth = dayInMonth($month,$year);
   $payday = $daysInMonth - 3;
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
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for = "">Number</label>
            <input type="number" name="month" min="1" max="12">
</div>
<div>
    <button type="submit">ยืนยัน</button>
</div>
</form>

</body>
</html>



