<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php

    // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //     if (isset($_GET['email']) && isset($_GET['pass'])) {
    //         $email = $_GET['email'];
    //         $password = $_GET['pass'];
    //         echo '<div class="alert alert-success" role="alert">
    //         Get <br>
    //         '.$email.'<br>'.
    //         $password.'
    //       </div>';


    //     }
    // }
    // elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if (isset($_POST['email']) && isset($_POST['pass'])) {
    //         $email = $_POST['email'];
    //         $password = $_POST['pass'];
    //         echo '<div class="alert alert-success" role="alert">
    //         POST <br>
    //         '.$email.'<br>'.
    //         $password.'
    //       </div>';


    //     }
    // }

    ?>
    <!-- <h3> <a href="/Test/forms.php">home</a>
    </h3> -->
    <div class="container1 mt-3 ">
        <form action="/Test/mysql.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEno" class="form-label">Eno</label>
                <input type="text" name="Eno" class="form-control" id="exampleInputEno" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdtask" id="flexRadioDefault1" checked value="insert">
                <label class="form-check-label" for="flexRadioDefault1">
                    Insert Values
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdtask" id="flexRadioDefault2" value="delete" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Delete Values
                </label>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>