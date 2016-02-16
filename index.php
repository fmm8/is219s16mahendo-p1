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
      <h4 class="text-left">Education</h4>   
    </div>
    <div class="row">
        <div class="col-sm-3">
            <img src="pic4.png" class="img-rounded" alt="profile picture" width="200" height="200">
        </div>
        
        <div class="col-sm-9">
            
              <div class="align-left">
                <strong>New Jersey Institute of Technology. Newark, New Jersey 2016</strong>
                <p>Bachelor's of Science in Information Technology.</p>
                <strong>Bergen Community College. Paramus, New Jersey 2013</strong>
                <p>Associate's of Science in Engineering Science. </p>
                <strong>Kilimanjaro, United Republic of Tanzania 2007 - 2010</strong>
                <p>Bachelor's of Art in Economics</p>
              </div>
          
        </div>
      

  </div>

</div><!-- End of Education container -->


<!-- Start of interests container -->
<div class="container bg-2 text-center" id="interests">

  <section>
      <div class="page-header">
        <h4 class="text-left">Interests</h4>  
      </div>
      <div class="row alert">

          <div class="col-sm-4">
            <div class="page-header">
              <h4 class="text-center">Development</h4>  
            </div>

            <span><p>Web Development</p></span>
            <span><p>Mobile Applications Development</p></span>
            <span><p>Web Development</p></span>
            <span><p>Web Design</p></span>
            <span><p>Databases Architecture</p></span>

          </div>

          <div class="col-sm-4">
            <div class="page-header">
              <h4 class="text-center">Technical Skills</h4>  
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
              <h4 class="text-center">Photography and Video</h4>  
            </div>

            <span><p>Video Production</p></span>
            <span><p>Photoshop</p></span>

          </div>

      </div>
     
  </section>
</div><!-- End of Interests Container -->


<!-- Start of work experience container -->
<div class="container bg-3 text-center" id="workExperience">    
  <section>
      <div class="page-header">
        <h4 class="text-left">Work Experience</h4>  
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
        <h4 class="text-left">Contact Me</h4>  
      </div>
      
    <div class="row">
      <div class="col-sm-4">
        <p>fmm8@njit.edu</p>
        <p>New Jersey</p>
      </div>
      <div class="col-sm-8">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
         
          <label for="comment">Comment:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>

          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
        </form>
        <br><br>
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
