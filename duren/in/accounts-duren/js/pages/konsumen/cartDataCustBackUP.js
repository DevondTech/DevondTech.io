            const cartBarangData = $('#cartBarangData').;
                cartBarangData.innerHTML += `
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="m30">
                                <div class="">
                                    <div class="TitleTextBarang">
                                        Nama Barang
                                    </div>
                                </div>
                                <div class="cardBarang">
                                    <img src="../../../images/detail-bawor.png" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="positionCardDetailOrder">
                                <div class="">
                                    <div class="titleDetailOrder TitleTextBarang">
                                    Detail Pemesanan
                                    </div>
                                    <div class="positionTextDetailOrder">
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData">
                                            Jenis Produk  
                                        </div>
                                        <div class="textMid floatLeftCartData">
                                            :  
                                        </div>
                                        <div class="marginLeft10 floatLeftCartData">
                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <input type="text" name="" value="Durian" style="color: #737373;" id="jenis_produk" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divPrentTypeButtonPlusMinus positionTextDetailOrder">
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                            Jumlah 
                                        </div>
                                        <div class="textMid floatLeftCartData">
                                            :  
                                        </div>
                                        <div class="marginLeft10 floatLeftCartData">

                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnPlus" >
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonPlusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/plus.png" class="iconDivTypeButtonPlusMinus">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="floatLeftItemData">
                                                    <input type="number" name="" value="1" id="jumlah_pemesanan" class="inputTextPlusMinus input-textDataUser-false">
                                                </div>
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnMinus">
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonMinusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/minus.png" class="iconDivTypeButtonPlusMinus">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="positionTextDetailOrder">
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                            Harga Satuan 
                                        </div>
                                        <div class="textMid floatLeftCartData">
                                            :  
                                        </div>
                                        <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                            <!-- <div class="textSpanValuePrintOutTextDetailOrder floatLeftCartData" style="color: #737373"> Rp</div> -->
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="harga" value="1230000" style="color: #737373;" id="harga" class="input-textDataUser-false" disabled>
                                                <input type="text" name="harga_tampil" value="1230000" style="color: #737373;" id="harga_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardBorderBottomGrey" style="width: 80%"></div>
                                    <div style="margin-top: 10px;">
                                        <div class="positionTextDetailOrder">
                                            <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                Total Harga 
                                            </div>
                                            <div class="textMid floatLeftCartData">
                                                :  
                                            </div>
                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <!-- <div class="textSpanValuePrintOutTextDetailOrder floatLeftCartData" style="color: #737373"> Rp</div> -->
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <input type="text" name="total_harga_pemesanan_tampil" value="" style="color: #737373;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
                                                    <input type="hidden" name="total_harga_pemesanan" value="" style="color: #737373;" id="total_harga_pemesanan_hidden" class="input-textDataUser-false" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`