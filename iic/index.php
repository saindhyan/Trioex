<?php include '../includes/header.php'?>
<?php include '../includes/database.php'?>

      </script>
      <!-- Vendor Styles-->
      <link rel="stylesheet" media="screen" href="asset//vendor/simplebar/dist/simplebar.min.css"/>
      <link rel="stylesheet" media="screen" href="asset//vendor/tiny-slider/dist/tiny-slider.css"/>
     <link rel="stylesheet" media="screen" href="asset//vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
     <link rel="stylesheet" media="screen" href="asset//vendor/flatpickr/dist/flatpickr.min.css"/>
     <link rel="stylesheet" media="screen" href="asset//css/sweet-alert.css"/>
     <link rel="stylesheet" media="screen" href="asset//vendor/toastr/toastr.min.css"/>
      <link rel="stylesheet" media="screen" href="asset//css/theme.min.css">
     <link rel="stylesheet" media="screen" href="asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css"/>
    <link type="text/css" rel="stylesheet" href="/asset/css/css_9AmSnw0xPzLRXV6KBHTAOPGqh42ITN0rVb7BsdJaCjY.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 
 
 
      <!-- Page content--> 

   <section style="background-image: url(/image/header-bg.svg);">
      <br>
      <br>
      <br>
    <center><h2 style="color:#e9750a;">List of<span style=" color:aqua"> Incubation center</span></h2></center>
<br>
<br>
<br>
<br>
</section>
    <table border="1" cellpadding="0" cellspacing="0" class="table01">
        <tbody>
           <tr>
              <td><strong>Department</strong> </td>
              <td><strong>Name of the Host Institute(If Applicable)</strong></td>
              <td><strong>Name of the Incubator (As per the registered legal entity)</strong></td>
              <td><strong>Type of Incubator</strong></td>
              <td><strong>State/UT in which Incubator is located</strong></td>
              <td><strong>Address of the Incubator</strong></td>
              <td><strong>City</strong></td>
              <td><strong>Website of the incubator</strong></td>
              <td><strong>Technology Thrust Area (Mention Only 3 Areas)</strong></td>
              <td><strong>Email ID</strong></td>
           </tr>
           <?php
           $sql = "select * from incubation_center";

           $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
               echo "<tr>
               <td>".$row['Department']." </td>
               <td>".$row['Name_Host']."</td>
               <td>".$row['Name_Incubator']." </td>
               <td>".$row['Type_Incubator']." </td>
               <td>".$row['State_Incubator']." </td>
               <td>".$row['Address']." </td>
               <td>".$row['City']." </td>
               <td>".$row['Website']." </td>
               <td>".$row['Technology_Area']." </td>
               <td>".$row['Email_id']." </td>
            </tr>";
            }?>
           
          
        </tbody>
     </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</html>

<?php include '../includes/footer.php'?>