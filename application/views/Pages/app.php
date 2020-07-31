<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/f8cf1c89e6.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>body{background-color:#292b2c;}</style>
</head>
<body>
    <div class="container text-center mx-auto w-100 bg-dark">
        <h1 class="py-4 bg-dark text-white rounded-bottom"><i class="fa fa-check-square-o" aria-hidden="true"></i> To Do List</h1>
        <div class="d-flex justify-content-center">
            <?php echo validation_errors();?>
            <?php echo form_open();?>
                <div class="py-2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" autocomplete="off" class="form-control" name="id" id="inlineFormInputGroup" placeholder="ID">
                    </div>
                </div>
                <div class="pt-2 ">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" autocomplete="off" name="description" class="form-control" id="inlineFormInputGroup" placeholder="To Do">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        </div>
                        <input type="date" autocomplete="off" name="date" class="form-control" id="inlineFormInputGroup" placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" type="submit" name="create" id="create" data-toggle="tooltip" data-placement="bottom" title="Create"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    <button class="btn btn-outline-danger" type="submit" name="update" id="update" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-wrench" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
        
        <div class="d-flex table-data table-responsive">
            <table class="table  table-dark table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td>".$row->id."</td>";
                            echo "<td>".$row->description."</td>";
                            echo "<td>".$row->date."</td>";
                            echo "<td><button style=\"margin:0.0;padding:1.0;\" type=\"submit\" class=\"btn btn-danger\" onclick=\"window.location.replace('http://localhost/codeigniter/Page_update/deleteData/".$row->id."');\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="container">
        <button style="margin:0.0;padding:1.0;" type="button" class="btn btn-info mb-3" onclick="window.location.replace('http://localhost/codeigniter/reportGen/generate');">Generate Report</button>
        </div
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>