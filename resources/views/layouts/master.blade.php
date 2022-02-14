<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User List</title>
  @include('layouts.stylecss')
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables  <h6><a href="/">Home</a></h6></h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->
    @yield('content')
    <!-- Content End -->
    <!-- Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- jQuery -->
@include('layouts.jscript')
</body>
</html>
    <!-- Footer End -->
