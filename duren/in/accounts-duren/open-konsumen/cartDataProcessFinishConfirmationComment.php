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

	@media(max-width: 650px){
		.imageStar-smallLeft-detailComment {
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    width: 40px;
		    padding-right: 5px;
		    padding-left: 5px;
		}

		.cardButton{
			width: 100%;
			display: inline-block;
			margin-top: 15px;
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
	}

	@media(max-width: 504px){
		.padTPhone{
			padding-top: 40px;
		}
	}

</style>
</head>
<body>
<div id="ubahAlamat">
    <div class="padTPhone card-textTitleLarge-Black">
        <div class="textTitleLarge-Black">
            Kirim Review Anda
        </div>
    </div>
    <div class="padLeft20CartData">
        <div class="col-divCartData">
            <form method="POST" id="createDataCommentProductForm">
                <div class="Card-inputDataUser-paddingTopBottom20px">
                    <div class="card-textDataComment">
                        <div class="textDataComment">
                            Review Anda
                            <input type="hidden" name="star" id="star" value="5">
                            <input type="hidden" name="id_produk" id="id_produk" >
                            <input type="hidden" name="id_pemesanan" id="id_pemesanan" >
                        </div>
                    </div>
                    <div class="card-inputDataComment" style="padding-bottom: 20px;">
                        <textarea name="DataInputComment" id="DataInputComment" style="background-color:white;color: black;padding-top: 4px;" class="textArea-textDataComment"></textarea>
                    </div>
                    <div class="card-textDataComment">
                        <div class="textDataComment">
                           
                        </div>
                    </div>
                </div>
                <div class="cardStar">
                   <div class="image-small-detailComment">
                      <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star1">
                    </div>
                    <div class="image-small-detailComment">
                      <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star2">
                    </div>
                    <div class="image-small-detailComment">
                      <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star3">
                    </div>
                    <div class="image-small-detailComment">
                      <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star4">
                    </div>
                    <div class="image-small-detailComment">
                      <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star5">
                    </div>
                </div> 
                <div class="cardButton">
                    <div class="floatRightbutton ">
                        <button class="buttonComment-green" type="button" id="buttonCommentSave">KIRIM</button>
                    </div>
                </div>       
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/pages/konsumen/cartDataKonsumenCartCommentProduct.js?v=1.2.1"></script>
<script type="text/javascript" src="../js/pages/konsumen/createDataCommentProduct.js?v=1.2.1"></script>
</body>
</html>