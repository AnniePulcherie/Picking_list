<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProduitTable extends Component
{
    public $listProduits;
    public $produit;
    public $numero;
    public $order_id;
    public $barcode;
    public $message;
    public $listProduct;
    public $item;
    public $erreur;
    public $amount;
    public $product_id;
    public $nbProduit;
    public $nbProduitArray;
    public $arrayNbProduit;
    public $page;
    public $nbElementParPage;
    public $nbPage;
    public $debutPage;
    public $styleMessage;
    public $current_page;
    

    public function mount(Request $req){
        $this->order_id = $req->id;
        $this->numero = 1;
    }
    protected $rules = [
        'barcode' => 'required|integer|between:0,20',
        'amount' =>'required|integer|between:0,20',
        
    ];


    public function variable(){

        $this->nbProduits = DB::select("SELECT count(*) as produitAmount
            FROM `cscart_order_details` 
            WHERE order_id = $this->order_id 
            ");

        $this->arrayNbProduit = json_decode(json_encode($this->nbProduits), true);
        @$this->page = $_GET["page"];
        if(empty($this->page)) $this->page = 1;

        $this->nbElementParPage = 7;
        $this->nbProduitArray = $this->arrayNbProduit[0]['produitAmount'];

        $this->nbPage = ceil($this->nbProduitArray/$this->nbElementParPage);
        $this->debutPage = ($this->page-1)*$this->nbElementParPage;
        $this->current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    }
        
    
    public function showMessage($message)
    {
        $this->emit('showMessage', $message);
    }

    public function closeModal()
    {
         $this->emit('closeModal');
    }

    public function reinitialiserBarcode()
    {
        $this->reset('barcode');
        $this->reset('amount');
    }


    public function picking($code){
        DB::update("UPDATE cscart_order_details 
        SET `statusOrders`= 'picked' 
        WHERE product_code = '$code' 
        AND order_id = $this->order_id");
        $this->styleMessage ='alert-success';
        $this->message = "picked succefull";
        $this->showMessage($this->message);
       
    }

   
   
    public function submit(){
       
        $code_product = (string)$this->barcode;
        
        try{
           
            $this->produit = DB:: select("SELECT product_code,product_id,amount 
            FROM `cscart_order_details`  
            WHERE order_id = $this->order_id 
            and product_code = '$code_product' 
            and `statusOrders` IS NULL");
            
            if(!empty($this->produit)){
                $this->listProduct = json_decode(json_encode($this->produit), true);
                $this->item = $this->listProduct[0]['amount'];
                $this->product_id = $this->listProduct[0]['product_id'];
                
                if($this->amount == $this->item ){
                    DB::update("UPDATE cscart_order_details SET `statusOrders`= 'picked' WHERE product_id = $this->product_id AND order_id = $this->order_id");
                    $this->message = "picked succefull";
                    $this->styleMessage = 'alert-success';
                    $this->showMessage($this->message);
                    $this->reinitialiserBarcode();
                    $this->flag = 1; 
                    
                    //return redirect()->back();
                }else{
                    $this->message = "Failed, Verify the number of product ";
                    $this->styleMessage = 'alert-failed';
                    $this->showMessage($this->message);
                    $this->reinitialiserBarcode();
                }
               
            }else{
                $this->styleMessage = 'alert-failed';
                $this->message = "Failed, Verify the product code";
                $this->showMessage($this->message);
                $this->reinitialiserBarcode();

                //return redirect()->back();
            }
        }catch(Exception $e){
            $this->styleMessage = 'alert-failed';
           $this->message = "Failed, Verify the product code";
           $this->reinitialiserBarcode();
        }
     
    }

    public function finished(){
        return redirect('/orders');
    }
    public function render()
    {
       $this->variable();
       $this->listProduits = DB::select("SELECT *,
       (SELECT product 
       FROM `cscart_product_descriptions`  
       where product_id = d.product_id )as name,
            (SELECT localization 
                FROM `cscart_products` 
                where product_id = d.product_id 
            )as position 
        FROM `cscart_order_details` d 
        WHERE d.statusOrders IS NULL AND order_id = $this->order_id 
        limit $this->debutPage,$this->nbElementParPage");
    
       return view('livewire.produit-table',[
            'listProduits' =>$this->listProduits,
            'message' =>$this->message
        ])->layout('layouts.index');
    }
}
