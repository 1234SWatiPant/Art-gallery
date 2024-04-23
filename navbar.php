<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/signup.css">

    


    <script src="JavaScript/about.js"></script>
    <!-- <script src="JavaScript/gallery.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>KARAN JALAL!</title>
    <title>karan jalal art</title>
</head>

<body>
<nav class="navbar">
            <h5><a class="logo" href="index.php">ONLINE ART GALLERY</a></h5>
            <ul class="nav-links">
                <li class="active"><a href="index.php">HOME</a></li>
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



</body>

</html>