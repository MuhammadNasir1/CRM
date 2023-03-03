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
  <title>CRM</title>
</head>
<body>
  <div class="sidebar side_bar">
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
          <a href="./inbox"> <i class='bx bx-envelope'></i>
            <span class="nav-links"> Inbox</span></a>
        </li>
        <li>
          <a href="./contact"><i class='bx bx-user'></i>
            <span class="nav-links"> Contacts</span></a>
        </li>
        <li>
          <a href="./Tasks"><i class='bx bx-task'></i>
            <span class="nav-links">Tasks</span></a>
        </li>
        <li>
          <a href="./user"><i class='bx bxs-user'></i>
            <span class="nav-links">Users</span></a>
        </li>
        <li>
          <a href="./calendar"><i class='bx bx-calendar'></i>
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
  <div class="main-con" style="height:150vh">
    <nav class="navbar nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Dashboard</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control me-4 ps-5" class=" me-4" type="text" placeholder="Search Contact"
            aria-label="Search">
        </form>
        <div class="dropdown dropstart float-end">
          <button class="me-5 others-btn" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="./images/plus-icon.svg" alt="plus-icons">
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
        <div class="d-flex admin-name">
          <a href="#">
            <p class="me-2">Lorem ipsum <br><span>Adminaster</span></p>
          </a>
          <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
          <button class="nav-down-arrow me-1 ms-3 "><i class="fa-sharp fa-solid fa-chevron-down"></i></button>
        </div>
        <!-- </div> -->
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <!-- ===============dash-board-start========= -->
    <div class="main ms-4 me-4">
      <div class="cont ">
        <div class="dashboard-date">
          <img src="./images/Vector line.svg" alt="">
          <h4>Show:</h4>
          <form action="">
            <input type="date" name="" id="">
          </form>
        </div>
      </div>
      <!-- ============== -->
      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-4">
            <div class="box-1">
              <div class="box1">
                <h4>Total Project</h4>
                <span>08</span>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="box-1">
              <div class="box1">
                <h4>Total Tasks</h4>
                <span>14</span>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="box-1">
              <div class="box1">
                <h4>Total Users</h4>
                <span>24</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ============= -->
        <!-- <div class="container-fluid"> -->
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 ">
            <div class="taskchat">
              <div class="task-chart-txt ps-2 pe-2">
                <span class="task-text ps-3">8 task completed out of 10</span>
                <div class="selecters">
                  <span class="select">Show:</span>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>One</option>
                    <option value="1">ALL</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <!-- ================progrss-bar -->
              <div class="progress-date ps-4 pe-4">
                <div class="progressbar mt-2">
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Warning example"
                      style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- ================progrss-bar-end -->
                <div class="date-sec mt-3">
                  <h3>23 DEC , Sunday</h3>
                </div>
              </div>
              <!-- ==================days-tabel==================== -->
              <div class="week-table mt-4">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Mon</th>
                      <th scope="col">Tuesday</th>
                      <th scope="col">Wed</th>
                      <th scope="col">Thur</th>
                      <th scope="col">Fri</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>24</td>
                      <td>26</td>
                      <td>14</td>
                      <td>34</td>
                      <td>41</td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td>26</td>
                      <td>14</td>
                      <td>34</td>
                      <td>41</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr>
              <!-- ===============Task========== -->
              <div class="reminder-sec mt-5 ms-4 me-4 ps-4 pe-4">
                <div class=" pt-2">
                  <div class="task-reminder">
                    <h4>Task 10</h4>
                    <h5>Reminder</h5>
                  </div>
                  <div class="reminder-date mt-1">
                    <p>Due date: <Span>February 20, 2023</Span></p>
                  </div>
                  <div class="user-img mt-4">
                    <div class="user-image">
                      <span><img src="./images/user-img.svg" alt="user">
                        Lorem ipsum
                      </span>
                    </div>
                    <span class="btn reminder-btn">Active</span>
                  </div>
                </div>
              </div>
              <!-- =================readmore-sec========= -->
              <div class="reminder-sec mt-3 ms-4 me-4 ps-4 pe-4">
                <div class=" pt-2">
                  <div class="task-reminder">
                    <h4>Task 10</h4>
                    <h5>Reminder</h5>
                  </div>
                  <div class="reminder-date mt-1">
                    <p>Due date: <Span>February 20, 2023</Span></p>
                  </div>
                  <div class="user-img mt-4">
                    <div class="user-image">
                      <span><img src="./images/user-img.svg" alt="user">
                        Lorem ipsum
                      </span>
                    </div>
                    <span style="background: #2ED47A;" class="btn reminder-btn">completed</span>
                  </div>
                </div>
              </div>
              <!-- =================readmore-sec========= -->
              <div class="readmore-sec mt-1">
                <p>
                <h3 data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                  aria-controls="collapseExample">
                  Read more
                </h3>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <!-- =================readmore-sec========= -->
                    <div class="reminder-sec mt-1 ms-4 me-4 ps-4 pe-4">
                      <div class=" pt-2">
                        <div class="task-reminder">
                          <h4>Task 10</h4>
                          <h5>Reminder</h5>
                        </div>
                        <div class="reminder-date mt-1">
                          <p>Due date: <Span>February 20, 2023</Span></p>
                        </div>
                        <div class="user-img mt-4">
                          <div class="user-image">
                            <span><img src="./images/user-img.svg" alt="user">
                              Lorem ipsum
                            </span>
                          </div>
                          <span style="background: #2ED47A;" class="btn reminder-btn">completed</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- =================readmore-end========= -->

          </div>
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="taskchat2">
              <div class="porject-chart-txt">
                <span>Projects</span>
                <div class="selecters">
                  <span class="select">Show:</span>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>One</option>
                    <option value="1">ALL</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div id="chartContainer" style="height: 310px; width: 100%;"></div>
              <div class="chart-details">
                <ul class="pe-4">
                  <li class="pe-3"><img class="pe-2" src="./images/active-circle.svg" alt="active">Active</li>
                  <li class="pe-3"><img class="pe-2" src="./images/complete-circle.svg" alt="complete">Completed</li>
                  <li class="pe-3"><img class="pe-2" src="./images/End-circle.svg" alt="end">Ended</li>
                </ul>
              </div>
            </div>
            <!-- =======todo-list========== -->
            <div class="rectangle-sec mt-3">
              <div class="todo-list">
                <h4 class="mt-2">TODOLIST</h4>
                <form action="#">
                  <input class="input-text" type="text" name="" value="" placeholder="buy dogs food">
                  <span><button class="add-btn"><img src="./images/plus-icon.svg" alt="plus"></button></span>
                </form>
                <div class="edit-sec mt-2 me-3 ms-3">
                  <div class="edit-row  pe-2 ps-2 pt-2 pb-2">
                    <input type="checkbox" name="" id="">
                    <span class="ms-1">read the book</span>
                    <span class="icon float-end">
                      <a href="#"><i class=' cross-icon bx bx-x'></i></a>
                      <a href="#"> <i class='bx bxs-pencil'></i></a>
                    </span>
                  </div>
                </div>
                <div class="edit-sec mt-2 me-3 ms-3">
                  <div class="edit-row  pe-2 ps-2 pt-2 pb-2">
                    <input type="checkbox" name="" id="">
                    <span class="ms-1">read the book</span>
                    <span class="icon float-end">
                      <a href="#"><i class=' cross-icon bx bx-x'></i></a>
                      <a href="#"> <i class='bx bxs-pencil'></i></a>
                    </span>
                  </div>
                </div>
                <div class="todo-task mt-3 me-3 ms-3">
                  <button class="task-btn" style="position: relative;">1 of two task done</button>
                  <button class="float-end remove-btn">Remove checked</button>
                </div>
              </div>
            </div>
            <!-- =======todo-list-end========== -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src=" ./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/6ab7ae1989.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>