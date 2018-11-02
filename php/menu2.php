<!-- <div class="mysticky">

</div> -->
<div class="wrapper">
            <header>
                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <img src="../img/kasekar.png" alt="">
                        </div>

                        <div class="menu" >
                              <ul>
                                    <li><a href="../html/index.php">ទំព័រដើម</a></li>
                                    <li><a href="../html/main-content-animals.php">អំពីសត្វ</a></li>
                                    <li><a href="../html/main-content-vegatables.php">អំពីដំណាំ</a></li>
                                    <li><a href="../html/article-others.php">ផ្សេងៗ</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>

      </div>

      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>