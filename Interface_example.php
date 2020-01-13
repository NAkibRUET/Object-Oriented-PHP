<?php
/* Interface is a blue print. In a interface we set some rules. The classes that implements the interface
has to follow those rules. 
If the below classes like Paypal, Visa etc are implemented by different people in different ways it 
would create problems in payment method. That is why we declared an Interface and set some rules.
So, whoever implement those classes will follow the set of rules of the Interface.
*/
    interface paymentInterface{
        public function payNow();
    }

    class Paypal implements paymentInterface{
        public function payNow(){
            
        }
    }
    
    class Visa implements paymentInterface{
        public function payNow(){

        }
    }
    
    class Cash implements paymentInterface{
        public function payNow(){

        }
    }
    class BuyProduct{
        public function pay(paymentInterface $paymentType){
            $paymentType->payNow();
        }
    }

    $paymentType = new Paypal(); // It could be any of the payment methods
    $buyProduct = new BuyProduct();
    $buyProduct->pay();

?>