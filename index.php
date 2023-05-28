<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/retrieve.js"></script>
    <script src="./js/submit.js"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once('nav.php'); ?>
    <form id="form" action="process.php" method="POST">
        <label for="expense">expense</label>
        <input class="form-control" type="text" id="expense" name="expense" placeholder="Enter expense here" required><br><br>

        <label for="category">Choose a category:</label>
        <select id="category" name="category">
            <option value="Donation">Donation</option>
            <option value="Grocery">Grocery</option>
            <option value="Restaurant">Restaurant</option>
            <option value="Living cost">Living cost</option>
            <option value="Lottery">Lottery</option>
        </select>

        <input class="btn btn-primary" id="submit" type="submit" value="Submit">
    </form>
    
    <canvas id="pieChart"></canvas>
    <canvas id="stackedColumnChart"></canvas>
    <script src="./js/pieChart.js"></script>
</body>
</html>

