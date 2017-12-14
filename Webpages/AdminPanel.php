<?php

require_once '../Includes/Functions.php';
content();
adduser();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/StyleSheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style=" background: url(../img/background.jpg); background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a style="margin-left: 1200px;" class="nav-item nav-link" href="Login.php">Logout</a>
        </div>
    </div>
</nav>




<div class="container" id="color">
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="cardid">
            <div class="card-body">
                <h4>Blog post:</h4>
                <br>
            <form method="post" action="AdminPanel.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Blog Title:</label>
                    <input type="Text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title">
                </div>

                    <div class="row">
                        <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">About</label>
                    <select class="form-control" name="about" id="exampleFormControlSelect1">
                        <option>LifeStyle</option>
                        <option>ICT</option>
                        <option>Nature</option>
                        <option>Person</option>
                        <option>Other...</option>
                    </select>
                </div>
                        </div> </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text:</label>
                    <textarea name="content"  class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <button type="Submit" value="Submit" class="btn btn-success" name="Test" id="buttonadjust">Post Blog</button>
            </form>
               </div>
            </div>
        </div>
    </div>



<div class=" container" id="color">
    <div class=" row">
    <div class=" col-md-12">
        <div class="card">
            <div class="card-body">
        <h4>Registrations:</h4>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
            <tbody>
            <?php UserTable(); ?>
            </tbody>

        </table>
                <button id="button_margin" type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">Add User</button>
            </div>
        </div>
    </div>



        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form method="post" action="AdminPanel.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>



       </div>
    </div>





</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>