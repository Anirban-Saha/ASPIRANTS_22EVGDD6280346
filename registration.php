<?php include "assest/head.php"; ?>
<?php 
 if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/flogo.png" sizes="32x32" type="image/png">

    <!-- Bootstrap, FontAwesome, Custom Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">


    <title>Registration</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
    <main class="main">

        <!-- Latest Articles -->
        <div class="section jumbotron mb-0 h-100">
            <!-- container -->
            <div class="container d-flex flex-column justify-content-center align-items-center h-100">

                <div class="wrapper my-0 pt-3 bg-white w-50 text-center">
                    <img src="img/logo/logo.png" alt="dev culture logo" style="width: 100px;height: auto;">
                </div>

                <!-- row -->
                <div class="wrapper bg-white rounded px-4 py-4 w-50">

               <!-- Form -->
               <form action="assest/insert.php?type=reg" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="authName">Full Name</label>
    <input type="text" class="form-control" name="authName" id="authName">
</div>

<div class="form-group">
    <label for="authDesc">Description</label>
    <input type="text" class="form-control" name="authDesc" id="authDesc">
</div>

<div class="form-group">
    <label for="authEmail">Email</label>
    <input type="email" class="form-control" name="authEmail" id="authEmail">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password">
</div>
<div class="form-group">
    <label for="authImage">Avatar</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="authImage" id="authImage">
        <label class="custom-file-label" for="authImage">Choose file</label>
    </div>
</div>

<div class="form-group">
    <label for="authTwitter">Twitter Username <span class="text-info">(optional)</span></label>
    <input type="text" class="form-control" name="authTwitter" id="authTwitter" placeholder="Ex: Moon96Schwarz">
</div>
<div class="form-group">
    <label for="authGithub">Github Username <span class="text-info">(optional)</span></label>
    <input type="text" class="form-control" name="authGithub" id="authGithub" placeholder="Ex: Moon96Schwarz">
</div>
<div class="form-group">
    <label for="authLinkedin">Linkedin Username <span class="text-info">(optional)</span></label>
    <input type="text" class="form-control" name="authLinkedin" id="authLinkedin" placeholder="Ex: Moon96Schwarz">
</div>


<div class="text-center">
    <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
</div>
</form>
                </div>

                <!-- /row -->

            </div>
            <!-- /container -->
        </div>


    </main><!-- </Main> -->

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>