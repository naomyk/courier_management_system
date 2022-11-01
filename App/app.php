<?php
// namespace App;

class Weight{
    private $weight;


    public function setWeight(int $weight ){
        $this->$weight=$weight;
    }

    public function setMinWeight($weight){
        if($weight < 100)
        {
            return "Underweight";
        }
        else{
            return "Overweight";
        }
    }

    public function checkWeight()
   {
    return $this->setMinWeight($this->weight);
   }
}