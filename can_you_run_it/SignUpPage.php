<!DOCTYPE html>
<html lang="en">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/can_you_run_it/Assets/parts/"; include($IPATH. "head.html")?>
    <title>Singup</title>
<body>
    <div class="rgb-bg container-fluid ">
        <div class="signupbg">
            <form action="assets/parts/Connect.php" method="post" id="signup">

                <h1 href="index.html" class="display-6 fw-normal text-center fw-bold"><a href="index.php" class="text-decoration-none">CAN YOU RUN IT?</a></h1>
                <button type="submit" class="btn btn-outline-light fb-btn w-100 mb-3 mt-4 fs-5">Login with <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook pb-1" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg> Facebook</button>
                <button type="submit" class="btn btn-outline-light w-100 g-btn mb-3 fs-5">Login with <img class="g-logo" src="Assets/img/Google__G__Logo.svg" alt=""> Google</button>
                <hr class="text-white">
                
                <label class="form-label pt-3 text-white fs-4">How can we call you?</label>
                <input type="text" class="form-control mb-2" id="Nickname" name="Nickname" placeholder="Enter a Nickname">
                
                <hr class="text-white mt-4">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label  text-white fs-4">Email address</label>
                    <input type="email" class="form-control mb-0"  placeholder="Enter your email adress" aria-describedby="emailHelp" id="Email" name="Email">

                    <hr class="text-white mt-4">

                    <label for="exampleInputPassword1" class="form-label pt-2 text-white fs-4">Password</label>
                    <input type="password" class="form-control mb-2" id="Password" placeholder="Enter a password" name="Password">
                    
                    <label for="exampleInputPassword1" class="form-label text-white fs-4">Repeat Password</label>
                    <input type="password" class="form-control " id="Password_confirmation" placeholder="Enter a password again" name="Repeat_Password">
                    <label class="pb-4 text-white">Minimum 8 characters, must contain at least 1 letter </label>
                    
                    <hr class="text-white mt-4 ">
                    
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label pb-5 text-white fs-5" for="exampleCheck2">Agree to the <a href="">Terms and Conditions</a> </label>
                    <button type="submit" class="btn btn-outline-light w-100  fs-5 mb-2">Sign Up</button>
                </form>
            </div>
                    <p class="text-center text-white pt-3 fs-5">Already have an account?</p>
                    <a href="LoginPage.php" class="btn btn-dark mb-2 mt-3 w-100 p-2 fs-5">Login</a>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>
</Html>