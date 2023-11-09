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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<style>
           /* Style for the dropdown menu */
           .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style for the dropdown items */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change the color of the dropdown items when hovered */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown content when hovering over the dropdown */
        .dropdown:hover .dropdown-content {
            display: block;
        }
</style>

<body id="top">

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
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a href="services.php" title="services">Services</a></li>

                    <!-- <ul>
        <li class="dropdown">
            <a href="services.php" title="services">Services</a>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
                 Add more service links as needed 
            </div>
        </li>
    </ul>-->

                    <li><a href="projects.php" title="Portfolio">Portfolio</a></li>
                    <li><a class="smoothscroll" href="#clients" title="Testimonials">Testimonials</a></li>
                    <li><a href="careers.php" title="Join us">Join us</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                </ul>

                <p>Just Fix is a Mechanical, Electrical and Plumbing contracting company. We provide professional
                    services with high quality of works on time & within budget to ensure our clients satisfaction.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/bg-3.png" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to JASAR AL SUKHAR TECHNICAL SERVICES LLC</h3>

                <h1>
                    We Are A Creative MEP Engineering Firm Dedicated To
                    Meet The Specific Needs Of Any Project
                </h1>
                <div class="home-content__buttons">
                    <a href="javascript:void(0);" onclick="scrollToElement('contact');" class="btn btn--stroke">
                        Start a Project with us
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToElement('about');" class="btn btn--stroke">
                        More About Us
                    </a>
                </div>

            </div>

            <!-- <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div> -->

            <!-- <div class="home-content__line"></div> -->

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa-brands fa-facebook"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa-brands fa-x-twitter"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa-brands fa-instagram"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa-brands fa-whatsapp"></i><span>Whatsapp</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa-brands fa-linkedin"></i><span>LinkedIn</span></a>
            </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="abt" style="display: flex;">

        <div class="col-1-4" style="background: url(images/abt.png) ;width: 100%; background-repeat: no-repeat;background-size: cover; padding:  0 0 0 0 ;">

            <section id='about' class="s-about" style="width: 100%; ">



                <div class="col-full section-header has-bottom-sep" data-aos="fade-up">
                    <div class="col-full">
                        <h3 class="subhead subhead--dark">Hello There</h3>
                        <!-- <h1 class="display-1 display-1--light">We Are Just Fix</h1> -->
                    </div>
                </div> <!-- end section-header -->

                <div class="row about-desc" data-aos="fade-up">
                    <div class="col-full">
                        <p>
                            <strength>Jasar Al Sukhar Technical Services LLC (Just Fix)</strength> established in year
                            2009
                            and
                            registered in Dubai
                            accordance to the requirements of UAE law. More than 11 years of existence, we grew in to
                            one of
                            the reputed company in United Arab Emirates. We are proud to have been trusted by many
                            Companies/Clients in our field of expertise.<br><br>
                            Just Fix is a Mechanical, Electrical and Plumbing contracting company. We provide
                            professional
                            services with high quality of works on time & within budget to ensure our clients
                            satisfaction.<br><br>
                            Our best workforce and technical knowledge that enable us to execute critical projects in
                            specified
                            time schedule without compromising on quality and safety. We are an equal opportunity
                            employer
                            committed to Health, Safety and Environment responsibility of our employees.<br><br>
                            We are offering full range of Electro-mechanical (MEP) <strength>Contracting /Facility
                                Management
                            </strength> ,
                            in the fields of Electrical, low current systems, Plumbing, HVAC systems. Our scope covers
                            Engineering,
                            Documentation, Submittals Approval, Shop drawings, Coordinating Drawings, Commissioning,
                            Start-Up,
                            Project Time Schedules Complying Consultant Specifications, International Standards & Codes,
                            Safety
                            &
                            Quality Plans.
                        </p>
                    </div>
                </div> <!-- end about-desc -->

                <?php
                // Read the JSON file
                $jsonData = file_get_contents('admin/stats.json');
                $stats = json_decode($jsonData, true);

                // Access individual statistics
                $clients = $stats['clients'];
                $projects = $stats['projects'];
                $experience = $stats['experience'];
                $workers = $stats['workers'];
                ?>

                <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

                    <div class="col-block stats__col">
                        <div class="stats__count"><?php echo $projects ?></div>
                        <h5>Projects Completed</h5>
                    </div>

                    <div class="col-block stats__col">
                        <div class="stats__count"><?php echo $clients ?></div>
                        <h5>Happy Clients</h5>
                    </div>

                    <div class="col-block stats__col ">
                        <div class="stats__count"><?php echo $experience ?></div>
                        <h5>Years Of Experience</h5>
                    </div>
                    <div class="col-block stats__col">
                        <div class="stats__count"><?php echo $workers ?></div>
                        <h5>Workers</h5>
                    </div>
                </div> <!-- end about-stats -->
            </section> <!-- end s-about -->
        </div>
    </section>


    <section id="section-steps" style=" color: #fff; padding-top: 160px; padding-bottom: 80px; padding-left: 15px; padding-right: 15px;     background: linear-gradient(rgba(2, 2, 2, 59%), #00000054,#0000007d), url(images/samp-3.png) fixed center ;background-repeat: no-repeat; background-size: cover;">

        <div class="container">


            <div class="row">

                <div class="col-md-12">
                    <div class="de_tab tab_steps">
                        <ul class="de_nav">
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 0s; visibility: visible;">
                                <span>DESIGN</span>
                                <div class="v-border" style="opacity: 1;"></div>
                            </li>
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 0.4s; visibility: visible;">
                                <span>ENGINEERING</span>
                                <div class="v-border" style="opacity: 0;"></div>
                            </li>
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 0.8s; visibility: visible;">
                                <span>PROCUREMENT</span>
                                <div class="v-border" style="opacity: 0;"></div>
                            </li>
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 1.2s; visibility: visible;">
                                <span>CONSTRUCTION</span>
                                <div class="v-border" style="opacity: 0;"></div>
                            </li>
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 1.2s; visibility: visible;">
                                <span>COMMSIONING</span>
                                <div class="v-border" style="opacity: 0;"></div>
                            </li>
                            <li class="wow fadeIn animated" style="opacity: 1; animation-name: fadeIn; animation-delay: 1.2s; visibility: visible; font-size: 10px;">
                                <span>OPERATIONS &<br> MAINTENANCE</span>
                                <div class="v-border" style="opacity: 0;"></div>
                            </li>
                        </ul>
                        <div class="de_tab_content">
                            <div id="tab1">
                                <ul>
                                    <li>Experienced management teams provide detailed attention throughout the project,
                                        from
                                        design, review, and implementation.</li>
                                    <li>Qualified site Engineer trained in document, project and data control processes,
                                        are assigned to
                                        project types in which they have specific experience and expertise.</li>
                                </ul>
                            </div>
                            <div id="tab2">
                                <li>Proven estimating skills and systems manage costs and contracts with cross-training
                                    for all levels
                                    of employees.</li>
                                <li>Consistent utilization of critical path schedules to plan, manage and control
                                    projects.</li>
                                <li> Tracking of long lead time items, permitting critical path tasks and adjustments
                                    for
                                    unforeseen conditions.</li>
                            </div>
                            <div id="tab3">
                                <li>Durations includes start and end dates key milestones work scope and deliverance for
                                    all phases of
                                    the project.</li>
                                <li>Extensive use of Expedition software a multi-user, multi -project, client/server
                                    database.
                                    Implemented for each project, controlling document <span class="m-l-23">and
                                        information.</span></li>
                                <li> Organization of daily reports, meetings minutes submittals, costs reporting.
                                    Insurance and project
                                    team contact information.</li>
                            </div>
                            <div id="tab4">
                                <li>Follow up the Main Contractor of QC & inspection of executed works & received
                                    materials to
                                    site and be sure it is comply with approved <span class="m-l-23">technical submittal
                                        and contract specification, Also
                                        interconnection between Client / Consultant & Sub-Contractor.</span></li>
                                <li>Perform all duties (related to the nature of the job) assigned by the main
                                    contractor.</li>
                            </div>
                            <div id="tab5">
                                <li>Participate in meetings with other Project disciplines, main contractors etc and as
                                    required
                                    provide input into the resolving queries /issues <span class="m-l-23">raised.</span>
                                </li>
                                <li>Review and evaluate work methodology and sequencing and liaise with the Project
                                    Manager /
                                    Planner regarding suggested work <span class="m-l-23">improvements.</span></li>
                                <li>Prepare detailed safety planning with the assigned Safety Officer and implement,
                                    monitor and
                                    manage the overall safety program during <span class="m-l-23">execution.</span></li>
                            </div>
                            <div id="tab6">
                                <li>Organize project work execution utilizing suitably skilled /trained personnel to
                                    carry out specific
                                    tasks in accordance with approved <span class="m-l-23">procedures and specification
                                        requirements, including Site
                                        Survey works.</span></li>
                                <li>Report to Project Incharge on any problems related to the Site.</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">

            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">





                    <?php
                    // Establish a database connection (you may need to adjust the database credentials)
                    include('admin/includes/database.php');

                    // Define an array of project IDs that you want to retrieve
                    $projectIdsToRetrieve = [1, 2, 3, 4, 5, 6, 7, 8]; // Replace with the desired project IDs

                    // Create a comma-separated string of project IDs
                    $projectIdsString = implode(",", $projectIdsToRetrieve);

                    // Query to fetch specific projects based on project IDs
                    $sql = "SELECT id, image_path, project_name, description FROM projects WHERE id IN ($projectIdsString) ORDER BY FIELD(id, $projectIdsString)";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="masonry__brick" data-aos="fade-up">
                       <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="' . $row["image_path"] . '" class="thumb-link"
                                    title="Shutterbug" data-size="1050x700">
                                    <img src="' . $row["image_path"] . '" alt="Uploaded Image"> 
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                               ' . $row["project_name"] . '
                                </h3>
                                <p class="item-folio__cat">
                               ' . $row["project_name"] . '
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>' . $row["description"] . '</p>
                            </div>

                        </div>
                    </div> ';
                        }
                    } else {
                        echo "";
                    }

                    $connect->close();
                    ?> <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/2.png" class="thumb-link" title="Woodcraft"
                                    data-size="1050x700">
                                    <img src="images/portfolio/2.png"
                                       
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->
                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/3.png" class="thumb-link"
                                    title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/3.png"
                                        
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> -->
                    <!-- end masonry__brick -->

                    <!--   <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/carousel.jpg" class="thumb-link"
                                    title="Grow Green" data-size="1050x700">
                                    <img src="images/carousel.jpg"
                                        
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->
                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/bg-3.png" class="thumb-link" 
                                    data-size="1050x700">
                                    <img src="images/bg-3.png"
                                      
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->
                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/sample-image.jpg" class="thumb-link" title="Palmeira"
                                    data-size="1050x700">
                                        <img src="images/samp-1.png"
                                       
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> -->
                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/1.png" class="thumb-link"
                                    title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/1.png"
                                       
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->
                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/1.png" class="thumb-link"
                                    title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/1.png"
                                       
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->

                    <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="images/portfolio/1.png" class="thumb-link"
                                    title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/1.png"
                                       
                                        alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                    dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>  -->
                    <!-- end masonry__brick -->
                    

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

        <div class="cen_div m-t-40">
            <a class="btn btn--stroke " href="#0">See More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        

    </section> <!-- end s-works -->

    



    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Testimonials</h3>
                <h1 class="display-2">Discover what our valued clients have to say about their experience partnering with us.</h1>
            </div>
        </div> <!-- end section-header -->



        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <?php


                    $connect = mysqli_connect('localhost', 'jasar', 'secret', 'jasar');

                    if (mysqli_connect_errno()) {
                        die('Failed to connect to MySQL :' . mysqli_connect_errno());
                    }

                    // Retrieve testimonials from the database
                    $sql = "SELECT name,com_name, role, testimonial, image_path FROM testimonials ORDER BY created_at DESC";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            echo '   <div class="testimonials__slide">

                        <p>' . $row["testimonial"] . '</p>

                        <img src="' . $row["image_path"] . ' " alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">' . $row["name"] . '</span>
                            <span class="testimonials__pos">' . $row["com_name"] .  ',</span>
                            <span class="testimonials__pos">'  . $row["role"] . '</span>
                        </div>

                    </div>';
                        }
                    } else {
                        echo "";
                    }

                    $connect->close();
                    ?>
                </div><!-- end testimonials -->

            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->
    <!-- 
                    <div class="testimonials__slide">

                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                            Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>

                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span>
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                            Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span>
                            <span class="testimonials__pos">CEO, Microsoft</span>

                        </div>

                    </div> -->










    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">


        <div class="overlay"></div>

        <div>

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Contact Us</h3>
                    <h1 class="display-2 display-2--light">Reach out for a new project or just say hello</h1>
                </div>
            </div>


            <div class="row contact-content" data-aos="fade-up">

                <div class="contact-primary">

                    <h3 class="h6">Send Us A Message</h3>

                    <form name="contactForm" id="contactForm" method="post" action="">
                        <fieldset>

                            <div class="form-field">
                                <input name="contactName" type="text" id="Name" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="Email" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactSubject" type="text" id="subject" placeholder="Subject" value="" class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="contactMessage" id="message" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary" type="button" onclick="Send()">Submit</button>
                                <div class="submit-loader">
                                    <div class="text-loader">Sending...</div>
                                    <div class="s-loader">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                    <!-- contact-warning -->
                    <div class="message-warning">
                        Something went wrong. Please try again.
                    </div>

                    <!-- contact-success -->
                    <div class="message-success">
                        Your message was sent, thank you!<br>
                    </div>

                </div> <!-- end contact-primary -->


                <div class="contact-secondary">
                    <div class="contact-info">

                        <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                        <div class="cinfo">


                            <h5>Where to Find Us</h5>
                            <p>
                                PO Box:186302,<br> Al Nahda-1,<br>Dubai, UAE <br>

                            </p>

                        </div>

                        <div class="cinfo">
                            <h5>Email Us At</h5>
                            <p>

                                info@jasaruae.com

                            </p>
                        </div>

                        <div class="cinfo">
                            <h5>Call Us At</h5>
                            <p>
                                <!-- Phone: (+63) 555 1212<br> -->
                                Mobile: 055-6601516
                            </p>
                        </div>


                        <!-- <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li> 
                    </ul> -->
                        <!-- end contact-social -->

                    </div> <!-- end contact-info -->
                </div> <!-- end contact-secondary -->


            </div> <!-- end contact-content -->
            <div class="row contact-content" data-aos="fade-up">

                <!-- Background Content -->
                <div class="background-content" style="background-color: rgba(0, 0, 0, 0.2); color: rgba(255, 255, 255, 0.4); padding-top: 6rem; padding-bottom: 6rem;">
                    <!-- Add your background content here -->
                </div>

                <!-- Map Overlay -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6796840657253!2d55.21394157891324!3d25.04494228065552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x497749eea0cb057b%3A0xc6a0bcd6eb614725!2sJust%20fix%20technical%20Sevices!5e0!3m2!1sen!2sin!4v1698987193211!5m2!1sen!2sin&output=embed&style=feature:all|element:labels|visibility:off|style:element:geometry|lightness:20|saturation:-80" style="border: 1px; position: absolute; width: 100%; height: 100%; top: 0; left: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section> <!-- end s-contact -->











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
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        function Send() {

            var senderEmail = "anas@dacentrictechnologies.com";
            var name = document.getElementById("Name").value;
            var email = document.getElementById("Email").value;
            var sub = document.getElementById("subject").value;
            var mess = document.getElementById("message").value;


            var body = "Name: " + name + "<br/> Email:" + email + "<br/> Subject:" + sub + "<br/> Message:" + mess;

            console.log(body);
            Email.send({

                SecureToken: "bfd1dc7e-3f3e-48d4-bc04-b73986851d65",
                To: senderEmail,
                From: senderEmail,
                Subject: sub,
                Body: body
            }).then(
                message => {
                    if (message == 'OK') {

                        Swal.fire(
                            'Recieved',
                            'Our team will contact you soon',
                            'success'
                        )
                    } else {

                        Swal.fire("Something went Wrong", "Your Data is not Received", "error");
                    }
                }
            );



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