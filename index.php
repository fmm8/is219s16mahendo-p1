<?php ?>

<!-- Below goes html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom_theme.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong>Farahani Mahendo</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#education"><strong>Education</strong></a></li>
        <li><a href="#interests"><strong>Interests</strong></a></li>
        <li><a href="#workExperience"><strong>Work Experience</strong></a></li>
        <li><a href="#contact"><strong>Contact Me</strong></a></li>
      </ul>
    </div>
  </div>
</nav><!-- End of the Nav -->

<!-- Begin of class mainpage -->
<div class="mainPage">
<!-- Start of Education container -->
<div class="container bg-1 text-center" id="education">

    
    <div class="page-header">
      <h4 class="heading text-left">Education</h4>   
    </div>
    <div class="row">
        <div class="col-sm-5">
            <img src="http://oi67.tinypic.com/20hq747.jpg" class="img-rounded" alt="profile picture" width="200" height="300">
        </div>
        
        <div class="col-sm-7">
            
              <div class="align-left">
                <div class="page-header">
                  <p><i class="fa fa-university"></i></p>
                <strong class="heading">New Jersey Institute of Technology. Newark, New Jersey 2013 - 2016 <i class="fa fa-graduation-cap"></i></strong>
                </div>
                <p>Bachelor's of Science in Information Technology and a Minor in Computer Science</p>
                 <div class="page-header">
                    <strong class="heading">Bergen Community College. Paramus, New Jersey 2010 - 2013</strong>
                </div>
                
                <p>Associate's of Science in Engineering Sciences </p>

                <div class="page-header">
                <strong class="heading">Kilimanjaro, United Republic of Tanzania 2007 - 2010</strong>
                </div>
                <p>Bachelor's of Art in Economics</p>
              </div>
          
        </div>
      

  </div>

</div><!-- End of Education container -->


<!-- Start of interests container -->
<div class="container bg-2 text-center" id="interests">

  <section>
      <div class="page-header">
        <h4 class="heading text-left">Interests</h4>  
      </div>
      <div class="row alert">

          <div class="col-sm-4">
            <div class="page-header">
              <h4 class="heading text-center">Development</h4>  
            </div>

            <span><p>Web Development</p></span>
            <span><p>Mobile Applications Development</p></span>
            <span><p>Web Development</p></span>
            <span><p>Web Design</p></span>
            <span><p>Databases Architecture</p></span>

          </div>

          <div class="col-sm-4">
            <div class="page-header">
              <h4 class="heading text-center">Technical Skills</h4>  
            </div>

            <span><p>Python - Django</p></span>
            <span><p>Java, JSEE</p></span>
            <span><p>JavaScript, Jquery, Angular JS, Json</p></span>
            <span><p>Swift 2.1</p></span>
            <span><p>HTML, CSS, Bootstrap</p></span>
            <span><p>Drupal, Wordpress</p></span>

          </div>

          <div class="col-sm-4">
            <div class="page-header">
              <h4 class="heading text-center">Photography and Video</h4>  
            </div>

            <span><p>Film Production</p></span>
            <span><p>Photoshop</p></span>

          </div>

      </div>
     
  </section>
</div><!-- End of Interests Container -->


<!-- Start of work experience container -->
<div class="container bg-3 text-center" id="workExperience">    
  <section>
      <div class="page-header">
        <h4 class="heading text-left">Work Experience</h4>  
      </div>
      <blockquote>
        <span><p>ADP, LLC - Analyst : 2015 - Present</p></span>
        <span><p>New Jersey Institute of Technology (ACM) - iOS Developer : 2014 - Present</p></span>
        <span><p>Bergen Community College - Student Technology Consultant: 2011 - 2013  </p></span>
        <span><p>Kilimanjaro Learning Center - Economics Tutor : 2008 - 2009 </p></span>
      </blockquote>

  </section>
</div><!-- End of Work Experience Container -->


<!-- Start of Contact container -->
<div class="container bg-4 text-center" id="contact">    
  <section>

       <div class="page-header">
        <h4 class="heading text-left">Contact Me</h4>  
      </div>
      
    <div class="row">
      <div class="col-sm-3">
          <div class="myContact text align-left">
              <p>Farahani Mahendo</p>
              <p>Alpine, New Jersey</p>
              <p>(732) - 000- 0000</p>
              <p>firstName@gmail.co.us</p>
              <i class="fa fa-linkedin-square"></i>
              <i class="fa fa-skype"></i>
              <i class="fa fa-github"></i>

          </div>
      </div>
      <div class="col-sm-9">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="heading control-label col-sm-4" for="email">Your email:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="heading control-label col-sm-4"for="comment">Message:</label>
            <div class ="col-sm-8">
                <textarea class="form-control text" rows="4" id="comment" placeholder="Message ...."></textarea>
            </div>
            
          </div>
           <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
      </div>
           
          
      </div><!-- end of sm-8 -->
    </div><!-- end of row group -->
  </section>
</div><!-- End of Contact Container -->
</div>
<br>

<!-- End of Class Jumbotron -->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="bootstrap.min.js"></script>
  </body>
  </html>
