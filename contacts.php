<?php include "include/header.php"; 

$site = mysqli_query($conn, "SELECT * FROM `site_infos` WHERE 1");
$s_info = mysqli_fetch_assoc($site);

if(isset($_POST['submit']))
{
  $name =$_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = mysqli_query($conn, "INSERT INTO `contactuses`(`name`, `email`, `phone`, `subject`, `massage`, `status`) VALUES ('$name','$email','$phone','$subject','$message','1')");
  if($query)
    echo "<p class='success'>Message sent successfully</p>";
  else
    echo "<p class='col'>Something happen wrong</p>";
}

?>

<!--Wrapper Start-->
<div id="wrapper"> 
<!--Page Title Section Satrt-->
<img src="https://goodwillevents.com/images/planner1.jpg" style="width:100%">
<div class="sub-title">
    <p>home / contact</p>
</div>
  <!--Page Title Section End--> 
  
  <!--Contacts Section Satrt--> 
  <!--Contacts Section End--> 
  
  <!--Contact Form Start-->
  <section id="Contact_form">
   
  <div class="container">
      <div class="row padd-t40">
      <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="booking_form">
            <div class="container-fluid">
              <div></div>
              <div class="row">
                <form method="POST">
                  <h2>Contact Form</h2>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="name" name="name" placeholder="Full Name" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Email" name="email" placeholder="Email" type="email"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Subject" name="subject" placeholder="Subject*" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Phone_number" name="phone" placeholder="Phone Number" type="number"/>
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="input-group">
                      <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn-primary btn-skin" name="submit" type="submit"> Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about_info">
            <h2>Contact info</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $s_info['address']; ?></p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $s_info['email']; ?></p>
            <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $s_info['phone'].', '.$s_info['phone2']; ?></p>
          </div>
        </div>
      </div>
    </div>

    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14710.146831307371!2d86.162298963655!3d22.819624638021125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e386a2c55e59%3A0xb3c0d937b8ae1b11!2sSai%20Temple!5e0!3m2!1sen!2sin!4v1670830411777!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </section>
  <!--Contact Form End--> 
  
<?php include "include/footer.php"; ?>