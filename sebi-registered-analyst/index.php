<?php 
require_once '_top.php';
$cap = CaptchaCode();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SEBI Registered Research Analyst | Research Reports & Market Insights</title>
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
<h1 class="banner__content-heading mb-2">Explore Research Published by <br/><span>SEBI Registered Research Analysts.</span></h1>
<p class="banner__content-moto heading mb-1"><?= AppInfo()->BrandName;?> is a technology platform where users can discover research reports, market insights and trading ideas published by SEBI Registered Research Analysts. Review analyst profiles, disclosures, research methodology and risk parameters before making your own investment decisions.</p>
<hr class="separator">

<h3 class="font-bold">Key Highlights</h3>
<ul class="mt-2 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>SEBI Registered Research Analyst Profiles</li>
<li><i class="fa fa-check me-2"></i>Equity Research Reports</li>
<li><i class="fa fa-check me-2"></i>Intraday & Swing Market Analysis</li>
<li><i class="fa fa-check me-2"></i>Risk Management Information</li>
<li><i class="fa fa-check me-2"></i>Transparent Disclosures</li>
<li><i class="fa fa-check me-2"></i>Research-Based Market Insights</li>
</ul>

<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">View Research Reports</a>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Explore Analyst Profiles</a>

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
<div class="point">What Does a Stock Market Advisor Do?</div>
<p class="description mb-0">A stock market advisor helps investors understand market opportunities through research, analysis and educational insights.</p>
</div>
</div>
</section>

<section class="section padding" id="about">
<div class="container">
<h2 class="text-2xl md:text-3xl font-extrabold">What is a SEBI Registered Research Analyst?</h2>
<p class="text-slate-600 mt-2 max-w-2xl">A SEBI Registered Research Analyst is authorized to publish research reports and market analysis after complying with applicable regulatory requirements.</p>

<ol class="mt-10 grid md:grid-cols-2 gap-4">
<li class="card p-4">
<div class="font-bold mt-1">Research analysts typically provide:</div>
<ul class="mt-2 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>Equity Research</li>
<li><i class="fa fa-check me-2"></i>Market Analysis</li>
<li><i class="fa fa-check me-2"></i>Sector Research</li>
<li><i class="fa fa-check me-2"></i>Technical Analysis</li>
<li><i class="fa fa-check me-2"></i>Fundamental Analysis</li>
<li><i class="fa fa-check me-2"></i>Research Reports</li>
</ul>
</li>
<li class="card p-4">
<div class="font-bold mt-1">Many investors search for:</div>
<ul class="mt-2 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>SEBI Registered Research Analyst</li>
<li><i class="fa fa-check me-2"></i>Stock Research Analyst</li>
<li><i class="fa fa-check me-2"></i>Share Market Research</li>
<li><i class="fa fa-check me-2"></i>Stock Market Research Reports</li>
<li><i class="fa fa-check me-2"></i>Equity Research Reports</li>
<li><i class="fa fa-check me-2"></i>Investment Research</li>
</ul>
</li>
</ol>

</div>
</section>

<section class="section padding bg-gray">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">Why Investors Review Research Reports</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40 text-center">Research reports can help investors understand</h2>

<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Market Trends</h5>
<p>Study broader market movements and sector performance.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Company Analysis</h5>
<p>Review business fundamentals, growth potential and financial performance.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Technical Analysis</h5>
<p>Identify market structure, support zones, resistance levels and trends.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Risk Assessment</h5>
<p>Understand possible risks and reward scenarios associated with a market opportunity.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="for-iara" class="padding bg-slate-50 border-y border-slate-200">
<div class="container">
<div class="row align-items-center g-3">
<div class="col-lg-7">
<div class="text-blue-700 font-semibold text-sm">Why Use <?= AppInfo()->BrandName; ?></div>
<h2 class="text-2xl md:text-3xl font-extrabold">Explore Before You Decide</h2>
<p class="text-slate-600 mt-3">Every trader and investor has a different risk profile, investment horizon and market approach. <?= AppInfo()->BrandName;?> allows users to compare different research styles and market perspectives in one place.</p>
<ul class="mt-5 text-sm space-y-2 text-slate-700">
<li><i class="fa fa-check me-2"></i>Explore Advisor Profiles</li>
<li><i class="fa fa-check me-2"></i>Review Research Reports</li>
<li><i class="fa fa-check me-2"></i>Equity Market Analysis</li>
<li><i class="fa fa-check me-2"></i>Intraday & Swing Trading Research</li>
<li><i class="fa fa-check me-2"></i>Risk Management Insights</li>
<li><i class="fa fa-check me-2"></i>Transparent Disclosures</li>
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

<section class="section padding-top padding-bottom-style2" id="services">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">Equity Research Reports</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40">Explore research coverage across</h2>

<div class="about__wrapper">
<div class="row align-items-center">
<div class="col-lg-3 col-md-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Large Cap Stocks</h5>
<p class="mb-0">Established companies with broad market participation.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Mid Cap Stocks</h5>
<p class="mb-0">Companies with growth-oriented opportunities.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Small Cap Stocks</h5>
<p class="mb-0">Businesses that may offer higher growth potential with associated risks.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner text-center">
<div class="service__item-content">
<h5 >Sector Analysis</h5>
<p class="mb-0">Research across Banking, IT, Pharma, FMCG, Auto and other sectors.</p>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#popmodal" class="cg-btn cg-btn--border cg-btn--primary mt-4" contenteditable="false" style="cursor: pointer;">Enquiry Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="bottom-info-fixed relative mt-0">
<div class="container">
<div class="ticker">
<span>Intraday Trading</span>
<span>✦</span>
<span>Market Structure</span>
<span>✦</span>
<span>Support & Resistance</span>
<span>✦</span>
<span>Trend Analysis</span>
<span>✦</span>
<span>Risk Parameters</span>
<span>✦</span>
<span>Swing Trading</span>
<span>✦</span>
<span>Breakout Setups</span>
<span>✦</span>
<span>Trend Continuation Analysis</span>
<span>✦</span>
<span>Momentum Opportunities</span>
<span>✦</span>
<span>Multi-Day Trading Ideas</span>
</div>
</div>
</div>

