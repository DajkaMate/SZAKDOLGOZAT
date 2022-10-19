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
    <title>LOGO NAME</title>
</head>

<body>
    <div>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "nav-header.html")?>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "modal-login.html")?>
    
        <div class="rgb-bg container-fluid ">
            <div class="container-fluid" data-aos="fade-up">
                <div class="container pt-5 pb-5">
                    <h2 class="text-white fs-1 pb-3"><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                            <path
                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                        </svg> Compare Hardware
                    </h2>
                    <p class="text-white fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi nihil quae
                        sunt deserunt facilis
                        dignissimos</p>
                </div>
            </div>
        </div>
        <div class="bg-dark container-fluid ">
            <div class="container-fluid" data-aos="fade-up">
                <div class="container pt-5 pb-5">
                    <div class="container" style="margin-top: 10px;">
                        <ul class="nav nav-tabs bg-dark">
                            <li class="nav-item">
                                <a class="nav-link active fs-5" data-bs-toggle="tab" href="#CPU">CPU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" data-bs-toggle="tab" href="#GPU">GPU</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane container active" data-aos="fade"  id="CPU">
                                <div class="row justify-content-evenly">
                                    <div class="col-4">
                                        <select class="mt-5 mb-5 form-select border-white "
                                            aria-label="Default select example">
                                            <option selected>Select a CPU</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <img src="./img/Ryzen.logo2.png" class="w-75 GPU-logo" alt="">
                                        <h2 class="myh3 pt-5 pb-5 fs-2 text-white text-center">Selected CPU 1</h2>
                                        <div class="row">
                                            <div class="col-6 border-end">
                                                <h1 class="text-white fs-4">Manufacturer</h1>
                                                <h1 class="text-white fs-4">Model</h1>
                                                <h1 class="text-white fs-4">Architecture</h1>
                                                <h1 class="text-white fs-4">Core Speed</h1>
                                                <h1 class="text-white fs-4">Cores</h1>
                                                <h1 class="text-white fs-4">Total Threads</h1>
                                                <h1 class="text-white fs-4">Socket</h1>
                                                <h1 class="text-white fs-4">Released</h1>
                                            </div>
                                            <div class="col-6 text-center">
                                                <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">A_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">SPEEED</h1>
                                                <h1 class="text-white fs-4 fw-light">CORES</h1>
                                                <h1 class="text-white fs-4 fw-light">THREADS</h1>
                                                <h1 class="text-white fs-4 fw-light">TYPE</h1>
                                                <h1 class="text-white fs-4 fw-light">DATE</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <select class="mt-5 mb-5 form-select border-white "
                                            aria-label="Default select example">
                                            <option selected>Select a CPU</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <img src="./img/Intel.logo2.png" class="w-75 GPU-logo" alt="">
                                        <h2 class="myh3 pt-5 pb-5 fs-2 text-white text-center">Selected CPU 1</h2>
                                        <div class="row">
                                            <div class="col-6 border-end">
                                                <h1 class="text-white fs-4">Manufacturer</h1>
                                                <h1 class="text-white fs-4">Model</h1>
                                                <h1 class="text-white fs-4">Architecture</h1>
                                                <h1 class="text-white fs-4">Core Speed</h1>
                                                <h1 class="text-white fs-4">Cores</h1>
                                                <h1 class="text-white fs-4">Total Threads</h1>
                                                <h1 class="text-white fs-4">Socket</h1>
                                                <h1 class="text-white fs-4">Released</h1>
                                            </div>
                                            <div class="col-6 text-center">
                                                <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">A_NAME</h1>
                                                <h1 class="text-white fs-4 fw-light">SPEEED</h1>
                                                <h1 class="text-white fs-4 fw-light">CORES</h1>
                                                <h1 class="text-white fs-4 fw-light">THREADS</h1>
                                                <h1 class="text-white fs-4 fw-light">TYPE</h1>
                                                <h1 class="text-white fs-4 fw-light">DATE</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center"><a href="HardwareCompare.html"><button
                                                class="mt-5 btn btn-outline-light w-25 p-2 fs-5">Compare</button></a>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="GPU">
                                <div class="row justify-content-evenly">
                                <div class="col-4">
                                    <select class="mt-5 mb-5 form-select border-white "
                                        aria-label="Default select example">
                                        <option selected>Select a GPU</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <img src="./img/AMD.logo2.png" class="w-75 GPU-logo" alt="">
                                    <h2 class="myh3 pt-5 pb-5 fs-2 text-white text-center">Selected GPU 1</h2>
                                    <div class="row">
                                        <div class="col-6 border-end">
                                            <h1 class="text-white fs-4">Manufacturer</h1>
                                            <h1 class="text-white fs-4">Model</h1>
                                            <h1 class="text-white fs-4">Architecture</h1>
                                            <h1 class="text-white fs-4">Core Speed</h1>
                                            <h1 class="text-white fs-4">Cores</h1>
                                            <h1 class="text-white fs-4">Total Threads</h1>
                                            <h1 class="text-white fs-4">Socket</h1>
                                            <h1 class="text-white fs-4">Released</h1>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">A_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">SPEEED</h1>
                                            <h1 class="text-white fs-4 fw-light">CORES</h1>
                                            <h1 class="text-white fs-4 fw-light">THREADS</h1>
                                            <h1 class="text-white fs-4 fw-light">TYPE</h1>
                                            <h1 class="text-white fs-4 fw-light">DATE</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <select class="mt-5 mb-5 form-select border-white "
                                        aria-label="Default select example">
                                        <option selected>Select a GPU</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <img src="./img/Nvidia.logo2.png" class="w-75 GPU-logo" alt="">
                                    <h2 class="myh3 pt-5 pb-5 fs-2 text-white text-center">Selected GPU 1</h2>
                                    <div class="row">
                                        <div class="col-6 border-end">
                                            <h1 class="text-white fs-4">Manufacturer</h1>
                                            <h1 class="text-white fs-4">Model</h1>
                                            <h1 class="text-white fs-4">Architecture</h1>
                                            <h1 class="text-white fs-4">Core Speed</h1>
                                            <h1 class="text-white fs-4">Cores</h1>
                                            <h1 class="text-white fs-4">Total Threads</h1>
                                            <h1 class="text-white fs-4">Socket</h1>
                                            <h1 class="text-white fs-4">Released</h1>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">M_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">A_NAME</h1>
                                            <h1 class="text-white fs-4 fw-light">SPEEED</h1>
                                            <h1 class="text-white fs-4 fw-light">CORES</h1>
                                            <h1 class="text-white fs-4 fw-light">THREADS</h1>
                                            <h1 class="text-white fs-4 fw-light">TYPE</h1>
                                            <h1 class="text-white fs-4 fw-light">DATE</h1>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center"><a href="HardwareCompare.html"><button
                                            class="mt-5 btn btn-outline-light w-25 p-2 fs-5">Compare</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
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