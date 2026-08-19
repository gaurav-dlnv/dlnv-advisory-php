<?php 
require_once '_top.php';
$cap = CaptchaCode();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= AppInfo()->BrandName; ?> | Intraday Trading Research & Options Market Analysis</title>
<?php include '_header.php'; ?>
<style type="text/css">
.bg-color{background: #fff!important;}

.card{background:#fff;border:1px solid #e5e7eb;border-radius:14px}
.h-divider{height:1px;background:linear-gradient(90deg,transparent,#cbd5e1,transparent)}
details>summary{list-style:none;cursor:pointer}
details>summary::-webkit-details-marker{display:none}
.acc-icon{transition:transform .2s ease}
details[open] .acc-icon{transform:rotate(180deg)}
.num{font-variant-numeric:tabular-nums}
.phone-mock{background:linear-gradient(180deg,#0f172a 0%,#1e293b 100%);border-radius:32px;padding:14px}
</style>
</head>
<body>
<?php include '_menu.php'; ?>
<section class="banner padding">
<div class="container">
<div class="banner__wrapper">
<div class="row align-items-center g-4">
<div class="col-lg-7 col-md-12">
<div class="banner__content">
<div class="d-flex flex-wrap gap-2 mb-4">
<span class="chip bg-blue">Technology Platform</span>
<span class="chip bg-emerald">Verified SEBI IAs &amp; RAs</span>
<span class="chip bg-slate d-desk">App-only Research View</span>
</div>
<h1 class="banner__content-heading mb-2">Options Trading <br/><span>Research Platform.</span></h1>
<p class="banner__content-moto heading mb-1"><?= AppInfo()->BrandName; ?> is a technology platform where traders can explore intraday trading research, options market analysis, technical insights and risk management tools. Review market structure, support & resistance zones, trading setups and research-based insights before making your own trading decisions.</p>
<hr class="separator">
<p class="banner__content-moto heading mb-1">Discover trading insights, market analysis, technical research, risk management tools and professional market perspectives on <?= AppInfo()->BrandName; ?>.</p>

<div class="advisor-slider swiper mt-4">
<div class="swiper-wrapper">
<!-- Slide 1 -->
<div class="swiper-slide">
<div class="advisor-card advisor">
<span class="advisor-icon">MS</span>
<span class="advisor-desc">
<h4 class="advisor-name">Manish Shah</h4>
<div class="tag"><img src="assets/images/private-account.png" alt=""> SEBI REGISTERED ADVISOR</div>
<div class="plan-desc">
<span class="d-flex justify-content-between align-items-center">
<i class="fas fa-shield-alt icon"></i>
<div>
<p><old>SEBI No:</old></p>
<p>INA000016180</p>
</div>
</span>
<span class="d-flex justify-content-between align-items-center">
<i class="fa fa-calendar-alt icon"></i>
<div>
<p><old>Plan start from:</old></p>
<p>₹ 2,999/-</p>
</div>
</span>
</div>
</span>
</div>
</div>
<!-- Slide 2 -->
<div class="swiper-slide">
<div class="advisor-card analyst">
<span class="advisor-icon">AB</span>
<span class="advisor-desc">
<h4 class="advisor-name">Amit Bhattacharjee</h4>
<div class="tag"><img src="assets/images/statisctics.png" alt=""> SEBI RESEARCH ANALYST</div>
<div class="plan-desc">
<span class="d-flex justify-content-between align-items-center">
<i class="fas fa-shield-alt icon"></i>
<div>
<p><old>SEBI No:</old></p>
<p>INH000019886</p>
</div>
</span>
<span class="d-flex justify-content-between align-items-center">
<i class="fa fa-calendar-alt icon"></i>
<div>
<p><old>Plan start from:</old></p>
<p>₹ 1,000/-</p>
</div>
</span>
</div>
</span>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="">
<?php include '_form.php'; ?>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="disclaimer">
<div class="container">
<div class="dis-wrapper">
<div class="point">PLATFORM DISCLOSURE</div>
<p class="description mb-0"><?= AppInfo()->BrandName; ?> (operated by <strong>Protective Collar AI Technology Pvt Ltd</strong>) is a software platform. It is <strong>not</strong> registered with SEBI in any intermediary capacity. The platform does not give investment advice, recommendations or tips. All research, recommendations and trades are independently published by SEBI Registered IAs / RAs on the platform, who are solely responsible for the content they publish.</p>
</div>
</div>
</section>

<section class="section padding" id="about">
<div class="container">
<div class="text-blue-700 font-semibold text-sm">How it works</div>
<h2 class="text-2xl md:text-3xl font-extrabold">A simple, transparent flow</h2>
<p class="text-slate-600 mt-2 max-w-2xl"><?= AppInfo()->BrandName; ?> only enables discovery, subscription and viewing of independently-published research from SEBI Registered IAs / RAs. The platform itself is not an intermediary and does not advise.</p>

<ol class="mt-10 grid md:grid-cols-4 gap-4">
<li class="card p-4">
<div class="text-xs text-blue-700 font-bold">STEP 1</div>
<div class="font-bold mt-1">Discover</div>
<p class="text-sm text-slate-600 mt-1">Browse verified SEBI Registered IAs and RAs. Each profile shows their SEBI registration details inside the app.</p>
</li>
<li class="card p-4">
<div class="text-xs text-blue-700 font-bold">STEP 2</div>
<div class="font-bold mt-1">Verify</div>
<p class="text-sm text-slate-600 mt-1">Independently verify the SEBI registration of the IA/RA on sebi.gov.in before subscribing.</p>
</li>
<li class="card p-4">
<div class="text-xs text-blue-700 font-bold">STEP 3</div>
<div class="font-bold mt-1">Subscribe</div>
<p class="text-sm text-slate-600 mt-1">Subscription fees are paid directly to the IA/RA via a regulated payment channel. A tax invoice is issued by the respective IA/RA.</p>
</li>
<li class="card p-4">
<div class="text-xs text-blue-700 font-bold">STEP 4</div>
<div class="font-bold mt-1">View in App</div>
<p class="text-sm text-slate-600 mt-1">Research and published trades are visible <strong>only inside the <?= AppInfo()->BrandName; ?> app</strong> — never on social media, SMS, WhatsApp or Telegram.</p>
</li>
</ol>

<div class="mt-8 card p-4 bg-emerald-50 border-emerald-200 text-sm text-emerald-900">
<strong>Payment model:</strong> Subscription fees go directly to the IA/RA. <?= AppInfo()->BrandName; ?> charges a separate platform usage fee to the IA/RA, with no revenue-sharing on trades, profits or returns. Investors do not pay any hidden charges to the platform.
</div>

<div class="mt-8 card p-4 sebi-strip">
<strong>Intraday Trading Research:</strong> Intraday trading focuses on market opportunities within a single trading session. Traders often evaluate price action, volume, trend direction and key support & resistance levels to understand market movements.
</div>
<div class="grid md:grid-cols-2 gap-5 mt-8">
<div class="card p-6">
<h3 class="font-bold">Intraday Trading Research</h3>
<p>Intraday trading focuses on market opportunities within a single trading session. Traders often evaluate price action, volume, trend direction and key support & resistance levels to understand market movements.</p>
<h3 class="font-bold">Explore research covering:</h3>
<ul class="mt-2 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>Intraday Trading Stocks</li>
<li><i class="fa fa-check me-2"></i>Breakout Setups</li>
<li><i class="fa fa-check me-2"></i>Momentum Trading</li>
<li><i class="fa fa-check me-2"></i>Trend Analysis</li>
<li><i class="fa fa-check me-2"></i>Support & Resistance Zones</li>
<li><i class="fa fa-check me-2"></i>Market Structure Analysis</li>
</ul>
</div>

<div class="card p-6">
<h3 class="font-bold">Options Trading Analysis</h3>
<p>Options traders frequently monitor market trends, volatility and key price levels before evaluating opportunities.</p>
<h3 class="font-bold">Research may include:</h3>
<ul class="mt-2 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>Index Options Analysis</li>
<li><i class="fa fa-check me-2"></i>Stock Options Research</li>
<li><i class="fa fa-check me-2"></i>Nifty Options</li>
<li><i class="fa fa-check me-2"></i>Bank Nifty Options</li>
<li><i class="fa fa-check me-2"></i>Options Market Trends</li>
<li><i class="fa fa-check me-2"></i>Technical Analysis</li>
</ul>
</div>
</div>

<div class="bottom-info-fixed relative mt-5">
<div class="container">
<div class="ticker">
<span>Options Trading </span>
<span>✦</span>
<span>Options Analysis</span>
<span>✦</span>
<span>Nifty Options</span>
<span>✦</span>
<span>Bank Nifty Options</span>
<span>✦</span>
<span>Index Options</span>
<span>✦</span>
<span>Stock Options</span>
</div>
</div>
</div>

</div>
</section>

<section id="for-iara" class="padding bg-slate-50 border-y border-slate-200">
<div class="container">
<div class="row align-items-center g-3">
<div class="col-lg-7">
<div class="text-blue-700 font-semibold text-sm">Why Traders Use <?= AppInfo()->BrandName; ?></div>
<h2 class="text-2xl md:text-3xl font-extrabold">Explore Intraday Trading and Options Market Insights</h2>
<p class="text-slate-600 mt-3">Intraday trading focuses on market opportunities within a single trading session. Traders often evaluate price action, volume, trend direction and key support & resistance levels to understand market movements.</p>
<ul class="mt-5 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>Intraday Market Research</li>
<li><i class="fa fa-check me-2"></i>Options Trading Analysis</li>
<li><i class="fa fa-check me-2"></i>Index & Stock Options Insights</li>
<li><i class="fa fa-check me-2"></i>Risk Management Tools</li>
<li><i class="fa fa-check me-2"></i>Technical Analysis</li>
<li><i class="fa fa-check me-2"></i>Market Professional Profiles</li>
</ul>
<hr class="separator">
<div class="contact-item btngroup d-flex mt-4 mb-4 gap-3">
<div class="call-item">
<div class="icon">
<i class="fab fa-whatsapp"></i>
</div>
<div class="content">
<span>Enquiry</span>
<h6 class="mb-0">
<a href="<?= AppInfo()->Whatsapp; ?>" target="_blank">WhatsApp Now</a>
</h6>
</div>
</div>
</div>
</div>
<div class="col-lg-5">
<?php include '_form.php'; ?>
</div>
</div>
</section>

<section id="trust" class="max-w-7xl mx-auto px-4 py-16">
<div class="text-blue-700 font-semibold text-sm">Trust &amp; safety</div>
<h2 class="text-2xl md:text-3xl font-extrabold">What the platform does — and does not do</h2>

<div class="grid md:grid-cols-2 gap-5 mt-8">
<div class="card p-6">
<h3 class="font-bold text-emerald-700">The platform commits to</h3>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-check-circle text-success me-2"></i>Onboard only SEBI Registered IAs / RAs after verification</li>
<li><i class="far fa-check-circle text-success me-2"></i>Show every IA/RA's SEBI registration details on their in-app profile</li>
<li><i class="far fa-check-circle text-success me-2"></i>Restrict research delivery to the <?= AppInfo()->BrandName; ?> app only</li>
<li><i class="far fa-check-circle text-success me-2"></i>Route subscription payments via a regulated payment channel</li>
<li><i class="far fa-check-circle text-success me-2"></i>Issue tax-compliant invoices (by the respective IA/RA)</li>
<li><i class="far fa-check-circle text-success me-2"></i>Maintain time-stamped audit logs for every research published</li>
</ul>
</div>
<div class="card p-6">
<h3 class="font-bold text-rose-700">The platform will never</h3>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-times-circle text-danger me-2"></i>Provide tips, calls, intraday signals or any direct advice</li>
<li><i class="far fa-times-circle text-danger me-2"></i>Promise assured returns, accuracy percentages or profit-sharing</li>
<li><i class="far fa-times-circle text-danger me-2"></i>Distribute research on SMS, WhatsApp, Telegram or social media</li>
<li><i class="far fa-times-circle text-danger me-2"></i>Use superlative terms ("Best", "No.1", "Top", "Most Trusted")</li>
<li><i class="far fa-times-circle text-danger me-2"></i>Hold custody of your funds or securities</li>
<li><i class="far fa-times-circle text-danger me-2"></i>Earn revenue from your trades, profits or losses</li>
</ul>
</div>
</div>
</section>

<section id="trust" class="max-w-7xl mx-auto px-4 py-16 bg-white">

<div class="text-blue-700 font-semibold text-sm">Technical Analysis, Trading Setups & Risk Management</div>
<h2 class="text-2xl md:text-3xl font-extrabold">Explore research-based market insights, technical analysis, trading opportunities, and risk management concepts designed to help traders better understand market conditions.</h2>

<div class="grid md:grid-cols-2 gap-5 mt-8">
<div class="card p-6">
<h3 class="font-bold text-emerald-700">Technical Analysis & Trading Setups</h3>
<p>Research-based market analysis may include:</p>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-check-circle text-success me-2"></i>Support & Resistance</li>
<li><i class="far fa-check-circle text-success me-2"></i>Breakout Patterns</li>
<li><i class="far fa-check-circle text-success me-2"></i>Trend Following Setups</li>
<li><i class="far fa-check-circle text-success me-2"></i>Price Action Analysis</li>
<li><i class="far fa-check-circle text-success me-2"></i>Volume Analysis</li>
<li><i class="far fa-check-circle text-success me-2"></i>Chart-Based Research</li>
</ul>
</div>
<div class="card p-6">
<h3 class="font-bold text-rose-700">Risk Management Tools</h3>
<p>Users can explore:</p>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-check-circle text-success me-2"></i>Position Sizing Concepts</li>
<li><i class="far fa-check-circle text-success me-2"></i>Risk Per Trade</li>
<li><i class="far fa-check-circle text-success me-2"></i>Risk Reward Analysis</li>
<li><i class="far fa-check-circle text-success me-2"></i>Stop Loss Planning</li>
<li><i class="far fa-check-circle text-success me-2"></i>Capital Allocation Methods</li>
</ul>
</div>
</div>

<div class="bottom-info-fixed relative mt-5">
<div class="container">
<div class="ticker">
<span>Risk Management</span>
<span>✦</span>
<span>Position Size Calculator</span>
<span>✦</span>
<span>Trading Risk Calculator</span>
<span>✦</span>
<span>Risk Reward Ratio</span>
<span>✦</span>
<span>Stop Loss Planning</span>
</div>
</div>
</div>

</section>

<section id="compliance" class="bg-slate-50 border-y border-slate-200">
<div class="max-w-7xl mx-auto px-4 py-16">
<div class="text-blue-700 font-semibold text-sm">Disclosures</div>
<h2 class="text-2xl md:text-3xl font-extrabold">Disclosures &amp; investor safeguards</h2>

<div class="mt-8 grid md:grid-cols-3 gap-5">
<div class="card p-6">
<h3 class="font-bold">Platform status</h3>
<p class="text-sm text-slate-600 mt-2"><?= AppInfo()->BrandName; ?> is not a SEBI Registered IA, RA, Broker, Depository Participant, or any SEBI intermediary. We operate purely as a technology service provider to SEBI Registered IAs / RAs.</p>
</div>
<div class="card p-6">
<h3 class="font-bold">IA / RA responsibility</h3>
<p class="text-sm text-slate-600 mt-2">Every research output, recommendation, target, stop loss or projection is the sole responsibility of the publishing SEBI Registered IA / RA. Their SEBI registration, BASL membership and disclosures are available on their in-app profile.</p>
</div>
<div class="card p-6">
<h3 class="font-bold">Investor responsibility</h3>
<p class="text-sm text-slate-600 mt-2">Investors must independently verify each IA/RA's SEBI registration on sebi.gov.in, assess their own risk profile, and read all related documents before subscribing. Investment decisions are solely the investor's responsibility.</p>
</div>
</div>

<!-- Risk disclosure box -->
<div class="mt-8 card p-6 border-amber-300 bg-amber-50">
<h3 class="font-bold text-amber-900">Risk &amp; market disclosure</h3>
<p class="text-sm text-amber-900/90 mt-2">
Investments in securities are subject to market and other risks. There is no assurance or guarantee that the objectives of any investment will be achieved. Past performance of any IA / RA or of any security is not indicative of future performance. Registration granted by SEBI, membership of BASL and certification from NISM in no way guarantee performance of the IA/RA or provide any assurance of returns to investors.
</p>
</div>
</div>
</section>

<section id="grievance" class="max-w-7xl mx-auto px-4 py-16">
<div class="text-blue-700 font-semibold text-sm">Investor support</div>
<h2 class="text-2xl md:text-3xl font-extrabold">Grievance redressal</h2>
<p class="text-slate-600 mt-2 max-w-3xl">Different paths apply to platform-related issues vs. research / recommendation-related issues. Please choose the right channel.</p>

<div class="grid md:grid-cols-2 gap-5 mt-8">
<div class="card p-6">
<div class="font-bold">Platform &amp; app issues</div>
<p class="text-sm text-slate-600 mt-2">Login problems, payment failures, app bugs, subscription/billing queries.</p>
<ul class="mt-3 text-sm space-y-1.5">
<li><strong>Level 1:</strong> support@<?= AppInfo()->BrandName; ?>.in</li>
<li><strong>Level 2:</strong> Grievance Officer — grievance@<?= AppInfo()->BrandName; ?>.in</li>
</ul>
<p class="text-[12px] text-slate-500 mt-3">We acknowledge complaints within 1 working day and aim to resolve within 21 days.</p>
</div>
<div class="card p-6">
<div class="font-bold">Research / recommendation issues</div>
<p class="text-sm text-slate-600 mt-2">Quality of research, suitability, disputes about the IA/RA's services.</p>
<ul class="mt-3 text-sm space-y-1.5">
<li><strong>Level 1:</strong> Concerned IA / RA (contact in their in-app profile)</li>
<li><strong>Level 2:</strong> SEBI SCORES — <a class="text-blue-700 hover:underline" href="https://scores.sebi.gov.in" target="_blank" rel="noopener">scores.sebi.gov.in</a></li>
<li><strong>Level 3:</strong> SEBI ODR — <a class="text-blue-700 hover:underline" href="https://smartodr.in" target="_blank" rel="noopener">smartodr.in</a></li>
</ul>
<p class="text-[12px] text-slate-500 mt-3">If unresolved by the IA/RA within 30 days, escalate to SEBI SCORES, then to the SEBI Online Dispute Resolution Portal.</p>
</div>
</div>
</section>

<section class="section padding bg-gray">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">With our super powers we have reached this</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40">Why Choose Us?</h2>

<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Market Research Hub</h5>
<p>Explore technical insights, trading setups and research-driven market analysis.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Multi Trading Segments</h5>
<p>Access equity, intraday and options market research from one platform.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Risk-Aware Approach</h5>
<p>Understand risk concepts, position sizing and capital management principles.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Clear & Transparent</h5>
<p>View research details, disclosures and supporting market information.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="section padding-top padding-bottom-style2" id="services">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">Best option tips service for Indian Market</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40">Our Best Services</h2>

<div class="about__wrapper">
<div class="row align-items-center">
<div class="col-lg-4 col-md-6 mb-4">
<div class="service__item service__item--style1">
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
<div class="service__item service__item--style1">
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
<div class="service__item service__item--style1">
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

<section class="contact about--style1">
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

<div class="col-12 mb-30">
<div class="contact-item btngroup d-flex mt-0 gap-3">
<div class="call-item">
<div class="icon">
<i class="fab fa-whatsapp"></i>
</div>
<div class="content">
<span>Enquiry</span>
<h6 class="mb-0">
<a href="<?= AppInfo()->Whatsapp; ?>" target="_blank">WhatsApp Now</a>
</h6>
</div>
</div>
</div>
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

<section class="bg-slate-50 border-y border-slate-200 padding">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">Frequently asked</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center">FAQs</h2>

<div class="max-w-5xl mx-auto mt-8 space-y-3">
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">What is intraday trading?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Intraday trading involves opening and closing positions within the same trading day.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">What is options trading?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Options trading involves contracts linked to an underlying asset and is commonly used for market participation and risk management strategies.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Does <?= AppInfo()->BrandName; ?> provide trading advice?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600"><?= AppInfo()->BrandName; ?> operates as a technology platform that enables users to discover research and market insights published by market professionals.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Can I explore options market analysis?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Yes. Users may explore options-related market research and analysis available on the platform.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Does trading involve risk?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Yes. Financial markets are subject to risk, and users should evaluate their own financial objectives and risk tolerance before making decisions.</p>
</details>
</div>
</div>
</section>

<?php include '_footer.php'; ?>
</body>
</html>