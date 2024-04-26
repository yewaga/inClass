<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
    <style>
        body {
            width: 80%;
            /* height: 80%; */
            /* background-color: yellowgreen; */
            border: solid 10px orange;
            margin: auto;
            margin-left: 50px;
        }

        .calContainer {
            width: 80%;
            height: 80%;
            margin: auto;
            padding: 5px;
            border: solid 1px black;
        }

        .calWeek {
            width: 90%;
            height: 3.5rem;
            clear: both;
            background-color: rgb(102, 0, 51);
            border: solid 1px black;
            margin: auto;
            text-align: center;
        }

        .calDay {
            width: 10%;
            height: 3rem;
            line-height: 3rem;
            text-align: center;
            float: left;
            background-color: #5f9ea0;
            color: white;
            margin: 3px;
        }
    </style>
</head>

<body>
    <h2>Calendar</h2>
    <hr>
    <div class="calContainer">
        <div class="calWeek">
            <div class="calDay"><b>Sun</b> </div>
            <div class="calDay"><b>Mon</b> </div>
            <div class="calDay"><b>Tue</b></div>
            <div class="calDay"><b>Wed</b></div>
            <div class="calDay"><b>Thu</b></div>
            <div class="calDay"><b>Fri</b></div>
            <div class="calDay"><b>Sat</b></div>
        </div>
        <?php
        $now = strtotime($_GET['inputDate']); //get the date 
        $realdays = date('t', $now); //get the days of month from inputDate(form)
        $spaceDays = intval(date('w', strtotime(substr(date('Y-m-d', $now), 0, 8) . "01"))); //calculate number of empty to show in calendar
        $days = $realdays + $spaceDays; //total days(whether empty or not) to show in calendar
        $calDaysString = '<div class="calWeek">'; //initialize the string to print calendar
        for ($i = 1; $i <= $days; $i++) { //
            if ($i <= $spaceDays) { //determine whether empty
                $calDaysString = $calDaysString . '<div class="calDay"> </div>';
            } else {
                $dayth = $i - $spaceDays; //number of days in calander to show
                $calDaysString = $calDaysString .  '<div class="calDay">' . strval($dayth) . '</div>'; //assemble day to show in div(.calday)
            }
            if ($i % 7 == 0) { //determine whether change rol
                $calDaysString =  $calDaysString . '</div>' . '<div class="calWeek">'; //assemble the rows in div(.calWeek)
            }
        }
        echo $calDaysString; //print the calander by echoing the string represents calander
        ?>
    </div>


</body>

</html>