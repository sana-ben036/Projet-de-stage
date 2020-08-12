
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- main.css -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand text-uppercase" href="#">
          <h1>Dashboard</h1>
        </a>

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->

        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
          <ul class="navbar-nav links d-md-none">
            <li class="nav-item">
              <a class="nav-link active" href="#"
                ><i class="fa fa-home text-muted mr-3"></i>Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-list mr-3 text-muted"></i>App</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>Mailbox</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-desktop mr-3 text-muted"></i>UI Elements</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>Mailbox</a
              >
            </li>
          </ul>

          <!-- nav icons -->
          <ul class="navbar-nav icons">
            <li class="nav-item mr-4">
              <a class="nav-link" href="#"> <i class="fa fa-search"></i> </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#"> <i class="fa fa-bell icon"></i> </a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#">
                <i class="fa fa-comment icon"></i>
              </a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" href="#">
                <img
                  src="images/team-1.jpg"
                  class="img-fluid rounded-circle img-thumbnail"
                  alt="Logo"
                  style="width:30px;"
                />
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="modal"
                data-target="#sign-out"
                href="#"
              >
                <i class="fa fa-sign-out"></i> Sign Out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
