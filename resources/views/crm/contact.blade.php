<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/dashboard.css">
  <title>Projects</title>
</head>

<body>

  <?php
  // include("../CRM/side-bar")
  ?>
    <div class="sidebar">
    <div class="logos">
    </div>
    <i class='bx bx-menu' id="btntog"></i>
    <div class="user-details">
      <img src="./images/Rectangle 17.svg" alt="">
      <div class="ms-2">
        <p>lorem ipsum</p>
        <p class="mail">loremipsum@gmail.com</p>
      </div>
    </div>
    <div class="sidebarlinks">
      <ul>
        <li>
          <a href="./dashboard"> <i class='bx bx-category-alt'></i>
            <span class="nav-links">dashboard</span></a>
        </li>
        <li>
          <a href="./project"> <i class='bx bx-rectangle'></i>
            <span class="nav-links">Project</span></a>
        </li>
        <li>
          <a href="inbox"> <i class='bx bx-envelope'></i>
            <span class="nav-links"> Inbox</span></a>
        </li>
        <li>
          <a href="contact"><i class='bx bx-user'></i>
            <span class="nav-links"> Contacts</span></a>
        </li>
        <li>
          <a href="Tasks"><i class='bx bx-task'></i>
            <span class="nav-links">Tasks</span></a>
        </li>
        <li>
          <a href="user"><i class='bx bxs-user'></i>
            <span class="nav-links">Users</span></a>
        </li>
        <li>
          <a href="calendar"><i class='bx bx-calendar'></i>
            <span class="nav-links">Calenders</span></a>
        </li>
      </ul>
      <ul class=" pt-5">
        <li class="sidebar-logout"><i class='logouts-icons bx bx-log-out-circle'></i>
          <span class="logouts">Logout</span>
        </li>
      </ul>
    </div>
  </div>
  </div>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Contacts</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control me-4 ps-5" class=" me-4" type="text" placeholder="Search Contact"
            aria-label="Search">
        </form>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
        <!-- </div> -->
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <!-- ===============headings-start========== -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-9 col-sm-7">
          <div class="selecter">
            <span>company:</span>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>One</option>
              <option value="1">ALL</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="col-3 col-sm-5">
          <div class="contact-btn">
            <button class="float-end" type="d">Add Contact</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============headings-End========== -->
    <!-- ===============table-start========== -->
    <div class="table mt-3 pe-3 ps-3">
      <table class="table" class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col"><input type="checkbox" class="checkbox" disabled></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Company name</th>
            <th scope="col">Role</th>
            <th scope="col">Forecast</th>
            <th scope="col">Recent activity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <form><input type="checkbox" class="checkbox" name="
          " id=""></form>
            </th>
            <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
            <td>Loremipsum@gmail.com</td>
            <td>Apple</td>
            <td>CEO</td>
            <td>50%</td>
            <td>1 min ago</td>
          <tr>
            <th scope="row">
              <form><input type="checkbox" name="
          " id=""></form>
            </th>
            <td class="td"><img src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
            <td>Loremipsum@gmail.com</td>
            <td>Apple</td>
            <td>CEO</td>
            <td>50%</td>
            <td>1 min ago</td>
        </tbody>
      </table>
    </div>
    <!-- ================= -->
  </div>
  <!-- <div class="main-con"> -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
