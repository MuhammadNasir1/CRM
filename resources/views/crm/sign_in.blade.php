<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>CRM</title>
</head>

<body>
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <h3>CRM</h3>
        </div>
        <div class="sign-input">
          <div class="sign-txt">
            <h4 class="form-heading">Sign in</h4>
            <h3>If you Don't have an account register</h3>
            <h3>You Can <a href="./sign_up">Register here !</a></h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form>
                <div class="mb-3">
                  <img class="input-icons" src="./images/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./images/passsword-icons.svg" alt="Pass">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i
                        class="fa-regular fa-eye"></i></a>
                  </div>
                </div>

                <div class="check-box mb-4">
                  <input class="checkbox" type="checkbox" name="" id=""> <span>Rememebr me</span>
                  <a href="./forgot_Password">Forgot Password ?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <!-- =========socail-icons========= -->
              <div class="socail-icons">
                <p>or continue with</p>
                <div class="icon">
                  <ul>
                    <li>
                      <a href="#"><img src="./images/Facebook.svg" alt=""></a>
                    </li>
                    <li>
                      <a href="#"><img class="s-icon" src="./images/apple-icon.svg" alt=""></a>
                    <li>
                      <a href="#"><img class="s-icon" src="./images/google-icon.svg" alt=""></a>
                    </li>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- =========socail-icons-End========= -->
            </div>
          </div>
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      @include("crm.infographic")
    </div>
  </div>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>