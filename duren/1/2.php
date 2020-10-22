session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){


}
else{
    header('Location: https://kingfruit.co.id/');
}



session_start();
$id_user = $_SESSION['id_user'];
if($id_user!=''){