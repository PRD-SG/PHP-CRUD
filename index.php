<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-5">Infomation Page </h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center ">
                <a href="insert.php" class="btn btn-success">Go to Insert</a>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <?php

                    include_once('functions.php');
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    while ($row = mysqli_fetch_array($sql)) {
                        $count += 1
                    ?>
                        <div class="col-md-4 mt-5 ">
                            <div class="card text-center">
                                <div class="card-header">
                                    <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <?php echo $row['email']; ?></li>
                                    <li class="list-group-item"> <?php echo $row['phone_number']; ?></li>
                                    <li class="list-group-item"> <?php echo $row['posting_date']; ?></li>
                                </ul>
                                <div class="card-body">
                                    <?php echo $row['address']; ?>
                                </div>
                                <div class="card-footer text-muted">
                                    <div class="">
                                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <div style="margin-top:100px"></div>
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>