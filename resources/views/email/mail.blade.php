<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <title>Mail</title>

<style>
.background_container{
    margin: 0 25%;
    padding: 2.5%;
    font-family: 'Open Sans', sans-serif;
    background-image: url('https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/pinbg.jpg');
    background-size: 100%;
}
.button {
    background-color: rgb(255, 102, 102);
    border: none;
    color: white;
    padding: 7px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    font-family: 'Open Sans', sans-serif;
    border-radius: 4px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.center{
    text-align: center;
}
.content_container{
    background: white;
    margin: -2% 25%;
    padding: 0 3% 2% 3%;
    font-family: 'Open Sans', sans-serif;
}
.logo_font {
    color: white;
    font-size: 18px;
    margin-left: 7%;
    margin-top: -1.5%;
    margin-bottom: -0.5%;
}
h2{
}
p{
    font-size: 14px;
}
.pic_width{
    width: 50%;
}
body{
    background: ghostwhite;
}
/* footer */
.footerdot a {
    text-decoration: none;
}
.social-icons-dark-hover:hover {
    
    -webkit-transition: color 500ms;
    -moz-transition: color 500ms;
    -o-transition: color 500ms;
    transition: color 500ms;
    color: rgba(255, 255, 255, 0.70);
}

.social-icons-dark-hover {
    color: #A9A9A9;
}

.mfooter {
    margin: 0 25px;
}

.btn-footer {
    border-radius: 45px;
    margin-bottom: 1px;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 2px;
    font-size: 10px;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    display: inline-block;
    position: relative;
    top: -40px;
    padding: 12px 26px;
    background-color: #FFF;
    border-color: #696969;
}
.no-margin {
    margin: 0 !important;
}
.icon-contact{
    font-size: 30px;
}
.terms{
    color: #A9A9A9;
}
.text-small{
    font-family:'Open Sans';
    font-size: 16px;
    color: 	#A39D9E;
}


@media screen and (max-width:800px){
.background_container{
    margin: 0 0%;
    padding: 4%;
}
.button{
    padding: 9px 40px;
    font-size: 14px;
}
.button:hover span {
  padding-right: 35px;
}
.content_container{
    margin: -4% 0% 0% 0%;
}
.footer_width{
    width: 0%;
}
h2{
    margin: 5% 0;
    font-size: 22px;
}
.icon-contact{
    font-size: 20px;
}
.mfooter {
    margin: 0 20px;
}
.footer_font{
    color:ghostwhite;
    font-size: 10px
}
.logo_font{
    font-size: 13px;
    margin-left: 7%;
    margin-top: -2.6%;
    margin-bottom: -0.5%;
}
p{
    font-size: 14px;
}
.pic_width{
    width: 65%;
}
.text-small{
        font-size: 10px;
    }
}
.terms{
    font-size: 10px;
}

</style>

</head>
<body>
    <div style="margin-top:3%"></div>
    <div class="background_container">
        <a href="https://cryptovationx.io" target="_blank"><img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/fulltoplogo.png" alt="W3Schools.com" class="pic_width"></a>
        <div class="logo_font">"The Best Friend for Crypto Investors"</div>
    </div>
    <div class="content_container">
        <div class="row">
            <h2 style="padding-top:3.5%">CXA Airdrop Deposit</h2>
            <hr>
            <p>Dear ${Contacts.First Name} ${Contacts.Last Name},</p>            
            <p>Congratulations! Your KYC verification has been successful. We deposited your CXA tokens to your account already. Please click the link below to access to your account.</p>
            <div class="row center"><a href="#" class="button"><span>Login</span></a></div>
            <p>If you have any question about logging in, please do not hesitate to contact us. Thank you again for your great support.</p>
            <p>Best regards, <br>
                 Pondet Ananchai <br>
                    CEO, CryptovationX  <br>
                    </p>
            <div class="footer_font">
                

            </div>
        </div>
           <!-- Begin Footer -->
<footer style="background-color: transparent">

        <div class="row" style="padding-top:4%">
            <div class="col-sm-12 col-sm-offset-2 center icon-contact footerdot">
                <!-- <span class="icon-handle-streamline-vector logo"></span>
    <h2 class="theme-title">Particles
        <span class="theme-title-smaller">Theme</span>
    </h2> -->  
                <a href="https://twitter.com/CryptovationX?lang=en" target="_blank">
                    <span class="fab fa-twitter social-icons-dark-hover  m50 mfooter footer_width"></span>
                </a>

                <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
                <i class="fab fa-telegram-plane social-icons-dark-hover  m50 mfooter footer_width"></i>
                </a>

                <a href="https://github.com/cryptovationx" target="_blank">
                    <i class="fab fa-github social-icons-dark-hover  m50 mfooter footer_width"></i>
                </a>
                <!-- <a href="https://cryptovationx.slack.com/open">
        <i class="fab fa-slack-hash social-icons-dark-hover  m50 mfooter"></i>
    </a> -->

                <!-- <a>
        <i class="fab fa-google-plus social-icons-dark-hover  m50 mfooter"></i>
    </a> -->
                <a href="https://medium.com/cryptovationx" target="_blank">
                    <i class="fab fa-medium-m social-icons-dark-hover  m50 mfooter footer_width"></i>
                </a>
                <a href="https://www.facebook.com/cryptovation.co/" target="_blank">
                    <span class="fab fa-facebook-f social-icons-dark-hover  m50 mfooter footer_width"></span>
                </a>
                <!-- <a href="#" target="_blank">
                    <span class="fab fa-instagram social-icons-dark-hover  m50 mfooter"></span>
                </a> -->
                <!-- <a>
            <i class="fa-reddit-alien social-icons-dark-hover  m50 mfooter"></i>
    </a>
    <a>
            <i class="fa-bitcoin social-icons-dark-hover  m50 mfooter"></i>
    </a> -->
                <!-- <a>
        <i class="fab fa-linkedin-in social-icons-dark-hover mr50 m50 mfooter"></i>
    </a> -->
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-sm-12 col-sm-offset-2 text-small center">
                <p class="no-margin terms copyright">Vistra Corporate Services Centre, Wickhams Cay II, Road Town, Tortola, VG1110, British Virgin Islands <br>
                     x@cryptovationx.io | CryptovationX.io</p>
                <br><br>
            </div>
            <!-- /.column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>
<!-- /.footer -->
    </div>
 
</body>
</html>