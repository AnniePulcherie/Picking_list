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
    public $ordersAmount;
    public $productAmount;
    public $current_page;
    public $produitPicked;
    public $arrayProduitPicked;
    public $nbProduitPicked;

    protected $listeners = [
        'openModal' => 'openModal',
    ];
    // CREER UN COLONNE STATUS S'IL N'EXISTE PAS (AJOUTER UNE COLONNE STATUS A PARTIR D UNE MIGRATION)
   
    public function mount(){
        $table_info = DB::select("DESCRIBE cscart_order_details");

        $column_exists = false;

        // Vérifier si la colonne existe déjà
        foreach ($table_info as $column) {
            if ($column->Field == 'statusOrders') {
                $column_exists = true;
                break;
            }
        }

        if (!$column_exists) {
            DB::statement("ALTER TABLE cscart_order_details
            ADD COLUMN `statusOrders` VARCHAR(255) NULL;");
        }
    }
   
   
    public function sqlRequte()
    {
        //$this->nombreCommande = DB::select('select count(order_id) as commande from cscart_orders');
        $this->ordersAmount = DB::select("SELECT count(*) as nbc
        FROM cscart_orders o
        WHERE EXISTS (
            SELECT *
            FROM cscart_order_details
            WHERE o.order_id = cscart_order_details.order_id
            AND cscart_order_details.statusOrders IS NULL
        )");

            $this->productAmount = DB::select("SELECT count(*) as nbp 
            from cscart_products p, cscart_order_details o 
            WHERE EXISTS (
                SELECT *
                FROM cscart_order_details
                WHERE o.order_id = cscart_order_details.order_id
                AND cscart_order_details.statusOrders IS NULL
            ) AND p.product_id = o.product_id ");

        
        $this->produitPicked = DB::select("SELECT count(*) as produitPicked
        FROM `cscart_order_details` 
        WHERE statusOrders = 'picked'
        ");

        $this->arrayProduitPicked = json_decode(json_encode($this->produitPicked), true);
        $this->nbProduitPicked = $this->arrayProduitPicked[0]['produitPicked'];
        $this->arrayNbCommande = json_decode(json_encode($this->ordersAmount), true);
        @$this->page = $_GET["page"];
        if(empty($this->page)) $this->page = 1;

        $this->nbElementParPage = 8;
        $this->nbPage = ceil($this->arrayNbCommande[0]['nbc']/$this->nbElementParPage);
        $this->debutPage = ($this->page-1)*$this->nbElementParPage;
        $this->current_page = isset($_GET['page']) ? $_GET['page'] : 1;



    }

   

    public function showModal(int $order_id)
    {
        $this->idOrder = $order_id;
        if($order_id !== 0){
            $this->selectedOrders = DB::select("select *, 
            (select count(*) 
            from cscart_order_details 
            where  order_id = o.order_id ) as items 
            from cscart_orders o where o.order_id = $order_id ");
        }
        
        // $this->message = "id = $this->idOrder";
        $this->emit('show-modal', $order_id);

        // $this->dispatchBrowserEvent('show-modal');
        
    }

    public function closeModal()
    {
        $this->selectedOrders = null;
        $this->emit('closeModal');
    }

    public function productOrders($order_id){
        
        return redirect()->route('produit', ['id' => $order_id]); 
    }

    public function requete(){
        
        $this->orders = DB::select("SELECT *,
        (select count(*) from cscart_order_details where  order_id = o.order_id ) as items
        FROM cscart_orders o
        WHERE EXISTS (
            SELECT *
            FROM cscart_order_details
            WHERE o.order_id = cscart_order_details.order_id
            AND cscart_order_details.statusOrders IS NULL
        ) AND o.firstname LIKE '%$this->search%' limit $this->debutPage,$this->nbElementParPage");
       
    }

    

    public function render()
    {

        //$this->orders = DB::select("select *, (select count(*) from cscart_order_details where  order_id = o.order_id ) as items from cscart_orders o where o.firstname LIKE '%$this->search%' limit $this->debutPage,$this->nbElementParPage");
        $this->sqlRequte();
        $this->requete();
        $nbC = (string)$this->ordersAmount[0]->nbc;
        $nbP = (string)$this->productAmount[0]->nbp;
        return view('livewire.orders-table',[
            'orders' => $this->orders,
            'nbPage' =>$this->nbPage,
            'nbC' => $nbC,
            'nbP'=> $nbP,

            'selectedOrders' =>$this->selectedOrders
        ])->layout('layouts.index');
    }
}
