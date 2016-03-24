<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bishal Mazumdar</title>
      <link rel="icon" type="image/png" href="image/logo.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
      <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/mystyles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
window.addEventListener("load", function(){
  var load_screen = document.getElementById("load_screen");
  document.body.removeChild(load_screen);
});
</script>

    
  </head>

  <body style="background-color: #fff;">
    <div id="load_screen"><div id="loading"><img src="image/721.gif"></div></div>

        <?php
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $emailid=$_POST['emailid'];
        $feedback=$_POST['feedback'];
        $to="mazumdarbishal@yahoo.com";
        $email_subject = "New Feedback";
        $email_body="You have received a new feedback from $firstname $lastname. His email id is $emailid. 
        His message is: \n$feedback ";
        //echo "$email_body";
        mail($to,$email_subject,$email_body);
        ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bishal Mazumdar</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="education.html">Education</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="travel.html">Travel</a></li>
                    <li><a href="honours.html">Honours</a></li>
                    <li class="active"><a href="contact.html"><span class="glyphicon glyphicon-phone"aria-hidden="true"></span>Contact</a></li>
                </ul>
            </div>
        </div>
        </nav>       


        <div class="container fadeInDown animated">
            <div class="row row-content">
           <div class="col-xs-12 ">
              <p><strong>Your feedback has been recorded and sent.</strong></p>
              <p>In the meantime, I will leave you with some quotes that I always have found interesting.</p> 
              <div class="well" style="border: 2px solid black;">
                    <blockquote>
                        <p><strong>Never argue with an idiot. They will only bring you down to their level and beat you with 
                        experience.</strong></p>
                        <footer>George Carlin.
                        </footer>
                    </blockquote>
                </div>
                <div class="well" style="border: 2px solid black;">
                    <blockquote>
                        <p><strong>When I was 5 years old, my mother always told me that happiness was the key to life. 
                         When I went to school, they asked me what I wanted to be when I grew up. 
                         I wrote down ‘happy’. They told me I didn’t understand the assignment, 
                         and I told them they didn’t understand life.</strong></p>
                        <footer>John Lennon (rumoured).
                        </footer>
                    </blockquote>
                </div>
                <div class="well" style="border: 2px solid black;">
                    <blockquote>
                        <p><strong>The greatest pleasure in life is doing what people say you cannot do.</strong></p>
                        <footer>Walter Bagehot.
                        </footer>
                    </blockquote>
                </div>
           </div>
         </div>
       </div>
        
        
        <footer class="row-footer" style="border-top: 1px solid white;">
            <div class="container">
<div class="row">
    <div class="col-xs-6 col-sm-5">
                    <h5 style="color: white;">My Address</h5>
                    <address>
                     Boys Hostel-2<br>
                    National Institute of Technology<br>
                    Silchar, Cachar<br>
                    Assam, India<br>
                    Pin Code: 788010
                   </address>
                </div>
                <div class="text-center col-md-4" >
                    <div class="nav navbar-nav center-block" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="https://plus.google.com/+BishalMazumdar" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/bishal.mazumdar.35" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/mazumdarbishal/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="https://in.linkedin.com/in/bishalmazumdar" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                </div>
                    <div class="col-xs-12 ">
                    <p align="center" style="color: white;">© Copyright 2015 Bishal Mazumdar</p>
                    </div>
                    
            </div>
        </div>
    </footer>
    </body><div class="se-pre-con"></div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>

</html>


