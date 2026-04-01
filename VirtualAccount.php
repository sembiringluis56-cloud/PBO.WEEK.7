<?php

require_once "Pembayaran.php";
require_once "cetak.php";

class VirtualAccount extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        return "Pembayaran melalui Virtual Account";
    }

    public function cetakStruk() {

        return "
        Metode: Virtual Account <br>
        Total Bayar: Rp " . $this->totalBayar() . "
        ";
    }
}

?>