<!DOCTYPE html>
<html lang="en">
@include('admin.css')
<style type="text/css">
    .div_center{
        width:80%;
        max-width:600px;
        text-align:center;
        margin-right:80px;
        padding-top:50px

    }
    label
    {
        /* margin:50px */
        display:inline-block;
        width:200px;
        padding-bottom: 18px;

    }

</style>
  
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
        <h2>Add Product</h2>
        <form action="{{url('/addProduct')}}" method="post" enctype ="multipart/form-data">
            @csrf
            <div>
                <label for="title">Product Title:</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="description">Product Description:</label>
                <input type="text" name="description">
            </div>            
            <div>
                <label for="price">Product price:</label>
                <input type="number" name="price" min=0>
            </div>
            <div>
                <label for="discount_price">Discount_price:</label>
                <input type="number" name="discount_price">
            </div>            <div>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" min=1>
            </div>
            <div>
                <label for="category">Category:</label>
                <!-- <input type="text" name="category"> -->
                <select name="category" required >
                <option value="" selected disabled > Add category</option>
                @foreach($category as $item)

                <option  > {{$item->category_name}}</option>
                @endforeach

                </select>

            </div> 
            <div>
                <label for="image">Image:</label>
                <input type="file" name="image" required >
            </div>
            <!-- <input type="text" name="category_name" placeholder="write category name"> -->
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