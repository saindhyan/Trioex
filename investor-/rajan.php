<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="investors/inve.css">
    <title>Rajan Anandan</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <link rel="stylesheet" media="screen" href="../asset//vendor/simplebar/dist/simplebar.min.css"/>
          <link rel="stylesheet" media="screen" href="../asset//vendor/tiny-slider/dist/tiny-slider.css"/>
        <link rel="stylesheet" media="screen" href="../asset//vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
        <link rel="stylesheet" media="screen" href="../asset//vendor/flatpickr/dist/flatpickr.min.css"/>
        <link rel="stylesheet" media="screen" href="../asset//css/sweet-alert.css"/>
        <link rel="stylesheet" media="screen" href="../asset//vendor/toastr/toastr.min.css"/>

          <link rel="stylesheet" media="screen" href="../asset//css/theme.min.css">
        <link rel="stylesheet" media="screen" href="../asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php include '../includes/header.php'?> 

    <div class="container-fluid">
        
        <main id="main">
            <div class="container-fluid short-biography" id="tribute-info">
                <div id="img-div">
                    <img src="investors/investorsimages/jpg.jpg" alt="Rajan Anandan image" id="image"><br>
                    <caption>
                        <p id="img-caption">1966 - Present</p>
                    </caption>
                </div>
                <div class="short-biography-content" style="font-size:1.1rem;">
                    <p>Rajan Anandan was born in 1966 in New Delhi, India. He lived in India for a short while and moved to USA for higher studies. He was a bright student and displayed an interest in the technology development field. He is married and has
                        two children. </p>

                    <p>Rajan Anandan is an Indian businessman, who served as the Vice President of Google India. His took up the role of Managing Director of Google across India and South East Asia in August, 2011. He co-founded the first seed fund of Sri
                        Lanka. Currently, he serves as the Managing Director of Sequoia Capital India.</p>

                    <p> Prior to all these, he also held leadership roles with the well known firms Microsoft and Dell. Rajan was also a partner with McKinsey & Co. He is also an Angel Investor in early stage startups. <br>
                    </p>
                </div>
            </div>

            <div class="container-fluid full-biography" id="biography" style="width: 80%;">
                <h3 class="biography-title">More About Rajan Anandan</h3>
                <section>
                    <div class="rowp biography-row">
                        <div class="col section-col">

                            <p> Rajan Ananadan completed his primary education from a private school in New Delhi, India. He then moved to USA and pursued a BSc. in Mechanical Engineering from Massachusetts Institute of Technology. He further studied Msc.
                                in Manufacturing and System Engineering from Stanford University.</p>

                            <p>Mr. Ananadan invests in the early stage startups. He has invested in more than 115 startups. The list includes Unacademy, Druva and Capillary Technologies.</p>
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
                            <p>He partnered with McKinsey firm from 1992-2003. He eventually gained a good knowledge and experience of the corporate world.</p>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-circle"></i>
                            <p> He served as the General Manager and Vice President at Silicon Valley based, Dell Inc. Country during 2001-2008. Post 2008, he worked for two years as the Managing Director at Microsoft India.</p>

                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-circle"></i>
                            <p> He then worked for Google India and looked after the Google operations across South Asian Businesses from 2011-2019. He gave up his job at Google India and joined venture capital organisation, the Silicon Valley-based, Sequoia
                                Capital in 2019.</p>

                        </li>

                    </ul>

                    <h3 class="timeline-title">Awards and Achievements</h3>
                    <ul class="list-group">
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>Rajan Anandan has won the IMPACT Person of the Year, 2018 Award, instituted by the exchange4media Group to recognize excellence in the Advertising, Media and Marketing domain. He wins the award for driving Internet adoption
                                across India, especially in Tier II and III towns, through several initiatives including ‘Navlekha’.</p>
                        </li>
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>Rajan Anandan has won the NASSCOM Emerge 50 Award for logistic category in the year 2020.</p>
                        </li>

                    </ul>
                    <h3 class="timeline-title">As an investor</h3>
                    <ul class="list-group">
                        <li class="list-group-item first-item">
                            <i class="fas fa-circle"></i>
                            <p>He has invested in startups like Smytten, InnovAccer, WebEngage, Instamojo, Dunzo, Omnify NAYAN, AskSid, PlusPin Healthcare.</p>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-circle"></i>
                            <p>He serves as Board Member at 99RetailStreet. He also serves as Business Advisor at Ayata. He serves as Board Member at Phantom Hands. He serves as an Advisor at Karza Technologies, India Internet Fund, Aureus Analytics, Vista
                                Rooms, and DataWeave.</p>
                        </li>
                    </ul>

                </div>

                <div class="container-fluid more-info" id="tribute-link">
                    <h3 style="text-align: center;padding-bottom: 25px;">Want Rajan Ananadan to invest in your company then register yourself by clicking below!!!</h3>
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
            <script src="../asset//vendor/jquery/dist/jquery.min.js"></script>
            <script src="../asset//vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../asset//vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
            <script src="../asset//vendor/simplebar/dist/simplebar.min.js"></script>
            <script src="../asset//vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
            <script src="../asset//vendor/tiny-slider/dist/min/tiny-slider.js"></script>
            <script src="../asset//vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
            <script src="../asset//vendor/shufflejs/dist/shuffle.min.js"></script>
            <script src="../asset//vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
            <script src="../asset//vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
            <script src="../asset//vendor/lg-video.js/dist/lg-video.min.js"></script>
            <script src="../asset//vendor/parallax-js/dist/parallax.min.js"></script>
            <script src="../asset//vendor/jquery-validation/jquery.validate.min.js"></script>
            <script src="../asset//vendor/flatpickr/dist/flatpickr.min.js"></script>
            
            <script src="../asset//js/jquery.waypoints.min.js"></script>
            <script src="../asset//js/jquery.counterup.min.js"></script>
            <script src="../asset//js/sweet-alert.min.js"></script>
            <script src="../asset//vendor/toastr/toastr.min.js"></script>
            <script src="../asset//js/theme.min.js"></script>
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