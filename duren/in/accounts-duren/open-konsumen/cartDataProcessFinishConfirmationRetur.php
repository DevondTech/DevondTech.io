<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">

	.imageStar-smallLeft-detailComment {
	    display: block;
	    margin-left: auto;
	    margin-right: auto;
	    width: 30px;
	    padding-right: 5px;
	    padding-left: 5px;
	}

	.image-small-detailComment {
	    float: left;
	}

	.textArea-textDataComment {
	    width: 100%;
	    height: 70px;
	    color: #000;
	    padding-left: 5px;
	    padding-right: 5px;
	    border: 1px solid #969191;
	    border-radius: 3px;
	    padding-bottom: 5px;
	    resize: none;
	}

	.card-textDataComment {
	    width: 20%;
	    float: left;
	}

	.card-inputDataComment {
	    width: 80%;
	    float: left;
	}

	.textDataComment {
	    text-align: start;
	    padding-right: 20px;
	    padding-top: 5px;
	}
	.w85{
		width: 85%;
	}

	.buttonComment-green {
	    font-size: 16px;
	    color: white;
	    background-color: #2d472c;
	    border-radius: 5px;
	    border: 1px solid #2d472c;
	    padding-bottom: 8px;
	    padding-top: 8px;
	    padding-right: 15px;
	    padding-left: 15px;
	}

	.buttonComment-red {
	    font-size: 16px;
	    color: white;
	    background-color: #f93434;
	    border-radius: 5px;
	    border: 1px solid #f93434;
	    padding-bottom: 8px;
	    padding-top: 8px;
	    padding-right: 15px;
	    padding-left: 15px;
	}

	.buttonComment-green:hover {
	    font-size: 16px;
	    color: #2d472c;
	    background-color: white;
	    border-radius: 5px;
	    border: 1px solid #2d472c;
	    padding-bottom: 8px;
	    padding-top: 8px;
	    padding-right: 15px;
	    padding-left: 15px;
	}

	.buttonComment-red:hover {
	    font-size: 16px;
	    color: #f93434;
	    background-color: white;
	    border-radius: 5px;
	    border: 1px solid #f93434;
	    padding-bottom: 8px;
	    padding-top: 8px;
	    padding-right: 15px;
	    padding-left: 15px;
	}

	.floatRightbutton{
		float: right;
	}

	.padRight15px{
		padding-right: 15px;
	}

	.imageStar-smallLeft-detailComment {
	    display: block;
	    margin-left: auto;
	    margin-right: auto;
	    width: 50px;
	    padding-right: 5px;
	    padding-left: 5px;
	}

	.w85{
		width: 85%;
		float: left;
	}

	.imageStar-smallLeft-detailComment{
		cursor: pointer;
	}

	.card-inputDataComment{
		padding-bottom: 20px;
		width: 80%;
		float: left;
	}

	.textbottomImgBukti{
		text-align: center;
		font-weight: bold;
	}

	.positionImgBukti{
		width: 80%;
		margin: auto;
		display: block;
		padding-bottom: 20px;
	}

	.positionTextCardInputRetur{
		padding-bottom: 500px;
		height: auto;
	}

	.cardButton{
		width: 300px;
		float: right;
		padding-bottom: 50px;
	}

	.widthImgLarge{
		width: 300px;
		margin-left: 157px;
	}

	.positionButtonActionRetur{
		margin-top: -310px;
	}

	.textData {
	    float: left;
	    text-align: initial;
	    padding-right: 20px;
	    padding-top: 5px;
	    padding-bottom: 5px;
	    width: auto;
	}

	@media(max-width: 650px){
		.imageStar-smallLeft-detailComment {
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    width: 40px;
		    padding-right: 5px;
		    padding-left: 5px;
		}

		.cardStar{
			float: left;
			padding-bottom: 15px;
		}

		.card-inputDataComment {
		    width: 100%;
		    float: left;
		}

		.card-textDataComment {
		    width: 100%;
		    float: left;
		}

		.widthImgLarge {
		    /* width: auto; */
		    padding-right: 15px;
		    padding-left: 15px;
		    margin-left: 0px;
		    width: 70%;
		    margin: auto;
		}

		.positionButtonActionRetur{
			margin-top: 0px;
		}

	}

</style>
</head>
<body>
<div id="ubahAlamat">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black">
            Kirim Pengajuan Retur
        </div>
    </div>
    <div class="padLeft20CartData">
        <div class=" col-divCartData" >
            <form method="POST" id="createDataReturForm">
            	<input type="hidden" name="d" id="d">
                <div class="Card-inputDataUser-paddingTopBottom20px">
                	<div class="card-inputDataComment" style="width: 100%;" >
                        <div class="widthImgLarge">
                        	<div class="positionImgBukti">
                        		<img id="dataFotoRetur" data-toggle="modal" data-target="#open-updateFoto" src="../images/icon png/tambah-gambar.png" width="100%" style="cursor: pointer;">
                        	</div>
                        	<div>
                        		<input type="hidden" name="foto_check" id="foto_check">
                        		<div class="textbottomImgBukti">Klik Upload / Ganti Foto Produk</div>
                        	</div>       
                        </div>
                    </div>
                    <div class="card-textDataComment">
                        <div class="textDataComment">
                            Alasan Pengembalian
                        </div>
                    </div>
                    <div class="card-inputDataComment" style="padding-bottom: 20px;">
                        <textarea name="dataPesanRetur" id="dataPesanRetur" style="background-color:white;color: black;padding-top: 4px;" class="textArea-textDataComment"></textarea>
                        <input type="hidden" name="this" id="this">
                    </div>
                    <div class="card-textDataComment">
                        <div class="textDataComment"></div>
                    </div>
                </div>
                <!-- <div class="Card-inputDataUser-paddingTopBottom20px">
                    <div class="card-textDataComment">
                        <div class="textDataComment"></div>
                    </div>
                    <div class="card-inputDataComment" style="width: 100%;" >
                        <div class="widthImgLarge">
                        	<div class="positionImgBukti">
                        		<img id="dataFotoRetur" data-toggle="modal" data-target="#open-updateFoto" src="../images/icon png/tambah-gambar.png" width="100%" style="cursor: pointer;">
                        	</div>
                        	<div>
                        		<input type="hidden" name="foto_check" id="foto_check">
                        		<div class="textbottomImgBukti">Klik Untuk Upload / Ganti Foto Produk</div>
                        	</div>       
                        </div>
                    </div>
                    <div class="card-textDataComment" >
                        <div class="textDataComment"></div>
                    </div>
                </div> -->

                <div class=" cardButton">
                    <div class="floatRightbutton padRight15px">
                        <button class="buttonComment-green" type="button" id="buttonReturSave">KIRIM</button>
                    </div>
                    <div class="floatRightbutton padRight15px">
                        <button class="buttonComment-red" type="button" id="cancelButtonRetur">BATAL</button>
                    </div>
                </div>       
            </form>
        </div>
    </div>
</div>
<div id="open-updateFoto" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Gambar Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" action="" enctype="multipart/form-data" id="myform">
                	<input type="hidden" name="e" id="e">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Barang Yang Akan Diretur
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnUpdateFoto"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/pages/updateDataFotoRetur.js?v=1.3.5"></script>
<script type="text/javascript" src="../js/pages/konsumen/actionCartDataProcessBeingShippedRetur.js?v=1.2.1"></script>
</body>
</html>