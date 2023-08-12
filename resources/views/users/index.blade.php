<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Book Store &rsaquo; Data users</title>

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
        <form class="form-inline mr-auto">
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
          <ul class="sidebar-menu">
            <li class="menu-header">Book Store</li>
            <li><a class="nav-link" href="/users"><i class="far fa-user"></i> <span>User</span></a></li>
            <li><a class="nav-link" href="/book"><i class="fas fa-book"></i> <span>Book</span></a></li>
            <li class="menu-header">Payment</li>
            <li><a class="nav-link" href="/transaction"><i class="fas fa-calculator"></i> <span>Transaction</span></a></li>
            <li><a class="nav-link" href="/paymentmethod"><i class="fas fa-comments-dollar"></i> <span>Payment Method</span></a></li>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini"></div>        
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Book Store</a></div>
              <div class="breadcrumb-item"><a href="#">Add Data user</a>
            </div>
            </div>
          </div>
          
          <h5>
              <a href="/add-users"><i class="fa fa-plus">
                Add Data User</i>
              </a></h5>
            <div class="row">
              <div class="col-12">            
                <h1 class="m-0"> {{$user['users']}}</h1>
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                   
                      @if($errors->any())
                      @foreach($errors->all() as $err)
                      <p class="alert alert-danger">{{ $err }}</p>
                      @endforeach
                      @endif   

                  <table class="table table-striped" id="table-2">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Birthday</th>
                        <th>Is Active</th>
                        <th>Role</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    @foreach($user as $users)
                    <tbody>
                      <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->password }}</td>
                        <td>{{ $users->phone }}</td>
                        <td>{{ $users->address }}</td>
                        <td>{{ $users->birthday }}</td>
                        <td>{{ $users->is_active }}</td>
                        <td>{{ $users->role }}</td>
                        <td>
                          <a class="far fa-edit" href="/users/{{$users->id}}"></a>
                          <a class="fa fa-trash" href="/users/delete/{{$users->id}}"></a>
                        </td>
                      </tr>
                    </tbody>                         
                    @endforeach
                  </table>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-users" method="post">
           {{ csrf_field() }}

                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Password Strength</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                     </div>
                                     <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    </div>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input type="number" name="payment_method_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Birthday</label>
                                <input type="date" name="qty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Is Active</label>
                                <select name="is_active" class="form-control select2" multiple="">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <select name="role" class="form-control select2" multiple="">
                                    <option>Admin</option>
                                    <option>Seller</option>
                                    <option>Buyer</option>
                                    <option>Publisher</option>
                                </select>
                                </div>
                                    <div class="modal-footer">
                                    <a class="btn btn-danger" href="/users">back</a>
                                    <button  class="btn btn-success btn-sm">save</button>
                                    </div>
                                  </form>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
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