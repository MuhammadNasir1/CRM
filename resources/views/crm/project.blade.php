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
@include("crm.side-bar")
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh;">
    <nav class="navbar task-nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Projects</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>

        <button class="share-btn me-3"><i class='bx bx-user pe-2 '></i>Workflows</button>
        <button class="share-btn me-3"><i class='bx bx-user pe-2 '></i>Share</button>
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
    <!-- ===============headings-start========== -->
    <div class="container-fluid">
      <div class="project-main">
        <div class="project-list">
          <ul>
            <a href="#" class="active">
              <li><i class='bx bx-table pe-1'></i>Table</li>
            </a>
            <a href="./Gantt_chart">
              <li><i class='bx bxs-bar-chart-alt-2 pe-1'></i>Gantt Chart</li>
            </a>
            <li>|</li>
            <a href="#">
              <li><i class='bx bx-table pe-1'></i>Fields</li>
            </a>
            <a href="#">
              <li><i class='bx bx-table pe-1'></i>Expand</li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- ==============list-end======== -->
    <div class="container-fluid">
      <div class="project-table">
        <table class="table text-align-center  table-borderless">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Name</th>
              <th scope="col">Assignee</th>
              <th scope="col">Status</th>
              <th scope="col">Start date</th>
              <th scope="col">Due date</th>
              <th scope="col"><i class='bx bx-plus'></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><i class='bx bxs-chevron-down'></i> Project</td>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td class="status"><button>New</button></td>
              <td class="date">16/02/2022</td>
              <td class="date">30/02/2022</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td class="ps-4">Name</td>
              <td class="td"></td>
              <td class="status"><button>New</button></td>
              <td class="date">16/02/2022</td>
              <td class="date">30/02/2022</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="ps-4">Name</td>
              <td class="td"></td>
              <td class="status"><button>New</button></td>
              <td class="date">16/02/2022</td>
              <td class="date">30/02/2022</td>
              <td></td>
            </tr>

          </tbody>
        </table>
        <div class="add-item">
          <p class="align-items: center;"><i class='bx bx-plus'></i>Item</p>
        </div>
      </div>
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