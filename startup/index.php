<?php include '../includes/header.php' ?>
    <title>Startup</title>
     <!-- Vendor Styles-->
     <link rel="stylesheet" media="screen" href="/asset//vendor/simplebar/dist/simplebar.min.css"/>
     <link rel="stylesheet" media="screen" href="/asset//vendor/tiny-slider/dist/tiny-slider.css"/>
   <link rel="stylesheet" media="screen" href="/asset//vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
   <link rel="stylesheet" media="screen" href="/asset//vendor/flatpickr/dist/flatpickr.min.css"/>
   <link rel="stylesheet" media="screen" href="/asset//css/sweet-alert.css"/>
   <link rel="stylesheet" media="screen" href="/asset//vendor/toastr/toastr.min.css"/>
     <link rel="stylesheet" media="screen" href="/asset//css/theme.min.css">
   <link rel="stylesheet" media="screen" href="/asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css"/>
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/asset/css/startup.css">
<style>
  .container{
    background-color: #fff;
    border-radius: 20px;

  }
</style>

<body style="background-image:url(/image/bullseye-gradient.svg);">
    
<?php include "../includes/Database.php"?>

 
    <section id="startup">
        <div class="startup-heading">
            <h3>Startup</h3>
        </div>
<?php
        if(!isset($_SESSION['Role'])){
        ?>

<div class="container-fluid more-info" id="tribute-link">
        <h3 style="text-align: center;padding-bottom: 25px;">If you want to register yourself as an investor then register yourself by clicking the given link <a href="/signup" style="font-size: 1.2rem; color: chocolate; text-align: center; font-size: 1.9rem;">Click Here</a></h3>

    </div>
    <?php
        }
        ?>
        <div class="container mb-3 mt-3">
            <div class="startup-box">
                <div class="startup-img">
                    <img class="si" style="width: 500px;" src="../image/zepto.jpg" alt="">
                </div>

                <div class="startup-text">
                    <div class="subtext">
                        <span>Founded By : Aadit Palicha</span>
                        <p class="startup-title">Zepto raises $200M at a valuation of $900M</p>
                    </div>

                    
