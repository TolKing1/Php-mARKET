<h1>OOP</h1>

<?php 
    // class Car {
    //     public $model;
    //     public $color;

    //     public function __construct($turi,$rangi){
    //         $this->model = $turi;
    //         $this->color = $rangi;
    //     }
    //     public function drive(){
    //         echo "$this->color $this->model yo'lda"." ";
    //     }
    //     // public function break(){
    //     //     echo "$this->color rangda";
    //     // }
    // }
    // $car1 = new Car("Malibu","Qizil");
    // echo $car1->drive();
    // $car2 = new Car("Cobalt","Sariq");
    // echo $car2->drive();

    // echo "<pre>"; print_r($car1);echo "</pre>";
    // echo "<pre>"; print_r($car2);echo "</pre>";

    class Card{
        const br = "<br>";
        public $price;
        public $name;
        public $photo;
        public $dir = "image/";

        public function print_card(){
            echo "<div style='width:300px;float:left;margin-right:10px;'>";
            echo "<h2 size='10px'>{$this->name}</h2>".self::br;
            echo "<img style='width:100%;' src='{$this->dir}{$this->photo}'>";
            echo "<span>";
            echo $this->price;
            echo "</span>";
            echo "</span>";
        }
    }
    $card1 = new Card;
    $card1->name = "dakimaru";
    $card1->price = 100.00;
    $card1->photo = "spinner.jpeg";
    $card1->print_card();

    $card2 = new Card;
    $card2->name = "Cola";
    $card2->price = 100.00;
    $card2->photo = "spinner.jpeg";
    $card2->print_card();

    
?>