<section class="section padding bg-gray">
<div class="container">
<div class="text-blue-700 font-semibold text-sm text-center">Research Methodology</div>
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40 text-center">Research reports may include</h2>

<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Technical Analysis</h5>
<p>Chart patterns, market structure and trend analysis.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Fundamental Analysis</h5>
<p>Financial statements, earnings and business performance.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Quantitative Research</h5>
<p>Data-driven market analysis.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Sector Research</h5>
<p>Industry-specific studies and market developments.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="trust" class="max-w-7xl mx-auto px-4 py-16 bg-white">

<h2 class="text-2xl md:text-3xl font-extrabold">Analyst Transparency & Risk Management</h2>
<p>Access analyst information, research transparency, and risk management insights to make more informed and responsible market decisions.</p>

<div class="grid md:grid-cols-2 gap-5 mt-8">
<div class="card p-6">
<h3 class="font-bold text-emerald-700">Analyst Profiles & Disclosures</h3>
<p>Before reviewing research, users can explore:</p>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-check-circle text-success me-2"></i>Analyst Profile</li>
<li><i class="far fa-check-circle text-success me-2"></i>Registration Details</li>
<li><i class="far fa-check-circle text-success me-2"></i>Experience</li>
<li><i class="far fa-check-circle text-success me-2"></i>Research Coverage</li>
<li><i class="far fa-check-circle text-success me-2"></i>Published Reports</li>
<li><i class="far fa-check-circle text-success me-2"></i>Disclosures</li>
<li><i class="far fa-check-circle text-success me-2"></i>Transparency and disclosures help users better understand the source of research.</li>
</ul>
</div>
<div class="card p-6">
<h3 class="font-bold text-rose-700">Risk Management Matters</h3>
<p>Every market participant should understand:</p>
<ul class="mt-3 text-sm space-y-2 text-slate-700">
<li><i class="far fa-check-circle text-success me-2"></i>Capital Allocation</li>
<li><i class="far fa-check-circle text-success me-2"></i>Position Sizing</li>
<li><i class="far fa-check-circle text-success me-2"></i>Stop Loss Planning</li>
<li><i class="far fa-check-circle text-success me-2"></i>Risk Reward Analysis</li>
<li><i class="far fa-check-circle text-success me-2"></i>Portfolio Diversification</li>
<li><i class="far fa-check-circle text-success me-2"></i>Research should be considered alongside personal financial goals and risk tolerance.</li>
</ul>
</div>
</div>

</section>

<div class="bottom-info-fixed relative mt-0">
<div class="container">
<div class="ticker">
<span>Trading Risk Management</span>
<span>✦</span>
<span>Stock Market Risk</span>
<span>✦</span>
<span>Position Size Calculator</span>
<span>✦</span>
<span>Risk Reward Ratio</span>
<span>✦</span>
<span>Trading Risk Analysis</span>
</div>
</div>
</div>

<section class="section padding bg-gray">
<div class="container">
<h2 class="text-2xl md:text-3xl font-extrabold text-center mb-40">Why Choose <?= AppInfo()->BrandName;?>?</h2>

<div class="row align-items-center">
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Research Discovery Platform</h5>
<p>Access research and analysis from market professionals in one place.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Transparent Information</h5>
<p>Review disclosures and supporting information alongside research.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Multiple Market Segments</h5>
<p>Explore equity, intraday and swing market research.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6 mb-4">
<div class="service__item service__item--style1">
<div class="service__item-inner service__item-inner2">
<div class="service__item-content">
<h5 class="mb-0">Risk-Focused Approach</h5>
<p>Understand potential risks before evaluating opportunities.</p>
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
<h2 class="mb-10 mt-minus-5"><span>Discover Research-Based Market Insights</span></h2>
<p class="mb-0">Explore research reports, market analysis, equity research and professional profiles on DailyTrades.</p>
</div>
</div>
<div class="row">
<div class="col-xl-8">
<div class="row">

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
<summary class="flex items-center justify-between font-semibold">What is a SEBI Registered Research Analyst?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">A registered professional authorized to publish research reports and market analysis in accordance with applicable regulations.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Does DailyTrades provide investment advice?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">DailyTrades operates as a technology platform that enables users to discover research published by market professionals.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Can I review analyst profiles?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Yes. Users can explore analyst profiles, disclosures and published research.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Are research reports available?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">Research reports and market analysis may be available through participating professionals.</p>
</details>
<details class="card p-3">
<summary class="flex items-center justify-between font-semibold">Does research guarantee returns?
<span class="acc-icon">▾</span>
</summary>
<p class="mt-3 text-sm text-slate-600">No. Market investments are subject to risk, and past performance does not guarantee future results.</p>
</details>
</div>
</div>
</section>

<?php include '_footer.php'; ?>
</body>
</html>