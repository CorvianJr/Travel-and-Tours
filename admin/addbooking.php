<

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reinjan Booking Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <div class="navbar-brand mx-4 mb-3">       
                <img class="logo-small" src="../img/logo.jpg" alt="">
            </div>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <!--Edit here for the username and userlevel-->
                    <h6 class="mb-0">Jhon Doe</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <!--Booking-->
                <a href="admin.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Book Now</a>
                <!--User Management-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User Management</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="staff.html" class="dropdown-item">Staff</a>
                        <a href="client.html" class="dropdown-item">Client</a>
                    </div>
                </div>
                <!--Travel package management-->
                <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Package Management</a>
                <!--Reports-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Reports</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="bookinfolist.html" class="dropdown-item">Booking history</a>
                        <a href="itineraryreport.html" class="dropdown-item">Itinerary Reports</a> 
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <h2 class="text-primary m-2">Reinjan Travel and Tours</h3>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            
            <div class="container-fluid pt-4 px-4">
                <!--create custom class for container-->
                <div class="booking-container"> 
                        <!--package information goes here, all info is from tbl_package-->
                    <div class="col-md-8">

                            <div class="bg-secondary rounded h-100 p-4 mr-3">
                                <h5>Package Information</h5>
                                <div class="info-container">
                                   
                                    <!--values retrieved from tbl_package-->
                                    <div class="col-md-4 mr-3 "> 
                                        <div class="bg-dark rounded p-4">
                                            <h6>PRICING</h6>
                                            <div class="form-floating mb-2">    
                                                <input type="text" class="form-control" id="floatingInput"  placeholder="" value="𝗨𝗦𝗗 𝟭𝟬𝟴𝟴/𝗣𝗔𝗫" disabled>
                                                <label for="floatingInput">Adult & Child with bed: </label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"  placeholder="" value="𝗨𝗦𝗗 𝟵𝟯𝟴/𝗣𝗔𝗫" disabled>
                                                <label for="floatingInput">Child without bed (2-5yrs old): </label>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="bg-dark rounded p-4">
                                            <h6>TRAVEL DATES</h6>
                                            <div class="flight-box"> 
                                                <!--insert data from database here-->   
                                                <p>JUL 24-29</p>
                                                <p>AUG 28-SEP 02</p>
                                                <p>SEP 25-30</p>
                                                <p>OCT 16-21</p>
                                                <p>OCT 30-NOV 04</p>
                                                <p>OCT 31-NOV05</p>
                                                <p>NOV 20-25 </p>
                                                <p>NOV 27-DEC 02</p> 
                                                <p>DEC 11-16</p>
                                                <p>DEC 25-30</p>
                                            </div>
                                        
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-8 mr-3">
                                        <div class="bg-dark rounded  p-4">
                                            <h6>ITINERARY</h6>
                                             <!--make sure that the data is pulled from tbl_itinerary, data should be inside p-->

                                            <div class="day-card">
                                                <div class="day-row"><h5>Day 1</h5></div>
                                             
                                                <div class="day-row"> 
                                                    <div class="day-col">
                                                        <h6>Location: </h6><p>Manila -> Tokyo</p>
                                                    </div>
                                                    <div class="day-col">
                                                        <h6>Activity: </h6><p>Travel to Tokyo</p>
                                                    </div>
                                                </div>
                                               
                                                <h6>Points of Interest: </h6>
                                                <p>Manila > Narita International Airport</p>
                                                <div class="day-row">
                                                    <div class="day-col">   
                                                        <h6>Free Time Activities: </h6><p>None</p>
                                                    </div>
                                                    <div class="day-col">
                                                        <h6>Hotel: </h6><p>Hotel: 4* Hotel or similar</p> 
                                                    </div>     
                                                </div>
                                                <div class="day-col">
                                                    <h6>Meals: </h6><p>B</p>
                                                </div>                                               
                                            </div>
                                            <div class="day-card">
                                                <div class="day-row"><h5>Day 2</h5></div>
                                                <div class="day-row"> 
                                                    <div class="day-col">
                                                        <h6>Location: </h6><p>Tokyo</p>
                                                    </div>
                                                    <div class="day-col">
                                                        <h6>Activity: </h6><p>Visit</p>
                                                    </div>
            
                                                </div>
                                               
                                                <h6>Points of Interest: </h6>
                                                <p>Asakusa -> Skytree -> Shibuya Crossing -> Hachiko Statue</p>
                                                <div class="day-row">
                                                    <div class="day-col">   
                                                        <h6>Free Time Activities: </h6><p>None</p>
                                                    </div>
                                                    <div class="day-col">
                                                        <h6>Hotel: </h6><p>3.5* Hotel or similar</p> 
                                                    </div>     
                                                </div>
                                                <div class="day-col">
                                                    <h6>Meals: </h6><p>B</p>
                                                </div>                                               
                                            </div>
                                                   <!--make sure that the data is pulled from tbl_itinerary, data should be inside p-->
                                            <div class="day-card">
                                                    <div class="day-row"><h5>Day 3</h5></div>
                                                    <div class="day-row"> 
                                                        <div class="day-col">
                                                            <h6>Location: </h6><p>Tokyo</p>
                                                        </div>
                                                        <div class="day-col">
                                                            <h6>Activity: </h6><p>Free and easy day</p>
                                                        </div>
                                                    </div>
                                                   
                                                    <h6>Points of Interest: </h6>
                                                    <p>Disneyland or Kotoku-in Temple & Enoshima (both optional) </p>
                                                    <div class="day-row">
                                                        <div class="day-col">   
                                                            <h6>Free Time Activities: </h6><p>USD 119/PAX( 1 day pass at Disneyland) || 79/PAX(Kotoku-in Temple & Enoshima )</p>
                                                        </div>
                                                        <div class="day-col">
                                                            <h6>Hotel: </h6><p>3.5* Hotel or similar</p> 
                                                        </div>     
                                                    </div>                                               
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        
                                    </div>
                                
                                </div>
                                
                            </div>                                                          
                        </div>
                    <div class="divider"></div>
                            
                               
                        <!--form goes here-->
                    <div class="col-md-4">
                        <form action="addbooking.php" method="POST">
                            <div class="bg-secondary rounded h-100 p-4">
                                    <h3 class="mb-4">Booking Form</h3>
                                    <div class="form-floating mb-3">
                                        <!--insert booking reference(packageID) here retrieved from the database-->
                                        <input type="email" class="form-control" id="bookingID"  placeholder="" value="00000001" disabled>
                                        <label for="floatingInput">Booking reference</label>
                                    </div>
                                    <!--insert passport number-->
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="passportID"  placeholder="">
                                        <label for="floatingInput">Passport Number</label>
                                    </div>
                                    <!--For these fields, you can automatically pull data from the database for convenience-->
                                    <div class="container-col">
                                        <!--First Name-->
                                        <div class="column">  
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="firstName"  placeholder="">
                                                <label for="floatingInput">First Name</label>
                                            </div>
                                        </div>
                                    
                                        <!--Last Name-->
                                        <div class="column"> 
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="lastName"  placeholder="" value="Smith">
                                                <label for="floatingInput">Last Name</label>
                                            </div>
                                        </div>
                                        <!--Mid Initial-->
                                        <div class="column"> 
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="middleName"  placeholder="">
                                                <label for="floatingInput">Middle Initial</label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="date"
                                            aria-label="Floating label select example">
                                            <option selected>Select Available Flights</option>
                                            <option value="JUL 24-29">JUL 24-29</One</option>
                                            <option value="AUG 28-SEP 02">AUG 28-SEP 02</option>
                                            <option value="SEP 25-3">SEP 25-30</option>
                                            <option value="OCT 16-21">OCT 16-21</option>
                                            <option value="OCT 30-NOV 04">OCT 30-NOV 04</option>
                                            <option value="OCT 31-NOV05">OCT 31-NOV05</option>
                                        </select>
                                        <label for="floatingSelect">Date</label>
                                    </div>
                                    <div class="container-col">
                                        <div class="column">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="adultHead"
                                                    aria-label="Floating label select example">
                                                    <option selected>Select how many</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label for="floatingSelect">Adult head count</label>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="childHead"
                                                    aria-label="Floating label select example">
                                                    <option selected>Select how many</option>
                                                    <option value="0">None</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label for="floatingSelect">Child head count</label>
                                            </div>
                                        </div>
                                    </div>
        
                                     <br>
                                    <!--create script to disable the requests input if this checkbox is ticked-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkrequest">
                                        <label class="form-check-label" for="checkrequest">
                                            Special request?
                                        </label>
                                        <p style= "font-size: 14px; font-style:italic;">*Note: requests can only be accepted if it is stated in the inclusions</p>
                                    </div>
                                    
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="request" style="height: 150px;"></textarea>
                                        <label for="request">Special Request</label>
                                    </div>
                                    <br>
                                    
                                   <div class="button-strip">
                                       <button class="btn btn-warning m-2" id="clearBtn">Clear</button>
                                       <button class="btn w-25 btn-success m-2" >Enter</button>
                                   </div>
                                </div>
                        </form>
                                
                    </div>
                </div>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <script>
        document.getElementById("checkrequest").addEventListener("change", function() {
            var requestField = document.getElementById("request");
            requestField.disabled = !this.checked;
            if (!this.checked) {
                requestField.disabled = true;
            }
        });
    </script>
    
</body>

</html>