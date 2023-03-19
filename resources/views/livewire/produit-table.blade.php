<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <h1>Picking list</h1>
        
        <div >
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Order</th>
                    <th scope="col">Product</th>
                    <th scope="col">Product code</th>
                    <th scope="col">Items</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                     @if($listProduits){
                        @foreach($listProduits as $produit) 
                        <tr >
                           
                                <th scope="row clickable">{{$produit->order_id}}</th>
                                <td>{{$produit->name}}</td>
                                <td> {{$produit->product_code}}</td>
                                <td>{{$produit->amount}}</td>
                                <td>{{$produit->position}}></td>
                                <td><button type="button" class="btn btn-primary">Pick</button></td>
                                
                          
                        </tr>
                     @endforeach 
                     }
                     @endif
                   
                </tbody>
    
                </table>
               
               {{-- <div class="card-body">
                    <form name="post-barcode" id="post-barcode" method="post" action="{{ route('barcode',['id' =>$id]) }}">
                    @csrf
                    <label>Product amount: </label>
                    <div class="form-field d-flex align-items-center ctr">
                        
                        <input type="number" id="amount" name="amount" class="form-control" required="" >
                        <button type="submit" class="btn btn-primary"></button>
                    </div>
                        
                    </form>
    
                </div>  --}}
    
                <div class="card-body">
                    <form name="post-barcode" id="post-barcode" method="post" action="">
                    @csrf
                    <div class="form-group">
                        
                        <input type="text" id="barcode" name="barcode" class="form-control" required="" autofocus  maxlength="10" minlength="10" >
                        </div>
                       
                    </form>
    
                </div>
             </div>
             
    </div>
    
</div>
