<?php
namespace App;

class Cart{
    public $items=null, $totalQty=0,$totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item,$id)
    {
        # code...
        $storedItem= ['qty' => 0,'price'=>0,'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice+=$item->price;
    }

    public function deleteOne($id)
    {
        # code...
        $storedItem= ['qty' => 0,'price'=>0,'item'=>null];

        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
                $storedItem['qty']--;
            }
        }
        $this->items[$id]=$storedItem;
        $this->totalQty--;
        if($this->items[$id]['qty']<1){
            unset($this->items[$id]);
        }
    }

    public function deleteAll($id)
    {
        # code...
        $storedItem= ['qty' => 0,'price'=>0,'item'=>null];

        if($this->items){
            if(array_key_exists($id,$this->items)){
                unset($this->items[$id]);
            }
        }

    }
}
