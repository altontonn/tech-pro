<?php
// $message_sent = false;
// if(isset($_POST['email']) && $_POST['email'] != '') {
// if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   //submit the form
//     $firstname = $_POST['first_name'];
//     $lastname = $_POST['last_name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $message = $_POST['message'];
//     $to = 'newtonalumasa82@gmail.com';
//     $body = '<h4>FirstName: '.$firstname.'<br>LastName: '.$lastname.'<br> Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$message.'</h4>';
//     mail($to, $message, $body);

//     $message_sent = true;
//   } 
// }

if(!empty($_POST['submit'])) {
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $to = 'newtonalumasa82@gmail.com';
  $body = '<h4>FirstName: '.$firstname.'<br>LastName: '.$lastname.'<br> Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$message.'</h4>';
  if(mail($to, $message, $body)){
   $text = 'We\'ll get in touch with you';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Newton</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts-icon/css/line-awesome.css">
  <link rel="stylesheet" href="fonts-icon/css/line-awesome.min.css">
  <link rel="shortcut icon" href="img/apple.jpg" type="image/jpg">
</head>
<body>

<main class="container-fluid">
  <!-- ASIDE NAVIGATION -->
  <div class="row wrapper">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="navigation__button" id="navi-id">
          <span class="navigation__icon">&nbsp;</span>
        </label>
        <div class="navigation__background"></div>
        <div class="navigation__nav">
          <ul class="navigation__list">
            <li class="navigation__item"><a class="navigation__link closeOne" href="#my_home">Home</a></li>
            <li class="navigation__item"><a class="navigation__link closeTwo" href="#services">My services</a></li>
            <li class="navigation__item"><a class="navigation__link closeThree" href="#aboutMe">About Me</a></li>
            <li class="navigation__item"><a class="navigation__link closeFour" href="#portfolio">Portfolio</a></li>
            <li class="navigation__item"><a class="navigation__link closeFive" href="#my_skills">Skills</a></li>
            <li class="navigation__item"><a class="navigation__link closeSix" href="#contact_me">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
      <!-- END OF NAVIGATION -->

        <!-- CONTENT PART -->
    <div class="content col-lg-9 col-md-9 col-sm-9" id="my_home">
      <section class="section u-margin-bm-md">
        <div class="section--content">
          <div class="section--heading">
            <h2 class="section--text text-center u-margin-bm-sm">Newton Alumasa</h2>
            WEB DEVELOPER AND DESIGNER FROM KENYA<br>
            I believe that people are the center of every solution leading us to the right software just
            waiting
            to be designed.
          </div>
          <div class="section--image">
            <img src="img/IMG_20200913_223745.jpg" class="section--photo" alt="newton">
          </div>
        </div>
      </section>

      <section class="section--services" id="services">
        <h2 class="section--text text-center u-margin-bm-bg">My Services
          <span>SERVICES</span>
        </h2>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon las la-code"></i>
                <h3 class="box--header">Web Design</h3>
                A highly-motivated web design graduate with a Degree from KCA University.Eager to assist clients in building the best websites for small business clients and delivering unforgettable customer experience. Designed 2+ Wordpress-based websites for friends and family. 3-month training at TechCamp Kenya.
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon las la-laptop"></i>
                <h3 class="box--header">Web Development</h3>
                Goal-oriented Web Developer with a  Bachelor of Science in Applied Computing and looking to enhance my professional experience with an IT company specializing in web development. Armed with a deep sense of responsibility and possessing very high levels of enthusiasm to give my 110% for any endeavor.
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon lab la-wordpress-simple"></i>
                <h3 class="box--header">Wordpress</h3>
                Proficient and creative WordPress developer with a strong history in website management and development. Expert in all aspects of WordPress website creation, including design, plug-ins, and implementation. Dedicated to superior customer service at all levels from the first meeting with a client to the website maintenance after launch.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon lab la-opencart"></i>
                <h3 class="box--header">Opencart</h3>
                I integrate OpenCartCMS platform with external and 3rd party Apps & APIs and build feature rich and user friendly OpenCarteCommerce stores for my clients, build enterprise-class eCommerce stores with complex back-end systems and integration with large databases.
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon las la-globe"></i>
                <h3 class="box--header">SEO</h3>
                Energetic marketing graduate passionate about Internet marketing as well as technical SEO. Skilled in project management, with strong foundations in data visualization and research. Seeking to leverage skills in data analysis and result tracking as an SEO Analyst at Google.
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <i class="box--icon lab la-magento"></i>
                <h3 class="box--header">Magento</h3>
                Proficiency in developing, debugging and optimizing complex PHP web applications, with PHP, CSS, HTML5, JavaScript development, Implement and customize off-the-shelf Magento extensions and develop custom Magento extensions when necessary.
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section--about" id="aboutMe">
        <div class="info">
          <div class="row rada">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="info--about">
                <img src="img/IMG_20210411_214112_868.jpg" class="info--image" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="info--sect">
                <h2 class="info--sect__heading text-center u-margin-bm-md" id="about">About Me
                  <span>ABOUT</span>
                </h2>
                <h3 class="info--sect__job-title u-margin-bm-sm">Web Designer/Developer . Wordpress
                  Developer
                </h3>
                <p class="info--text">Hi! I am Newton Alumasa, a web designer/developer focused on crafting
                  great web experiences. Designing and Coding have been my passion since the days I
                  started
                  working with computers but I found myself into web design/development since 2015. I
                  enjoy
                  creating beautifully designed, intuitive and functional websites.</p>
                <a href="doc/Newton Alumasa Litiema CV.docx" download class="btn btn--classic">Download CV
                    <i class="las la-download"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- portfolio section -->
      <section class="portfolio u-margin-bm-md" id="portfolio">
        <h2 class="section--text text-center u-margin-bm-md">My Portfolio
          <span>PORTFOLIO</span>
        </h2>
        <div class="work container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/velvetonmarble-co-ke-2.png" class="work__image--class" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="https://velvetonmarble.co.ke/"
                    target="_blank">Website</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/stjosephhospitalkahawawendani-2.png" class="work__image--class" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="https://stjosephhospitalkahawawendani.com/"
                    target="_blank">Website</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/Global-Summit.png" class="work__image--class" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="https://altontonn.github.io/Global-Summit/">See Live</a>
                  <a class="work__image--text-1" href="https://github.com/altontonn/Global-Summit">Code</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/portfolio.png" class="work__image--class" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="https://github.com/altontonn/portfolio">See Live</a>
                  <a class="work__image--text-1" href="https://altontonn.github.io/portfolio/">Code</a>
                </span>
              </div>
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/Leaderboard.png" class="work__image--class work__image--1" alt="image">
                <span class="work__image--hover-1">
                  <a class="work__image--text" href="https://altontonn.github.io/Leaderboard/">See Live</a>
                  <a class="work__image--text-1" href="https://github.com/altontonn/Leaderboard">Code</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/Library.png" class="work__image--class" alt="image">
                <span class="work__image--hover-1">
                  <a class="work__image--text" href="https://github.com/altontonn/library">See Live</a>
                  <a class="work__image--text-1" href="https://altontonn.github.io/library/">Code</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/snip_community.png" class="work__image--class work__image--1" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="#community"><i class="las la-search"></i></a>
                  <a class="work__image--text-1" href="">Code</a>
                </span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 load">
              <div class="work__image">
                <img src="img/challenger.png" class="work__image--class" alt="image">
                <span class="work__image--hover">
                  <a class="work__image--text" href="#dodger"><i class="las la-search"></i></a>
                  <a class="work__image--text-1" href="https://github.com/altontonn/dodger">Code</a>
                </span>
              </div>
            </div>
            <center><button class="btn btn--classic btn--classic__load">Load More</button></center>
          </div>
        </div>
      </section>
      <!-- end of portfolio -->

      <section class="skills u-margin-bm-md" id="my_skills">
        <h2 class="section--text text-center u-margin-bm-md">My Skills
          <span>SKILLS</span>
        </h2>
        <div class="school">
          <li><i class="lab la-html5"></i><span class="bar"><span class="bar--html"></span></span>
            <p>70%</p>
          </li>
          <li><i class="lab la-css3"></i><span class="bar"><span class="bar--css"></span></span>
            <p>65%</p>
          </li>
          <li><i class="lab la-wordpress"></i><span class="bar"><span class="bar--wordpress"></span></span>
            <p>80%</p>
          </li>
          <li><i class="lab la-js-square"></i><span class="bar"><span class="bar--javascript"></span></span>
            <p>55%</p>
          </li>
          <li><i class="lab la-php"></i><span class="bar"><span class="bar--php"></span></span>
            <p>50%</p>
          </li>
          <li><i class="lab la-git-alt"></i><span class="bar"><span class="bar--git"></span></span>
            <p>70%</p>
          </li>
        </div>
      </section> 

      <section class="contact u-margin-bm-md" id="contact_me">
        <h2 class="section--text text-center u-margin-bm-md">Contact Me
          <span>CONTACT</span>
        </h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="side">
              <div class="side__call">
                <i class="las la-map-signs side__icon">
                  <h4>1248 - 00300, Kenya Nairobi</h4>
                </i>
              </div>
              <div class="side__call">
                <i class="las la-paper-plane side__icon">
                  <h4>newtonalumasa82@gmail.com</h4>
                </i>
              </div>
              <div class="side__call">
                <i class="las la-phone side__icon">
                  <h4>+254707829072</h4>
                </i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="text-center" style="color: #10cfff;"></h2>
            <h2 class="text-center" style="color: red;"></h2>
            <h2 class="text-center" style="color: #10cfff;"></h2>
            <h2 class="text-center" style="color: red;"></h2>
            <form class="form" method="POST">
              <div class="form__group">
                <input type="text" class="form__input" name="first_name" placeholder="First Name" id="name" required>
                <label for="name" class="form__label">Fisrt Name</label>
              </div>

              <div class="form__group">
                <input type="text" class="form__input" name="last_name" placeholder="Last Name" id="last-name" required>
                <label for="last-name" class="form__label">Last Name</label>
              </div>

              <div class="form__group">
                <input type="number" class="form__input" name="phone" placeholder="Phone" id="phone" required>
                <label for="phone" class="form__label">Phone</label>
              </div>

              <div class="form__group">
                <input type="email" class="form__input" name="email" placeholder="Email" id="email" required>
                <label for="email" class="form__label">Email</label>
              </div>

              <div class="form__group">
                <textarea type="text" class="form__input" name="message" placeholder="Message" id="text" minlength="10" required
                    rows="4" cols="50"></textarea>
                <label for="message" class="form__label">Message</label>
              </div>
              <input type="Submit" name="submit" class="btn btn--classic btn--classic-1">
              <?php  
                if(!empty($text)) { ?>
                <h3 class="text-primary"><?php echo $text ?></h3>
                <?php } ?>
              ?>
            </form>
            
          </div>
        </div>
      </section>

      <section class="footer">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer__one">
              <h2 class="u-margin-bm-sm">About</h2>
              <p>I am Newton Alumasa, a web designer/developer focused on crafting great web
                experiences.
                Designing and Coding have been my passion since the days I started working with
                computers
                but I found myself...</p>
              <a href="#about" class="btn btn--classic btn--about margin-top-sm">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer__one">
              <h2 class="u-margin-bm-sm">Links</h2>
              <ul class="footer__clyde">
                <li class="footer__clyde--links"><a class="footer__clyde--anchor" href="#my_home">Home</a>
                </li>
                <li class="footer__clyde--links"><a class="footer__clyde--anchor"
                  href="#services">Services</a>
                </li>
                <li class="footer__clyde--links"><a class="footer__clyde--anchor" href="#aboutMe">About</a>
                </li>
                <li class="footer__clyde--links"><a class="footer__clyde--anchor"
                  href="#portfolio">Portfolio</a>
                </li>
                <li class="footer__clyde--links"><a class="footer__clyde--anchor" href="#my_skills">Skills</a>
                </li>
                <li class="footer__clyde--links"><a class="footer__clyde--anchor"
                  href="#contact_me">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer__one">
              <h2 class="u-margin-bm-sm">Follow Me</h2>
              <div class="footer__call">
                <li class="footer__call--1"><i class="las la-map-signs footer__call--2"></i>1248 - 00300, Kenya Nairobi</li>
                <li class="footer__call--1"><i
                  class="las la-paper-plane footer__call--2"></i>altontonnalumasa@gmail.com
                </li>
                <li class="footer__call--1"><i
                  class="las la-phone footer__call--2"></i>+254707829072
                </li>
              </div>
              <div class="footer__icons">
                <li class="footer__icons--1"><a
                  href="https://www.facebook.com/profile.php?id=100008501237996"
                  class="footer__icons--2"><i class="lab la-facebook"></i></a></li>
                <li class="footer__icons--1"><a href="https://www.instagram.com/newton_altontonn/"
                  class="footer__icons--2"><i class="lab la-instagram"></i></a></li>
                <li class="footer__icons--1"><a href="" class="footer__icons--2"><i
                  class="lab la-twitter"></i></a></li>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>
  </div>
</main>

/*LINK PORTFOLIO */
<!-- Portfolio -->
<div class="popup" id="grid">
  <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
    <img src="img/screencapture-1.png" class="popup__image popup__image--logo" alt="grid">
    </div>
</div>
<div class="popup" id="student">
  <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
    <img src="img/studentsApp.png" class="popup__image popup__image--1" alt="studentsApp">
  </div>
</div>
<div class="popup" id="budget">
  <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
    <img src="img/Budget.png" class="popup__image popup__image--1" alt="budget">
  </div>
</div>
<div class="popup" id="community">
  <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
    <img src="img/snip_community.png" class="popup__image popup__image--1" alt="snip_community">
  </div>
</div>
<div class="popup" id="dodger">
  <div class="popup__content">
    <a href="#portfolio" class="popup__close">&times;</a>
    <img src="img/challenger.png" class="popup__image popup__image--1" alt="challenger">
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="index.js"></script>
</body>
</html>