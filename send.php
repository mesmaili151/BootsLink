<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ارسال لینک به لینکدونی</title>
    <link href="<?php echo theme_dir(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo theme_dir(); ?>css/offcanvas.rtl.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <main role="main" class="container">
        <div class="my-3  bg-white rounded">
            <div class="bg-rubyred p-2 mb-1 rounded text-white">ارسال لینک به لینکدونی</div>
            <p class="text-center">جهت ارسال لینک های مفیدتان برای ما ابتدا فرم زیر را پر کنید و برای ما ارسال کنید . ما لینک شما را تایید میکنیم</p>

            <form id="myForm" method="post" action="">
                <input type="text" class="form-control mb-1 form-control-sm" dir="rtl" name="title" required="required" placeholder="عنوان لینک">
                <input type="text" class="form-control mb-1 form-control-sm" dir="rtl" name="link" required="required" placeholder="آدرس لینک">


                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <img src="include/image.php"/ height="30" class="rounded"></span>
                    </div>
                    <input type="text" class="form-control mb-1 form-control-sm rounded" dir="rtl" name="security" placeholder="کد امنیتی" required="required">
                </div>
                <input type="submit" name="submit" class="btn btn-sm btn-block  mt-1 bg-submit rounded shadow-sm text-white text-2" style="font-size: 12px;" value="ارسال لینک" />
            </form>
            	<?php echo $MSG; ?>

        </div>
    </main>
</body>
</html>
