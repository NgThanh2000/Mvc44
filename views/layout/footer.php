<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/css/footer.css">
</head>
<body>
<div class="footer">
    <div class="footer_background">
         <div class="container footer_in">             
             <div class="row">                 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer_in-wapper">            
                        <div class="wapper_contact">
                            <h5>CONTACT US</h5>
                            <div class="wapper_contact-content">
                                <a href="#">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Lorem Ipsum has been the indus <br> try's standard </p>
                                </a>
    
                                <a href="#">
                                    <i class="far fa-envelope"></i></i>
                                    <p>Contact@medic.com</p>
                                </a>
    
                                <a href="#">
                                    <i class="fas fa-mobile-alt"></i>
                                    <p>+84 (1) 234 567 891 </p>
                                </a>
                            </div>
                            <div class="wapper_contact-social">
                               <a href="#"><i class="fab fa-facebook-f"></i></a> 
                               <a href="#"><i class="fab fa-twitter"></i></a> 
                               <a href="#"><i class="fab fa-google-plus-g"></i></a> 
                               <a href="#"><i class="fab fa-instagram"></i></a> 
                            </div>
                        </div>
    
                        <div class="wapper3same company">
                            <h5>COMPANY</h5>
                            <ul>
                            <a href="#"><li>About Us</li></a> 
                            <a href="#"><li>Team Member</li></a> 
                            <a href="#"><li>Carrer</li></a> 
                            <a href="#"> <li>Contact</li></a>
                            <a href="#"><li>Affilate</li></a> 
                            </ul>
                        </div>
    
                        <div class="wapper3same categories">
                            <h5>CATEGORIES</h5>
                            <ul>
                                <a href="#"><li>Home Medicine</li></a>
                                <a href="#"><li>Baby & Child</li></a>
                                <a href="#"><li>Diet & Nutrition</li></a>
                                <a href="#"><li>Beauty</li></a>
                                <a href="#"><li>Fitness & Vitamins</li></a>
                            </ul>
                        </div>
    
                        <div class="wapper3same quicklinks">
                            <h5>QUICK LINKS</h5>
                            <ul>
                                <a href="#"><li> My Account</li></a>
                                <a href="#"><li>Store Location</li></a>
                                <a href="#"><li>Orders Tracking</li></a>
                                <a href="#"><li>FAQs</li></a>
                        </div>
                 </div>           
             </div> 
        </div> 
    </div>
    <div class="container footercopyright">
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footercopyright_in">
               
                    <span >@2018 Design by <p class="chuxanh">Creative Wp</p> . All Rights Reserved. </span>
<!--                 
                <img src="image/footer-payment.png" alt="payment"> -->
            </div>
        </div>
    </div>
</div>
</body>
<style>
    .footer{
    width: 100%;height: 100%;
}
.footer a{
    text-decoration: none;
    color: #8f8f8f;
}
.footer_background{
    width: 100%;
    height: 100%;
    background-color: #f2f2f2;
}
.footer_in{
    width: 75%;height: 100%;
    margin: auto;
}
.footer_in .footer_in-wapper{
    width: 100%;height: 100%;
    padding: 3.625rem 0rem 3.625rem;
    display: flex;
    justify-content: space-between;
    font-size: 13px;
}
.footer_in h5{
    font-size: 18px;
    color: #000000;
    font-weight: 600;
     margin-bottom: 1rem;
}
.wapper_contact-content{
    margin-bottom: 2rem;
}
.wapper_contact-content a{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    color: #8f8f8f;
    margin-bottom: 1rem;
}
.wapper_contact-content a:first-child i{
  margin-top: .4rem;
}
.wapper_contact-content a i{
    color: #0ca8c9;
    padding-right:2rem ;
    margin:auto 0;
}
.wapper_contact-content p{
    margin-bottom: 0px;
    font-weight: 500;
}
.wapper_contact-content p:hover {
    color: #0ca8c9;
}
.wapper_contact-social{
    max-width: 50%;
    display: flex;
    justify-content: space-between; 
}
.wapper_contact-social i{
     color: #8f8f8f;
     font-size: 16px;
}
.wapper_contact-social i:hover{
    color: #0ca8c9;
}
.wapper3same{
    width: 10rem;
    height: 100%;
}
.wapper3same li{
    list-style: none;
    margin-bottom: 1rem;
}
.wapper3same a:hover{ 
    color: #0ca8c9;
}
.footercopyright{
    /* cursor: default; */
    height: 4.375rem;
}
.footercopyright_in{
    width: 100%;height: 100%;
    padding: 16px 0px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
}
.footercopyright_in span{
    width: 300px;
    height: 1.125rem;
    font-size: 12px;
    color: #8f8f8f;
    font-weight: 500;
}
.footercopyright_in p{
    font-size: 12px;
    display: inline-block;
}
.footercopyright_in img{
    width: 23.125rem;height: 1.5625rem;
    float:right;
}


</style>
</html>