<table>
    <tr>
      <th>Startup Name</th>
      <th>Zepto</th>
    </tr>
    <tr>
        <td>Team Leader</td>
        <td>Aadit Palicha(Founder)</td>
    </tr>
    <tr>
      <td>Website</td>
      <td><a href="https://www.zeptonow.com/">www.zeptonow.com</a></td>
    </tr>
    <tr>
      <td>Company Size</td>
      <td>1000-1100</td>
    </tr>
    <tr>
      <td>Type Of Company</td>
      <td>Delivery, Delivery Service, and Grocery</td>
    </tr>
    <tr>
      <td>Total Funidng</td>
      <td>$200Mn+</td>
    </tr>
    <tr>
      <td>Valuation</td>
      <td>$900Mn+</td>
    </tr>
  </table>


                    <p style="margin-top: 3%; margin-bottom: 1%;">E-grocery delivery is gathering traction in India with a $1 trillion retail market where grocery purchases make up the vast majority of consumer spending. The Indian e-grocery market was valued at $2.9 billion in 2020, and it is expected to grow at a rate of 37.1% from 2021 to 2028.</p>
                    <p style="margin-bottom: 1%;">A RedSeer report mentioned that the quick commerce segment was valued at $30 mn in 2021. The same segment was predicted to become a $5 bn market in 2025, growing by 15X.</p>
                    <h2 style="font-family: system-ui;  margin-bottom: 1%;">Mission & Vision</h2>
                    <p style="margin-bottom: 2%;">
                        As two bachelors living alone, the founders found it most difficult to obtain food, therefore they focused their applications on grocery delivery. So, whereas KiranaKart, their first startup, tried to make grocery delivery easier for kiranas, Zepto aims to shorten delivery times.
                    </p>
                    <div>
                      <?php
                    if(isset($_SESSION)&&isset($_SESSION["Role"])){
                      if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Startup"||$_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Mentor"){
                      
                      ?>
                            <span  class="btn">
                                <button class="btn btn-warning" type="button">Collaborate Now </button>        
                            </span>
                            <?php
                            if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Government Agency"){
                              ?>
                            <span class="btn">
                                <button class="btn btn-success" type="button">Invest Now </button>
                            </span>
                            <?php
                            }
                        }
                            }else{
                              ?>
                              <span  class="btn">
                                <a href="/login"><button class="btn btn-warning" type="button">Collaborate Now </button>    </a>    
                            </span>
                            
                            <span class="btn">
                                <a href="/login"><button class="btn btn-success" type="button">Invest Now </button></a>
                            </span>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>





        <div class="container mb-3 mt-3">
            <div class="startup-box">
                <div class="startup-img">
                    <img class="si"style="width: 500px;" src="../image/rupifi.avif" alt="">
                </div>

                <div class="startup-text">
                    <div class="subtext">
                        <span>Founded By : Anubhav Jain</span>
                        <p class="startup-title">B2B fintech Rupifi raises $25mn led by Bessemer Venture Partners and Tiger Global</p>
                    </div>
                    <table>
                        <tr>
                          <th>Startup Name</th>
                          <th>Rupifi</th>
                        </tr>
                        <tr>
                            <td>Team Leader</td>
                            <td>Anubhav Jain(Co-Founder)</td>
                        </tr>
                        <tr>
                          <td>Website</td>
                          <td><a href="https://www.rupifi.com/">www.rupifi.com</a></td>
                        </tr>
                        <tr>
                          <td>Company Size</td>
                          <td>175</td>
                        </tr>
                        <tr>
                          <td>Type Of Company</td>
                          <td>Digital B2B platform</td>
                        </tr>
                        <tr>
                          <td>Total Funidng</td>
                          <td>$30.8Mn+</td>
                        </tr>
                        <tr>
                          <td>Valuation</td>
                          <td>$150Mn+</td>
                        </tr>
                      </table>
                      <p style="margin-top: 3%; margin-bottom: 1%;">Rupifi is a startup in India that was founded in 2020 and is currently based in Bengaluru, India.The business has been incredibly active in raising money to grow and develop, with eight funding rounds being completed in less than two years. These funding rounds have attracted the attention of seventeen investors that see the potential of the business. This has culminated in the company raising a figure of $30.8 Million. </p>
                      <p style="margin-bottom: 1%;">
                        Rupifi now plans to use the proceeds from the fundraise to build the complete B2B checkout product for marketplaces as well as launch omnichannel mobile-first B2B payments solutions for merchants, distributors and sellers.</p>
                      <h2 style="font-family: system-ui;  margin-bottom: 1%;">Mission & Vision</h2>
                      <p style="margin-bottom: 2%;">
                        Rupifi powers more than 50,000 Retailers/SMEs for Walmart across small, medium and large segments and across FMCG, Electronics and General Merchandise categories. Read their stories and see what Rupifi can do for your company
                      </p>
                      <div>
                      <?php
                    if(isset($_SESSION)&&isset($_SESSION["Role"])){
                      if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Startup"||$_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Mentor"){
                      
                      ?>
                            <span  class="btn">
                                <button class="btn btn-warning" type="button">Collaborate Now </button>        
                            </span>
                            <?php
                            if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Government Agency"){
                              ?>
                            <span class="btn">
                                <button class="btn btn-success" type="button">Invest Now </button>
                            </span>
                            <?php
                            }
                        }
                            }else{
                              ?>
                              <span  class="btn">
                                <a href="/login"><button class="btn btn-warning" type="button">Collaborate Now </button>    </a>    
                            </span>
                            
                            <span class="btn">
                                <a href="/login"><button class="btn btn-success" type="button">Invest Now </button></a>
                            </span>
                            <?php
                            }
                            ?>
                </div>
                </div>
                </div>
            </div>
        </div>




        
        
        <div class="container mb-3 mt-3">
            <div class="startup-box">
                <div class="startup-img">
                    <img class="si" style="width: 500px;" src="../image/unbox-robotics.png" alt="">
                </div>

                <div class="startup-text">
                    <div class="subtext">
                        <span>Founded By :  Pramod Ghadge, Shahid Memon</span>
                        <p class="startup-title">Unbox Robotics raises $7 million Series-A funding</p>
                    </div>
                    <table>
                        <tr>
                          <th>Startup Name</th>
                          <th>Unbox-Robotics</th>
                        </tr>
                        <tr>
                            <td>Team Leader</td>
                            <td>Pramod Ghadge(CEO)</td>
                        </tr>
                        <tr>
                          <td>Website</td>
                          <td><a href="https://www.unboxrobotics.com/">www.unboxrobotics.com</a></td>
                        </tr>
                        <tr>
                          <td>Company Size</td>
                          <td>51-200</td>
                        </tr>
                        <tr>
                          <td>Type Of Company</td>
                          <td>Delivery, Delivery Service, and Grocery</td>
                        </tr>
                        <tr>
                          <td>Total Funidng</td>
                          <td>$7Mn+</td>
                        </tr>
                        <tr>
                          <td>Valuation</td>
                          <td>$39n+</td>
                        </tr>
                      </table>
                      <p style="margin-top: 3%; margin-bottom: 1%;">Unbox Robotics builds software-defined robotics systems to enable logistics players to automate and radically improve their operations on-demand in a limited footprint and capital. We are applying proprietary Swarm Intelligence and ML algorithms inspired by nature to redefine the way companies sort and ship orders.
                    </p>
                      <p style="margin-bottom: 1%;">Our 1st product UnboxSort is the world's first of its kind patented AI-powered parcel sorting robotic system that gets installed in <2 weeks, saves ~50% - 80% area, and improves productivity by > 3X to 5X. </p>
                      <h2 style="font-family: system-ui;  margin-bottom: 1%;">Mission & Vision</h2>
                      <p style="margin-bottom: 2%;">
                        Our mission is to empower our customers to deliver the most efficient order fulfillment experience using future-ready robotic systemsWe envision to be the world's go to robotics technology & software company with efficient & revolutionary logistics automation solutions which deliver impact and enrich lives of our customers, partners and end consumers
                      </p>
                      <div>
                      <?php
                    if(isset($_SESSION)&&isset($_SESSION["Role"])){
                      if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Startup"||$_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Mentor"){
                      
                      ?>
                            <span  class="btn">
                                <button class="btn btn-warning" type="button">Collaborate Now </button>        
                            </span>
                            <?php
                            if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Government Agency"){
                              ?>
                            <span class="btn">
                                <button class="btn btn-success" type="button">Invest Now </button>
                            </span>
                            <?php
                            }
                        }
                            }else{
                              ?>
                              <span  class="btn">
                                <a href="/login"><button class="btn btn-warning" type="button">Collaborate Now </button>    </a>    
                            </span>
                            
                            <span class="btn">
                                <a href="/login"><button class="btn btn-success" type="button">Invest Now </button></a>
                            </span>
                            <?php
                            }
                            ?>
                </div>
                </div>
                </div>
            </div>
        </div>

              
        
        <div class="container mb-3 mt-3">
            <div class="startup-box">
                <div class="startup-img">
                    <img class="si" style="width: 500px;" src="../image/flipkart.webp" alt="">
                </div>

                <div class="startup-text">
                    <div class="subtext">
                        <span>Founded By : Sachin Bansal,Binny Bansal</span>
                        <p class="startup-title">Flipkart raises $3.6 billion, valuation jumps to $37.6 billion</p>
                    </div>
                    <table>
                        <tr>
                          <th>Startup Name</th>
                          <th>Flipkart</th>
                        </tr>
                        <tr>
                            <td>Team Leader</td>
                            <td>Kalyan Krishnamurthy(CEO)</td>
                        </tr>
                        <tr>
                          <td>Website</td>
                          <td><a href="https://www.flipkart.com/">www.flipkart.com</a></td>
                        </tr>
                        <tr>
                          <td>Company Size</td>
                          <td>10000+</td>
                        </tr>
                        <tr>
                          <td>Type Of Company</td>
                          <td>Indian e-commerce company</td>
                        </tr>
                        <tr>
                          <td>Total Funidng</td>
                          <td>$12.9B+</td>
                        </tr>
                        <tr>
                          <td>Valuation</td>
                          <td>$37.6B+</td>
                        </tr>
                      </table>
                      <p style="margin-top: 3%; margin-bottom: 1%;">
                        Today, Flipkart has over 100 million registered users, 100+ thousand sellers, and 21+ state-of-the-art warehouses. It also boasts about 10+ million daily page visits and over 8 million shipments/month.The online retail industry market is of a size of around $60 billion. It is expected to reach $200 billion by the year 2026. </p>
                      <p style="margin-bottom: 1%;">Before the pandemic, India was one of the most attractive eCommerce markets globally, expected to deliver a 30% CAGR over a six-year time horizon, according to a report by RedSeer Consulting that projected the sector to record $160 billion in gross merchandise values (GMV) by 2022. The ecommerce market in India was last valued at around $46.2 billion when recorded in 2020, and is expected to grow to $111.40 bn by 2025, and would touch $350 bn in 2030. </p>
                      <h2 style="font-family: system-ui;  margin-bottom: 1%;">Mission & Vision</h2>
                      <p style="margin-bottom: 2%;">
                        Flipkart's mission is "to provide delightful customer experience."Flipkart is nourishing its plans to set out to conquer the at-home services space to rival the Abhiraj Bahl-led company Urban Company, as of May 24, 2022. The Walmart-backed ecommerce giant has already started offering AC cleaning and repairing services, and will further be extending washing machine repairs and other similar offerings too soon.
                      </p>
                      <div>
                      <?php
                    if(isset($_SESSION)&&isset($_SESSION["Role"])){
                      if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Startup"||$_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Mentor"){
                      
                      ?>
                            <span  class="btn">
                                <button class="btn btn-warning" type="button">Collaborate Now </button>        
                            </span>
                            <?php
                            if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Government Agency"){
                              ?>
                            <span class="btn">
                                <button class="btn btn-success" type="button">Invest Now </button>
                            </span>
                            <?php
                            }
                        }
                            }else{
                              ?>
                              <span  class="btn">
                                <a href="/login"><button class="btn btn-warning" type="button">Collaborate Now </button>    </a>    
                            </span>
                            
                            <span class="btn">
                                <a href="/login"><button class="btn btn-success" type="button">Invest Now </button></a>
                            </span>
                            <?php
                            }
                            ?>
                </div>
                </div>
                </div>
            </div>
        </div>



        <?php
        
        $sql = "select * from register_startup";
        $result = $conn->query($sql);
        
        while ($row = $result->fetch_assoc()){
          ?>
          <div class='container mb-3 mt-3'>
          <div class='startup-box'>
              <div class='startup-img'>
                  <img class='si' style='width: 500px;' src='".$row['Logo']."' alt='image'>
              </div>

              <div class='startup-text'>
                  <div class='subtext'>
                      <span>Founded By :"<?php echo $row['team_leader']?>"  </span>
                      <p class='startup-title'>  </p>
                  </div>
                  <table>
                      <tr>
                        <th>Startup Name</th>
                        <th>"<?php echo $row['SName']?>"</th>
                      </tr>
                      <tr>
                          <td>Team Leader</td>
                          <td>"<?php echo $row['team_leader']?>"</td>
                      </tr>
                      <tr>
                        <td>Website</td>
                        <td><a href="<?php echo $row['Website']?>">"<?php echo $row['Website']?>"</a></td>
                      </tr>
                      <tr>
                        <td>Company Size</td>
                        <td>"<?php echo $row['CSize']?>"</td>
                      </tr>
                      <tr>
                        <td>Type Of Company</td>
                        <td>"<?php echo $row['Type_Company']?>"</td>
                      </tr>
                      <tr>
                        <td>Total Funidng</td>
                        <td>"<?php echo $row['Funding']?>"</td>
                      </tr>
                      <tr>
                        <td>Valuation</td>
                        <td>"<?php echo $row['Valuation']?>"</td>
                      </tr>
                    </table>
                    <p style='margin-top: 3%; margin-bottom: 1%;'>                  </p>
                    <p style='margin-bottom: 1%;'>"<?php echo $row['About']?>" </p>
                    <h2 style='font-family: system-ui;  margin-bottom: 1%;'>Mission & Vision</h2>
                    <p style='margin-bottom: 2%;'>
                    "<?php echo $row['Vi_Mi']?>"
                    </p>
                    <?php
                    if(isset($_SESSION) && isset($_SESSION["Role"])){
                      if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Startup"||$_SESSION['Role']=="Government Agency"||$_SESSION['Role']=="Mentor"){
                    
                    ?>
                          <span  class="btn">
                              <button class="btn btn-warning" type="button">Collaborate Now </button>        
                          </span>
                          <?php
                          if($_SESSION['Role']=="Incubator"||$_SESSION['Role']=="Government Agency"){
                            ?>
                          <span class="btn">
                              <button class="btn btn-success" type="button">Invest Now </button>
                          </span>
                          <?php
                          }
                      }
                          }else{
                            ?>
                            <span  class="btn">
                              <a href="/login"><button class="btn btn-warning" type="button">Collaborate Now </button>    </a>    
                          </span>
                          
                          <span class="btn">
                              <a href="/login"><button class="btn btn-success" type="button">Invest Now </button></a>
                          </span>
                          <?php
                          }
                          ?>
              </div>
              </div>
              </div>
          </div>
      </div>
      <?php
        }
        if(!isset($_SESSION['Role'])){
        ?>

<div class="container-fluid more-info" id="tribute-link">
        <h3 style="text-align: center;padding-bottom: 25px;">If you want to register yourself as an investor then register yourself by clicking the given link <a href="/signup" style="font-size: 1.2rem; color: chocolate; text-align: center; font-size: 1.9rem;">Click Here</a></h3>

    </div>
    <?php
        }
        ?>
    </section>
   
    <?php include '../includes/footer.php'?>