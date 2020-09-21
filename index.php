<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="fa" lang="fa" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo get_option( 'title' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo get_option( 'description' ); ?>">
    <meta name="keywords" content="<?php echo get_option( 'keywords' ); ?>">
    <meta name="designer" content="Mohammad Esmaili">
    <meta name="language" content="Fa">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo theme_dir(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo theme_dir(); ?>css/offcanvas.rtl.css" rel="stylesheet">
    <script language="JavaScript">
        <!--
        function popUp(URL) {
            day = new Date();
            id = day.getTime();
            eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=450,left = 483,top = 184');");
        }
        // -->

    </script>
</head>

<body class="bg-light">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-dark bg-dark border-bottom shadow-sm">
        <nav class="my-0 mr-md-auto font-weight-normal">
            <a class="p-2 text-white" href="<?php echo get_option( 'site_url' ); ?>">صفحه اصلی </a>
            <a class="p-2 text-white" href="<?php echo get_option( 'site_url' ); ?>box.php">لینک باکس</a>
            <a class="p-2 text-white" href="mailto:<?php echo get_option( 'email' ); ?>">تماس با ما</a>
        </nav>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-sm d-flex align-items-center mt-1 bg-submit rounded shadow-sm text-white text-2" style="font-size: 12px;" href="javascript:popUp('<?php echo get_option( 'site_url' ); ?>send.php')" class="nav-link">ارسال لینک</a>
        </form>
    </div>
    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-rubyred rounded shadow-sm">
            <img class="mr-3" src="<?php echo theme_dir(); ?>img/logo.png" alt="" width="48" height="48">
            <div class="lh-100">
                <h6 class="mb-0 text-white pb-2"><?php echo get_option( 'title' ); ?></h6>
                <small><?php echo get_option( 'description' ); ?></small>
            </div>

        </div>

        <div class="list-group my-3  bg-white rounded shadow-sm">

            <?php
				if ( have_link() ) : while( have_link() ) : the_link();

					echo '<a href="#" class="list-group-item list-group-item-action active">' . the_date() .  " </a>";
                    
					while( link_in_day() ) : the_link_day();
						echo '<a target="_blank"  class="list-group-item list-group-item-action" href="' . the_url() . '">' . the_title() . ' </a>';
					endwhile;

					echo "<br>";

				endwhile; endif; ?>

            <small class="d-block text-right mt-3">
            </small>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">

                    <li class="page-item"><a class="page-link" href="#"><?php echo pagination( page_numbers() ); ?></a></li>

                </ul>
            </nav>

        </div>

        <div id="page" class="copyright text-right pb-1">
            Powered By <a rel="nofollow" href="http://www.persianlinkcms.ir/" target="_blank" title="پرشین اسکریپت">Persian Link
                CMS</a> - Design By <a rel="nofollow" href="https://m-esmaili.com" target="_blank" title="محمد اسمعیلی موخر">Mohammad Esmaili</a>
        </div>
    </main>

    <script src="<?php echo theme_dir(); ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo theme_dir(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo theme_dir(); ?>js/offcanvas.js"></script>

</body>

</html>
