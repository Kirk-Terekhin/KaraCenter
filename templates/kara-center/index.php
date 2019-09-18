<?php defined( '_JEXEC' ) or die; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <jdoc:include type="head" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templates/<?php echo $this->template; ?>/css/css.css" rel="stylesheet">
    <link href="/templates/<?php echo $this->template; ?>/css/animate.css" rel="stylesheet">
    <link href="/templates/<?php echo $this->template; ?>/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href='http://fonts.googleapis.com/css?family=Lobster|Bad+Script|Neucha&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <?php include("includePHP.php"); ?>
  </head>
<body>
<header>
   <nav>
    <div class="container">
        <div class="row">
           <div class="col-sm-4">
               <jdoc:include type="modules" name="nav-logo" style="xhtml" />
           </div>
            <div class="col-sm-8">
                <jdoc:include type="modules" name="nav" style="xhtml" />
            </div>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 logo">
                <jdoc:include type="modules" name="logo" style="xhtml" />
            </div>
        </div>
    </div>
</header>
<section class="user1 <?php echo $sectionUser1; ?>" id="u1">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol1,$user1_1; ?>">
                <jdoc:include type="modules" name="user1_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol1,$user1_2; ?>">
                <jdoc:include type="modules" name="user1_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol1,$user1_3; ?>">
                <jdoc:include type="modules" name="user1_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol1,$user1_4; ?>">
                <jdoc:include type="modules" name="user1_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="user2 <?php echo $sectionUser2; ?>" id="u2">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol2,$user2_1; ?>">
                <jdoc:include type="modules" name="user2_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol2,$user2_1; ?>">
                <jdoc:include type="modules" name="user2_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol2,$user2_1; ?>">
                <jdoc:include type="modules" name="user2_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol2,$user2_1; ?>">
                <jdoc:include type="modules" name="user2_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="user3 <?php echo $sectionUser3; ?>" id="u3">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol3,$user3_1; ?>">
                <jdoc:include type="modules" name="user3_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol3,$user3_1; ?>">
                <jdoc:include type="modules" name="user3_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol3,$user3_1; ?>">
                <jdoc:include type="modules" name="user3_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol3,$user3_1; ?>">
                <jdoc:include type="modules" name="user3_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="contentik hidden">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div>
    </div>
</section>
<section class="user4 <?php echo $sectionUser4; ?>" id="u4">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol4,$user4_1; ?>">
                <jdoc:include type="modules" name="user4_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol4,$user4_1; ?>">
                <jdoc:include type="modules" name="user4_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol4,$user4_1; ?>">
                <jdoc:include type="modules" name="user4_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol4,$user4_1; ?>">
                <jdoc:include type="modules" name="user4_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="user5 <?php echo $sectionUser5; ?>" id="u5">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol5,$user5_1; ?>">
                <jdoc:include type="modules" name="user5_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol5,$user5_1; ?>">
                <jdoc:include type="modules" name="user5_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol5,$user5_1; ?>">
                <jdoc:include type="modules" name="user5_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol5,$user5_1; ?>">
                <jdoc:include type="modules" name="user5_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="user6 <?php echo $sectionUser6; ?>" id="u6">
    <div class="container">
        <div class="row">
            <div class="u1 <?php echo $userCol6,$user6_1; ?>">
                <jdoc:include type="modules" name="user6_1" style="xhtml" />
            </div>
            <div class="u2 <?php echo $userCol6,$user6_1; ?>">
                <jdoc:include type="modules" name="user6_2" style="xhtml" />
            </div>
            <div class="u3 <?php echo $userCol6,$user6_1; ?>">
                <jdoc:include type="modules" name="user6_3" style="xhtml" />
            </div>
            <div class="u4 <?php echo $userCol6,$user6_1; ?>">
                <jdoc:include type="modules" name="user6_4" style="xhtml" />
            </div>
        </div>
    </div>
</section>
<section class="maps">
     <jdoc:include type="modules" name="maps" style="xhtml" />
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="f1 <?php echo $userColF,$userF_1; ?>">
                <jdoc:include type="modules" name="footer1" style="xhtml" />
            </div>
            <div class="f2 <?php echo $userColF,$userF_1; ?>">
                <jdoc:include type="modules" name="footer2" style="xhtml" />
            </div>
            <div class="f3 <?php echo $userColF,$userF_1; ?>">
                <jdoc:include type="modules" name="footer3" style="xhtml" />
            </div>
            <div class="f4 <?php echo $userColF,$userF_1; ?>">
                <jdoc:include type="modules" name="footer4" style="xhtml" />
            </div>
        </div>
    </div>
</footer>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="/templates/<?php echo $this->template; ?>/js/jquery.min.js"></script>
	 <script src="/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
     <script type="text/javascript">jQuery.noConflict();</script>
      </script>
          <script>
        $(document).ready(function() {

        $('a[href^="#"]').click(function(){
                var el = $(this).attr('href');
                $('body').animate({
                    scrollTop: $(el).offset().top}, 1000);
                return false;
        });

        });
    </script>
    </body>
</html>