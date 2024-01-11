<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="investors/inve.css">
    <title>T.V. Mohandas Pai</title>
    <title>Rajan Anandan</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <link rel="stylesheet" media="screen" href="../asset///vendor/simplebar/dist/simplebar.min.css"/>
          <link rel="stylesheet" media="screen" href="../asset///vendor/tiny-slider/dist/tiny-slider.css"/>
        <link rel="stylesheet" media="screen" href="../asset/"/>
        <link rel="stylesheet" media="screen" href="../asset///vendor/flatpickr/dist/flatpickr.min.css"/>
        <link rel="stylesheet" media="screen" href="../asset///css/sweet-alert.css"/>
        <link rel="stylesheet" media="screen" href="../asset///vendor/toastr/toastr.min.css"/>

          <link rel="stylesheet" media="screen" href="../asset///css/theme.min.css">
        <link rel="stylesheet" media="screen" href="../asset///css/css/icons/fontawesome-free-5.15.3-web/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../includes/header.php'?> 


    <div class="container-fluid">
        <main id="main">
            <div class="container-fluid short-biography" id="tribute-info">
                <div id="img-div">
                    <img src="investors/investorsimages/former-infosys-director-tv-mohan.jpg" alt="Rajan Anandan image" id="image"><br>
                    <caption>
                        <p id="img-caption">1960 - Present</p>
                    </caption>
                </div>
                <div class="short-biography-content" style="font-size:1.1rem;">
                    <p>Mohandas did his schooling at St. Joseph's Indian High School, Bangalore. He holds a bachelor's degree in commerce from St. Joseph's College of Commerce, Bangalore and a bachelor's degree in law (LLB) from Bangalore University.</p>
                    <p>
                        He is also a fellow member of Institute of Chartered Accountants of India (ICAI). In 2011, Mohan, an alumnus of Bangalore University, received an offer to co-chair the proposed Bangalore University School of Economics.</p>

                    <p>T. V. Mohandas Pai is a Padma Shri Awardee and current Chairman of Manipal Global Education (Manipal University). He was a former director of Infosys, and Head – Administration, Education and Research, Financial, Human Resources of
                        Infosys Leadership Institute.</p>
                </div>
            </div>

            <div class="container-fluid full-biography" id="biography" style="width: 80%;">
                <h3 class="biography-title">More About T.V. Mohandas Pai</h3>
                <section>
                    <div class="row biography-row">
                        <div class="col section-col">

                            <p>Mohan was an integral part of the Infosys team that enabled the first listing of an India-registered company on NASDAQ and the first sponsored secondary offering of American Depositary Shares by an Indian company.</p>

                            <p>With his keen interest in improving literacy across the country, Mohan has worked extensively in the basic education sector. He brings to MaGE his insights of the Indian system, his international exposure.</p>

                            <p>His deep understanding of financial concerns, his experience in building an international brand and the personal credibility he enjoys with business leaders.</p>
                        </div>


                        <hr style="color: black; width: 75%; margin-top: -2%;">


                </section>
                </div>
                <div class="container-fluid timeline" id="timeline">
                    <h3 style="text-align: center; margin-bottom: 2.5%;">Timeline</h3>

                    <h3 class="timeline-title">Career</h3>
                    <ul class="list-group">
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>Mohandas Pai joined Infosys in 1994 and served as a Member of the Board from May 2000 – July 2011. He was the chief financial officer from 1994 to 2006. In 2006, he voluntarily demitted the office of CFO to lead efforts in
                                the areas of human resources and education and research.</p>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-circle"></i>
                            <p>In 2000, he, along with others, founded the Akshaya Patra Foundation, Bangalore, to start a midday meal program for school children.</p>
                        </li>

                    </ul>

                    <h3 class="timeline-title">Awards and Achievements</h3>
                    <ul class="list-group">
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>He was voted 'CFO of the Year' in 2001 by IMA India.</p>
                        </li>
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p> He won the 'Best CFO in India' award from Finance Asia in 2002. </p>
                        </li>
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>He was awrded as the best chief financial officer in India in the best managed companies poll conducted by AsiaMoney in 2004.</p>
                        </li>
                    </ul>
                    <h3 class="timeline-title">As an investor</h3>
                    <ul class="list-group">
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>He has invested in startups like ALMACONNECT, Velvetcase, RICAGO, CAMPUS DIARIES MEDIA AND COMMUNICATIONS, ONLINERTI, SWITCHME, THE BETTER INDIA, TAXSUTRA.

                            </p>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-circle"></i>
                            <p>Mohandas Pai has made 31 investments. Their latest investment was Seed Round - Invact Metaversity on Feb 22, 2022, when Invact Metaversity raised $5M.</p>
                        </li>
                    </ul>

                </div>

                <div class="container-fluid more-info" id="tribute-link">
                    <h3 style="text-align: center;padding-bottom: 25px;">Want T.V. Mohandas Pai to invest in your company then register yourself by clicking below!!!</h3>
                    <a href="investors/raise fund/index.html" style="font-size: 1.2rem; color: chocolate;">Click Here</a>
                </div>
        </main>
        <?php
        if(isset($_SESSION['Role'])&& $_SESSION['Role']=="Startup"){

        ?>
        <div class="home-button">
            <button onclick="returnHome()" id="home-btn" title="Go to top"><i class="fas fa-home home-button"><a href="investors/Raise Fund"></a></i></button>
        </div>
        <?php
        }else if(!isset($_SESSION)){
          ?>
          <div class="home-button">
            <button onclick="returnHome()" id="home-btn" title="Go to top"><i class="fas fa-home home-button"><a href="/signup"></a></i></button>
        </div>
          <?php
        }
        ?>
        </div>
        <script src="investors/inve.js"></script>
        <footer >
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
                <div class="coll">
                  <div class="feedbackl">
                    <h1 style="color: white;">Feedback Form</h1>
                    <form action="">
                      <div class="rowl">
                        <input type="text" id="text" class="row_inputl" required>
                        <label for="text" class="labell">enter you name</label>
                      </div>
                      <div class="rowl">
                        <input type="email" id="email" class="row_inputl" required>
                        <label for="email" class="labell">your email
        address</label>
                      </div>
                      <div class="rowl" >
                        <textarea name="message" id="messagel"
        class="row_inputl" cols="30" rows="2" required></textarea>
                        <label for="message" class="labell">message</label>
                      </div>
                      <div class="rowl">
                        <div class="buttonl">
                          <button type="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="special-coll">
                  <a href="https://trioex.000webhostapp.com/trioex_app">
                    <img class="gimg"src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-GooglePlay_zvwcqb"/>
                  </a>
                </div>
              </section>
        
              <section class="creditsl">
        
                <div class="cr">© COER TECH WARRIER</div>
                <div class="social-links">
        
                  <a href="#">
                    <img
        src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-instagram_b7nubh"
        alt="" />
                  </a>
                  <a href="#">
                    <img
        src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48/icon-twitter_gtq8dv"
        alt="" />
                  </a>
                </div>
              </section>
        
        
            </div>
          </footer>
        
            <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fa fa-arrow-up">   </i></a>
            <script src="../asset///vendor/jquery/dist/jquery.min.js"></script>
            <script src="../asset///vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../asset///vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
            <script src="../asset///vendor/simplebar/dist/simplebar.min.js"></script>
            <script src="../asset///vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
            <script src="../asset///vendor/tiny-slider/dist/min/tiny-slider.js"></script>
            <script src="../asset///vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
            <script src="../asset///vendor/shufflejs/dist/shuffle.min.js"></script>
            <script src="../asset///vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
            <script src="../asset///vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
            <script src="../asset///vendor/lg-video.js/dist/lg-video.min.js"></script>
            <script src="../asset///vendor/parallax-js/dist/parallax.min.js"></script>
            <script src="../asset///vendor/jquery-validation/jquery.validate.min.js"></script>
            <script src="../asset///vendor/flatpickr/dist/flatpickr.min.js"></script>
            
            <script src="../asset///js/jquery.waypoints.min.js"></script>
            <script src="../asset///js/jquery.counterup.min.js"></script>
            <script src="../asset///js/sweet-alert.min.js"></script>
            <script src="../asset///vendor/toastr/toastr.min.js"></script>
            <script src="../asset///js/theme.min.js"></script>
            <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay:10,time:2e3
                });
                $(".grecaptcha-badge").hide();
            });
            
            $(function () {
                   });
            $(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#subscribe_form" ).validate({
                    rules: {
                        SUBS_EMAIL: {required: true, email: true}
                    },
                    messages: {
                        
                    },
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                      error.addClass('invalid-feedback');
                      //element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                      $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                      $(element).removeClass('is-invalid');
                    },
                    submitHandler: function(form)  {
                    
                    }
                });
            });
                
            function insertSubscriptionEmail()
            {
                var validationResponse = $('#subscribe_form').valid();
                if(validationResponse) 
                {
                    var url ="https://www.startuputtarakhand.com";
                    var _token = $("input[name='_token']").val();
                    $.ajax({
                       type:'POST',
                       url:"https://www.startuputtarakhand.com/insertSubscriptionEmail/post",
                       data:{_token: _token, emailid:$("#SUBS_EMAIL").val()},
                       success:function(data){
                          var jsondata = data;
                          var update = jsondata.update;
                          if(update==1)
                          {
                              toastr.success('Success, Subscribed Successfully.');
                              $("#SUBS_EMAIL").val('');
                          }
                          if(update==2)
                          {
                               toastr.success('You are already subscribed.');
                               $("#SUBS_EMAIL").val('');
                          }
                          if(update==3)
                          {
                               toastr.error('!Sorry, Something went wrong while subscribing.');
                          }
                       }
                    });
                }
                
            }
            </script>
          </body>
        </html><script>
        $(document).ready(function(){ 
         
        $("#upcomingeventsbutton").click();
         
        
        }); 
        $(function () {
            var ticker = $("#ticker");
            ticker.children().filter(".media").each(function () {
                var dt = $(this),
                container = $("<div>");
                dt.next().appendTo(container);
                dt.prependTo(container);
                container.appendTo(ticker);
            });
            ticker.css("overflow", "hidden");
            function animator(currentItem) {
                var distance = currentItem.height();
                duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.020 ;
                currentItem.animate({ marginTop: -distance }, duration, "linear", function () {
                    currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
                    animator(currentItem.parent().children(":first"));
                });
            };
            animator(ticker.children(":first"));
            ticker.mouseenter(function () {
                ticker.children().stop();
            });
            ticker.mouseleave(function () {
                animator(ticker.children(":first"));
            });
        });
        </script>