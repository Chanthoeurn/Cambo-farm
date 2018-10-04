// show phone menu when click on toggle
    $(document).ready(function () {
        $('.toggle').click(function () {
            $('.phone-menu2').slideToggle();
        })
    })

// buttonReadmoreclick

    function btnReadMoreClick(){
        // alert("clicked");
        location.href="about.php";
    }
//sticky click
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.menu').addClass("sticky");
        }
        else {
            $('.menu').removeClass("sticky");
        }
    })

    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.toggle').addClass("sticky");
            $('.phone-nav').hide();
            // document.getElementById('.phone-nav').style.display = 'none';
        }
        else {
            $('.toggle').removeClass("sticky");
            $('.phone-nav').show();
            // document.getElementById('.phone-nav').style.display = 'none';
        }
    })

    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.phone-nav').addClass("sticky");
        }
        else {
            $('.phone-nav').removeClass("sticky");
        }
    })


    function menuClick(){
        alert("test");
    }