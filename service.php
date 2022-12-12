<?php include "include/header.php"; 

$service = mysqli_query($conn, "SELECT * FROM `services` where status ='1'");

?>
<div id="wrapper" class="inner_page"><!--Wrapper Start--> 
  
  <!--Page Title Section Satrt-->
  <img src="https://goodwillevents.com/images/planner1.jpg" style="width:100%">
<div class="sub-title">
    <p>home / services</p>
</div>
  <!--Page Title Section End--> 
  
  <!--Service Page Start-->
  <section id="service_page">
    <div class="container text-center">
      <div class="row">
      <?php 
      while($services = mysqli_fetch_assoc($service)){
      ?>  
      <div class="col-md-3 col-sm-6 col-xs-12 srevice_img"> 
        <a href="service_detail.php?id= <?= $services['id']?>">
          <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($services['image']) . '"' ?> class=" htw" alt="cleaning" />
        <!-- </a> -->
          <h4><?php echo $services['name']; ?></h4>
          <p>
            <!-- <a href="service_detail.php?id=<?php echo $services['id']; ?>"> -->
            <p class="view-detail">View Details</p>
          </a>
        </p>

          <!-- <p><?php echo strtok($services['description'] , '.'); ?>.</p> -->
        </div>
        <?php } ?>       
        
      </div>
    </div>
  </section>
  <!--Service Page End--> 
  
    
<?php include "include/footer.php"; ?>