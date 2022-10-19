<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/Assets/parts/database.php";
    
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
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "head.html")?>
<title>Login</title>
<body>  
    <div class="container-fluid rgb-bg">
        <div class="signupbg">
            <form method="post">
                <h1 href="index.html" class="display-6 fw-normal text-center fw-bold"><a href="index.php" class="text-decoration-none">CAN YOU RUN IT?</a></h1>
                <button type="submit" class="btn btn-outline-light fb-btn mb-3 mt-4 w-100 fs-5">Login with <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook pb-1" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" /></svg> Facebook</button>
                <button type="submit" class="btn btn-outline-light g-btn mb-3 w-100 fs-5">Login with <img class="g-logo"src="assets/img/Google__G__Logo.svg" alt=""> Google</button>
                <hr class="text-white">
                <div class="">
                    <?php if ($is_invalid): ?>
                         <h1 class="text-center text-danger fs-5">Invalid Login</h1>
                    <?php endif; ?>
                  
                    <label for="exampleInputEmail1" class="form-label pt-2 text-white fs-4">Email address</label>
                    <input  class="form-control mb-3" placeholder="Enter your Email adress" name="Email" value="<?= htmlspecialchars($_POST["Email"] ?? "")  ?>"> 
            
                    <label for="exampleInputPassword1" class="form-label pt-1 text-white fs-4">Password</label>
                    <input type="password" class="form-control mb-2" id="exampleInputPassword1" placeholder="Enter your password" name="Password"> 
                    <a class="forgotpw text-decoration-none fs-5" href="">Forgot your password?</a><br><br>

                    <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
                    <label class="form-check-label text-white fs-5 pb-3" for="exampleCheck1">Remember me</label></div>

                    <button type="submit" class="btn btn-outline-light mb-2 w-100 p-2 fs-5">Login</button>
                    <p class="text-center text-white fs-5">Don't have an account?</p>
                    <a href="SignUpPage.php" class="btn btn-dark mb-2 mt-3 w-100 p-2 fs-5">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>
</Html>