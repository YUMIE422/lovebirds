<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="todoMake_act.php" method="POST">
    <header>
        <h1>ToDo</h1>

    </header>
    <form action="" method="POST">

        <div>
            <label for=""> 日付:</label> <input type="date" name="todoDate" id="todoDate">
        </div>
        <div>
            <label for=""> 内容:</label> <input type="text" name="todoText" id="todoText">
        </div>
        <div>
            <label for=""> 担当:</label> <input type="text" name="todoName" id="todoName">
        </div>

        <!-- <div>
            <label for=""> ポイント:</label> <input type="number" name="">
        </div> -->
        <div>
            <input type="submit" name="">
        </div>
    </form>
    <a href="topPage.php">Back</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>

    </script>

</body>

</html>