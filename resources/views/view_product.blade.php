<x-header />
<div class="container mt-5">
        
    <div class="row mb-5">
        <div class="title">
            <h4 class="sc">Products</h4>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 200px;" src="{{asset('uploads/products/'.$product->p_image)}}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-16 fw-600">{{$product['p_name']}}</h5>
                            <p class="card-text fs-14">{{$product['p_discription']}}</p>
                            <a style="float: right;" href="#" class="btn btnc">Add to Cart</a>
                        </div>
                    </div>                    
                </div>
                @endforeach 
        </div>
    </div>
</div>
<x-footer />

