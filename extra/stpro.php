<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Statement</title>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="asset//vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="asset//vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="asset//vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <link rel="stylesheet" media="screen" href="asset//vendor/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" media="screen" href="asset//css/sweet-alert.css" />
    <link rel="stylesheet" media="screen" href="asset//vendor/toastr/toastr.min.css" />
    <link rel="stylesheet" media="screen" href="./asset//css/theme.min.css">
    <link rel="stylesheet" media="screen" href="asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/css/problem_statement.css">


</head>

<body style="background-image: url(image/5804273.jpg) ;">

    <?php include "Database.php"
    
    session_start(); 
    
    
    
    ?>

    
    <main class="cs-page-wrapper">
        <header class="cs-header" style="background-color:#fff;">
            <div class="topbar" style="padding:0px;">
                <div class="container d-md-flex align-items-center px-0 px-xl-3">
                    <div class="d-none d-md-block text-nowrap mr-3"><img width="63" src="/image/logo.jpg" alt="COER TECH WARRIORS" class="mr-3" />
                        <a href="#"><img width="122" src="https://www.pngitem.com/pimgs/m/609-6094516_transparent-startup-india-logo-hd-png-download.png" alt="Startup Uttarakhand" /></a>
                    </div>
                    <div class="d-flex text-md-center ml-md-auto"><a class="topbar-link pr-1 ml-4" href="#"><i class="fa fa-phone font-size-lg text-primary mr-1"></i><span class='d-sm-inline'> +91 8279272606</span><small class="d-block text-muted">(10:00 AM to 05:30 PM)</small></a>|<a class="topbar-link pr-1 ml-1"
                            href="#"><i class="fa fa-mail font-size-lg text-primary"></i> <span class='d-sm-inline'>ujjawalpant04@gmail.com</span></a>

                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light bg-light navbar-box-shadow navbar-sticky" data-scroll-header>
                <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button><img class="d-lg-none" width="118" src="/image/logo.jpg" alt="COER TECH WARRIERS"
                /></a>

                <div class="container px-0 px-xl-3">

                    <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
                        <a class="nav-link-style font-size-sm text-nowrap ml-2" href="login.php"><i class="fa fa-user font-size-xl mr-2"></i>Sign in</a>
                        <a class="btn btn-dark ml-grid-gutter d-none d-lg-inline-block" href="login.php">Sign up</a>

                    </div>


                    <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
                        <div class="cs-offcanvas-cap navbar-box-shadow">
                            <h5 class="mt-1 mb-0">Menu</h5>
                            <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true"></span></button>
                        </div>
                        <div class="cs-offcanvas-body">
                            <!-- Menu-->
                            <ul class="navbar-nav">
                                <li class="nav-item active"><a class="nav-link" href="index.html" class="fas fa-home">Home</a></li>

                                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="startup.html">Startup</a>
                                    <li class="nav-item "><a class="nav-link" href="investor.html">Investors</a></li>
                                    <li class="nav-item"><a class="nav-link" href="iic.php">incubation Centers</a>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="success_stories.html">Success Stories</a></li>

                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown">Problem Statement</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="problem_statement.php">View</a></li>
                                                    <li><a class="dropdown-item" href="">submit problem</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                                            <li><a class="dropdown-item" href="mentor.html">Mentors</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                        <div class="cs-offcanvas-cap border-top"><a class="btn btn-primary btn-block" href="login.php"><i class="fa fa-user font-size-lg mr-2"></i>Sign in</a><br/><a class="btn btn-danger btn-block" href="login.php"><i class="fa fa-user font-size-lg mr-2"></i>Sign up</a></div>
                    </div>
                </div>
            </div>
        </header>






        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-12 col-lg-8">
                    <h1 class="display-4">Problem Statement</h1>
                </div>
            </div>
            <div class="col-12 mt-4">
                <form class="form">
                    <input class="form-control" id="search" type="search" placeholder="Search by Problem Name" aria-label="Search">
                </form>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table class="table search-table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Organization</th>
                                <th>Problem Name</th>
                                <th>Description</th>
                                <th>Domain</th>
                                <th>Apply</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql = "select * from problem_statements";

                        $result = $conn->query($sql);
                        
                            while ($row = $result->fetch_assoc()) {

                            echo "<tr>
                            <td>".$row['S.No.']." </td>
                            <td>".$row['Organization']."</td>
                            <td>".$row['PST']." </td>
                            <td>".$row['Domain']." </td>
                            <td>".$row['Description']." </td>
                            <td><a href = './stapl.php?$row[PST]'>Apply Now</a></td>
                            </tr>";
                            }?>

                            
                    </table>
                </div>
            </div>
        </div>











        <footer>
            <div class="innerl">

                <section class="menul">
                    <div class="coll">
                        <h3>Features</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="startup.html">Startup</a></li>
                            <li><a href="investor.html">Investors</a></li>
                            <li><a href="problem_statement.html">Problem Statement</a></li>
                            <li><a href="success_stories.html">Success Stories</a></li>
                            <li><a href="mentor.html">Mentors</a></li>

                        </ul>
                    </div>
                    <div class="coll">
                        <h3>CONTACT</h3>
                        <ul>
                            <li><a href="contact_us.html">Help & Support</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                        </ul>
                    </div>
                    <div class="coll" style="width: 275px;">
                        <div class="feedbackl" style="width: 275px;">
                            <h1 style="color: white; width: 275px;">Feedback Form</h1>
                            <form action="" style="width: 275px;">
                                <div class="rowl" style="width: 275px;">
                                    <input type="text" id="text" class="row_inputl" style="width: 275px;" required>
                                    <label for="text" class="labell" style="width: 275px;">enter you name</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <input type="email" id="email" class="row_inputl" style="width: 275px;" required>
                                    <label for="email" class="labell" style="width: 275px;">your email
  address</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <textarea name="message" id="messagel" class="row_inputl" cols="30" rows="2" style="width: 275px;" required></textarea>
                                    <label for="message" class="labell" style="width: 275px;">message</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <div class="buttonl" style="width: 275px;">
                                        <button type="submit" style="width: 275px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="special-coll">
                        <a href="https://trioex.000webhostapp.com/trioex_app">
                            <img class="gimg" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-GooglePlay_zvwcqb" />
                        </a>
                    </div>
                </section>

                <section class="creditsl">

                    <div class="cr">© COER TECH WARRIER</div>
                    <div class="social-links">

                        <a href="#">
                            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-instagram_b7nubh" alt="" />
                        </a>
                        <a href="#">
                            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48/icon-twitter_gtq8dv" alt="" />
                        </a>
                    </div>
                </section>


            </div>
        </footer>


        <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fa fa-arrow-up">   </i></a>
        <script src="asset//vendor/jquery/dist/jquery.min.js"></script>
        <script src="asset//vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="asset//vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <script src="asset//vendor/simplebar/dist/simplebar.min.js"></script>
        <script src="asset//vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="asset//vendor/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="asset//vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="asset//vendor/shufflejs/dist/shuffle.min.js"></script>
        <script src="asset//vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
        <script src="asset//vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
        <script src="asset//vendor/lg-video.js/dist/lg-video.min.js"></script>
        <script src="asset//vendor/parallax-js/dist/parallax.min.js"></script>
        <script src="asset//vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="asset//vendor/flatpickr/dist/flatpickr.min.js"></script>

        <script src="asset//js/jquery.waypoints.min.js"></script>
        <script src="asset//js/jquery.counterup.min.js"></script>
        <script src="asset//js/sweet-alert.min.js"></script>
        <script src="asset//vendor/toastr/toastr.min.js"></script>
        <script src="asset//js/theme.min.js"></script>
        <script src="asset//js/psnew.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 2e3
                });
                $(".grecaptcha-badge").hide();
            });

            $(function() {});
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#subscribe_form").validate({
                    rules: {
                        SUBS_EMAIL: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {

                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        //element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                    submitHandler: function(form) {

                    }
                });
            });

            function insertSubscriptionEmail() {
                var validationResponse = $('#subscribe_form').valid();
                if (validationResponse) {
                    var url = "https://www.startuputtarakhand.com";
                    var _token = $("input[name='_token']").val();
                    $.ajax({
                        type: 'POST',
                        url: "https://www.startuputtarakhand.com/insertSubscriptionEmail/post",
                        data: {
                            _token: _token,
                            emailid: $("#SUBS_EMAIL").val()
                        },
                        success: function(data) {
                            var jsondata = data;
                            var update = jsondata.update;
                            if (update == 1) {
                                toastr.success('Success, Subscribed Successfully.');
                                $("#SUBS_EMAIL").val('');
                            }
                            if (update == 2) {
                                toastr.success('You are already subscribed.');
                                $("#SUBS_EMAIL").val('');
                            }
                            if (update == 3) {
                                toastr.error('!Sorry, Something went wrong while subscribing.');
                            }
                        }
                    });
                }

            }
        </script>
</body>

</html>
<script>
    $(document).ready(function() {

        $("#upcomingeventsbutton").click();


    });
    $(function() {
        var ticker = $("#ticker");
        ticker.children().filter(".media").each(function() {
            var dt = $(this),
                container = $("<div>");
            dt.next().appendTo(container);
            dt.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        function animator(currentItem) {
            var distance = currentItem.height();
            duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.020;
            currentItem.animate({
                marginTop: -distance
            }, duration, "linear", function() {
                currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
                animator(currentItem.parent().children(":first"));
            });
        };
        animator(ticker.children(":first"));
        ticker.mouseenter(function() {
            ticker.children().stop();
        });
        ticker.mouseleave(function() {
            animator(ticker.children(":first"));
        });
    });
</script>