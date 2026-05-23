<?php 
require_once '_top.php';
$cap = CaptchaCode();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>India's Most Trusted SEBI Registered advisors marketplace | <?= AppInfo()->BrandName; ?></title>
<?php include '_header.php'; ?>
<style type="text/css">
.bg-color{background: #fff!important;}
</style>
</head>
<body>
<?php include '_menu.php'; ?>
<section class="banner banner--style1">
<div class="container">
<div class="banner__wrapper">
<div class="row align-items-center gx-4">
<div class="col-lg-7 col-md-12">
<div class="banner__content" data-aos="fade-right" data-aos-duration="800">
<h1 class="banner__content-heading">India's Most Trusted SEBI Registered <span>advisors marketplace.</span></h1>
<p class="banner__content-moto heading mb-1">We are the best transparent advisors market place in India, we help you to connect with registered professional advisors for all your trading needs.</p>
<hr class="separator">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="" data-aos="fade-left" data-aos-duration="800">
<form class="bn-form" id="adForm">
<h5 class="text-center mb-4">Request call back</h5>
<div class="row g-4">
<div class="col-6">
<input class="form-control" type="text" id="name" name="name" placeholder="Full Name" required>
</div>
<div class="col-6">
<input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="mobile" name="phone" placeholder="Mobile Number" required>
</div>
<div class="col-6">
<input class="form-control" type="email" id="email" name="email" placeholder="Email id" required>
</div>
<div class="col-6">
<select id="service" name="service" class="form-control" required>
<option value="" disabled selected>Service Interested</option>
<option value="Stock Cash">Stock Cash</option>
<option value="Stock Option">Stock Option</option>
<option value="Nifty & Bank Nifty Option">Nifty & Bank Nifty Option</option>
<option value="Sensex Option">Sensex Option</option>
</select>
</div>
<div class="col-6">
<select id="budget" name="budget" class="form-control" required>
<option value="" disabled selected>Investment Budget</option>
<option value="50K to 1 Lakh">50K to 1 Lakh</option>
<option value="1 Lakh to 5 Lakh">1 Lakh to 5 Lakh</option>
<option value="5 Lakh to 10 Lakh">5 Lakh to 10 Lakh</option>
<option value="Above 10 Lakh">Above 10 Lakh</option>
</select>
</div>
<div class="col-6">
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
<div class="col-12">
<div class="capgroup">
<input class="form-control" type="text" placeholder="Enter Code" maxlength="6" name="enqcode" required>
<span class="changecapcode"><i class="fas fa-redo-alt"></i></span>
<img alt="captcha" class="capimg" src="<?php echo $cap; ?>">
<span class="help-block error"><?php if(isset($code_err)) {echo $code_err;}?></span> 
</div>
</div>
<div class="col-md-12 form-group d-flex align-items-start">
<div class="form-group col-auto myCheck">
<input type="checkbox" name="myCheck" checked="" required>
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
</div>
</section>

<section class="contact about--style1" id="about-us">
<div class="container">
<div class="section-header d-md-flex align-items-center justify-content-center">
<div class="section-header__content text-center"><h2><span>Who We Are</span></h2>
<p class="mb-0 text-center">Grow Your Profit with <?= AppInfo()->BrandName; ?>.</p>
</div>
</div>
<div class="mb-30" data-aos="fade-up" data-aos-duration="800">
<p>Dailytrades is a fintech portal operated by Protective Collar AI Technology Private Limited. We are building a trusted stock market advisory marketplace in India by collaborating with multiple SEBI-registered researchers and advisors leveraging advanced technology. Our platform serves as an ecosystem that connects brokers, market participants, traders, and investors.</p>

<p>We created this platform to address challenges in the advisory industry by providing SEBI-registered analysts with a space to showcase their analytical and research skills. It also enables investors to evaluate the performance of research analysts and advisors before subscribing to their services.</p>

<p>We believe successful trading and investing in the stock market requires in-depth research and expertise. However, retail investors often struggle to access reliable information and high-quality resources at the right time. This gap results in many investors losing their wealth and confidence in the stock market.</p>

<p>At Dailytrades, we are committed to creating optimal value for investors and traders by ensuring real-time connections with expert analysts. Our authorized and registered analysts provide live market analysis on our platform, allowing traders and investors to connect with the right advisors based on their investment style and needs.</p>

<p>Dailytrades empowers stock market advisors and researchers to transform their expertise into a thriving career. Experts can publish live recommendations and market insights, helping platform users make informed investment decisions.</p>

<p>After years of dedicated effort, we have developed a comprehensive solution and are excited to bring it to the market.</p>

<p>Our primary focus is to provide users with high-quality, risk-reward-based trade recommendations.</p>
</div>

<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mt-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<h3>
<span class="purecounter" data-purecounter-start="0" data-purecounter-end="10">10</span> +
</h3>
<h5 >Daily Tips</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mt-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<h3>
<span class="purecounter" data-purecounter-start="0" data-purecounter-end="15">15</span> +
</h3>
<h5 >Advisors & Social Traders</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mt-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<h3>
<span class="purecounter" data-purecounter-start="0" data-purecounter-end="12">12</span> +
</h3>
<h5 >Experienced</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mt-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<h3>
<span class="purecounter" data-purecounter-start="0" data-purecounter-end="80">80</span> %
</h3>
<h5 >Accuracy</h5>
</div>
</div>
</div>
</div>
</div>

</div>
</section>
<section class="section padding-top padding-bottom-style2">
<div class="container">
<div class="section-header d-md-flex align-items-center justify-content-center">
<div class="section-header__content text-center"><h2><span>Why Choose Us?</span></h2>
<p class="mb-0 text-center">With our super powers we have reached this</p>
</div>
</div>
<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<img src="assets/images/icon/choose-1.png">
<h5 >Transparent</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<img src="assets/images/icon/choose-2.png">
<h5 >Unbiased</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<img src="assets/images/icon/choose-3.png">
<h5 >Expert Advice</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner service__item-inner2 text-center">
<div class="service__item-content">
<img src="assets/images/icon/choose-4.png">
<h5 >Lowest Fee</h5>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="section padding-top padding-bottom-style2" id="services">
<div class="container">
<div class="section-header d-md-flex align-items-center justify-content-center">
<div class="section-header__content">
<h2 class="mb-10 mt-minus-5 text-center"><span>Our Best Services</span></h2>
<p class="mb-0 text-center">We provide high quality & accurate calls in stock market. Our stock market experts offer best Option Tips service for Indian Market</p>
</div>
</div>
<div class="about__wrapper">
<div class="row align-items-center">
<div class="col-lg-4 col-md-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >NIfty & Bank Nifty Option</h5>
<p class="mb-0">This is the service for the traders and the investors who desire to invest a good amount and sought to gain the exponential returns, This service is one of the top selling services of the company</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Stock Future</h5>
<p class="mb-0">This is one of the premier levels of services provided by <?= AppInfo()->BrandName; ?>. This service is for clients having a good net worth and who want to invest a colossal amount of money to gain exceptional profits.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
<div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Stock Cash (Equity)</h5>
<p class="mb-0">This is the basic service in the cash segment. We provide you with high accuracy tips of the equity market in this segment. The extremely accurate tips are the results of the performed by our Technical Analysts.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="contact about--style1" data-aos="fade-up" data-aos-duration="800">
<div class="container">
<div class="trading">
<div class="section-header">
<div class="section-header__content">
<h2 class="mb-10 mt-minus-5"><span>Trading Stock Markets</span></h2>
<p class="mb-0">Real-Time Market Updates. Expert Research. Confident Trading.</p>
</div>
</div>
<div class="row">
<div class="col-xl-8">
<div class="row">

<div class="col-lg-6 col-md-6 mb-30">
<div class="d-flex gap-3 align-items-start">
<img src="assets/images/icon/notification.png">
<div class="con">
<h1 class="con-title">Stock Alert</h1>
<p class="con-des">Instant notifications on significant stock movements and opportunities.</p>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 mb-30">
<div class="d-flex gap-3 align-items-start">
<img src="assets/images/icon/phone.png">
<div class="con">
<h1 class="con-title">Research Calls</h1>
<p class="con-des">Receive expert recommendations tailored to current market conditions.</p>
</div>
</div>
</div>

<div class="col-12 text-center mb-30">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
<div class="col-xl-4">
<img class="image" src="assets/images/credit-calls-left.svg">
</div>
</div>
</div>
</div>
</section>

<section class="section padding-top padding-bottom-style2" id="contact-us">
<div class="container">
<div class="section-header">
<h2 class="mb-10 mt-minus-5"><span>Keep In Touch</span></h2></div>
<div class="contact__wrapper">
<div class="row align-items-center">

<div class="col-lg-7">
<div class="contact__info">
<p>Do you want recover your Loss with our high-quality Share Market Tips, Bank Nifty Tips , Future Tips Stock Option Tips calls?</p>
<div class="accordion accordion--style1" id="faqAccordion1">
<div class="row">
<div class="col-12">
<div class="accordion__item accordion-item">
<div class="accordion__header accordion-header" id="faq1">
<button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
<span class="accordion__button-content">What makes DailyTrades.in different from other stock market services?</span>
</button>
</div>
<div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion1">
<div class="accordion__body accordion-body">
<p class="mb-15">We provide data-driven market insights, expert analysis, and actionable trading strategies tailored for traders of all levels, helping you make informed decisions.</p>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="accordion__item accordion-item">
<div class="accordion__header accordion-header" id="faq2">
<button class="accordion-button accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true" aria-controls="faqBody2">
<span class=" accordion__button-content">Do you offer training or educational resources for traders?</span>
</button>
</div>
<div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
<div class="accordion__body accordion-body">
<p class="mb-15">Yes, we provide educational content, webinars, and tutorials to help beginners and experienced traders enhance their stock market knowledge and skills.</p>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="accordion__item accordion-item">
<div class="accordion__header accordion-header" id="faq3">
<button class="accordion-button accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="true" aria-controls="faqBody3">
<span class=" accordion__button-content">How can I contact support if I have queries?</span>
</button>
</div>
<div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion1">
<div class="accordion__body accordion-body">
<p class="mb-15">You can reach out to our support team via email, WhatsApp, or our contact form on the website. We’re here to assist you with any stock market-related queries.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="bn-form">
<form class="footerForm" id="fForm">
<h5 class="text-center mb-4">Request call back</h5>
<div class="row g-4">
<div class="col-6">
<input class="form-control" type="text" id="name" name="name" placeholder="Full Name" required>
</div>
<div class="col-6">
<input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" id="mobile" name="phone" placeholder="Mobile Number" required>
</div>
<div class="col-6">
<input class="form-control" type="email" id="email" name="email" placeholder="Email id" required>
</div>
<div class="col-6">
<select id="service" name="service" class="form-control" required>
<option value="" disabled selected>Service Interested</option>
<option value="Stock Cash">Stock Cash</option>
<option value="Stock Option">Stock Option</option>
<option value="Nifty & Bank Nifty Option">Nifty & Bank Nifty Option</option>
<option value="Sensex Option">Sensex Option</option>
</select>
</div>
<div class="col-6">
<select id="budget" name="budget" class="form-control" required>
<option value="" disabled selected>Investment Budget</option>
<option value="50K to 1 Lakh">50K to 1 Lakh</option>
<option value="1 Lakh to 5 Lakh">1 Lakh to 5 Lakh</option>
<option value="5 Lakh to 10 Lakh">5 Lakh to 10 Lakh</option>
<option value="Above 10 Lakh">Above 10 Lakh</option>
</select>
</div>
<div class="col-6">
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
<div class="col-12">
<div class="capgroup">
<input class="form-control" type="text" placeholder="Enter Code" maxlength="6" name="enqcode" required>
<span class="changecapcode"><i class="fas fa-redo-alt"></i></span>
<img alt="captcha" class="capimg" src="<?php echo $cap; ?>">
<span class="help-block error"><?php if(isset($code_err)) {echo $code_err;}?></span> 
</div>
</div>
<div class="col-md-12 form-group d-flex align-items-start">
<div class="form-group col-auto myCheck">
<input type="checkbox" name="myCheck" checked="" required>
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
</div>
</section>


<section class="contact about--style1" data-aos="fade-up" data-aos-duration="800">
<div class="container">
<div class="trading-footer">
<div class="section-header mb-0">
<div class="section-header__content width-70">
<h2 class="mb-10 mt-minus-5 text-white">Are You Frustrated With <span>Costly and Unsuccessful Trade</span> Recommendations?</h2>
<p class="mb-15 mt-30 ">Credits Based Subscription- Pay for Successful Research Calls</p>
<div class="row">
<div class="col-md-6 d-flex align-items-center gap-3 mt-15">
<img src="assets/images/icon/cross.png">
<p class="mb-0">No more locked-in contracts or high fees for poor performance.</p>
</div>
<div class="col-md-6 d-flex align-items-center gap-3 mt-15">
<img src="assets/images/icon/checked.png">
<p class="mb-0">Pay only for successful research calls!</p>
</div>
<div class="col-12 text-center mt-30">
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--outline" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include '_footer.php'; ?>
</body>
</html>