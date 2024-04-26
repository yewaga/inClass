<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 80%;
            height: 80vh;
            border: solid 2px black;
            margin: auto;
            text-align: center;
        }

        iframe {
            width: 90%;
            height: 90%;
            border: tomato inset 5px;
            /* margin: auto; */
            /* margin-bottom: 10px; */
            /* margin-right: 50px; */
        }

        form {
            width: 90%;
        }
    </style>
</head>

<body>
    <div>
        <iframe name="calendarFrame"></iframe>
        <form action="/date.php" method="get" target="calendarFrame">
            <label>Input Date:</label>
            <input type="date" name="inputDate">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>