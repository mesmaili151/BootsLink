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
</head>
    
    <body class="bg-light">

    <main role="main" class="container">
<div class="d-flex align-items-center p-2 pl-3 my-3 text-white-50 bg-rubyred rounded shadow-sm">
            
            <div class="lh-100">
                <h6 class="mb-0 text-white pb-2">لینکدونی</h6>
                <small>مطالب جالب و خواندنی از سراسر وب</small>
            </div>

        </div>

        <div class="list-group my-3  bg-white rounded shadow-sm">

            <?php
		if ( have_link() ) : while( have_link() ) : the_link();

			echo sprintf( "<a class='list-group-item list-group-item-action' href='%1\$s' target='_blank' title='%2\$s'>%2\$s <span class='badge bg-rubyred text-white float-right'>%3\$d</span></a>", the_url(), the_title(), the_count());

				endwhile; endif; ?>

        </div>
<a class="btn btn-sm btn-block  mt-1 bg-submit rounded shadow-sm text-white text-2" style="font-size: 12px;" href="<?php echo get_option( 'site_url' ); ?>"> ادامه - آرشیو لینکدونی</a>
    </main>

    <script src="<?php echo theme_dir(); ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo theme_dir(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo theme_dir(); ?>js/offcanvas.js"></script>

</body>
</html>
