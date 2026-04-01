<?php

require_once "Pembayaran.php";
require_once "cetak.php";

class TransferBank extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        return "Pembayaran melalui Transfer Bank";
    }

    public function cetakStruk() {

        return "
        Metode: Transfer Bank <br>
        Total Bayar: Rp " . $this->totalBayar() . "
        ";
    }
}

?>