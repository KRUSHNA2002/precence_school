<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prudence School Navbar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/93f6d700d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>
        <div class="container-fluid">
            <div class="row mini-navbar">
                <div class="col-md-6 "></div>
                <div class="col-md-6  ">
                    <div class="row">
                        <div class="col-md-6 col-12 mini-icon ">
                            <a href="#"><i class=" ps-3 fa fa-instagram"></i></a>
                            <a href="#"><i class=" ps-3 fa fa-twitter"></i></a>
                            <a href="#"><i class=" ps-3 fa fa-facebook"></i></a>
                            <a href="#"><i class=" ps-3 fa fa-google"></i></a>
                            <a href="#"><i class=" ps-3 fa fa-pinterest"></i></a>
                        </div>
                        <div class="col-md-6 col-12 pt-3 text-center bg-warning ">
                            <h5>Setup Your Own School</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/Logo.jpeg" alt="Prudence School Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="index.php" id="aboutUsDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us <span class="p-1">
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                            <li><a class="dropdown-item" href="index.php">Our History</a></li>
                            <li><a class="dropdown-item" href="about_mission.php">Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="index.php">Leadership</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="#" id="academicsDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Academics <span class="p-1">
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
                            <li><a class="dropdown-item" href="curriculum.php">Curriculum</a></li>
                            <li><a class="dropdown-item" href="faculty.php">Faculty</a></li>
                            <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="#" id="achievementsDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Achievements <span class="p-1">
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="achievementsDropdown">
                            <li><a class="dropdown-item" href="#">Awards</a></li>
                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="#" id="showcaseDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Showcase <span class="p-1">
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="showcaseDropdown">
                            <li><a class="dropdown-item" href="#">Events</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="#" id="admissionsDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admissions
                            <span class="p-1">
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="admissionsDropdown">
                            <li><a class="dropdown-item" href="#">Apply Now</a></li>
                            <li><a class="dropdown-item" href="#">Visit Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark " style="display:flex;justify-content:space-between;align-items:center" href="#" id="admissionsDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact
                            <span class="p-1">
                                <i class="fa-solid "></i>
                            </span>
                        </a>
                      
                    </li>
                   
                    

                </ul>
            </div>
        </div>
    </nav>

</body>

</html>