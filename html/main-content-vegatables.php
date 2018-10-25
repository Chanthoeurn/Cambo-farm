<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Content</title>

   <?php
        include('../php/headerMenuLink.php');
    ?>
    <?php
        include('../php/headerlink.php');
    ?>
    <link rel="stylesheet" href="../css/slide_show.css">
     <link rel="stylesheet" href="../css/main-contentStyle.css">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <!-- Latest compiled and minified CSS & JS -->
    
    
</head>

<body>
    <?php
            include('../php/menu2.php');
    ?>

    
    <div class="slide" style="margin-top: 70px;">
        <div class="container">

            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="../img/watermillion/wmelon1.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>ការដាំឪឡឹក</h1>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="../vegetables/watermillion-article1.php" role="button">អានបន្ត</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../img/pineapple/papple1.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>ការដាំម្នាស់</h1>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="../vegetables/pineapple-article.php" role="button">អានបន្ត</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="../img/corn/cornfield1.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>ការដាំពោត</h1>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="../vegetables/corn-article.php" role="button">អានបន្ត</a>
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
                            <img src="../img/Pineapple.png" alt="" class="pig-img">
                            <h2 style="font-family: 'Chenla', cursive;">ដំណាំម្នាស់</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តដាំម្នាស់មែនទេ?
                            </p>
                            <p>
                                <a href="../vegetables/pineapple-article.php" style="font-family: 'Chenla', cursive;" >ចុចអានបន្ត​ &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="container">
                            <img src="../img/watermelon.png" alt="" class="chicken-img">
                            <h2 style="font-family: 'Chenla', cursive;">ដំណាំឪឡឹក</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តដាំឪឡឹកមែនទេ?
                            </p>
                            <p>
                                <a href="../vegetables/watermillion-article1.php" style="font-family: 'Chenla', cursive;">ចុចអានបន្ត​ &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <div class="container">
                            <img src="../img/corn.png" alt="" class="duck-img">
                            <h2 style="font-family: 'Chenla', cursive;">ដំណាំពោត</h2>
                            <p style="font-family: 'Chenla', cursive;">តើលោកអ្នកចង់ដឹងពីវិធីសាស្រ្តដាំពោតមែនទេ?
                            </p>
                            <p>
                                <a href="../vegetables/corn-article.php" style="font-family: 'Chenla', cursive;">ចុចអានបន្ត​ &raquo;</a>
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