<?php 
    include("connection.php");
    {
        if(isset($_POST['Submit']))
        {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email_id = mysqli_real_escape_string($conn,$_POST['email']);
            $phoneno = mysqli_real_escape_string($conn,$_POST['mob']); 
            $size = mysqli_real_escape_string($conn, $_POST['size']);
            $details = mysqli_real_escape_string($conn, $_POST['subject']);
           
            
            if(isset($name) && isset($email_id) && isset($phoneno) && isset($size) && isset($details))
            {
                $sql = "SELECT * FROM art_gallary WHERE useremail_id='$user_email'" ;

                $result = mysqli_query($conn, $sql);

                $tempid = $_SESSION['userid'];

                $update = "UPDATE `art_gallary` SET `name`='$name',`email_id`='$email_id',`phno`='$phoneno',`size`='$size',`details`='$details' WHERE useremail_id = '" . $tempid . "'";
                			
                mysqli_query($conn,$update);

                header('location:orderinfo.php');
                
            }
        }
    }
?>


<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Css -->
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/order.css">

    <title>ONLINE ART GALLERY</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<style>
    .header {
        min-height: 90vh;
        width: 100%;
        background: rgba(37, 37, 37, 0.7) url('images/home.jpg');
        background-blend-mode: darken;
        background-position: center;
        background-size: cover;
    }
</style>

