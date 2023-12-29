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


<table class="table">
  <thead>
    <tr>
      <th scope="col">Product title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category Price</th>
      <th scope="col">Discount Price</th>
      <th scope="col">Product Price</th>
      <th scope="col">image</th>

    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th>{{$product->title}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->discount_price}}</td>
      <td>{{$product->price}}</td>
      <td><img class="w-25 h-25" src="product/{{$product->image}}" alt=""></td>

    </tr>
  @endforeach

    
  </tbody>
</table>
      

    
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