<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Book Store &rsaquo; Add Data User</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form action="users/store/" method="post" class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Book Store</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Book Store</li>
            <li><a class="nav-link" href="/users"><i class="far fa-user"></i> <span>User</span></a></li>
            <li><a class="nav-link" href="/book"><i class="fas fa-book"></i> <span>Book</span></a></li>
            <li class="menu-header">Payment</li>
            <li><a class="nav-link" href="/transaction"><i class="fas fa-calculator"></i> <span>Transaction</span></a></li>
            <li><a class="nav-link" href="/paymentmethod"><i class="fas fa-comments-dollar"></i> <span>Payment Method</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          </div>        
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="section-header">
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Book Store</a></div>
              <div class="breadcrumb-item"><a href="#">Data User</a></div>
                <div class="breadcrumb-item">Add Data User</div>
        </div>
            </div>
            <h2 class="section-title">Data User</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <form action="/users/store" method="post">
                {{ csrf_field() }}
                <div class="container">
                  <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" require="required">
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" require="required">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password Strength</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control"  name="password" require="required">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                    <input type="text"  class="form-control" name="phone" require="required">
                    </div>
                </div>
                <div class="form-group">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" require="required">
                </div>
                <div class="form-group">
                  <label for="birthday" class="form-label">Birthday</label>
                  <input type="date" class="form-control" name="birthday" require="required">
                </div>
                <div class="form-group">
                      <label for="is_active" class="form-label">Is Active</label>
                      <select class="form-control" name="is_active" require="required">
                        <option>Active</option>
                        <option>Inactive</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="role" class="form-label">Role</label>
                      <select class="form-control" name="role" require="required">
                        <option>Admin</option>
                        <option>Seller</option>
                        <option>Buyer</option>
                        <option>Publisher</option>
                      </select>
                    </div>
                <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-12 col-lg-3"></label>
                      <div class="col-sm-12 col-md-12">
                        <button class="btn btn-primary">Save</button>   
                        <button class="btn btn-secoundary" a href="/users">back</button>
                      </div>
                      <div >

                      </div>
                </div>
                </form>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Agustus &copy; 2023 <div class="bullet"></div> Design By <a href="https://www.instagram.com/sanzhanym/">Siti Anzhanny Marwa</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>