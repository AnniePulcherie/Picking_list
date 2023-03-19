<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class OrdersTable extends Component
{
    // use WithPagination;
    public $search = '';
    
    public $message;
    public $orders;
    public $selectedOrders;

    public $nombreCommande;
    public $arrayNbCommande;
    public $page;
    public $nbElementParPage;
    public $nbPage;
    public $debutPage;
    public $idOrder;

    protected $listeners = [
        'openModal' => 'openModal',
    ];

    public function mount()
    {
        $this->nombreCommande = DB::select('select count(order_id) as commande from cscart_orders');
        $this->arrayNbCommande = json_decode(json_encode($this->nombreCommande), true);
        @$this->page = $_GET["page"];
        if(empty($this->page)) $this->page = 1;

        $this->nbElementParPage = 8;
        $this->nbPage = ceil($this->arrayNbCommande[0]['commande']/$this->nbElementParPage);
        $this->debutPage = ($this->page-1)*$this->nbElementParPage;

        $this->orders = DB::select("select *, (select count(*) from cscart_order_details where  order_id = o.order_id ) as items from cscart_orders o where o.firstname LIKE '%$this->search%' limit $this->debutPage,$this->nbElementParPage");
    }

    public function openModal($order_id)
    {
        $this->idOrder = $order_id;
        $this->selectedOrder = DB::select("select *, (select count(*) from cscart_order_details where  order_id = o.order_id ) as items from cscart_orders o where o.order_id = $this->idOrder");
        if (!empty($this->selectedOrder)) {
            // Accède à la propriété order_id de la première ligne
            $this->idOrder = $this->selectedOrder[0]->order_id;
        $this->dispatchBrowserEvent('show-modal');
        }
        
    }

    public function selectOrders($order_id){
        //$this->showAlert($order_id);
        return redirect()->route('detail', ['id' => $order_id]); 
    }

    public function render()
    {
       
        return view('livewire.orders-table',[
            'orders' => $this->orders,
            'nbPage' =>$this->nbPage,
            'selectedOrders' =>$this->selectedOrders
        ]);
    }
}
