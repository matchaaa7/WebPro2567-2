<?php

$classRoomData = [
        "Mon" => [
            9 => "Enterpreneurship Knowledge Sharing",
            10 => "Enterpreneurship Knowledge Sharing",
            11 => "Enterpreneurship Knowledge Sharing",
        13 => "Data Analytic",
        14 => "Data Analytic",
        15 => "Data Analytic",
        16 => "Data Analytic",
        ], 
        "Tue" => [
           
        ],
        "Wed" =>[
            9 => "Enterpreneurship Knowledge Sharing",
            10 => "Enterpreneurship Knowledge Sharing",
            11 => "Enterpreneurship Knowledge Sharing",
            13 => "Data Analytic",
        14 => "Data Analytic",
        15 => "Data Analytic",
        16 => "Data Analytic"
        ],
        "Thu" => [9 => "Enterpreneurship Knowledge Sharing",
        10 => "Enterpreneurship Knowledge Sharing",
        11 => "Enterpreneurship Knowledge Sharing",],

        "Fri" => [
            
            9 => "Artificial Intelligence",
            10 => "Artificial Intelligence",
            11 => "Artificial Intelligence",
            13 => "Data Analytic",
        14 => "Data Analytic",
        15 => "Data Analytic",
        16 => "Data Analytic",
        ],

        "Sat" => [],
        "Sun" => []
];
if (!empty($_POST['day'])) {
    $day = $_POST['day'];
    $hour = $_POST['hour'];
    $subject = $_POST['subject'];

    $classRoomData[$day][$hour] = $subject;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            width: 50%;
            border: white 2px solid;
            border-collapse: collapse;
            min-width: 90px;
            
        }

        #classroom thead {
            background-color: #0f0f0f ;
            
        }

        #classroom
        {
            background-color: lightgray;
        }
        
        #classroom th{
            color: white;
        }

        #classroom tbody th{
            background-color: gray;
            color: white;
        }
        .holiday{
            background-color: crimson !important;
        
        }
    </style>
</head>
<body>

    <table id="classroom">
        <thead>
            <tr>
                <th>Day/Time</th>
                <th>8:00-9:00</th>
                <th>9:00-10:00</th>
                <th>10:00-11:00</th>
                <th>11:00-12:00</th>
                <th>12:00-13:00</th>
                <th>13:00-14:00</th>
                <th>14:00-15:00</th>
                <th>15:00-16:00</th>
                <th>16:00-17:00</th>
        
            </tr>
        </thead>
    <tbody>
        <?php foreach ($classRoomData as $day => $subject) { ?>
        <tr>
            <th> <?php echo $day ?> </th>
            <?php for($i=8;$i<17;$i++){ ?>
            <td>
                <?php echo !empty($subject[$i]) ? $subject[$i] : "" ?>
            </td>
            <?php } ?>
            </tr>
            <?php } ?>
    </tbody>
            </table>

            <form action="" method="POST">
            <div>
                    <label for="">Day</label>
                    <input type="text" name = "day">
                </div>
                <div>
                    <label for="">Hour</label>
                    <input type="number" name = "hour">
                </div>
                <div>
                    <label for="">Subject</label>
                    <input type="text" name = "subject">
                </div>
                <div>
                    <button></button>
                </div>
            </form>
</body>
</html>