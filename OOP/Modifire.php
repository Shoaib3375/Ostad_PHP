<?php
class Fund {
    private int $fund;
    public function __construct( $initialFund ) {
        $this->fund = $initialFund;
    }
    public function addFund( $money ) {
        $this->fund += $money;
        $this->deductFund( 0 );
    }
    public function deductFund( $money ) {
        $this->fund -= $money;
    }
    public function getTotal() {
        echo "Total fund is $this->fund\n";
    }
}
$ourFund = new Fund( 100 );
$ourFund->getTotal();
// $ourFund->fund = 55; // show an error
$ourFund->addFund( 10 );
$ourFund->getTotal();
$ourFund->deductFund( 20 );
$ourFund->getTotal();