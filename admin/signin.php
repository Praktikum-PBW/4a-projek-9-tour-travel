<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <?php
    session_start();
    ?>
    <div class="container" style="margin-top: 300px;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <?php
                if(isset($_SESSION['error'])){
                    ?>
                <div class="alert alert-danger">
                    <?=$_SESSION['error']?>
                </div>
                <?php
                } ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Username">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password
                                </label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <input type="submit" value="masuk" name="masuk" class="btn btn-primary mt-2">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>