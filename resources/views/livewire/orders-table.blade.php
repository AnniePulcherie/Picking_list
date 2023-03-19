<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <input type="text" class="form-control" wire:model="search" placeholder="Rechercher...">
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Order</th>
                <th scope="col">Customer</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Items</th>
                
                </tr>
            </thead>
            <tbody>
               
                @foreach($orders as $order):
                @if (isset($order))
                    <tr class="ligne"  wire:click="$emit('openModal',{{$order->order_id}})">
                    
                            <th>{{$order->order_id}}</th>
                            <td> {{$order->firstname}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->items}}</td>
                    
                    </tr>
                    @endif 
                @endforeach
               
            
            </tbody>

        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            
                <?php for($i=1;$i<=$nbPage; $i++){
        
                   echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                }?>
           
        </ul>
    </nav>
    {{-- <div>
        <span>{{$message}}</span>
    </div> --}}

    <!-- Modal -->
@if($selectedOrders)  
<div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Start to picking</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            
          <p>Prélèvement ID: {{$selectedOrders->order_id}}</p>
          <p>Nom: {{$selectedOrders->firstname}}</p>
          <p>Quantité: {{$selectedOrders->items}} </p>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  @endif
    <p>{{$message}}</p>
</div>

{{-- <div>
    @livewire('prelevements')
</div> --}}

