<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        iframe {
            width: 90%;
            height: 100%;
            border: none;
            margin: auto;
            margin-left: 50px;
        }

        div {
            width: 80%;
            height: 80vh;
            border: solid 2px black;
            margin: auto;
        }
    </style>
</head>

<body>
    <div>
        <form action="/date.php" method="get" target="calendarFrame">
            <label>Input Date:</label>
            <input type="date" name="inputDate">
            <input type="submit" value="Submit">
        </form>

        <iframe name="calendarFrame"></iframe>
    </div>
</body>

</html>