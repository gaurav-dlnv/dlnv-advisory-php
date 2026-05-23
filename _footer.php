<?php debug_backtrace() || header("Location: 404");?>
<footer class="footer ">
<div class="container">
<div class="footer__wrapper">
<div class="footer__top footer__top--style1">
<div class="row gy-5 gx-4">
<div class="col-lg-4 col-md-6">
<div class="footer__about">
<a href="./" class="footer__about-logo"><img src="assets/images/logo/logo-white.png"
alt="Logo"></a>
<p class="footer__about-moto ">Dailytrades is a fintech portal, Run by  Protective Collar AI Technology Private Limited ,and we are building a trusted Stock market advisors marketplace in the country with the collaborations  of Multiple SEBI. Registered Researchers & advisors, by our technologies.  it’s an ecosystem between  brokers and other market participants for the traders & investment...
</p>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="footer__links">
<div class="footer__links-tittle">
<h6>Quick Link</h6>
</div>
<div class="footer__links-content">
<ul class="footer__linklist">
<li class="footer__linklist-item"><a href="./">Home</a></li>
<li class="footer__linklist-item"><a href="#about-us">About Us</a></li>
<li class="footer__linklist-item"><a href="#services">Services</a></li>
<li class="footer__linklist-item"><a href="#contact-us">Contact Us</a></li>
<li class="footer__linklist-item"><a href="privacy-policy">Privacy Policy</a></li>
<li class="footer__linklist-item"><a href="terms-and-conditions">Terms And Conditions</a></li>
</ul>
</div>
</div>

</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="footer__links">
<div class="footer__links-tittle">
<h6>Services</h6>
</div>
<div class="footer__links-content">
<ul class="footer__linklist">
<li class="footer__linklist-item"> <a href="#services">Stock Cash</a></li>
<li class="footer__linklist-item"> <a href="#services">Stock Option</a></li>
<li class="footer__linklist-item"> <a href="#services">Nifty & Bank Nifty Option</a></li>
<li class="footer__linklist-item"> <a href="#services">Sensex Option</a></li>
</ul>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6">
<div class="footer__links">
<div class="footer__links-tittle">
<h6>Contact Us</h6>
</div>
<div class="footer__links-content">
<ul class="footer__linklist">
<li class="footer__linklist-item"><i class="far fa-address-card"></i> <?= AppInfo()->AddressShort; ?></li>
<li class="footer__linklist-item"><i class="fas fa-phone phone"></i> <a href="tel:<?= AppInfo()->Phone1Code.AppInfo()->Phone1; ?>"><?= AppInfo()->Phone1Code." ".AppInfo()->Phone1show; ?></a></li>
<li class="footer__linklist-item"><i class="fa fa-envelope"></i> <a href="mailto:<?= AppInfo()->Email1; ?>"><?= AppInfo()->Email1; ?></a></li>
</ul>
</div>
</div>

</div>
</div>
</div>
<div class="footer__bottom">
<div class="footer__end">
<div class="footer__end-copyright d-block">
<p class=" mb-0"><strong>Disclaimer:</strong></p>
<p class=" mb-0 disclaimer">Attention Investors!

Risk Disclosures: Investment in the securities market is subject to market risk, we do not offer any guaranteed profit service. Before taking Expert recommendations & any services with advisory.dailytrades.in, the Client should read the disclaimer, terms and conditions, Disclosure and refund policy of the company.

We do not accept Research Analyst fee in any personal or Individual bank account, any payment made should be in favour of advisory.dailytrades.in. All trades will be exclusively on specific recommendations of advisory.dailytrades.in services no recommendation should be taken from anyone else by the client.

The risk of loss in trading & investment can be substantial and can even wipe out complete capital at stake. Investment in the securities market is subject to market risks, you are requested to carefully consider whether trading/investment is appropriate for you in light of your experience, objectives, financial resources and other relevant circumstances.

advisory.dailytrades.in Platform attempts to provide the best suitable research & trading ideas as per Technical and Derivative Analysis. One need to trade inputs as per personal risk appetite & with strict stop-losses. shareopinion.co.in and any of its employees, shall not be liable for losses, if any, incurred by you.

While every effort is made to ensure the accuracy and completeness of information contained, the company takes no responsibility and assumes no liability for any error/ omission or accuracy of the information. Recipients of this material should rely on their own judgments and conclusions from relevant sources before making any investment. The recommendations provided by the research analyst should not be considered to be or taken as an offer to sell or a solicitation to buy/sell any commodities/security. Price and value of the investments referred to in this material are subject to volatility. Past performance is not a guide for future performance. Certain transactions -futures, options and other derivatives as well as non-investment grade commodities are subjected to substantial risks and are not suitable for all investors. Before making an investment decision on the basis of this research, the reader needs to consider, with or without the assistance of a Research Analyst, whether the recommendation is appropriate in light of their particular investment needs, objectives and financial circumstances. There are risks involved in commodities trading. The price of equities, commodities, futures and options can and does fluctuate, and an individual equities, commodities, futures and options may even become valueless. International investors are reminded of the additional risks inherent in international investments, such as currency fluctuations and international stock market or economic conditions, which may adversely affect the value of the investment. Opinions expressed are subject to change without any notice. Neither advisory.dailytrades.in nor its associates accept any liability whatsoever for any direct, indirect, consequential or other loss arising from any use of this research and/or further communication in relation to this research.</p>
</div>
</div>
</div>
<div class="footer__bottom">
<div class="footer__end justify-content-center">
<div class="footer__end-copyright">
<p class=" mb-0">© 2025 All Rights Reserved By <a href="./"><?= AppInfo()->CopyRight; ?></a> </p>
</div>
</div>
</div>

