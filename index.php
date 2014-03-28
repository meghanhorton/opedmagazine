<?php 
if(!isset($_GET['s'])){ $page = 0;}
else{ $page = $_GET['s'];}

include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OpEd Magazine</title>

    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-41759180-3']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
        
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


      ga('create', 'UA-41759180-3', 'reesenewslab.org');
      ga('send', 'pageview');

    </script>
  </head>
  <body <?php if($page == 0){echo 'class="front"';}?>>
    <div class="container">
      <?php 
        include('stories/'.$page.'.php');           // INCLUDE TEXT ON THIS PAGE
        if($page != 0) { 
            // ADD NAVIGATION TO SIDES
            add_navigation($page);   

            // ADD MODALS 
            foreach($modal as $key=>$value){
                echo create_modal($key,$modal[$key]);
            }
        }
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrolldepth.min.js"></script>
    <script src="js/custom.js"></script>


  </body>
</html>