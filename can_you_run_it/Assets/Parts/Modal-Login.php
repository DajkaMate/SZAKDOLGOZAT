<?php

$is_invalid = false;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE USER_EMAIL = '%s'",
                   $mysqli->real_escape_string($_POST["Email"]));
    
    $result = $mysqli->query($sql);    
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["Password"], $user["USER_PASSWORD"])) 
        {
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["USER_ID"] = $user["ID"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<div class="modal fade modal-lg" id="LoginOverlay" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="bg-dark modal-content pt-3 pb-5 px-4">
            <div class="row">
                <div class="col pt-0">
                    <form method="post">
                    <button type="submit" class="btn fb-btn btn-outline-light mb-1 w-100 mb-3 mt-4">Login with <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook pb-1" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" /> </svg> Facebook</button>
                    <button type="submit" class="btn btn-outline-light g-btn w-100">Login with <img class="g-logo"
                            src="assets/img/Google__G__Logo.svg" alt=""> Google</button>
                    <hr class="text-white ">
             
                    <?php if ($is_invalid): ?>
                        
                    <?php endif?>    

                    <label for="exampleInputEmail1" class=" fs-5 text-white pb-0">Email address</label>
                    <input class="form-control mb-3" id="exampleInputEmail1" placeholder="name@example.com" aria-describedby="emailHelp" name="Email">
           
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class=" fs-5 text-white">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
                        <a class="text-decoration-none " href="">Forgot your password?</a>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input me-2 pb-1" id="RememberMe">
                        <label class="form-check-label fs-6 pb-4 text-white" for="RememberMe">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-light mb-2 w-100">Login</button>
                    <label class="fs-6 text-white pt-2 text-center" for="">Dont have an account?</label>
                    <a href="SignUpPage.php" class="btn btn-dark mt-3 w-100">Sign Up</a>
                    </form>
                </div>
                <div class="col-7 modalp2">
                    <h1 class="text-white fs-1 pt-0 mb-3 mt-3">Why sould i <br> Sign up?</h1>
                    <p class="text-white fs-5 pb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum
                        ducimus corrupti
                        quisquam ullam vel facilis doloremque quasi delectus nobis molestias praesentium
                        impedit, iste dolorum exercitationem sunt nihil officiis ipsum tempora?</p>
                    <div class="bg-light rounded-4 placeholder w-100" aria-hidden="true">
                        <br><br><br> <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
    </div>
</div>
</html>