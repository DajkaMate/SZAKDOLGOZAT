<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>CAN YOU RUN IT? - GAME LIBRARY</title>
</head>
<body>
    <div class="">
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "nav-header.html")?>    
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "modal-login.html")?>
        
        <div class="rgb-bg container-fluid ">
            <div class="container-fluid" data-aos="fade-up">
                <div class="container pt-5 pb-5">
                    <h2 class="text-white fs-1 pb-3 "><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="70"
                            height="70" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                            <path
                                d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                            <path
                                d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                        </svg>Game Library
                    </h2>
                    <p class="text-white fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi nihil quae
                        sunt deserunt facilis
                        dignissimos</p>
                </div>
            </div>
        </div>
        <div class="bg-dark container-fluid pt-5 pb-5">
            <div class="container grid" data-aos="fade-up">
                <div class="row gx-5" data-aos="fade-up">
                    <div class="dropdown d-block text-end">
                        <a class="dropdown-toggle text-decoration-none fs-5" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sort by
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark bg-dark">
                            <li><a class="dropdown-item text-white" href="#">New releases</a></li>
                            <li><a class="dropdown-item text-white" href="#">A-Z</a></li>
                            <li><a class="dropdown-item text-white" href="#">Z-A</a></li>
                        </ul>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="gtav.html">
                            <img class="w-100 rounded-3" src="assets/img/Game_Cover/GTA5_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 card-title text-white p-0 ">Grand Theft Auto V</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Minecraft_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 card-title text-white p-0 ">Minecraft</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/ForzaH5_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 card-title text-white p-0 ">Forza Horizon 5</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Cyberpunk2077_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 card-title text-white p-0 ">Cyberpunk 2077</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/EldenRing_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 pb-3 card-title text-white p-0 ">Elden Ring</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-5" data-aos="fade-up">
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Warzone_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 pb-3 card-title text-white p-0 ">Call of Duty: Warzone</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/LOL_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 pb-3 card-title text-white p-0 ">League of Legends</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Wow_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 pb-3 card-title text-white p-0">World of Warcraft Shadowlands</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/RDR2_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <h4 class="fs-5 pb-3 card-title text-white p-0">Red Dead Redemption II</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/GoW_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                    <h4 class="fs-5 pb-3 card-title text-white p-0">God of War</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-5" data-aos="fade-up">
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-5" data-aos="fade-up">
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-5" data-aos="fade-up">
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-5" data-aos="fade-up">
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col card card-bg rounded-4 p-4 border-0">
                        <a class="text-decoration-none" href="">
                            <img class="w-100 rounded-3" src="img/Game_Cover/Placeholder_Cover.jpg" alt="">
                            <div class="card-body pt-2 ps-0 pb-0 mt-2">
                                <p class="placeholder-wave">
                                    <span class="placeholder col-8 card-title"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-light" href="#">Noone</a>
        </div>
    </footer>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</Html>