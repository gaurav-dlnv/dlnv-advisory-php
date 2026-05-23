<form class="bn-form">
<div class="form-footer"><img src="assets/images/icon/check-green.svg" alt="" class="em-hand"><div><p class="bold">Trusted Research From Experts.</p><p>Explore independent research published by SEBI Registered IAs & RAs.</p></div></div>
<div class="row g-3">
<div class="col-6">
<input class="form-control" type="text" name="name" placeholder="Full Name" required>
</div>
<div class="col-6">
<input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" name="phone" placeholder="Mobile Number" required>
</div>
<div class="col-6">
<input class="form-control" type="email" name="email" placeholder="Email id" required>
</div>
<div class="col-6">
<select name="service" class="form-control" required>
<option value="" disabled selected>Service Interested</option>
<option value="Stock Cash">Stock Cash</option>
<option value="Stock Option">Stock Option</option>
<option value="Nifty & Bank Nifty Option">Nifty & Bank Nifty Option</option>
<option value="Sensex Option">Sensex Option</option>
</select>
</div>
<div class="col-6">
<select name="budget" class="form-control" required>
<option value="" disabled selected>Investment Budget</option>
<option value="50K to 1 Lakh">50K to 1 Lakh</option>
<option value="1 Lakh to 5 Lakh">1 Lakh to 5 Lakh</option>
<option value="5 Lakh to 10 Lakh">5 Lakh to 10 Lakh</option>
<option value="Above 10 Lakh">Above 10 Lakh</option>
</select>
</div>
<div class="col-6">
<select name="state" class="form-control" required>
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
<button type="submit" class="cg-btn cg-btn--border cg-btn--primary mt-2 d-block actionbtn">Submit Now</button>
<p class="respons-txt">Our <strong>Expert</strong> Typically responds within 5 minutes.</p>
</form>