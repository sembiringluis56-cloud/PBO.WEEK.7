<?php

require_once "Pembayaran.php";
require_once "cetak.php";

class COD extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        return "Pembayaran melalui COD";
    }

    public function cetakStruk() {

        return "
        Metode: COD <br>
        Total Bayar: Rp " . $this->totalBayar() . "
        ";
    }
}

?>