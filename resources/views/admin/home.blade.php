<!DOCTYPE html>
<html lang="en">
@include('admin.css')
  
  <body>
    
      <!-- partial -->
      @include('admin.partial')
      <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
          <div class="content-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.partialNav')

        
        <!-- partial -->
        
      <!-- page-body-wrapper ends -->
      <!-- @include('admin.partialPanel') -->

    </div>
    </div>
    </div>

    @include('admin.script')

  </body>
</html>