<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8">
  <title>Just Fix</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- mobile specific metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/vendor.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
  <script src="js/pace.min.js"></script>
  <script src="js/main.js"></script>

  <!-- favicons
    ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">



</head>

<body id="top" style="background-color: white; ">
  <!-- header
    ================================================== -->
  <header class="s-header">

    <div class="header-logo">
      <a class="site-logo" href="index.php">
        <img src="images/logo-footer.png" alt="Homepage" class="m-t-90">
      </a>
    </div>

    <nav class="header-nav">

      <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

      <div class="header-nav__content">
        <h3>Navigation</h3>

        <ul class="header-nav__list">
          <li class="current"><a href="index.php" title="home">Home</a></li>
          <li><a href="index.php#about" title="about">About</a></li>
          <li><a href="services.php" title="services">Services</a></li>
          <li><a href="projects.php" title="Portfolio">Portfolio</a></li>
          <!-- <li><a href="index.php#clients" title="Testimonials">Testimonials</a></li> -->
          <li><a href="careers.php" title="Join us">Join us</a></li>
          <li><a href="index.php#contact" title="contact">Contact</a></li>
        </ul>

        <p>Just Fix is a Mechanical, Electrical and Plumbing contracting company. We provide professional
          services with high quality of works on time & within budget to ensure our clients satisfaction.</p>

        <ul class="header-nav__social">
          <li>
            <a href="#0"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#0"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#0"><i class="fa fa-instagram"></i></a>
          </li>
          <li>
            <a href="#0"><i class="fa fa-whatsapp"></i></a>
          </li>
          <li>
            <a href="#0"><i class="fa fa-linkedin"></i></a>
          </li>
        </ul>

      </div> <!-- end header-nav__content -->

    </nav> <!-- end header-nav -->

    <a class="header-menu-toggle" href="#0">
      <span class="header-menu-text">Menu</span>
      <span class="header-menu-icon"></span>
    </a>

  </header> <!-- end s-header -->


  <style>
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .job-listings {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 2rem;
    }

    .job-card {
      background-color: #fff;
      border: 1px solid transparent;
      /* Set a transparent border initially */
      /* border-image: linear-gradient(45deg, #ff0000, #00ff00, #bfc509); */
      /* Define the linear gradient for the border */
      border-image-slice: 1;
      border-radius: 5px;
      padding: 1rem;
      text-align: center;
      /* flex: 0 0 calc(33.33% - 20px); */
      /* 33.33% width for three cards with a 20px gap */
      box-shadow: 0 0 20px rgba(0, 87, 209, 0.2);
      /* Add a subtle box shadow */
      flex: 1;
      min-width: 400px;
      max-width: 400px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }


    .job-card a {
      display: inline-block;
      background-color: #f99f1c;
      color: #ffffff;
      padding: 5px 10px;
      text-decoration: none;
      border-radius: 5px;
      width: 35%;
    }


    .job-card a:hover {
      background-color: #008b43;
      color: #fff;
    }

    .application-process,
    .perks {
      background-color: #000000;
      padding: 2rem;
    }

    h1 {
      font-size: 48px;
      color: #fff;
    }

    .application-process p,
    .perks p {
      font-size: 24px;
    }

    .application-process li,
    .perks li {
      font-size: 18px;
    }

    /* Media query for smaller screens (e.g., mobile) */
    @media (max-width: 926px) {
      .job-card {
        flex: 1;
        min-width: 300px;
        /* Full width for mobile */
      }
    }
  </style>





  <section class="bg-title-page p-b-80 p-l-15 p-r-15" style="background: linear-gradient(rgba(2, 2, 2, 59%), rgba(0, 0, 0, 70%),rgba(0, 0, 0, 0.9)), url(images/bg-3.png) ;background-repeat: no-repeat; background-size: cover;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  -ms-align-items: center;
  align-items: center;
  min-height: min-content;
  padding-top: 160px;
  padding-right: 15px;
  padding-left: 15px;
  padding-bottom: 80px;">
    <h2 class="tit6 t-center" style="background: linear-gradient(90deg, 
    #f99f1c 0%,
    #008b43 20%,
    #2e3192 40%,
    #a32b23 60%,
    #2b73b7 80%,
    #d74db5 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 76px;
      font-weight: bold;
      font-family:'montserrat-bold', serif;" data-aos="fade-up" data-aos-delay="1000">
      Careers
    </h2>
  </section>

  <section class="perks">
    <div class="cen_div" data-aos="flip-up" data-aos-delay="1300">
      <h1>Why Join Just Fix?</h1>
    </div>
    <div class="cen_div">
      <p data-aos="zoom-out" data-aos-easing="ease-out-back">We offer a range of benefits and perks to our employees,
        including:</p>
    </div>
    <div class="cen_div">
      <ul>
        <li data-aos="flip-down" data-aos-easing="ease-out-back" data-aos-delay="1000">Competitive salary and benefits
          package</li>
        <li data-aos="flip-down" data-aos-easing="ease-out-back" data-aos-delay="1100">Opportunities for career growth
        </li>
        <li data-aos="flip-down" data-aos-easing="ease-out-back" data-aos-delay="1200">Exciting projects and challenges
        </li>
        <li data-aos="flip-down" data-aos-easing="ease-out-back" data-aos-delay="1300">Collaborative and innovative work
          environment</li>
      </ul>
    </div>
  </section>


  <section class="job-listings row-row">

    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1000">
      <h2>Mechanical Engineer</h2>
      <p id="jobDescription">Join our team as a Mechanical Engineer and work on exciting projects in the field of HVAC
        and more. Duis aute sunt non cupidatat enim elit ad incididunt anim incididunt. Pariatur exercitation excepteur
        amet eiusmod id consectetur. Irure nulla dolor aliqua nisi mollit ad tempor voluptate. Proident sit velit irure
        nulla duis proident. Dolore non consectetur dolore est incididunt mollit. Non sunt voluptate ex labore sint
        reprehenderit eiusmod incididunt do cupidatat do. Proident do minim proident aliqua veniam ut.</p>


      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>


    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1200">
      <h2>Electrical Engineer</h2>
      <p>We are hiring Electrical Engineers to create innovative solutions for our clients' electrical systems.Ad veniam
        nulla nulla pariatur deserunt amet in ea elit cillum id consequat incididunt eu.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>

    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1400">
      <h2>Plumbing Specialist</h2>
      <p>If you have a passion for plumbing systems, join us and make a difference in the world of MEP.Enim pariatur ad
        aliquip pariatur proident occaecat deserunt ex non culpa reprehenderit.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>
    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1000">
      <h2>Mechanical Engineer</h2>
      <p>Join our team as a Mechanical Engineer and work on exciting projects in the field of HVAC and more.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>

    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1200">
      <h2>Electrical Engineer</h2>
      <p>We are hiring Electrical Engineers to create innovative solutions for our clients' electrical systems.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>

    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1400">
      <h2>Plumbing Specialist</h2>
      <p>If you have a passion for plumbing systems, join us and make a difference in the world of MEP.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>
    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1000">
      <h2>Mechanical Engineer </h2>
      <p>Join our team as a Mechanical Engineer and work on exciting projects in the field of HVAC and more.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>

    <div class="job-card" data-aos="fade-down-right" data-aos-delay="1200">
      <h2>Electrical Engineer</h2>
      <p>We are hiring Electrical Engineers to create innovative solutions for our clients' electrical systems.Nostrud
        tempor elit nisi anim reprehenderit enim adipisicing exercitation veniam nostrud consequat do duis duis.</p>
      <!-- <a id="readMoreLink" class="read-link">Read More</a>
      <a id="readLessLink" class="read-link" style="display: none;">Read Less</a> -->
      <a id="applyNowButton" href="mailto:#" class="apply-button">Apply Now</a>
    </div>


  </section>

  <section class="application-process">
    <div class="cen_div " data-aos="flip-down">
      <h1>Application Process</h1>
    </div>
    <div class="cen_div">
      <p data-aos="zoom-in" data-aos-easing="ease-out-back">Our application process is straightforward and transparent.
        Here's what you can expect:</p>
    </div>

    <div class="cen_div">
      <ol>
        <li data-aos="flip-up" data-aos-easing="ease-in-back" data-aos-delay="1000">Submit your application online.</li>
        <li data-aos="flip-up" data-aos-easing="ease-in-back" data-aos-delay="1100">Receive a confirmation email with
          further instructions.</li>
        <li data-aos="flip-up" data-aos-easing="ease-in-back" data-aos-delay="1200">Interview with our team.</li>
        <li data-aos="flip-up" data-aos-easing="ease-in-back" data-aos-delay="1300">Receive an offer letter.</li>
      </ol>
    </div>
  </section>








  <!-- footer
    ================================================== -->
  <footer style="background-color: white;">

    <div class="footer-main">

      <div class="row-row left footer-desc">

        <div class="footer-logo"></div>
        Jasar Al Sukhar Technical Services LLC (Just Fix) established in year 2009 and registered in Dubai
        accordance to the requirements of UAE law. More than 11 years of existence, we grew in to one of the
        reputed company in United Arab Emirates. We are proud to have been trusted by many Companies/Clients in
        our field of expertise.


      </div>



    </div> <!-- end footer-main -->

    <div class="row footer-bottom">

      <div class="col-twelve">
        <div class="copyright m-b-14">
          <span>© Copyright <a href="https://www.DaCentrictechnologies.com">DaCentric Technologies</a></span>
        </div>

        <div class="go-top">
          <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>
      </div>

    </div> <!-- end footer-bottom -->

  </footer> <!-- end footer -->


  <!-- photoswipe background
  ================================================== -->
  <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
            title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button
            class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>

    </div>

  </div> <!-- end photoSwipe background -->


  <!-- preloader
  ================================================== -->
  <div id="preloader">
    <div id="loader">
      <div class="line-scale-pulse-out">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>



  <!-- Java Script
    ================================================== -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script>
    function scrollToElement(elementId) {
      var element = document.getElementById(elementId);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
      }
    }
  </script>

  <script>
    // JavaScript to truncate the content and show "Read More" and "Read Less" links
    const jobDescription = document.getElementById('jobDescription');
    const readMoreLink = document.getElementById('readMoreLink');
    const readLessLink = document.getElementById('readLessLink');
    const applyNowButton = document.getElementById('applyNowButton');
    const maxCharacters = 250;

    const jobContent = jobDescription.textContent;

    if (jobContent.length > maxCharacters) {
      const truncatedContent = jobContent.substring(0, maxCharacters) + '...';
      jobDescription.textContent = truncatedContent;

      readMoreLink.style.display = 'block';

      readMoreLink.addEventListener('click', function () {
        jobDescription.textContent = jobContent;
        readMoreLink.style.display = 'none';
        readLessLink.style.display = 'block';
      });

      readLessLink.addEventListener('click', function () {
        jobDescription.textContent = truncatedContent;
        readLessLink.style.display = 'none';
        readMoreLink.style.display = 'block';
      });
    } else {
      applyNowButton.style.display = 'block';
    }
  </script>


</body>

</html>