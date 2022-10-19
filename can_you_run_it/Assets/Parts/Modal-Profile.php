<?php

    if (isset($_SESSION["USER_ID"]))
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["USER_ID"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
?>
<div class="modal fade modal-lg" id="LoginOverlay" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="bg-dark modal-content pt-3 pb-5 px-4" style="Height: 600px;">
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="row">
                <div class="col pt-0">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <h1 class="text-white pb-3 fs-1 mt-3">Hello <?= htmlspecialchars($user["USER_NAME"]) ?>!</h1>
                            
                            <button class="nav-link btn btn-dark fs-5 text-start w-75" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" aria-controls="v-pills-settings" aria-selected="true" role="tab">Settings</button>
                            <button class="nav-link btn btn-dark fs-5 text-start w-75" id="v-pills-saved-tab" data-bs-toggle="pill" data-bs-target="#v-pills-saved" aria-controls="v-pills-saved" aria-selected="true" role="tab">Saved Setups</button>
                            <button class="nav-link btn btn-dark fs-5 text-start w-75" id="v-pills-favorite-tab" data-bs-toggle="pill" data-bs-target="#v-pills-favorite" aria-controls="v-pills-favorite" aria-selected="true" role="tab">Favorite Games</button>
                            
                            <a href="Assets/parts/Logout.php"><button class="btn btn-danger fs-5 text-start w-75" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home">Log Out</button>    </a>
                        </div>
                    </div>
                <div class="col tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-zero" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0"></div>
                    
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <h1 class="text-white text-cebnter mt-3 text-start">Settings</h1>
                    </div>
                    <div class="tab-pane fade" id="v-pills-saved" role="tabpanel" aria-labelledby="v-pills-saved-tab" tabindex="0">
                        <h1 class="text-white text-cebnter mt-3 ">Saved Setups</h1>
                    </div>
                    <div class="tab-pane fade" id="v-pills-favorite" role="tabpanel" aria-labelledby="v-pills-favorite-tab" tabindex="0">
                        <h1 class="text-white text-cebnter mt-3">Favorite Games</h1>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>