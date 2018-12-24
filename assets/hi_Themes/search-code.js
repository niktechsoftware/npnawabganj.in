//// Date Time Function
	
tday=new Array("रविवार","सोमवार","मंगलवार","बुधवार","गुरुवार","शुक्रवार","शनिवार");
tmonth=new Array("जनवरी","फ़रवरी","मार्च","अप्रैल","मई","जून","जुलाई","अगस्त","सितम्बर","अक्टूबर","नवंबर","दिसम्बर");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('datetime').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}





$(document).ready(function () {
$( ".srch-box" ).wrap( "<form action='article/hi/search-result'></form>" );
$(".hi-btn").click( function () {
var cfrm = confirm("You are being redirected to English Version of Nagar Palika Parishad Akbarpur, Uttar Pradesh Website.");
if(cfrm==true)
{
window.location(this.window.url+"/hi");
return true;
}
else if(cfrm==false)
{
return false;
}
//alert(crm);
});
});

$(document).ready(function() {
var comp = new RegExp(location.host);
$('a').each(function(){
if(comp.test($(this).attr('href'))){
// a link that contains the current host 
$(this).addClass('local');
}
else{
// a link that does not contain the current host
$(this).addClass('external');
}
});

$('a').filter(function() {
return this.hostname && this.hostname !== location.hostname;
})
.click(function () {
$(this).attr('target', '_blank');
var x=window.confirm('आपको उत्तर प्रदेश नगर पालिका परिषद, अकबरपुर की वेबसाइट से हस्तानांतरित किया जा रहा है और अब आप किसी बाहरी वेबसाइट का कंटेंट देखेंगे');
var val = false;
if (x)
val = true;
else
val = false;
return val;
});
            
            $('input[name="Subscribe"]').click(function () {
                debugger;
                var emailid = $('input[name="newsletteremail"]').val();

                chk = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
                if (emailid == "") {
                    isC = false;
                    alert("ई-मेल आईडी की आवश्यकता");
                    return false;
                }
                if (chk.test(emailid)) {

                }
                else {
                    alert("अमान्य ई-मेल");
                    return false;
                }


                var data = { email: emailid, flag: 'en' };

                $.ajax({
                    type: "POST",
                    url: "./index.aspx/Insertnewsletter",
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        alert("सफलतापूर्वक सब्सक्राइब कर दिया गया है");
                        $('input[name="newsletteremail"]').val('');
                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });

            });
        
});