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

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .formbold-mb-3 {
      margin-bottom: 15px;
    }

    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }

    .formbold-img {
      display: block;
      margin: 0 auto 45px;
    }

    .formbold-input-wrapp>div {
      display: flex;
      gap: 20px;
    }

    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .formbold-input-flex>div {
      width: 50%;
    }

    .formbold-form-input {
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }

    .formbold-form-input::placeholder,
    select.formbold-form-input,
    .formbold-form-input[type='date']::-webkit-datetime-edit-text,
    .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
      color: rgba(83, 99, 135, 0.5);
    }

    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
      color: #07074D;
      font-weight: 500;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }

    .formbold-form-file-flex {
      display: flex;
      /* align-items: center; */
      gap: 20px;
    }

    .formbold-form-file-flex .formbold-form-label {
      margin-bottom: 0;
    }

    .formbold-form-file {
      font-size: 14px;
      line-height: 24px;
      color: #536387;
    }

    .formbold-form-file::-webkit-file-upload-button {
      display: none;
    }

    .formbold-form-file:before {
      content: 'Upload file';
      display: inline-block;
      background: #EEEEEE;
      border: 0.5px solid #FBFBFB;
      box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
      border-radius: 3px;
      padding: 3px 12px;
      outline: none;
      white-space: nowrap;
      -webkit-user-select: none;
      cursor: pointer;
      color: #637381;
      font-weight: 500;
      font-size: 12px;
      line-height: 16px;
      margin-right: 10px;
    }

    .formbold-btn {
      text-align: center;
      width: 100%;
      font-size: 16px;
      border-radius: 5px;
      /* padding: 14px 25px; */
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }

    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-w-45 {
      width: 45%;
    }
  </style>



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
    <h2 class="tit6 t-center" style="background:linear-gradient( to right, #005079, #4a94f7, #06ba5dc9, #4c8267, #fba01c );
      -webkit-background-clip: text;
      background-clip:text;
      -webkit-text-fill-color: transparent;
      font-size: 60px;
      font-weight: 600;
      font-family: Poppins, sans-serif;" data-aos="fade-up" data-aos-delay="1000">
      Careers
    </h2>
  </section>


  <div class="formbold-main-wrapper">

    <div class="formbold-form-wrapper">
      <!-- <img src="images/bg-2.png"> -->
      <form method="POST" action="/" enctype="multipart/form-data">
        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label"> First Name </label>
            <input type="text" name="firstname" id="firstname" placeholder="Your first name"
              class="formbold-form-input"required />
          </div>

          <div>
            <label for="lastname" class="formbold-form-label"> Last Name </label>
            <input type="text" name="lastname" id="lastname" placeholder="Your last name" class="formbold-form-input"
            required />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="email" class="formbold-form-label"> Email </label>
            <input type="email" name="email" id="email" placeholder="example@email.com" class="formbold-form-input" />
          </div>

          <div>
            <label class="formbold-form-label">Gender</label>

            <select class="formbold-form-input" name="occupation" id="occupation" required >
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="others">Others</option>
            </select>
          </div>
        </div>

        <div class="formbold-mb-3 formbold-input-wrapp">
          <label for="phone" class="formbold-form-label"> Phone </label>

          <div>
            <input type="text" name="areacode" id="areacode" placeholder="Area code"
              class="formbold-form-input formbold-w-45" required  />

            <input type="text" name="phone" id="phone" placeholder="Phone number" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-mb-3">
          <label for="age" class="formbold-form-label"> Applying for Position: </label>
          <input type="text" name="age" id="age" class="formbold-form-input" required />
        </div>

        <div class="formbold-mb-3">
          <label for="job-code" class="formbold-form-label">Job Code </label>
          <input type="text" name="job-code" id="job-code" class="formbold-form-input" required />
        </div>
<!-- 
        <div class="formbold-mb-3">
          <label for="dob" class="formbold-form-label"> When can you start? </label>
          <input type="date" name="dob" id="dob" class="formbold-form-input" />
        </div> -->

        <!-- <div class="formbold-mb-3">
          <label for="address" class="formbold-form-label"> Address </label>
  
          <input
            type="text"
            name="address"
            id="address"
            placeholder="Street address"
            class="formbold-form-input formbold-mb-3"
          />
          <input
            type="text"
            name="address2"
            id="address2"
            placeholder="Street address line 2"
            class="formbold-form-input"
          />
        </div> -->

        <!-- <div class="formbold-mb-3">
          <label for="message" class="formbold-form-label">
            Cover Letter
          </label>
          <textarea
            rows="6"
            name="message"
            id="message"
            class="formbold-form-input"
          ></textarea>
        </div> -->

        <div class="formbold-form-file-flex">
          <label for="upload" class="formbold-form-label">
            Upload Resume
          </label>
          <input type="file" name="upload" id="upload" required  class="formbold-form-file" />
        </div>

        <button class="formbold-btn">Apply Now</button>
      </form>
    </div>
  </div>




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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function scrollToElement(elementId) {
      var element = document.getElementById(elementId);
      if (element) {
        element.scrollIntoView({
          behavior: 'smooth'
        });
      }
    }
  </script>

  <script>
    // JavaScript to truncate the content and show "Read More" and "Read Less" links
    const jobDescription = document.getElementById('jobDescription');
    const readMoreLink = document.getElementById('readMoreLink');
    const readLessLink = document.getElementById('readLessLink');
    const applyNowButton = document.getElementById('applyNowButton');
    const maxCharacters = 150;

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

  <script>
    // Get all elements with the class "openModalButton"
    var openModalButtons = document.querySelectorAll(".openModalButton");

    openModalButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        // Get the data-target attribute to determine which modal to open
        var targetModalId = this.getAttribute("data-target");

        // Get the modal and close button elements based on the target modal ID
        var modal = document.getElementById(targetModalId);
        var closeModal = modal.querySelector(".close");

        // Open the modal when the button is clicked
        modal.style.display = "block";

        // Close the modal when the close button is clicked
        closeModal.onclick = function () {
          modal.style.display = "none";
        }

        // Close the modal when clicking outside of it
        window.onclick = function (event) {
          if (event.target === modal) {
            modal.style.display = "none";
          }
        }
      });
    });
  </script>



</body>

</html>