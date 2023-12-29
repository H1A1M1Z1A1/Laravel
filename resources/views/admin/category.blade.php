<!DOCTYPE html>
<html lang="en">
@include('admin.css')
  
  <body>
    
      <!-- partial -->
      @include('admin.partial')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.partialNav')
      <div class="main-panel">
          <div class="content-wrapper">
      @if(session()->has('message'))
    <div class="alert alert-success" id="alert1">
      <button type="button" onclick=closeAlert() id="close" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
@endif

    <div class="div_center">
        <h2>Add Category</h2>
        <form action="{{url('/addCategory')}}" method="post">
            @csrf
            <input type="text" name="category_name" placeholder="write category name">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
        </form>
    </div>
    </div>
</div>
</div>


</div>
    @include('admin.script')

    <script>
    // function closeAlert() {
    //     var closeButton = document.getElementsByClassName("close")[0];
    //     closeButton.parentNode.style.display = "none";
    // }
    function closeAlert() {
        var closeButton = document.getElementById("alert1");
        closeButton.style.display = "none";
    }
    </script>
  </body>
</html>