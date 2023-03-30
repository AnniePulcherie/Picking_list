
<div>   
    <div class="row">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

    
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

            <div class="card-body">
                <h5 class="card-title">Commande</h5>

                <div class="d-flex align-items-center">
                
                <div class="ps-3">
                    <h6>{{$nbC}}</h6>
                    

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Produit commander</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>{{$nbP}}</h6>
                    
                </div>
                </div>
            </div>

            </div>
        </div><!-- End Revenue Card -->
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Search ..." wire:model="search" />
                        </div>
                        
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Items</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <tr class="ligne"  wire:click="showModal({{$order->order_id}})" data-toggle="modal" data-target="#orderModal">
                                        <th >{{$order->order_id}}</th>
                                        <td>{{date('d/m/Y', $order->timestamp)}}</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->total}}</td>
                                        <td>{{$order->items}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Aucune donnée</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            
                <?php for($i=1;$i<=$nbPage; $i++){
        
                   echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                }?>
           
        </ul>
    </nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        @if(!is_null($selectedOrders))
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Start to picking </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click ="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    <p> Orders id: {{$selectedOrders[0]->order_id}}</p>
                    <p>First name {{$selectedOrders[0]->firstname}}</p>
                    <p>items {{$selectedOrders[0]->items}}</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Fermer</button>
                <button type="button" class="btn btn-primary" wire:click ="productOrders({{$selectedOrders[0]->order_id}})" >Start</button>
            </div>
        </div>
        @endif
    </div>
    </div>
 
<script>
//     window.addEventListener("DOMContentLoaded",()=>{
    
//     Livewire.on('show-modal', function ($order_id) {
     
//        $('#exampleModal').modal('show');
//     });

// });
</script>
</div>



{{-- <div>
    @livewire('prelevements')
</div> --}}

