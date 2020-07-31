<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/f8cf1c89e6.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>body{background-color:white;}</style>
</head>
<body>
    <div class="container text-center mx-auto w-100 bg-light">
        <h1 class="py-4 bg-dark text-white rounded-bottom"><i class="fa fa-bug" aria-hidden="true"></i> Database Report</h1>
        
        <div class="container">
            <button style="margin:0.0;padding:1.0;" type="button" class="btn btn-info mb-3" onclick="window.location.replace('http://localhost/codeigniter/');">Return <i class="fa fa-undo" aria-hidden="true"></i></button>
        </div>

        <div class="container">
            <p class="h5">Database Query Log</p>
                <div class="d-flex table-data table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Event Time</th>
                                <th>Command Type</th>
                                <th>Argument</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php
                                foreach ($log as $row) {
                                    echo "<tr>";
                                    echo "<td>".$row->event_time."</td>";
                                    echo "<td>".$row->command_type."</td>";
                                    echo "<td>".$row->argument."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>