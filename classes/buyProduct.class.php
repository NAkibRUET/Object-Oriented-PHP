<?php
    include 'abstractClass.class.php';
    class buyProduct extends abstractClass{
        public function getPayment(){
            return $this->VisaPayment();
        }
    }



















?>