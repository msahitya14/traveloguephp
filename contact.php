<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The travelogue. Travels made simple and easy. Explore new destinations and get enquiries.">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>The Travelogue</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="vendors/plyr/plyr.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.php"> <img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo.png" alt="" width="200" /><span class="text-primary fs-4 ps-2"></span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-600" href="index.php#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link text-600" href="index.php#places">Destinations</a></li>
                <!--<li class="nav-item"><a class="nav-link text-600" href="index.php#booking">Booking </a></li>-->
                <li class="nav-item"><a class="nav-link text-600" href="contact.php">Contact us</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <section class="py-0">
        <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/contact.png);background-position:right bottom;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center min-vh-75 my-lg-8">
            <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
              <h1 class="mb-4 display-1 lh-sm">Get In Touch!</h1>
              <p class="mt-4 mb-5 fs-1 lh-base"><strong>Address:</strong> A-12 Konarknagar II Viman Nagar,Nagar Road,Pune 411014</p>
              <p class="mt-4 mb-5 fs-1 lh-base" style = "padding-top: -200px"><strong>Email:</strong> <a href="mailto:info@thetravelogue.co.in">info@thetravelogue.co.in</a></p>
              <p class="mt-4 mb-5 fs-1 lh-base"><strong>Mob:</strong> +91 98902 75195</p>
              <p class="mt-4 mb-5 fs-1 lh-base"><strong>Phone:</strong> 020 41283602 / 65265285</p>
            </div>
          </div>
        </div>
      </section>

      <section id="booking">
        <div class="bg-holder .bg-info.bg-gradient" style="background: rgb(2,0,36); background: linear-gradient(31deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); background-position:center; background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-12 py-8 text-white">
              <div class="d-flex flex-column flex-center">
                <h2 class="text-white fs-2 fs-md-3">Plan your next trip!</h2>
                <h1 class="text-white fs-2 fs-sm-4 fs-lg-7 fw-bold">Enquire to explore a new destination.</h1>
              </div>
              <form class="row gy-2 gx-md-2 gx-lg-4 flex-center my-6" id="enquiryform" action = "booking.php" method = "post">

                <div class="row">
                  <div class="col">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name = "fname" id="fname" placeholder="First name">
                  </div>
                  <div class="col">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name = "lname" id="lname" placeholder="Last name">
                  </div>
                  <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name = "email" id="email" placeholder="email">
                  </div>
                </div>

                <div class="row" style="padding-top: 2%">
                    <div class="col">
                        <label for="pax">PAX</label>
                        <input type="number" class="form-control" id="pax" name="pax" min="1">
                    </div>
                    <div class="col">
                        <label for="ndays">Nights / Days</label>
                        <input type="number" class="form-control" id="ndays" name="ndays" min="1">
                    </div>
                    <div class="col">
                        <label for="pickup">Pickup from Airport/Railway</label>
                            <select name="pickup" id="pickup" form="enquiryform" class="form-control">
                            <option value="Yes" style="color: red">Yes</option>
                            <option value="No" style="color: red">No</option>
                            </select>
                    </div>
                    <div class="col">
                        <label for="drop">Drop to Airport/Railway</label>
                            <select name="drop" id="drop" form="enquiryform" class="form-control">
                            <option value="Yes" style="color: red">Yes</option>
                            <option value="No" style="color: red">No</option>
                            </select>
                    </div>
                </div>

                <div class="row" style="padding-top:2%">
                    <div class="col">
                        <label for="destination">Destination Type</label>
                            <select name="destination" id="destination" form="enquiryform" class="form-control">
                            <option value="Domestic" style="color: red">Domestic</option>
                            <option value="International" style="color: red">International</option>
                            </select>
                    </div>

                    <div class="col">
                        <label for="vtype">Type of Vehicle Required</label>
                        <select name="vtype" id="type" form="enquiryform" class="form-control">
                        <option value="Hatchback" style="color: red">Hatchback</option>
                        <option value="Sedan" style="color: red">Sedan</option>
                        <option value="SUV" style="color: red">SUV</option>
                        <option value="Van" style="color: red">Van</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="budget">BUDGET</label>
                        <input type="text" class="form-control" name="budget" id = "budget" placeholder="BUDGET"></input>
                    </div>
                </div>

                <div class="row" style="padding-top: 2%">
                  <div class="col">
                    <label for="enq">Enquire</label>
                    <input type="text" class="form-control" name = "enq" id="enq" placeholder="Enquire">
                  </div>
                </div>
                




                <div class="col-6 col-md-auto">
                  <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="py-6">

        <div class="container">
          <!--<div class="row flex-center">
            <div class="col-auto mb-4">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Home</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Gallery</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Destinations</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Booking</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Contact</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Pricing</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Privacy Policy</a></li>
              </ul>
            </div>
          </div>-->

          <div class="row flex-center">
            <h2 class>About us</h2>
            <div class="col-sm mb-4">
              <p class="mb-0 fs--1 text-dark"> <span class="text-danger">The Travelogue</span> aspires to be a name to reckon with in the world of Travel and Tourism Industry. Dream Merchants, sagacious, passionately committed to the millions who love to travel in COMFORT and on a SHOE-STRING BUDGET, go the extra mile to churn their dreams into reality.</p>
            </div>
            <h2>Contact us</h2>
            <div class="col-sm mb-4">
              <p class="mb-0 fs--1 text-dark"><strong>Address:</strong> A-12 Konarknagar II Viman Nagar,Nagar Road,Pune 411014</p>
              <p class="mb-0 fs--1 text-dark"><strong>Email:</strong> info@thetravelogue.co.in</p>
              <p class="mb-0 fs--1 text-dark"><strong>Mob:</strong> +91 98902 75195</p>
              <p class="mb-0 fs--1 text-dark"><strong>Phone:</strong> 020 41283602 / 65265285</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
</body>
</html>