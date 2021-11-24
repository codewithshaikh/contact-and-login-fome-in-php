
<div class="container">
      <h1>Contact Us</h1>
<form method="POST">

  <p class="name">
    <input name="name" type="text" class="feedback" placeholder="Name" id="name" required />
  </p>

  <p class="email">
    <input name="email" type="email" class="feedback" id="email" placeholder="Email" required />
  </p>

    <p class="subject">
    <input name="subject" type="text" class="feedback" placeholder="Subject" id="subject" required />
    </p>

  <p class="text">
    <textarea name="text" class="feedback" id="comment" placeholder="Massage" required ></textarea>
  </p>


  <div class="submit">
    <input type="submit" value="SEND!" id="button-blue" name="sub" />
  </div>
   <h4>We Will Get In Touch With You Shortly</h4>
</form>
  </div>

<?php

    $con= mysqli_connect('localhost','root','','class');

      // if ($con==TRUE) {
      //         echo "Conneted to database successfully";      // database name-: class
      // }else{                                             // table name -:  contact_form
      //   echo "Not Conneted to database";
      // }
          if (isset($_POST['sub'])) {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $subject=$_POST['subject'];
                $text=$_POST['text'];


              $qy = "INSERT INTO `contact_form` (`Name`, `Email`, `Subject`, `Massage`) value ('$name' , '$email' , '$subject' , '$text')";

              $run = mysqli_query($con,$qy);

               if($run==TRUE){

                // if ($con -> query($qy) == TRUE) {   //( check table connection error )

                echo "<script>
                       alert(' Data is Successfully submited');
                        window.location.href='index.php';
                     </script>";
            }else{

                // echo " Error ".$con->error;  // ( error findout)

                echo "<script>
                       alert(' Data is not submited');
                        window.location.href='contact.php';
                     </script>";
                }

          }
  ?>