<body>

    <!-- Navbar -->

    <section class="header">
        <nav class="navbar">
            <h5><a class="logo" href="index.php">ONLINE ART GALLERY</a></h5>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#drawing">ART</a></li>
                <li><a href="prints.php">PRINTS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="#connect">CONNECT</a></li>
            </ul>
            <img src="images/menu.png" alt="" class="menu-btn">
        </nav>

        
        <script>
            const navlinks = document.querySelector('.nav-links')
            const menuBtn = document.querySelector('.menu-btn')

            menuBtn.addEventListener('click', () => {
                navlinks.classList.toggle('mobile-menu')
            })
        </script>

    </section>

    <!-- display home -->

    <div class="home">
        <div class="bg-text">
            <h2 id="tbig"> ONLINE ART GALLERY</h2>
            <p class="tsmall">Pencil Drawing And Sketches</p>
        </div>


        <!--  order button-->

        <button class=" btns" id="order">ORDER NOW</button>

        <!-- Order form -->

        <div id="order-modal" class="omodal">
            <div class="order-content">
                <div class="order-header">
                    <h2 style="text-align:center">Order</h2>
                    <span class="cross">&times;</span>
                </div>
                <div class="order-body">
                    <form action="#" method="POST">
                        <div class="container">
                            <label for="name"><b>Name</b></label>
                            <input type="text" id="name" name="name" placeholder="Name">
                            <label for="email"><b>Email</b></label>
                            <input type="text" id="email" name="email" placeholder="Email">
                            <label for="Mobile no"><b>Mobile number</b></label>
                            <input type="text" id="mob" name="mob" placeholder="Mobile number">
                            <label for="size"><b>Size</b></label>
                            <br>
                            <select id="size" name="size">
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="custom">Custom size</option>
                            </select>
                            <label for="subject"><b>Details<b></label>
                            <textarea id="subject" name="subject" placeholder="Details..."></textarea>

                            <button type="submit" value="submit" class="but" name="Submit">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // Get the modal
            var omodal = document.getElementById("order-modal");

            // Get the button that opens the modal
            var btn = document.getElementById("order");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("cross")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                omodal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                moodal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == omodal) {
                    omodal.style.display = "none";
                }
            }
        </script>



        <!-- Drawing Section -->

        <section class="" id="drawing">
            <div id="tdraw">
                <h2 id="tbig"> DRAWING GALLERY</h2>
            </div>
            <br>
            <div id="myBtnContainer" class="img-list ">

                <a class="img-item active" href="#!" style="margin:30px;font-size:21px ;" onclick="filterSelection('pencild')">Pencil
                    Drawings</a>
                <a class="img-item " href="#!" style="margin:30px;font-size:21px;" onclick="filterSelection('comissioned')">Commissioned
                    Works</a>
            </div>

            <!-- Art Gallery -->

            <div class="row">
                <div class="col-md-2 column pencild  show">
                    <div class=" thumbnail content">
                        <img src="https://pbs.twimg.com/media/E4uoPdzVUAIEvUJ.jpg:large" alt="Lights" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://th.bing.com/th/id/R.730f98b0ef3587f79c3ef7313ce80b63?rik=IZFJiOiH0d%2fw3A&riu=http%3a%2f%2f3.bp.blogspot.com%2f-FFSipfOhpp4%2fT4UoIXWdECI%2fAAAAAAAAKL8%2f2XT7IPj49w4%2fs1600%2fPencil%2bDrawing%2b1.jpg&ehk=1FCK8cYeys%2frspdWZb6L0k%2fOLpk2Q7pedl%2bpCjhQQsk%3d&risl=&pid=ImgRaw&r=0" alt="Nature" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/fc/39/14/fc3914a3af454144833eef2577ff4a09.png" alt="Fjords" style="width:100%" class="drawing-pic">
                    </div>
                </div>

                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/59/2f/be/592fbe0c0f9da8f3cc7579bc051cda26.jpg" alt="Lights" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/94/d2/14/94d214ca17ab4cab964c039c56b1f5f3.jpg" alt="Nature" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/6a/5a/9c/6a5a9c8852d080807e5aa4a1b7e2a6e1.jpg" alt="Fjords" style="width:100%" class="drawing-pic">
                    </div>
                </div>

                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c6a149be-481a-42a8-8f09-4fbea6be1efa/dfyk38w-cc4d061b-8067-4bb8-82da-8aea59ce1e24.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M2YTE0OWJlLTQ4MWEtNDJhOC04ZjA5LTRmYmVhNmJlMWVmYVwvZGZ5azM4dy1jYzRkMDYxYi04MDY3LTRiYjgtODJkYS04YWVhNTljZTFlMjQuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.K7CHXIXgPU2W-5iqTLTSF7x-H1nnjbXk_Y13S0V-GhI"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://th.bing.com/th/id/OIP.B5yJOEInltPXULRud5kFCwAAAA?rs=1&pid=ImgDetMain"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column pencild show">
                    <div class="thumbnail content">
                        <img src="https://1.bp.blogspot.com/-U6CI_s1FXGY/Xm5ZZcyGoRI/AAAAAAACElE/_Z_p-fhvPjkieD25mMhjMa4nY9QzHOwugCKgBGAsYHg/s1600/02-Remibeer-WIP-Drawings-www-designstack-co.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column comissioned  show">
                    <div class="thumbnail content">
                        <img src="https://img.izismile.com/img/img3/20100304/pencil_drawings_set_08.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-2 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://th.bing.com/th/id/OIP.z-XjLDODkgDnx9LTDAtgygHaE8?rs=1&pid=ImgDetMain"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/98/8d/60/988d602be6a4269200a652144b0bbe13.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned  show">
                    <div class="thumbnail content">
                        <img src="https://th.bing.com/th/id/OIP.OfLtGMQM76tHpHMxbKa2FQAAAA?rs=1&pid=ImgDetMain"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/40/29/81/402981adcde1e65b714afd36c7c17777.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://codesignmag.com/wp-content/uploads/2021/03/sketch-drawing-Pencil-Sketch-artist-Efrain-Malo.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned  show">
                    <div class="thumbnail content">
                        <img src="https://img.izismile.com/img/img3/20100304/pencil_drawings_set_07.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7b3b5148118123.560823a5016bc.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/46/80/be/4680be27650b4f5c578a15c609f27e1e.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/736x/24/af/40/24af4007b85d43d85d1ef3eff7685de8.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/736x/da/de/77/dade778baea3eaf008fc43e82fd4e80d.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/736x/9e/d7/e8/9ed7e8146e94bbc0e29a25782cdf8f36.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned  show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/3c/b8/3b/3cb83b0f273281a2894f82f49ae7d193.jpg"  style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://i.pinimg.com/originals/00/1e/97/001e97fb6f34515290f3e3fed32b82ae.jpg" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <div class="col-md-4 column comissioned show">
                    <div class="thumbnail content">
                        <img src="https://www.eeasyknitting.com/wp-content/uploads/2019/03/lilith_art1_51516433_2509071782647229_6886209083211348109_n-681x1024.jpg" style="width:100%" class="drawing-pic">
                    </div>
                </div>
                <hr style="color:black ; width:100%">
            </div>
    </div>

    <script>
        filterSelection("pencild")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "pencild") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("img-item");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

    <!-- Footer -->

    <div id="connect">
        <?php include 'footer.php'; ?>
    </div>

</body>

</html>