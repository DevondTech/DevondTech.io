<html>
<html lang="en">
    <head>
        <title>Tes LinkAja WCO</title>
    </head>
    <body>
        <form action="request.php" method="post">
        <p><label>Transaksi ID</label></p>
        <p><input type="text" name="trxId"></p>
        <p><label>Item 1</label></p>
        <p><input type="text" name="item1" placeholder="Nama Item">
            <input type="text" name="harga1" placeholder="Harga">
            <input type="text" name="qty1" placeholder="Qty">
        </p>
        <p><label>No. HP (Id LinkAja)</label></p>
        <p><input type="text" name="msisdn" placeholder="No. HP/Id. LinkAja"></p>
        
		<p><button type="submit" class="btn btn-success btn-block" name="submit2">Kirim Request</button></p>
        </form>
    </body>
</html>

    