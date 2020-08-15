
  <?php require('./admin_include/header.php') ;?>
    <!-- main content -->
    <?php require('./admin_include/sidebar.php') ;?>

          <div class="row inform-card">
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <div class="card card-1">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-home body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Orders</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="#">Learn More</a> <i class="fa fa-refresh"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <div class="card card-2">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-users body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Users</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="#">Learn More</a> <i class="fa fa-refresh"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <div class="card card-3">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-envelope  body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Messages</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="#">Learn More</a> <i class="fa fa-refresh"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mx-auto my-5">
              <div class="card card-4">
                <div class="card-body">
                  <div class="flex d-flex justify-content-between">
                    <i class="fa fa-suitcase  body-icon"></i>
                    <div class="side-text align-self-center">
                      <h3>20 NEW</h3>
                      <h5>Orders</h5>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <a href="#">Learn More</a> <i class="fa fa-refresh"></i>
                </div>
              </div>
            </div>
          </div> -->

          <!-- end of cards row -->
          <!-- charts
          <div class="row">
            <div class="col-md-6 col-lg-4 my-5">
              <div class="card">
                <div class="card-title text-center">
                  <h1 class="text-uppercase">Line Chart</h1>
                </div>
                <canvas id="line-chart"></canvas>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-5 mx-auto order-3 order-lg-2">
              <div class="card">
                <div class="card-title text-center">
                  <h1 class="text-uppercase">Dougnut Chart</h1>
                </div>
                <canvas id="doughnut-chart"></canvas>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-5 order-2 order-lg-3">
              <div class="card">
                <div class="card-title text-center">
                  <h1 class="text-uppercase">Bar Chart</h1>
                </div>
                <canvas id="bar-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- end of side bar -->
    <div class="col-md-9 col-lg-10 py-5 bg-light">
          <!-- title row -->
          <div class="row mb-5">
            <div class="col">
              <h3>
                <span class="text-uppercase text-danger">Welcome </span
                ><span class="text-muted small"> to admin panel</span>
              </h3>
            </div>
          </div>
    <!-- The Modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Already want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            It is sad to see you go. Please Press Logout to leave.
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">
              Stay Here
            </button>
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal"><a  href="php/logout.php">Logout</a>
              
            </button> -->
            <a class="nav-link btn btn-danger" href="php/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <?php require('./admin_include/footer.php') ;?>
