<?php
    abstract class abstractClass{
        public function VisaPayment(){
            return "Perform a Payment";
        }

        abstract public function getPayment(); 
        /* This Abstract method is working like an Interface. A function extending this abstract class
        have to use the getPayment() method in it. 
        This abstract method is like a *Rule* in Interface.
        */
    }
?>