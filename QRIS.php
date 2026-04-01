<?php

require_once "Pembayaran.php";
require_once "cetak.php";

class QRIS extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        return "Pembayaran melalui QRIS";
    }

    public function cetakStruk() {

        return "
        Metode: QRIS <br>
        Total Bayar: Rp " . $this->totalBayar() . "
        ";
    }
}

?>