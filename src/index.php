<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../dist/bundle.js"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once('nav.php'); ?>
    <h3 id="todayDateDisplay"> Today date is: </h3>
    <form id="form" action="process.php" method="POST">
        <label for="datepicker">Select a Date:</label>
        <input type="date" id="datepicker" name="datepicker" required>
        <label for="expense">expense</label>
        <input class="form-control" type="text" id="expense" name="expense" placeholder="Enter expense here" required><br><br>
        <div id="customDateRangeContainer" class="custom-date-range">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate">

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate">
        </div>
        <div>
            <button id="dateInputToggleButton" type="button">Use Custom Date Range Instead</button>
        </div>


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
    
    <div class="container text-center">
        <div class="row row-cols-auto">
            <div class="col">
                <canvas id="pieChart"></canvas>
            </div>
            <div class="col-6">
                <canvas id="stackedColumnChart"></canvas>
            </div>
        </div>

    </div>
</body>
</html>

