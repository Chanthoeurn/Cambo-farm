<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern Agricuture</title>

    <?php
        include('../php/headerlink.php');
    ?>
     <!-- Link Menu Script-->
     <script src="../js/menu.js"></script>
     <!-- <link href="https://fonts.googleapis.com/css?family=Nokora" rel="stylesheet"> -->

     <link rel="stylesheet" href="../css/main-contentStyle.css">
     <link rel="stylesheet" href="../css/menuStyle.css">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <!-- Latest compiled and minified CSS & JS -->
    
    
</head>

<body>
    <?php
            include('../php/menu.php');
    ?>

    <div class="test">
        hello world
    </div>
    <div class="slide">
        <div class="container">

            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="https://via.placeholder.com/1180x500">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                <p>Note: If you're viewing this page via a
                                    <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display
                                    properly due to web browser security rules.</p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://via.placeholder.com/1180x500">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                    at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="https://via.placeholder.com/1180x500">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                    at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="future">
            <!-- <img src="img/pic1.jpg" alt=""> -->
            <img src="../img/farm-logo.jpg" alt="">
            <p style="font-family: 'Chenla', cursive;">ចំណេះដឹងអំពីសត្វ</p>
            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងអំពីសត្វអ្វី?</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="container">
                            <img src="../img/pig-logo.png" alt="" class="pig-img">
                            <h2 style="font-family: 'Chenla', cursive;">សត្វជ្រូក</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តចិញ្ចឹមជ្រូកមែនទេ?
                            </p>
                            <p>
                                <a href="#" style="font-family: 'Chenla', cursive;" >ចុចអានបន្ត​ &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="container">
                            <img src="../img/chicken-logo.png" alt="" class="chicken-img">
                            <h2 style="font-family: 'Chenla', cursive;">សត្វមាន់</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តចិញ្ចឹមមាន់មែនទេ?
                            </p>
                            <p>
                                <a href="#" style="font-family: 'Chenla', cursive;">ចុចអានបន្ត​ &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="container">
                            <img src="../img/duck-logo.png" alt="" class="duck-img">
                            <h2 style="font-family: 'Chenla', cursive;">សត្វទា</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តចិញ្ចឹមទាមែនទេ?
                            </p>
                            <p>
                                <a href="#" style="font-family: 'Chenla', cursive;">ចុចអានបន្ត​ &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            include('../php/footer.php');
    ?>

</body>

</html>