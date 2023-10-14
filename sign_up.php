<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!--Bootstrap 5 CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Custom Css link-->
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 offset-xl-4 text-center">
                <div class="logo">
                    <img src="assets/images/Software_logo.png" class="img-fluid" alt="logo">
                </div>
                <form class="rounded bg-white shadow-lg p-5">
                    <h3 class="text-dark fw-bolder fs-4 mb-2">Create an Account</h3>
                    <div class="fw-normal text-muted mb-4">
                        Already have an Account? <a href="index.html" class="text-primary fw-bold text-decoration-none">Login</a>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingFirstName" placeholder="name@example.com">
                        <label for="floatingFirstName"><i class="fa-solid fa-circle-user px-1"></i>First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingLastName" placeholder="name@example.com">
                        <label for="floatingLastName"><i class="fa-solid fa-circle-user px-1"></i>Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-solid fa-envelope px-1"></i>Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><i class="fa-solid fa-key px-1"></i>Password</label>
                        <span class="password-info mt-2">
                            Use 8 or more characters with a mix of letters, numbers & symbols.
                        </span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Password">
                        <label for="floatingConfirmPassword"><i class="fa-solid fa-key px-1"></i>Confirm Password</label>
                        
                    </div>
                    <div class="form-check d-flex align-items-center">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label ms-2" for="gridCheck" checked>
                            I Agree <a href="#">Terms and Condition</a>.
                          </label>
                        </div>
                      </div>
                    
                    <button type="submit" class="btn btn-primary submit_btn w-100 my-4">SIGNUP</button>
                    <div class="text-center text-muted text-uppercase mb-2">or</div>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="assets/images/icons8-nokia-3310-48.png" class="img-fluid me-3">Contuniue with Mobile</a>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="assets/images/google-icon.svg" class="img-fluid me-3">Contuniue with Google</a>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="assets/images/icons8-facebook-30.svg" class="img-fluid me-3">Contuniue with Facebook</a>
                </form>

            </div>
        </div>
    </section>

</body>

</html>