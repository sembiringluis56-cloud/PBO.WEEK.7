<?php

require_once "TransferBank.php";
require_once "Ewallet.php";
require_once "QRIS.php";
require_once "COD.php";
require_once "VirtualAccount.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pembayaran</title>
</head>
<body>

<h2>Sistem Pembayaran Online</h2>

<form method="POST">

Jumlah Bayar:
<input type="number" name="jumlah" required>

<br><br>

Metode Pembayaran:

<select name="metode">

<option value="transfer">Transfer Bank</option>
<option value="ewallet">E-Wallet</option>
<option value="qris">QRIS</option>
<option value="cod">COD</option>
<option value="va">Virtual Account</option>

</select>

<br><br>

<button type="submit">Bayar</button>

</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jumlah = $_POST["jumlah"];
    $metode = $_POST["metode"];

    switch ($metode) {

        case "transfer":
            $bayar = new TransferBank($jumlah);
            break;

        case "ewallet":
            $bayar = new Ewallet($jumlah);
            break;

        case "qris":
            $bayar = new QRIS($jumlah);
            break;

        case "cod":
            $bayar = new COD($jumlah);
            break;

        case "va":
            $bayar = new VirtualAccount($jumlah);
            break;
    }

    echo $bayar->prosesPembayaran();
    echo "<br>";
    echo $bayar->cetakStruk();
}

?>

</body>
</html>