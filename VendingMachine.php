<?php

interface VendingMachine{
    public function selectItemAndGetPrice();
    public function insertCoin();
    public function refund();
    public function collectItemAndChange();
    public function reset();
}

?>