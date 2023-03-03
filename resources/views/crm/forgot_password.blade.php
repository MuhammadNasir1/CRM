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
          <div class="forgot-page-txt ">
            <h4 class="form-heading">Forgot Password?</h4>
              <h3>Please enter the email assaciated with
              <br>You account and we'll send an email with
              <br>link, where you can change your passsword.
            </h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form>
                <div class="mb-3 mt-5">
                  <img class="input-icons" src="./images/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email address">
                </div>
                <button type="submit" class=" mt-5 btn btn-primary">Register</button>
              </form>
              <h4 class="mt-4">You Can <a href="./sign_in">login here !</a></h4>
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