<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($products as $product)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <form action="{{url('addCart',$product->id)}}" method="post"  class="option1">
                              @csrf
                        <!-- <h1>Add to Cart</h1> -->
                        <input type="submit" value="Add to Cart">
                        <input type="number" min=1 name="quantity" style="width:55px;padding-right:5px;">
                            
                           </form>
                           <a href="home/" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$product->title}}
                           
                        </h5>
                        <h6>
                        ${{$product->price}}
                           
                        </h6>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>

               
            
         </div>
      </section>