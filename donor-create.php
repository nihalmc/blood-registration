<?php 
session_start(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> blood donation registration system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   
<div class="container mt-5">
<?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Donor Add
                      <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">

                    <div class="mb-3">
                        <label>Donor Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Donor Address</label>
                        <input type="text" name="address" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Blood Group</label>
                        <input type="text" name="bloodgroup" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="text" name="date" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="save_donor" class="btn btn-primary">Save Student</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>