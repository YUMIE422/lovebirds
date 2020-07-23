<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>ミッション</h1>
        <form action="missionMake_act.php" method="POST">
    </header>
    <form action="" enctype="multipart/form-data" method="POST">
        <div>
            <label for="">締切:</label> <input type="date" name="deadLine" id="deadLine">
        </div>
        <div>
            <label for=""> 内容:</label> <input type="text" name="missionText" id="missionText">
        </div>
        <div id="gohobi">
            <label for=""> ご褒美:</label> <input type="text" name="rewardText" id="rewardText">
        </div>
        <div id="image">
            <label for="">image:</label>
            <input type="file" name="rewardImage" accept="image/*" capture="camera" id="rewardImage">
        </div>
        <div>
            <input type="submit">
        </div>

    </form>
    <a href="topPage.php">Back</a>
</body>

</html>