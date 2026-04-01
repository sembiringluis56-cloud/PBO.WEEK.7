<?php

abstract class Pembayaran {

    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    // Method abstract
    abstract public function prosesPembayaran();

    // Diskon 10%
    public function hitungDiskon() {
        return $this->jumlah * 0.10;
    }

    // Pajak 11%
    public function hitungPajak() {
        return $this->jumlah * 0.11;
    }

    // Total akhir
    public function totalBayar() {

        $diskon = $this->hitungDiskon();
        $pajak = $this->hitungPajak();

        return $this->jumlah - $diskon + $pajak;
    }
}

?>