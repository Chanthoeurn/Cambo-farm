<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link rel="stylesheet" href="../css/styleHomepage1.css">
    <?php
        include('../php/headerMenuLink.php');
    ?>
    <?php
        include('../php/headerlink.php');
    ?>
    <!-- Link Menu Script-->
    <!-- <script src="../js/menu.js"></script> -->
</head>

<body>
    <div class="Full-screen">
        <?php
            include('../php/menu2.php');
        ?>
          
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
        

            <div class="clear"></div>
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
    </div>
</body>

</html>