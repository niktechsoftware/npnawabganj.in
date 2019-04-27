<footer class="footer">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-8 ">
<div class="footer-left"><a href="#">Terms &amp; Conditions</a> | Copyright 2019-20 </a> </div>
<div class="footer-text hidden-xs">Content on this website is published and managed by Nagar Panchayat  Nawabgunj Unnao, Uttar Pradesh.<br /> For any query regarding this website, Please contact Office of Nagar Panchayat Nawabgunj Unnao, Uttar Pradesh.</div>
</div>
<div class="col-md-4 col-sm-4 hidden-xs">
<div class="footer-right">
<div class="visitor ">You are Visitor No. : <a title="shopify analytics tool" href="http://statcounter.com/shopify/" target="_blank" rel="noopener"><img src="http://c.statcounter.com/10982739/0/d4817bf0/0/" alt="shopify analytics tool" style="border: none;" /></a></div>
<div class="updated">Last reviewed and updated on : Tuesday, may 20 2019  4:14PM</div>
<div style="color: #fff;">Designed &amp; Developed by: <a href="http://niktechsoftware.com" target="_blank" class="external" rel="noopener"><strong style="color: #cb1111;"><i>Niktech Software Solutions</div>
</div>
</div>
</div>
</div>
</footer> <div role="dialog" id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content" style="margin-top: 100px;">
<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<div class="thumbnail center well well-small text-center">
<h2>E-Newsletter</h2>
<p>Subscribe to our monthly E-Newsletter and stay tuned.</p>
<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span> <input placeholder="your@email.com" name="newsletteremail" id="" class="form-control" type="text" /></div>
<br /> <input class="btn btn-primary" value="Subscribe Now!" name="Subscribe" type="button" /></div>
</div>
<div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
</div>
</div>
</div>
        </div>
    </form>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Scripts/jquery-1.9.1.min.js"></script>
    <noscript class="hidden">
    	Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Scripts/jquery-ui.min-1.9.1.js"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script src="<?php echo base_url(); ?>assets/site/writereaddata/config/sitejs.js" type="text/javascript"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript">
                $(document).ready(function () {
                    if (typeof myContentLoad == 'function') {
                        myContentLoad();
                    }
                });
            </script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript" src="js/superfish.js"></script>
    <noscript class="hidden">
    	Your browser does not support JavaScript
    </noscript>
           <script type="text/javascript" src="<?php echo base_url(); ?>assets/engine1/wowslider.js"></script> 
           <script type="text/javascript" src="<?php echo base_url(); ?>assets/engine1/script.js"></script>
    <script type="text/javascript">
    
            (function ($) { //create closure so we can safely use $ as alias for jQuery
    
                $(document).ready(function () {
    
                    // initialise plugin
                    var example = $('#nav').superfish({
                        //add options here if required
                    });
    
                    // buttons to demonstrate Superfish's public methods
                    $('.destroy').on('click', function () {
                        example.superfish('destroy');
                    });
    
                    $('.init').on('click', function () {
                        example.superfish();
                    });
    
                    $('.open').on('click', function () {
                        example.children('li:first').superfish('show');
                    });
    
                    $('.close').on('click', function () {
                        example.children('li:first').superfish('hide');
                    });
                });
    
            })(jQuery);
    
    
        </script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script> <!--For Cookies-->
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.textresizer.js"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> <!--bootstrap.min.js-->
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script src="<?php echo base_url(); ?>assets/js/news-scroller.js"></script> <!--bootstrap.min.js-->
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script src="<?php echo base_url(); ?>assets/js/bxslider.min.js" type="text/javascript"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  pager:false,
 captions: true
});
});
</script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
           <!-- <script type="text/javascript" src="Scripts/jquery-site.min.js"></script>-->
     
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/Scripts/jquery-ui.min-site.js"></script>
            <script src="<?php echo base_url(); ?>assets/site/writereaddata/config/sitejs.js" type="text/javascript"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    if (typeof myContentLoad == 'function') {
                        myContentLoad();
                    }

                    var mk = $(location).attr('href')
                    $('.skiper').attr('href', mk + "#main-content"); 
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function () {

                    $('input[name="Subscribe"]').click(function () {
                        debugger;
                        var emailid = $('input[name="newsletteremail"]').val();
                        var webdept = $('#hdnWbDept').val();

                        chk = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
                        if (emailid == "") {
                            isC = false;
                            alert("Email Address is required.");
                            return false;
                        }
                        if (chk.test(emailid)) {

                        }
                        else {
                            alert("Invalid Email Address.");
                            return false;
                        }


                        var data = { email: emailid, flag: 'en', wd: webdept };

                        $.ajax({
                            type: "POST",
                            url: "./index.aspx/Insertnewsletter",
                            data: JSON.stringify(data),
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function (response) {
                                alert("Subscribed successfully.");
                                $('input[name="newsletteremail"]').val('');
                            },
                            failure: function (response) {
                                alert(response.d);
                            }
                        });

                    });
                });
            </script>
                <script>
	$(document).ready(function(){
		if($.cookie("css")) {
			$("link").attr("href",$.cookie("css"));
		}
		$(".defTheme").click(function() { 
			$("link").attr("href",$(this).attr('href'));
			$.cookie("css",$(this).attr('href'));
			return false;
		});
		
		
});
$(window).scroll(function() {
	var height = $(window).scrollTop();
	if(height  > 150) {
		$(".top-nav").addClass("pwdFxd");
		}
	if(height  < 150) {
	$(".top-nav").removeClass("pwdFxd");
	}
});
</script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/waltzerjs.js"></script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#carouse').waltzer({scroll:1, auto: false,
		leftNavBtn: 'left-nav-btn',
		rightNavBtn: 'right-nav-btn'});
});

</script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
    <script type="text/javascript">
$(document).ready(function(){
$(".nav ul").addClass("dropdown-menu")
$(".dropdown a").addClass("dropdown-toggle")
$(".dropdown ul a").removeClass("dropdown-toggle")
$(".dropdown a").attr("data-toggle","dropdown")
$(".dropdown a").attr("role","button")
$(".dropdown a").attr("aria-expanded","false")
$(".dropdown ul li a").removeAttr("data-toggle","dropdown")
$(".dropdown ul li a").removeAttr("role","button")
$(".dropdown ul li a").removeAttr("aria-expanded","false")
});
</script>
    <noscript class="hidden">
    Your browser does not support JavaScript
    </noscript>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/en_Themes/myscript.js"></script><script type="text/javascript" src="en_Themes/search-code.js"></script>
   
    </div>
</body>

</html>