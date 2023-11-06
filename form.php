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

    .email-template {
      font-family: Arial, sans-serif;
      border: 2px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      background-color: #f8f8f8;
      text-align: left;
      margin: 20px auto;
      width: 80%;
    }

    .email-template h1 {
      font-size: 20px;
      text-align: center;
      margin: 0;
    }

    .email-template p {
      font-size: 16px;
      margin: 0;
    }

    .email-template span {
      font-weight: bold;
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
  <div class="email-template" style="display: none;">
    <h1>Contact Information</h1>
    <p>First Name: <span id="first-name"></span></p>
    <p>Last Name: <span id="last-name"></span></p>
    <p>Email: <span id="email"></span></p>
    <p>Phone: <span id="phone"></span></p>
    <p>Title: <span id="title"></span></p>
    <p>Job Code: <span id="job-code"></span></p>
    <p>Gender: <span id="gender"></span></p>
  </div>


  <div class="formbold-main-wrapper">

    <?php
    require_once('admin/includes/database.php');

    // Retrieve the job details based on the job ID from the URL parameter
    $job_id = $_GET['job_id'];
    $sql = "SELECT * FROM jobs WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $job_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $job_title = $row["job_title"];
      $job_code = $row["job_code"];
      $job_description = $row["job_description"];
      $experience = $row["experience"];
      $posted = date('F d, Y', strtotime($row["posted"]));
      $stat = $row["stat"];

      echo '<div class="formbold-form-wrapper">
      <!-- <img src="images/bg-2.png"> -->
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label"> First Name </label>
            <input type="text" name="firstname" id="firstname" placeholder="Your first name" class="formbold-form-input" required />
          </div>

          <div>
            <label for="lastname" class="formbold-form-label"> Last Name </label>
            <input type="text" name="lastname" id="lastname" placeholder="Your last name" class="formbold-form-input" required />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="email" class="formbold-form-label"> Email </label>
            <input type="email" name="email" id="Email" placeholder="example@email.com" class="formbold-form-input" required />
          </div>

          <div>
            <label class="formbold-form-label">Gender</label>

            <select class="formbold-form-input" name="gender" id="Gender" >
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="others">Others</option>
            </select>
          </div>
        </div>

        <div class="formbold-mb-3 formbold-input-wrapp">
          <label for="phone" class="formbold-form-label" > Phone </label>
          <input type="text" name="phone" id="Phone"  placeholder="+123 45676543" class="formbold-form-input" required  />
          </div>
          

        <div class="formbold-mb-3">
          <label for="age" class="formbold-form-label"> Applying for Position: </label>
          <input type="text" name="title" id="Title" value="' . $job_title . '"  class="formbold-form-input" required readonly />
        </div>

        <div class="formbold-mb-3">
          <label for="job-code" class="formbold-form-label">Job Code </label>
          <input type="text" name="job-code" id="Job-code"  value="' . $job_code . '" class="formbold-form-input" required readonly />
        </div>

        <div class="formbold-form-file-flex">
          <label for="upload" class="formbold-form-label">
            Upload Resume
          </label>
          <input type="file" name="upload" id="attachment" required  class="formbold-form-file" accept=".pdf,.docx" />
        </div>

        <button class="full-width btn--primary" type="button" onclick="Send()">Apply Now</button>
      </form>
    </div>';
    } else {
      echo "Job not found";
    }

    $stmt->close(); // Close the prepared statement
    $connect->close(); // Close the database connection
    ?>
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
          <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script>
    function Send() {
      var senderEmail = "anas@dacentrictechnologies.com";
      var firstname = document.getElementById("firstname").value;
      var lastname = document.getElementById("lastname").value;
      var email = document.getElementById("Email").value;
      var gender = document.getElementById("Gender").value;
      var phone = document.getElementById("Phone").value;
      var title = document.getElementById("Title").value;
      var jobCode = document.getElementById("Job-code").value;

      var attachmentInput = document.getElementById("attachment");

      var body = `
        <html>
        <head>
          <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
          <div class="email-template">
            <h1>Applicant details</h1>
            <p>First Name: ${firstname}</p>
            <p>Last Name: ${lastname}</p>
            <p>Email: ${email}</p>
            <p>Phone: ${phone}</p>
            <p>Title: ${title}</p>
            <p>Job Code: ${jobCode}</p>
            <p>Gender: ${gender}</p>
          </div>
        </body>
        </html>
      `;



      function convertFile() {
        var reader;
        var dataUri;
        var file = document.getElementById("attachment").files[document.getElementById("attachment").files.length - 1];
        reader = new FileReader();
        reader.readAsBinaryString(file);
        reader.onload = function() {
          dataUri = "data:" + file.type + ";base64," + btoa(reader.result);
        }
        reader.onloadend = function() {
          allConvertedFiles.push({
            name: file.name,
            data: dataUri
          });
        }
      };
      allConvertedFiles=[];
      Email.send({
        // SecureToken: "bfd1dc7e-3f3e-48d4-bc04-b73986851d65",
        Host: "smtp.elasticemail.com",
        Username: "anas@dacentrictechnologies.com",
        Password: "8475109070CCED91F87A940C228F4D666FA1",

        To: senderEmail,
        From: senderEmail,
        Subject: "Applicant for" + title,
        Body: body,
        Attachments: allConvertedFiles
      }).then(
        message => {
          if (message === 'OK') {
            Swal.fire(
              'Recieved',
              'Your Application was recieved Successfully',
              'success'
            );
          } else {
            Swal.fire("Something Wrong", "Please apply manually with the job title and job code", "error");
          }
        }
      );
    }
  </script> -->
  <script>
    function Send() {
      var senderEmail = "anas@dacentrictechnologies.com";
      var firstname = document.getElementById("firstname").value;
      var lastname = document.getElementById("lastname").value;
      var email = document.getElementById("Email").value;
      var gender = document.getElementById("Gender").value;
      var phone = document.getElementById("Phone").value;
      var title = document.getElementById("Title").value;
      var jobCode = document.getElementById("Job-code").value;

      var attachmentInput = document.getElementById("attachment");

      var body = `
    <html>
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <div class="email-template">
        <h1>Applicant details</h1>
        <p>First Name: ${firstname}</p>
        <p>Last Name: ${lastname}</p>
        <p>Email: ${email}</p>
        <p>Phone: ${phone}</p>
        <p>Title: ${title}</p>
        <p>Job Code: ${jobCode}</p>
        <p>Gender: ${gender}</p>
      </div>
    </body>
    </html>
  `;


      function convertFile(file, callback) {
        var reader = new FileReader();
        reader.onload = function() {
          callback(reader.result);
        };
        reader.readAsDataURL(file);
      }

      var allConvertedFiles = [];
      var filesToConvert = attachmentInput.files;
      var filesConverted = 0;

      if (filesToConvert.length > 0) {
        for (var i = 0; i < filesToConvert.length; i++) {
          // Use a closure function to capture the current value of i
          (function(i) {
            convertFile(filesToConvert[i], function(dataUri) {
              allConvertedFiles.push({
                name: filesToConvert[i].name,
                data: dataUri
              });

              filesConverted++;
              if (filesConverted === filesToConvert.length) {
                // All files have been converted, now send the email
                sendEmail();
              }
            });
          })(i);
        }
      } else {
        // No files to convert, directly send the email
        sendEmail();
      }

      function sendEmail() {

        Email.send({
          SecureToken: "bfd1dc7e-3f3e-48d4-bc04-b73986851d65",
          // Host: "smtp.elasticemail.com",
          // Username: "anas@dacentrictechnologies.com",
          // Password: "8475109070CCED91F87A940C228F4D666FA1",
          To: senderEmail,
          From: senderEmail,
          Subject: "Applicant for " + title,
          Body: body,
          Attachments: allConvertedFiles
        }).then(function(message) {
          if (message === "OK") {
            Swal.fire(
              "Received",
              "Your Application was received Successfully",
              "success"
            );
          } else {
            Swal.fire(
              "Something Went Wrong",
              "Please apply manually with the job title and job code",
              "error"
            );
          }
        });
      }
    }
  </script>



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





</body>

</html>