<!-- html:5 tab -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


    <!-- <link rel="stylesheet" href="dist/daterangepicker.min.css">
    <script type="text/javascript" src="moment.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="dist/jquery.daterangepicker.min.js"></script> -->


    <title>Document</title>

    <!-- js/stylesheet , wp function to include, wp head/footer, inject functions.php 
    then we shall see wp header -->
    <?php wp_head(); ?>
    

</head>
<body>
    

<header class="top-nav">
    <div class="container">
        <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                // 'menu' => 'Top Bar'
                'menu_class' => 'top-bar'//unordered list
            )
        )
        ?>
    </div>
</header>

<script>
// $(function () {
//     $(document).scroll(function () {
//         var $nav = $(".top-nav");
//         console.log('y:'+ $(this).scrollTop);
//         if ($(this).scrollTop && !$nav.hasClass('scrolled')) {
//             $nav.addClass('scrolled');//, $(this).scrollTop() > $nav.height());
//         }
//         else if(!$(this).scrollTop && $nav.hasClass('scrolled')){
//             $nav.removeClass('scrolled');
//         }
//     });
//  });


  $(document).scroll(function () {
    var $nav = $(".top-nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

</script>
