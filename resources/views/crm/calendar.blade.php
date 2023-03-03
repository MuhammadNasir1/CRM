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
  <title>calendar</title>
</head>

<body>
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
  <?php
  // include("../CRM/side-bar")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh">
    <nav class="navbar task-nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Calender</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control nav-search me-3 ps-5" class=" me-4" type="text" placeholder="Search"
            aria-label="Search">
          </form>
          <div class="dropdown dropstart float-end">
          <button class="me-3 others-task-btn" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img class="img" src="./images/plus-icon.svg" alt="plus-icons">
          </button>
          <ul class="dropdown-menu others-dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-task'></i> Tasks</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-checkbox'></i> Projects</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-network-chart'></i> Workflows</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-folder'></i> Folder</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bxs-user-plus'></i> Invite</a>
            </li>
          </ul>
        </div>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <div class="container-fluid">
    <iframe src="https://calendar.google.com/calendar/embed?height=540&wkst=1&bgcolor=%23ffffff&ctz=UTC&src=bXVoYW1tYWRuYXNpci5kZXZAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTAxNTU3MTA5MjQ0OTY1MzA3MjEzQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043&color=%230047a8"  width="100%" height="540" frameborder="0" scrolling="no"></iframe>
    </div>
    <!-- ===============page-end========== -->
  </div>





  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>