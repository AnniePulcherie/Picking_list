<div class="row">
    <div>
        <button class="btn btn-primary" style="float: right; margin:10px" wire:click="finished">Finished</button>
    </div>
    <div >
        <section class="section">
            <div>
                <form method="post" class="form-control" style="float:left" wire:submit.prevent="submit">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="form-group">
                                <input type="text" id="barcode" name="barcode" wire:model.defer="barcode" class="form-control" required="" autofocus  maxlength="10" minlength="10" placeholder="Prdouct code">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <input type="number" id="amount" name="amount" wire:model.defer="amount"  class="form-control" required="" placeholder="Product amount">
                                
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-primary"style="width: 100px; float:right">  Pick  </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        </section> 
        
        
        
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <div class="{{$styleMessage}}" id="alert"></div>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product code</th>
                                    <th scope="col">Items</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($listProduits))
                                    @foreach($listProduits as $produit) 
                                    <tr >
                                        
                                        <th scope="row clickable">{{$numero++}}</th>
                                        <td>{{$produit->name}}</td>
                                        <td>{{$produit->product_code}}</td>
                                        <td>{{$produit->amount}}</td>
                                        <td>{{$produit->position}}</td>
                                        <td>{{$produit->Status}}</td>
                                        <td><button type="button"  wire:click ="picking('{{$produit->product_code}}')"><i class='bx bx-check-circle'></i></button></td>
                                    </tr>
                                    @endforeach 
                                @endif
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if($nbProduitArray>$nbElementParPage)
            <?php for($i=1;$i<=$nbPage; $i++){
                
                echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
            }?>
            @endif
        </ul>
    </nav>
    
    
</div>

<p>{{$barcode}}</p>
<p>{{$amount}}</p>

{{-- @if(isset($item)&& $item>1)
    
    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Start to picking </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"  wire:click="closeModal">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    
                    
                    @csrf
                    <div class="form-group">
                        <label>Amount </label>
                        <input type="number" id="amount" name="amount" wire:model.defer="amount" class="form-control" required="" >
                    </div>
                    @if($erreur)
                    <label>{{$erreur}}</label>
                    @endif
                    
                    
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Fermer</button>
                    <button type="button" class="btn btn-primary" wire:click ="validItem" >OK</button>
                </div>
            </div>
        </div>
    </div>
    
    @endif --}}
    
</div>

</div>
