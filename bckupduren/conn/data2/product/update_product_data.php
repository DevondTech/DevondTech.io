<?php

    if(isset($_GET['updateNamaProduct'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_produk = $_POST['id_barang_nama_produk'];
        $nama_produk = $_POST['PrintDetail_nama_produk'];
        $result = $db->query("select * from tb_produk where nama_produk='$nama_produk'");
        $rowCount=$result->num_rows;
        if($rowCount==0)
        {           
            $query = "UPDATE tb_produk SET nama_produk='$nama_produk' WHERE id_produk = $id_produk";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateDetail1Form'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_produk = $_POST['id_barang_nama_produk'];
        $detail1_produk = $_POST['PrintDetail_detail1_produk'];      
        $query = "UPDATE tb_produk SET detail1_produk='$detail1_produk' WHERE id_produk = $id_produk";
        $db->query($query);       
        echo "Success"; 
    }

    if(isset($_GET['updateDetail2Form'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_produk = $_POST['id_barang_nama_produk'];
        $detail2_produk = $_POST['PrintDetail_detail2_produk'];         
        $query = "UPDATE tb_produk SET detail2_produk='$detail2_produk' WHERE id_produk = $id_produk";
        $db->query($query);       
        echo "Success"; 
    }

    if(isset($_GET['updateStokForm'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_produk = $_POST['id_barang_nama_produk'];
        $jumlah_stok = $_POST['PrintDetail_jumlah_stok'];
        $query = "UPDATE tb_produk SET jumlah_stok='$jumlah_stok' WHERE id_produk = $id_produk";
        $db->query($query);       
        echo "Success"; 
    }

    if(isset($_GET['updateHargaForm'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_produk = $_POST['id_barang_nama_produk'];
        $harga = $_POST['PrintDetail_harga'];
        $query = "UPDATE tb_produk SET harga='$harga' WHERE id_produk = $id_produk";
        $db->query($query);       
        echo "Success"; 
    }

?>