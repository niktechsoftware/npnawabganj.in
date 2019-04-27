<?php $this->load->view("header");?>
 <?php $this->load->view("menu");?>  
  <?php $this->load->view("slider");?>          	
 <?php $this->load->view("sectionblock");?>  
 <?php $this->load->view("daynamicbox");?> 


<section class="citizen">
<div class="container">
<div class="row">
<h1>E-Governance</h1>
<ul class=" circle">
<li><i class="fa fa-certificate blue"></i>
<div class="ca-content">
<h2 class="ca-main">Birth &amp; Death <br />Registration</h2>
<h2 class="ca-sub"><a target="_blank" href="http://edistrict.up.nic.in/" marked="1" rel="noopener">Birth &amp; Death <br />Registration</a></h2>
</div>
</li>
<li><i class="fa fa-home sky"></i>
<div class="ca-content">
<h2 class="ca-main">Property Tax</h2>
<h2 class="ca-sub"><a href="#" marked="1" target="_blank" rel="noopener">Property Tax</a></h2>
</div>
</li>
<li><i class="fa fa-tint yellow"></i>
<div class="ca-content">
<h2 class="ca-main">Water Tax</h2>
<h2 class="ca-sub"><a href="#" marked="1" target="_blank" rel="noopener">Water Tax</a></h2>
</div>
</li>
<li><i class="fa fa-building teal"></i>
<div class="ca-content">
<h2 class="ca-main">Building Permissions</h2>
<h2 class="ca-sub"><a href="#" marked="1">Building <br />Permissions</a></h2>
</div>
</li>
<li><i class="fa fa-user red"></i>
<div class="ca-content">
<h2 class="ca-main">Mutations</h2>
<h2 class="ca-sub"><a href="#" marked="1">Mutations</a></h2>
</div>
</li>
<li><i class="fa fa-calendar-o org"></i>
<div class="ca-content">
<h2 class="ca-main">Issuances of Licenses</h2>
<h2 class="ca-sub"><a href="#" marked="1">Issuances of <br />Licenses</a></h2>
</div>
</li>
<li><i class="fa fa-file-o green"></i>
<div class="ca-content">
<h2 class="ca-main">Grievances Redressal</h2>
<h2 class="ca-sub"><a href="http://jansunwai.up.nic.in/" marked="1" target="_blank" rel="noopener">Grievances <br />Redressal</a></h2>
</div>
</li>
<li><i class="fa fa-money teal"></i>
<div class="ca-content">
<h2 class="ca-main">Payroll</h2>
<h2 class="ca-sub"><a href="#" marked="1">Payroll</a></h2>
</div>
</li>
<li><i class="fa fa-inr  sky"></i>
<div class="ca-content">
<h2 class="ca-main">Pension</h2>
<h2 class="ca-sub"><a href="#" marked="1">Pension</a></h2>
</div>
</li>
<li><i class="fa fa-cart-plus red"></i>
<div class="ca-content">
<h2 class="ca-main">E-Procurement</h2>
<h2 class="ca-sub"><a href="#" marked="1">E-Procurement</a></h2>
</div>
</li>
</ul>
</div>
</div>
</section> <section class="project">
<div class="container">
<h2>Our Services</h2>
<div class="row">
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="projectdiv"><img src="<?php echo base_url(); ?>assets/Images/services-1.jpg" class="proimg" />
<h4>Clean India</h4>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="projectdiv"><img src="<?php echo base_url(); ?>assets/Images/services-2.jpg" class="proimg" />
<h4>Road Construction</h4>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="projectdiv"><img src="<?php echo base_url(); ?>assets/Images/services-3.jpg" class="proimg" />
<h4>Pesticide spraying</h4>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="projectdiv"><img src="<?php echo base_url(); ?>assets/Images/services-4.jpg" class="proimg" />
<h4>Dying in the shop</h4>
</div>
</div>
</div>
</div>
<center>
</section> <section class="weblink">
<div class="container">
<div class="important-link row">
<div class="row outerWrapper" id="carouse">
<div class="item"><a href="#" target="_blank" title="Click here to view more" class="external" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/rcues_1.jpg" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/urban_1.jpg" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/indiaGov.gif" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/rti-icon.gif" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/shasanadesh.jpg" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/suda.jpg" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/gov_up.jpg" /></a></div>
<div class="item"><a href="#" target="_blank" title="Click here to view more" rel="noopener"> <img alt="..." src="<?php echo base_url(); ?>assets/images/jansunawai.jpg" /></a></div>
</div>
</div>
</div>
</section>
<script>// <![CDATA[
$(document).ready(function() {
var comp = new RegExp(location.host);
$('.ext-lnks a').each(function(){
if(comp.test($(this).attr('href'))){
// a link that contains the current host 
$(this).addClass('local');
}
else{
// a link that does not contain the current host
$(this).addClass('external');
$(".no-alert a").removeClass('external');
$(".no-alert a").addClass('local');
}
});
$('.ext-lnks a').filter(function() {
return this.hostname && this.hostname !== location.hostname;
})
.click(function () {
$(this).attr('target', '_blank');
var x=window.confirm('You are about to leave the Official Website of  unnao Nagar Panchayat , Government of UP and view the content of an external website. unnao Nagar Panchayat is not responsible for the contents or reliability of externally linked website.');
var val = false;
if (x)
val = true;
else
val = false;
return val;
});
});
// ]]></script> 

<?php $this->load->view("footer");?>

