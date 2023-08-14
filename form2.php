<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthcarePlus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="form2.css">
  </head>
  <body>

  <?php include "header.php"; ?>

  <div class="mene">
    <div class="title">
      <h1>Book an appointment</h1>
    </div>
    <form class="from">
      <div class="deta">
       <div class="deta1">
        <input type="text" name="" placeholder="Full Name" required=""><br>

          <input type="email" name="" placeholder="Email" required=""><br>

          <input type="text" name="" placeholder="Number" required=""><br>

          <input type="radio" name="gender" id="Male" checked="checked">
          <label for="Male">Male</label>

          <input type="radio" name="gender" id="Female">
          <label for="Female">Female</label>

          <input type="radio" name="gender" id="Other">
          <label for="Other">Other</label>
     </div>
     <div class="deta2">
       <input type="number" name="" placeholder="Enter age" required=""><br>
       <select class="sdocter" required="">
         <option value="">Selsct Doctor</option>
         <option value="1">name</option>
         <option value="2">name</option>
         <option value="3">name</option>
       </select><br>
       <textarea placeholder="Address" class="add" cols="26" rows="4" required=""></textarea>
     </div>
     </div>
     <div class="massage">
    <center><textarea placeholder="Enter Massage" rows="5" cols="64"></textarea></center>
   </div>
   <div class="button">
     <center><input type="submit" name="" value="Appointment Now"></center>
   </div>
    </form>
  </div>
  <footer>
  <?php include "footer.php"; ?>
  </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>                                             