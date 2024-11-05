@extends('auth.layouts')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />
  <title>Storage Inventory System Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
      body {
          background-color: #f8f9fa;
      }
      .sidebar .logo-normal {
          font-size: 1.1rem;
      }
      .card {
          margin: 20px 0;
      }
      .card-header {
          background-color: #ff7f00;
          color: white;
      }
      .table thead th {
          color: #ff7f00;
      }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
  
    <!-- Main Panel -->
    <div class="main-panel">
      <div class="content">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Inventory</h4>
              </div>
              <div class="card-body">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                    {{ $message }}
                  </div>
                @else
                  <div class="alert alert-info">
                    Welcome to the Admin Dashboard
                  </div>
                @endif

                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Storage Number</th>
                        <th class="text-right">Storage Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>BLUE BOOK</td>
                        <td>Oct 20, 2024</td>
                        <td>#1234</td>
                        <td class="text-right">10,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0"></script>
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
@endsection
