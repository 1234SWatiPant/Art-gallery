<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/contact.css">


</head>
<style>
    .header {
  min-height: 90vh;
  width: 100%;
  background: rgba(37, 37, 37, 0.7) url('images/bg4.jpg');
  background-blend-mode: darken;
  background-position: center;
  background-size: cover;
  position: relative;
}
</style>

<body>

    <section class="header">
        <?php include 'navbar.php'; ?>
    </section>

    <div id="home">
        <div class="bg-text">
            <h2 id="tbig"> CONTACT US</h2>
        </div>
    </div>
    <div id="order-modal" class="omodal">
            <div class="order-content">
               
                <div class="contact-body">
                    <form action="orderinfo.php" method="POST">
                        <div class="container">
                        <label for="fname"><b>First Name</b></label>
                <input type="text" id="fname" name="fname" placeholder="Your name..">

                <label for="lname"><b>Last Name</b></label>
                <input type="text" id="lname" name="lname" placeholder="Your last name..">
                <label for="email"><b>Email</b></label>
                <input type="text" id="email" name="email" placeholder="Email">
                <label for="Mobile no"><b>Mobile number</b></label>
                <input type="text" id="mob" name="mob" placeholder="Mobile number">

                <label for="subject"><b>Subject</b></label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                            <button type="submit" value="submit" class="but">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

   
    <div id="connect">
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>