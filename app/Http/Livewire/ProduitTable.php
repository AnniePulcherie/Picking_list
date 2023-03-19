<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitTable extends Component
{
    public $listProduits;
    public $produit;
   
    public function selectProduit($id,$code){
        $this->produit = DB:: select("SELECT product_code,amount FROM `cscart_order_details`  WHERE order_id = $id and product_code = '$code_product'");
    }

    public function render(Request $req)
    {
        $id = $req->id;
       $listProduits = DB::select("SELECT *,(SELECT product FROM `cscart_product_descriptions` where product_id = d.product_id )as name,(SELECT localization FROM `cscart_products` where product_id = d.product_id )as position FROM `cscart_order_details` d WHERE order_id = $id");
       return view('livewire.produit-table',[
            'listProduits' =>$listProduits
        ]);
    }
}
