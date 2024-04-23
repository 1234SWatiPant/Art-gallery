<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/button.css">

</head>
<style>
    .header {
        min-height: 90vh;
        width: 100%;
        background: rgba(37, 37, 37, 0.7) url('images/bg9.jpg');
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
            <h2 id="tbig"> ABOUT US</h2>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <!-- <div class="col-lg-6 col-md-6 col-12">
                <img src="images/karan.jpeg" class="imgfluid aboutimg" alt="Photo of Me">
            </div> -->
            <div class="">
                <p class="aboutcontent">

                Our online art gallery is dedicated to showcasing a diverse collection of artworks from talented artists around the world. We strive to provide a
                 platform that celebrates creativity and inspires art lovers. Explore our curated selection of paintings, sculptures, photography, and more, and 
                 discover the stories behind each piece and artist. Whether you're a seasoned collector or a newcomer to the art world, we invite you to immerse
                  yourself in the beauty and passion of art through our gallery.


                    <span id="points" style="color:grey;">.....</span>

                    <!-- Define the text that would be 
                                hidden by default and only shown 
                                when clicked on the button -->
                    <span id="moreText">"Unveiling the Soul of Art: A Gallery of Infinite Inspiration"
                    </span>
                </p>

                <!-- Trigger toggleText() when the 
                            button is clicked -->
                <button class="st-btn" onclick="toggleText()" id="textButton">
                    Show More
                </button>

                <script>
                    function toggleText() {

                        // Get all the elements from the page
                        var points =
                            document.getElementById("points");

                        var showMoreText =
                            document.getElementById("moreText");

                        var buttonText =
                            document.getElementById("textButton");

                        // If the display property of the dots 
                        // to be displayed is already set to 
                        // 'none' (that is hidden) then this 
                        // section of code triggers
                        if (points.style.display === "none") {

                            // Hide the text between the span
                            // elements
                            showMoreText.style.display = "none";

                            // Show the dots after the text
                            points.style.display = "inline";

                            // Change the text on button to 
                            // 'Show More'
                            buttonText.innerHTML = "Show More";
                        }

                        // If the hidden portion is revealed,
                        // we will change it back to be hidden
                        else {

                            // Show the text between the
                            // span elements
                            showMoreText.style.display = "inline";

                            // Hide the dots after the text
                            points.style.display = "none";

                            // Change the text on button
                            // to 'Show Less'
                            buttonText.innerHTML = "Show Less";
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    </div>
    <div id="connect">
        <?php include 'footer.php'; ?>
    </div>

</body>

</html>