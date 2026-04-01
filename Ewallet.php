<?php

require_once "Pembayaran.php";
require_once "cetak.php";

class Ewallet extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        return "Pembayaran melalui E-Wallet";
    }

    public function cetakStruk() {

        return "
        Metode: E-Wallet <br>
        Total Bayar: Rp " . $this->totalBayar() . "
        ";
    }
}

?>