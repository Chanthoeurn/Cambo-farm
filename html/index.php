<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link rel="stylesheet" href="../css/styleHomepage.css">
    <?php
        include('../php/headerlink.php');
    ?>
    <!-- Link Menu Script-->
    <script src="../js/menu.js"></script>
</head>

<body>
    <div class="Full-screen">
        <?php
            include('../php/menu.php');
        ?>

        <div class="container">
            <div class="slide-show">
                <h2>ស្វារគមន៍មកកាន់កសិដ្ឋានកម្ពុជា</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="../img/carrots.jpg" alt="carrots" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>LA is always so much fun!</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/tomatos.jpg" alt="tomatos" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/field.jpg" alt="Fields" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="web-content">
            <div class="container">
                <div>
                    <label for="" ​​​​​​ class="labelNews" style="font-family: 'Chenla', cursive">សំខាន់ៗអំពីទីនេះ</label>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                            <img class="card-img-top center-block" src="../img/plant.png" alt="Card image" style="width:50%">
                            <div class="card-body">
                                <p class="card-text">ផ្តល់ចំណេះដឹងអំពី បទ ពិសោធន៍ការដាំដំណាំ
                                </p>
                                <button type="button" class="btn btn-outline-success center-block">ចុចទីនេះ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="card">
                            <img class="card-img-top center-block" src="../img/chicken.png" alt="Card image" style="width:50%">
                            <div class="card-body">
                                <p class="card-text">ផ្តល់ចំណេះដឹងអំពី បទ ពិសោធន៍ការចិញ្ចឹមសត្វ
                                </p>
                                <button type="button" class="btn btn-outline-success center-block">ចុចទីនេះ</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="card">
                            <img class="card-img-top center-block" src="../img/market.png" alt="Card image" style="width:50%">
                            <div class="card-body">
                                <p class="card-text">ចង់ដឹងពីព័ត៌មានផ្សេងៗ ពីកសិកម្មដែរឬទេ?
                                </p>
                                <button type="button" class="btn btn-outline-success center-block">ចុចទីនេះ</button>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
            <div class="container">
                <div>
                    <label for="" ​​​​​​ class="labelNews" ​​ style="font-family: 'Chenla', cursive ;">ផ្សេងៗពីទីនេះ</label>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">តើលោកអ្នកចង់យល់ដឹងបន្ថែមពីវិធីសាស្រ្តកសិកម្ម ការថែរក្សា បច្ចេកទេសល្អៗពីយើងដែរឬទេ?
                                </p>
                                <p class="card-text">ទីនេះមិនត្រឹមតែផ្តល់ពីចំណេះដឹង និង បទពិសោធន៍ល្អៗដល់យើងទាំងអស់គ្នានេះទេ ថែមទាំងមាន ពីព័ត៌មានផ្សេងៗអំពីកសិកម្មថែមទៀតផង
                                </p>
                                <button type="button" class="btn btn-outline-success">ចុចទីនេះ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img class="card-img-top center-block" src="../img/plant.png" alt="Card image" style="width:50%;height: 220px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div>
                    <label for="" ​​​​​​ class="labelNews" ​​ style="font-family: 'Chenla', cursive ;">អំពីយើង</label>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img class="card-img-top​​​ center-block" src="../img/plant.png" alt="Card image" style="width:50%;height: 220px">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">គោលបំណងនៃការបង្កើតគេហទំព័រមួយនេះ គឺចង់ចែករំលែក អំពីបទពិសោធន៍ និង ចំណេះខ្លះៗអំពីកសិកម្មជូនទៅដល់
                                    កសិកររបស់ប្រទេសកម្ពុជាយើង ។
                                </p>

                                <button type="button" class="btn btn-outline-success" onclick="btnReadMoreClick()">ចុចអានបន្ថែម</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <footer class="myfooter">
                <div class="container">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4" style="font-family: 'Chenla', cursive ; color: white;">
                        <br>
                        <br>
                        <h1​ style="font-size: 14px;">អំពីគេហទំព័រ</h1>
                            <div class="side">
                                <ul>
                                    <li>
                                        <a href="#">អំពីដំណាំ</a>
                                        <li>
                                            <a href="#">អំពីសត្វ</a>
                                        </li>
                                        <li>
                                            <a href="#">ផ្សេងៗទៀត</a>
                                        </li>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-sm-4" ​ style="font-family: 'Chenla', cursive ; font-size: 14px;  color: white;">
                        <br>
                        <h1 style="font-family: 'Chenla', cursive ; font-size: 14px;">ទំនាក់ទំនងយើង</h1>
                        <div class="side">
                            <ul style="list-style: none ;color:white;">
                                <li>
                                    <a href="#">អីម៉ែល:chanthoeurnchhim168@gmail.com</a>
                                    <li>
                                        <a href="#">ទូរស័ព្ទ: +៨៥៥​​ ៨៦៣២៩២២១</a>
                                    </li>
                                    <li>
                                        <a href="#">ទីតាំង: សង្កាត់ទឹកថ្លា ខណ្ឌសែនសុខ រាជធានីភ្នំពេញ</a>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="clear"></div>
        </div>

    </div>
</body>

</html>