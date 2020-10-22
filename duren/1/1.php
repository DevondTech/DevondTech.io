SELECT
id_notifikasi,
pesan_notifikasi,
id_status_notifikasi,
status_notifikasi,
id_status_baca,
status_baca,
id_user_baca,
user_baca
FROM
view_data_notifikasi



SELECT
tb_notifikasi.id_notifikasi, AI

tb_notifikasi.pesan_notifikasi,
tb_notifikasi.id_status_notifikasi,
tb_notifikasi.id_status_baca,
tb_notifikasi.id_user_baca,
FROM
tb_notifikasi


$pesan_notifikasi ='Pemesanan Barang Atas Nama '.$nama_lengkap.' Dibuat. Dengan Jumlah Pemesanan '.$jumlah_pemesanan.' Pack';
        $id_status_notifikasi = 1;
        $id_status_baca = 1;
        $id_user_baca = 2;

$queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
                $db->query($queryNotif); 