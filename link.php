<html>
<head>
    <meta http-equiv='Content-Language' content='en-us'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <link rel="shortcut icon" type="image/ico" href="<?php echo theme_dir(); ?>img/logo.png" />
    <title><?php echo the_title(); ?></title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        .task a:hover {
            color: #A00B2B;
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .task {
            width: 100%;
            height: 32px;
            border-top-width: 1px;
            border-bottom: 1px solid #333333;
            padding-left: 5px;
            padding-right: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: #333333;
            text-align: right;
            font-family: Tahoma;
            font-size: 9pt;
            color: #FFFFFF;
            text-transform: capitalize;
            float: right;
        }

        .task a {
            text-decoration: none;
            color: #FFFFFF;
        }

        .padd {
            padding-left: 15px;
            padding-top: 2px;
        }

        .padd:hover {
            opacity: 0.5;
        }

    </style>
</head>

<body scroll='no'>
    <div class='task'>

        <span style='text-align: left; float:left; padding-top:4px; padding-left:15px'>
            <a target='_blank' href='https://telegram.me/share/url?url=<?php echo the_link(); ?>'><img class="padd" border='0' src='<?php echo theme_dir(); ?>img/telegram.png' width='18' height='18' hspace='1' alt='Telegram'></a>
            <a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=<?php echo the_link(); ?>'><img class="padd" border='0' src='<?php echo theme_dir(); ?>img/facebook.png' width='18' height='18' hspace='1' alt='Facebook'></a>
            <a target='_blank' href='https://twitter.com/home?status=<?php echo the_link(); ?>'><img class="padd" border='0' src='<?php echo theme_dir(); ?>img/twitter.png' width='18' height='18' hspace='1' alt='twitter'></a>
            <a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_link(); ?>&title=<?php echo the_title(); ?>'><img class="padd" border='0' src='<?php echo theme_dir(); ?>img/linkedin.png' width='18' height='18' hspace='1' alt='linkedin'></a>
        </span>
        <div class='link' style="margin-top: 6px;  font-family:tahoma;"> « <a href='<?php echo next_link(); ?>'>لینک بعدی</a> | <a href='index.php'>لینکدونی</a> | <a href='<?php echo prev_link(); ?>'>لینک قبلی</a> » &nbsp;
        </div>
    </div>
    <iframe name='contentframe' bordercolor='#ffffff' src='<?php echo the_link(); ?>' width='100%' height='95%' border='0' frameborder='0'></iframe>
</body>

</html>
