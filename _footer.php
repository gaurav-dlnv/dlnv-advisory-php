<?php debug_backtrace() || header("Location: 404");?>
<footer class="bg-slate-900 text-slate-200">
<div class="container">
<div class="padding grid md:grid-cols-4 gap-4 text-sm">
<div>
<div class="flex items-center gap-2">
<div class="leading-tight">
<img src="assets/images/logo/logo-white.png" alt="logo">
</div>
</div>
<p class="mt-4 text-slate-400 text-[13px]">
A technology platform connecting subscribers with SEBI Registered IAs / RAs. We are not a SEBI intermediary and do not provide advice.
</p>
</div>

<div>
<div class="font-semibold text-white">Quick Links</div>
<p class="mt-2 text-slate-400 text-[13px]"><a href="./">Home</a></p>
<p class="mt-2 text-slate-400 text-[13px]"><a href="#about">About</a></p>
<p class="mt-2 text-slate-400 text-[13px]"><a href="#services">Services</a></p>
<p class="mt-2 text-slate-400 text-[13px]"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal">Contact Us</a></p>
</div>

<div>
<div class="font-semibold text-white">Platform Officers</div>
<ul class="mt-3 space-y-2 text-[13px] text-slate-400">
<li><strong class="text-slate-200">Compliance Officer:</strong> <a href="mailto:<?= AppInfo()->Email3;?>"> <?= AppInfo()->Email3;?></a></li>
<li><strong class="text-slate-200">Human Resources Officer:</strong> <a href="mailto:<?= AppInfo()->Email4;?>"> <?= AppInfo()->Email4;?></a></li>
<li><strong class="text-slate-200">Principle Officer:</strong> <a href="mailto:<?= AppInfo()->Email5;?>"> <?= AppInfo()->Email5;?></a></li>
</ul>
</div>

<div>
<div class="font-semibold text-white">Legal &amp; Policies</div>
<ul class="mt-3 space-y-1.5 text-[13px]">
<li><a class="hover:text-white" href="privacy-policy">Privacy Policy</a></li>
<li><a class="hover:text-white" href="terms-and-conditions">Terms And Conditions</a></li>
<li><a class="hover:text-white" href="refund-policy">Refund Policy</a></li>
<li><a class="hover:text-white" href="platform-disclosures">Platform Disclosures</a></li>
<li><a class="hover:text-white" href="anti-fraud-notice">Anti-Fraud Notice</a></li>
</ul>
</div>
</div>

<div class="border-t border-slate-800">
<div class="padding text-[12px] text-slate-400 space-y-3">
<p>
<strong class="text-slate-200">Platform Disclaimer:</strong> DailyTrades is a software platform. We are not a SEBI Registered IA / RA / Broker or any SEBI intermediary, and we do not provide investment advice, research or recommendations. All research is independently published by SEBI Registered IAs / RAs onboarded on the platform, who are solely responsible for the content they publish.
</p>
<p>
<strong class="text-slate-200">Standard Warning:</strong> Investments in securities market are subject to market risks. Read all the related documents carefully before investing. Registration granted by SEBI, membership of BASL and certification from NISM in no way guarantee performance of the IA/RA or provide any assurance of returns to investors.
</p>
<p>
<strong class="text-slate-200">App-only delivery:</strong> Research and trades are visible only inside the DailyTrades app, post login. The platform does not deliver research via SMS, WhatsApp, Telegram or social media.
</p>
<p>
<strong class="text-slate-200">Beware of fraud:</strong> SEBI does not provide assured returns. Any person promising guaranteed profits, doubling money, or sure-shot tips is committing fraud. Always independently verify the SEBI registration of any IA / RA on <a class="text-blue-300 hover:underline" href="https://www.sebi.gov.in" target="_blank" rel="noopener">sebi.gov.in</a>.
</p>
<p>
<strong class="text-slate-200">Grievance Escalation:</strong> Platform issues → <?= AppInfo()->Email2;?>. Research / recommendation issues → concerned IA/RA, then SEBI SCORES (<a class="text-blue-300 hover:underline" href="https://scores.sebi.gov.in" target="_blank" rel="noopener">scores.sebi.gov.in</a>), then SEBI ODR (<a class="text-blue-300 hover:underline" href="https://smartodr.in" target="_blank" rel="noopener">smartodr.in</a>).
</p>
<div class="flex flex-wrap items-center justify-center gap-2 pt-2">
<div>© <span class="num">2026</span> <?= Appinfo()->CopyRight;?>. All rights reserved.</div>
</div>
</div>
</div>
</div>
</footer>
<button class="scroltop scrollToTop scrollToTop--style1"><i class="fa fa-angle-double-up"></i></button>

<div class="bottom-info-fixed">
<div class="container">
<div class="ticker">
<span>⚠ DailyTrades is a tech platform — NOT a SEBI Registered IA / RA.</span>
<span>✦</span>
<span>Research visible only in the DailyTrades app.</span>
<span>✦</span>
<span>Investments in securities are subject to market risks. Read all documents carefully.</span>
<span>✦</span>
<span>Verify each IA / RA's SEBI registration on sebi.gov.in.</span>
<span>✦</span>
<span>No assured returns. No tips outside the app.</span>
<span>⚠ DailyTrades is a tech platform — NOT a SEBI Registered IA / RA.</span>
<span>✦</span>
<span>Research visible only in the DailyTrades app.</span>
<span>✦</span>
<span>Investments in securities are subject to market risks. Read all documents carefully.</span>
<span>✦</span>
<span>Verify each IA / RA's SEBI registration on sebi.gov.in.</span>
<span>✦</span>
<span>No assured returns. No tips outside the app.</span>
</div>
</div>
</div>

<div class="two_buttons_footer">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary enqbtn mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>

<div class="modal fade" id="popmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="form-block">
<div class="form-header">
<a href="javascript:void(0)" id="modalClose" class="close" data-dismiss="modal" aria-label="close">&times;</a>
</div>
<?php include '_form.php'; ?>
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
setTimeout(function(){
$(document).ready(function(){
$("#popmodal").modal('show');
});
}, 6000);

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