</div>
</div>
</footer>
<button class="scroltop scrollToTop scrollToTop--style1"><i class="fa fa-angle-double-up"></i></button>
<?php
/*
<a href="https://wa.me/<?= AppInfo()->Phone1Code.AppInfo()->Phone1; ?>/?text=Hi,I have a Query" target="_blank" class="whatsappbtn"><i class="fab fa-whatsapp"></i></a>
*/
?>

<div class="two_buttons_footer">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary enqbtn mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
<a target="_blank" href="https://wa.me/<?= AppInfo()->Phone1Code.AppInfo()->Phone1; ?>/?text=Hi,I have a Query" class="wp btn btn-primary"> Whatsapp Now </a>
</div>

<div class="modal fade" id="popmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content bn-form">
<div class="form-block">
<div class="form-header">
<a href="javascript:void(0)" id="modalClose" class="close" data-dismiss="modal" aria-label="close">&times;</a>
</div>
<form id="popForm">
<h5 class="text-center mb-4">Request call back</h5>
<div class="row g-4">
<div class="col-6">
<div>
<input class="form-control" type="text" id="name" name="name" placeholder="Full Name" required>
</div>
</div>
<div class="col-6">
<div>
<input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="mobile" name="phone" placeholder="Mobile Number" required>
</div>
</div>
<div class="col-6">
<div>
<input class="form-control" type="email" id="email" name="email" placeholder="Email id" required>
</div>
</div>
<div class="col-6">
<div>
<select id="service" name="service" class="form-control" required>
<option value="" disabled selected>Service Interested</option>
<option value="Stock Cash">Stock Cash</option>
<option value="Stock Option">Stock Option</option>
<option value="Nifty & Bank Nifty Option">Nifty & Bank Nifty Option</option>
<option value="Sensex Option">Sensex Option</option>
</select>
</div>
</div>
<div class="col-6">
<div>
<select id="budget" name="budget" class="form-control" required>
<option value="" disabled selected>Investment Budget</option>
<option value="50K to 1 Lakh">50K to 1 Lakh</option>
<option value="1 Lakh to 5 Lakh">1 Lakh to 5 Lakh</option>
<option value="5 Lakh to 10 Lakh">5 Lakh to 10 Lakh</option>
<option value="Above 10 Lakh">Above 10 Lakh</option>
</select>
</div>
</div>
<div class="col-6">
<div>
<select id="state" name="state" class="form-control" required>
<option value="" disabled selected>Your State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Jammu & Kashmir">Jammu & Kashmir</option>
<option value="Ladakh">Ladakh</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
</select>
</div>
</div>
<div class="col-12">
<div>
<div class="capgroup">
<input class="form-control" type="text" placeholder="Enter Code" maxlength="6" name="enqcode" required="">
<span class="changecapcode"><i class="fas fa-redo-alt"></i></span>
<img alt="captcha" class="capimg" src="<?php echo $cap; ?>">
<span class="help-block error"><?php if(isset($code_err)) {echo $code_err;}?></span> 
</div>
</div>
</div>
<div class="col-md-12 form-group d-flex align-items-start">
<div class="form-group col-auto myCheck">
<input type="checkbox" name="myCheck" checked="" required="">
</div>
<div class="form-group col">
<p class="m-0"><a href="terms-and-conditions" target="_blank">I accept the website's privacy policy, terms, and disclaimer.*</a></p>
</div>
</div>

<div class="form-group m-0">
<div class="rmsg"></div>
</div>
</div>
<button type="submit" class="cg-btn cg-btn--border cg-btn--primary mt-4 d-block actionbtn">Submit Now</button>
</form>

</div>
</div>
</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/fslightbox.js"></script>
<script src="assets/js/purecounter_vanilla.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script type="text/javascript">
$(function () {
    $('#modalClose').on('click', function () {
        $('#popmodal').modal('hide');
    });
});
// setTimeout(function(){
// $(document).ready(function(){
// $("#popmodal").modal('show');
// });
// }, 6000);

$(".changecapcode").on("click",function(){
var url="_validation";
$.ajax({
  type:"POST",
  url:url,
  data:{"operation":"captchacode"},
  dataType:"json",
  beforeSend:function(){},
  error:function(jqXHR,textStatus,errorThrown){
    if(textStatus==="timeout"){$(".capmsg").html('Request Could Not Reach');}
    else{$(".capmsg").html('Error Occured Try Later');}
  }, 
  success:function(res){
    if(res.status){$('.capimg').attr('src',res.msg);}
  }
}); 
});
</script>