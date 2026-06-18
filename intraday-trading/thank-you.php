<?php require_once '_top.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank You - <?= AppInfo()->BrandName; ?></title> 
<?php include '_header.php'; ?>
<style type="text/css">body{background-color: #fff;}.header-section--style3{background-color: var(--header-bg-color)}section{height: 80vh;display: flex;align-items: center;justify-content: center;}.error__inner{background-color:transparent}.error__thumb{display: flex;justify-content: center;align-items: center;}.error__thumb img{max-width: 350px}.error__content p{font-weight: normal;color: #000;font-size: 20px;}.footer__top--style2{padding-block-start:100px}@media (max-width: 768px){.error__thumb img{max-width: 150px}}.padding-top {padding-block-start: 80px;}.padding-bottom {padding-block-end: 80px;}</style>
</head>
<body> 
<?php include '_menu.php'; ?> 
<section>
<div class="error sec-bg-color2">
<div class="container">
<div class="error__wrapper padding-top padding-bottom">
<div class="" data-aos="fade-up" data-aos-duration="800">
<div class="error__thumb text-center">
<img src="assets/images/success.gif" alt="thank you image">
</div>
<div class="error__content text-center">
<h2>Thank you for reaching out! 🎉</h2>
<p>We've received your inquiry, Our team is reviewing your request and will respond to you within 24 hours.</p>
<a href="./" class="cg-btn cg-btn--border cg-btn--primary mt-30">Back to home</a>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include '_footer.php'; ?>
<!-- <script type="text/javascript">setTimeout(function () {window.open('./','_self');}, 5000);</script> -->
</body>
</html>