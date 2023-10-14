<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Information-- TX Service Hand</title>
        <link rel="icon" type="image/x-icon" href="assets/images/servicepic/title-logo.png">
        <!--Bootstrap 5 CDN Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--Custom Css link-->
        <link rel="stylesheet" href="assets/css/booking.css">
        <link ref="stylesheet" href="assets/fonts/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar">
        <!--Nav Bar-->
        <header class="menu-wrapper">
            <nav class="navbar navbar-expand-lg navigation-wrap" data-aos="fade-down">
                <div class="container">
                    <a class="navbar-brand" href="dashboard.php"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Home</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#support">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our_service.php">All Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item dropdown dropdown-menu-end dropdown-menu-lg-start">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img style="width: 28px; height: 28px" src="assets/images/servicepic/userprofiles.png">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li>
                                        <hr style="height: 2px;" class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="serviceorder.php">Service Order</a></li>

                                    <li><a class="dropdown-item" href="support.php">Help & Supports</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq"><img style="width: 22px; height: 22px" src="assets/images/servicepic/bell.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--section-1 top banner-->
        <section id="home">
            <div class="container-fluid px-0 top-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12 section-intro">
                            <h1 class="text-white" data-aos="zoom-in" data-aos-duration="1500">Service Booking
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ======= Service Booking Details Section ======= -->
        <section id="booking" class="booking">

            <div class="row">
                <div class="col-md-7 booking-info">
                    <form action="" method="post" class="row service-selected g-3">
                        <div class="col-12 mt-5 d-flex justify-content-between">
                            <div class="text-start title col-8">
                                <h3>Service Information</h3>
                            </div>
                            <div class="col-4 text-end"><a href="cleaning_service.php">
                                    <button class="add-btn">Add+</button>
                                </a></div>
                        </div>
                        <div class="col-12">
                            <label for="inputName" class="form-label">Service Category</label>
                            <select class="form-select shadow-none" aria-label="Floating label select example" id="serviceCategory" onchange='categoryChanged(this.value);'>
                                <option value=''>Select Service --</option>
                                <option value='Cleaning'>Cleaning Service</option>
                                <option value='Shifting'>Shifting Service</option>
                                <option value='Refrigerator'>Refrigerator Service</option>
                                <option value='Plumbing'>Plumbing & Sanitary Service</option>
                                <option value='Painting'>Painting Service</option>
                                <option value='CarRent'>Car Rental</option>
                                <option value='CarCare'>Car Care Service</option>
                                <option value='AC'>AC Service</option>
                                <option value='Electronics'>Electronics & Gadgets Repair</option>
                                <option value='Travel'>Trip & Travels</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputContactNumber" class="form-label">Service Sub Category</label>
                            <select id="subCategory" class="form-select shadow-none" onchange='subCategoryChanged(this.value);'>
                                <option value=''>Select Subcategory --</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Pick The Date</label>
                            <input type="date" name="pickdate" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Tell About Us the Service</label>
                            <textarea class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>


                    </form>

                    <form action="" method="post" class="row personal-info g-3">
                        <h3 class="mt-5">Personal Information</h3>
                        <div class="col-12">
                            <label for="inputName" class="form-label pt-3">Full Name</label>
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Contact Number</label>
                            <input type="number" name="contactnumber" class="form-control shadow-none" placeholder="Contact Number" required>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Street Address">
                        </div>
                        <div class="col-md-8">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>

                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>


                    </form>

                </div>
                <div class="col-md-5 service-list">
                    <h3 class="mt-5">Service Information</h3>
                </div>
                <div class="col-12 submit-btn text-center">
                <button class="btn btn-primary mt-3 mb-3">Place Booking Request</button>
            </div>
            </div>
            

        </section>
        <!--Support Section-->
        <section id="support">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <h3 data-aos="fade-right" data-aos-duration="1500">Can’t find your desired service? Let us know 24/7
                            in 16056.
                        </h3>
                        <div class="mt-4">
                            <a href="#">
                                <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500">Request Service<i class="fas fa-angle-right ps-3"></i></butoon>
                            </a>
                            <a href="#">
                                <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500"><i class="fa-solid fa-phone px-2"></i>16056</i></butoon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer Section-->
        <section class="footer_wrapper mt-3 mb-md-0">
            <div class="container px5 px-lg-0">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Service Hand</h5>
                        <p class="mb-4 ps-0 company_details">
                            Tackle your to-do list wherever you are with our mobile app &amp; make your life easy.
                        </p>
                        <div class="contact-info">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-home me-3"></i>24, Gabtoli, Dhaka-1216, Bangladesh</a></li>
                                <li><a href="#"><i class="fa fa-phone me-3"></i>+880 1712 632866</a></li>
                                <li><a href="#"><i class="fa fa-envelope me-3"></i>shakil.eub.cse@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Customer Support</h5>
                        <ul class="link-widget p-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Conditions</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>QuickLinks</h5>
                        <ul class="link-widget p-0">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Newsletter</h5>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                            <button type="submit" class="btn main-btn">Subscribe</button>
                        </div>
                        <h5>Stay Connected</h5>
                        <ul class="social-network d-flex align-item-center p-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid copyright-section">
                <p>Copyright <a href="#"> @ SERVICE HAND.</a>All Rights Reserved</p>
            </div>
        </section>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

</php>