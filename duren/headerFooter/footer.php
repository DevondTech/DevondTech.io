    <div id="footer">
      <div class="div-footer-content">
        <div class="paddingTopBootom35 container">
          <div class="fotterCol row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                ABOUT US
              </div>
              <div class="paddingTopBottom10">
                <b>Address:</b>
                <div id="alamatOffice"></div>
              </div>
              <div class="paddingTopBottom10">
                <div><b>Phone</b></div>
                <a id="linkNumber1">
                  <div class="aLink" id="number1Office"></div>
                </a>
                <a id="linkNumber2">
                  <div class="aLink" id="number2Office"></div>
                </a>
              </div>
              <div class="paddingTopBottom10">
                <b>Any Question?</b>
                <a  id="linkEmail">
                  <div id="emailOffice" class="aLink"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                LINK
              </div>
              <div>
                <div class="padding-linkFooter">
                  <a href="../" class="a-colorWhite">Home</a>
                </div>
                <div class="padding-linkFooter" id="aboutUserUmumFooter">
                  <a href="../aboutUserUmum" class="a-colorWhite">About Us</a>
                </div>
                <div class="padding-linkFooter" id="aboutCustFooter">
                  <a href="../about" class="a-colorWhite">About Us</a>
                </div>
                <div class="padding-linkFooter">
                  <a href="../testimoni" class="a-colorWhite">Testimoni</a>
                </div>
                <div class="padding-linkFooter" id="loginFooter">
                  <a href="../login" class="a-colorWhite">Login</a>
                </div>
                <div class="padding-linkFooter" id="logoutFooter">
                  <a href="../conn/logout.php" class="a-colorWhite">Logout</a>
                </div>
              </div>
            </div>
            <div class="padF20px col-lg-6 col-md-12 col-sm-12">
              <?php echo $alert; ?>
              <div class="titleFooter paddingTopBottom10">
                CONTACT US
              </div>
              <div>
                <form class="contact" onsubmit="return validateForm()" name="Form" method="post">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="textMailSend">Full Name</div>
                      <div><input type="text" class="form-control" name="name" id="name"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="textMailSend">Phone Number</div>
                      <div><input type="number" class="form-control" name="phone" id="phone"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="textMailSend">E-mail</div>
                      <div><input type="email" class="form-control" name="email" id="email"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="textMailSend">Messages</div>
                      <div><textarea  class="form-control" name="textMail" id="textMail"></textarea></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="positionButtonYellowSend">
                        <button type="submit" name="submit" class="buttonYellowSend" value="Send">Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>