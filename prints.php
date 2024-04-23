<?php
include("connection.php"); {
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/prints.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>New Arts</title>
    <style>
        .header {
            min-height: 90vh;
            width: 100%;
            background: rgba(37, 37, 37, 0.7) url('images/bg.jpg');
            background-blend-mode: darken;
            background-position: center;
            background-size: cover;
            position: relative;

        }
    </style>
</head>

<body>
    <section class="header">
        <?php include 'navbar.php'; ?>
    </section>

    <div class="home">
        <div class="bg-text">
            <h2>LIMITED EDITION PRINTS</h2>
        </div>
        <button class=" btns" id="prints">GET YOUR PRINTS NOW</button>
        <!-- The Modal -->
        <div id="print-modal" class="pmodal">

            <!-- Modal content -->
            <div class="print-content">
                <div class="print-header">
                    <h2 style="text-align:center">PRINTS</h2>
                    <span class="cut">&times;</span>

                </div>
                <div class="print-body">
                    <form action="index.php" method="POST">
                        <div class="container">
                            <label for="pname"><b>Print Name</b></label>
                            <select id="prints" name="pname">
                            <option>Choose Print</option>
                                <option value=""></option>
                                <option value="Harry Potter">Harry Potter</option>
                                <option value="Dog">Dog</option>
                                <option value="Emma watson">Emma watson</option>
                                <option value="Aishwarya Rai">Aishwarya Rai</option>
                                <option value="Shridevi">Shridevi</option>
                                <option value="Pikachu">Pikachu</option>
                                <option value="Ash">Ash</option>
                            </select>                            
                            <label for="size"><b>Size</b></label>
                            <br>
                            <select id="size" name="size">
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="custom">Custom size</option>
                            </select>
                            <label for="email"><b>Email</b></label>
                            <input type="text" id="email" name="email" placeholder="Email">
                            <label for="Mobile no"><b>Mobile number</b></label>
                            <input type="text" id="mob" name="mob" placeholder="Mobile number">
                            <button type="submit" class="but" name='Print'>Print</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // Get the modal
            var pmodal = document.getElementById("print-modal");

            // Get the button that opens the modal
            var btn = document.getElementById("prints");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("cut")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                pmodal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                pmodal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == pmodal) {
                    pmodal.style.display = "none";
                }
            }
        </script>

    </div>
    <div>
       
    </div>


    <div class="row">
        <div class="col-md-4 column pencild  show">
            <div class=" content">
                <img src="https://i.pinimg.com/736x/83/82/40/838240ee10423ff70c49440f8944395d.jpg" alt="Lights" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Emma Watson</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://i.pinimg.com/474x/07/88/ba/0788ba4080a9fbaedea82929a9a5a209--harry-james-potter-james-darcy.jpg" alt="Nature" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Harry Potter</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://th.bing.com/th/id/OIP.S3TIDJG2SJg7Wm0onTZooAHaFt?rs=1&pid=ImgDetMain" alt="Fjords" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Dog</p>

            </div>
        </div>

        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://i.pinimg.com/originals/c6/1f/85/c61f850c12105f4b8aab978b391a764c.jpg" alt="Lights" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Selena Gomez</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://i.pinimg.com/736x/e3/17/63/e317638d1f1ed7ee3c0c10ae29006461.jpg" alt="Nature" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Aishwaya Rai</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://i.pinimg.com/originals/23/28/f3/2328f3f3a30a34ca796f7916d5637595.jpg" alt="Fjords" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Shridevi</p>

            </div>
        </div>

        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://images.saatchiart.com/saatchi/833386/art/2942718/2012611-JPEMFSEC-7.jpg" alt="Lights" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Amitabh Bacchan</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://th.bing.com/th/id/OIP.Fr7tCZBPNvZwze9C5fGrjQHaGa?w=1600&h=1385&rs=1&pid=ImgDetMain" alt="Nature" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Butterfly</p>

            </div>
        </div>
        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://th.bing.com/th/id/OIP.A4jEeg3NynojM5-I8uUO_QHaHU?rs=1&pid=ImgDetMain" alt="Fjords" style="width:100%" class="drawing-pic">
                <p class="print-t-image">Pikachu</p>

            </div>
        </div>


        <div class="col-md-4 column pencild show">
            <div class="thumbnail content">
                <img src="https://img10.deviantart.net/1063/i/2011/223/2/1/pokemon___ash_anime_by_squarifa-d467hp8.jpg" alt="Fjords" style="width:100%; border-color: black;" class="drawing-pic">
            </div>

            <hr style="color:black ; width:100%">
        </div>
    </div>
    </div>
    <div id="connect">
        <?php include 'footer.php';
}
?>
    </div>
</body>

</html>