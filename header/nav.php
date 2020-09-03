<?php
    if(isset($_SESSION['username'])){
        echo "<nav class='navbar navbar-expand-lg navbar-light' id='nav' style='background:transparent; box-shadow: none !important; background-color: black;'>
        <a style='margin-left: 5%' class='navbar-brand'><img style='width: 40%; ' src='imgs/logo.png' alt='Logo'></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span style='color: white' class='navbar-toggler-icon'></span>
        </button>
        <div style='margin-left: 40%;' class='collapse navbar-collapse'  id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item' >
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='Home.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='about.php'>About us</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='gallery.php'>Gallery</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='contact.php'>Contact</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='offre.php'>Offers</a>
                </li>
            </ul>
            <button id='btn' type='button' class='btn' style='margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;'><a style='color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;' href='logout.php'>Logout</a></button>
        </div>
    </nav>" ;
    } else if(isset($_SESSION['adminname'])){
        echo "<nav class='navbar navbar-expand-lg navbar-light' id='nav' style='background:transparent; box-shadow: none !important; background-color: black;'>
        <a style='margin-left: 5%' class='navbar-brand'><img style='width: 40%; ' src='../imgs/logo.png' alt='Logo'></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span style='color: white' class='navbar-toggler-icon'></span>
        </button>
        <div style='margin-left: 40%;' class='collapse navbar-collapse'  id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='offre.php'>Offers</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='contact.php'>Contact</a>
                </li>
            </ul>
            <button id='btn' type='button' class='btn' style='margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;'><a style='color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;' href='add-offre.php'>Add new Offre</a></button>
            <button id='btn' type='button' class='btn' style='margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;'><a style='color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;' href='../logout.php'>Logout</a></button>
        </div>
    </nav>";
    } else {
        echo "<nav class='navbar navbar-expand-lg navbar-light' id='nav' style='background:transparent; box-shadow: none !important; background-color: black;'>
        <a style='margin-left: 5%' class='navbar-brand'><img style='width: 40%; ' src='imgs/logo.png' alt='Logo'></a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span style='color: white' class='navbar-toggler-icon'></span>
        </button>
        <div style='margin-left: 40%;' class='collapse navbar-collapse'  id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item' >
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='Home.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='about.php'>About us</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='gallery.php'>Gallery</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='contact.php'>Contact</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: white; font-family: 'Poppins Light'; margin-left: -5%;' href='login.php'>Offers</a>
                </li>
            </ul>
            <button id='btn' type='button' class='btn' style='margin-left: 2%; border: 2px solid #FE6825; border-radius: 50px; background-color: #FE6825;'><a style='color: white; padding: 10px 20px 10px 20px; font-family: 'Poppins Medium'; text-decoration: none;' href='login.php'>Registration</a></button>
        </div>
    </nav>";
    }
?>