<?php
    include('database.php');
    $sql = "SELECT * FROM students ORDER BY name ASC";
    $res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PWV</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    <br>
        <div class="row table-responsive">
        <a href="export.php"><button type="button" class="btn btn-primary">Export</button></a>
        <hr>
        <table class="table table-bordered table-striped table-sm" id="user_details" >
            <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><span id="user_name"> <?php echo $row['name']; ?> </span></td>
                    <td><span id="user_city"> <?php echo $row['city']; ?> </span></td>
                    <td><span id="user_email"> <?php echo $row['email']; ?> </span></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        
        </div>
    </div>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>