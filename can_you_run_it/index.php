<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
} 
?>
<!DOCTYPE html>
<html lang="en">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "head.html")?>
    <title>Can you run it? - Home</title>
<body>
    <?php include($IPATH. "nav-header.html")?>

    <?php if(isset($_SESSION["USER_ID"])): ?>
        <?php include($IPATH. "modal-Profile.php")?>
    <?php else: ?>
        <?php include($IPATH. "modal-login.php")?>
    <?php endif?>

    <div class="rgb-bg">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner pb-5 pt-5 content-box" style="min-height: 830px;">
                <div class="carousel-item active " data-bs-interval="10000">
                    <div class="content-box">
                        <h1 class="text-white text-center display-1 fw-bold pt-5 pb-5 mt-5">Welcome!</h1>
                        <p class="text-white fs-4 mb-5 pb-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Obcaecati libero pariatur autem nulla consectetur, fugiat ducimus cumque officiis laborum ab
                            aut consequuntur? Quisquam et animi debitis recusandae saepe. isquam. </p>
                        <a href="SignUpPage.html" class="text-center d-block mt-5"><button
                                class="btn btn-outline-light w-50 p-2 fs-5">Sing up for
                                free</button></a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <div class="content-box">
                        <div class="raw">
                            <div class="col-5">
                                <h1 class="text-white display-3 fw-bold pt-5 pb-5 mt-5">Download App</h1>
                                <p class="text-white fs-4 mb-5 pb-5"> Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.
                                    Obcaecati libero pariatur autem nulla consectetur, fugiat ducimus cumque officiis
                                    laborum ab
                                    aut consequuntur? Quisquam et animi debitis recusandae saepe. isquam. </p>
                            </div>
                            <div class="col-7">
                            </div>
                        </div>
                        <a href="SignUpPage.html" class="text-center d-block mt-5"><button
                                class="btn btn-outline-light w-50 p-2 fs-5">Download App</button></a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <div class="content-box">
                        <h1 class="text-white text-center display-3 fw-bold pt-5 pb-5 mt-5">Compare Hardware</h1>
                        <p class="text-white fs-4 mb-5 pb-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Obcaecati libero pariatur autem nulla consectetur, fugiat ducimus cumque officiis laborum ab
                            aut consequuntur? Quisquam et animi debitis recusandae saepe. isquam. </p>
                        <div class="row">
                            <div class="col">
                                <a href="SignUpPage.html" class="text-center d-block mt-5"><button
                                        class="btn btn-outline-light w-100 p-2 fs-5">Compare Hardware</button></a>
                            </div>
                            <div class="col">
                                <a href="SignUpPage.html" class="text-center d-block mt-5"><button
                                        class="btn btn-outline-light w-100 p-2 fs-5">Supported Components</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="bg-dark container-fluid pt-5 pb-5">
        <div class="container pt-5 pb-5" data-aos="fade-up">
            <div class="row container">
                <div class="col-sm order-5 bg-light rounded-5 placeholder mt-5 mb-5 me-5">
                    <br><br><br><br><br><br>
                </div>
                <div class="col-sm">
                    <h3 class="text-white display-3 fw-bold pt-5 pb-5">How does this work?</h3>
                    <p class="text-white fs-4">It's simple:</p>
                    <ul>
                        <li>
                            <p class="text-white fs-5">1. Lorem ipsum dolor sit amet consectetur</p>
                        </li>
                        <li>
                            <p class="text-white fs-5">2. Lorem ipsum dolor sit amet consectetur</p>
                        </li>
                        <li>
                            <p class="text-white fs-5 mb-5 pb-5">3. <span class="text-success">SUCCESS! </span>Lorem
                                ipsum
                                dolor sit amet consectetur</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary container-fluid pt-5 pb-5">
        <div class="container pb-5 pt-5" data-aos="fade-up">
            <h2 class="text-white display-3 fw-bold text-center pb-5 pt-5">Save your setup!</h2>
            <p class="text-white fs-4 pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi nihil quae
                sunt deserunt facilis
                dignissimos Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi nihil quae sunt deserunt
                facilis dignissimos</p>

            <a href="SignUpPage.php" class="text-center d-block"><button
                    class="btn btn-outline-light w-50 p-2 fs-5">Sing up for
                    free</button></a>

            <p class="text-white fs-4 pb-4 text-center pt-4">You already have an account?
                <a href="LoginPage.php">Login</a>
            </p>
        </div>
    </div>
    
    </div>
    <script>
        AOS.init();
    </script>
    <?php include($IPATH. "footer.html")?>
</body>

</Html>