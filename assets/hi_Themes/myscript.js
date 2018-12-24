textResizer = $(function (){

// Set Cookie
var docCookies = {
getItem: function (sKey) {
if (!sKey) { return null; }
return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
},
setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
var sExpires = "";
if (vEnd) {
switch (vEnd.constructor) {
case Number:
sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
break;
case String:
sExpires = "; expires=" + vEnd;
break;
case Date:
sExpires = "; expires=" + vEnd.toUTCString();
break;
}
}
document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
return true;
},
removeItem: function (sKey, sPath, sDomain) {
if (!this.hasItem(sKey)) { return false; }
document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
return true;
},
hasItem: function (sKey) {
if (!sKey) { return false; }
return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
},
keys: function () {
var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
return aKeys;
}
};

function changeSize(element, size) {
var current = parseInt(docCookies.getItem("FontSize"));
var newSize;
if (current !== "") {
current = parseInt(element.css('font-size'));
}
if (size === 'decrease') {
if (current > 12) {
//alert(current)
newSize = current - 2;
}
} else if (size === 'increase') {
if (current < 22) {
//alert(current)
newSize = current + 2;
}
} else if (size === 'resetf') {
if (current) {
//alert(current)
newSize = 14;
}
}

element.css('font-size', newSize + 'px');
docCookies.setItem("FontSize", newSize, Infinity);
}

$('#decreaseFont').click(function (e) {

changeSize(text, 'decrease');
e.preventDefault();
});

$('#increaseFont').click(function (e) {
changeSize(text, 'increase');
e.preventDefault();
});

$('#resetFont').click(function (e) {
changeSize(text, 'resetf');
e.preventDefault();
});

var text = $("body"),
fontSize = docCookies.getItem("FontSize");
if (fontSize) {
text.css('font-size', fontSize + 'px');
}
});
/*-----------*/



$(document).ready(function () {
    //alert("aaa");
    if ($.cookie("css")) {
        $("link").attr("href", $.cookie("css"));
    }
    $(".defTheme").click(function () {
        $("link").attr("href", $(this).attr('href'));
        $.cookie("css", $(this).attr('href'));
        return false;
    });
    //$(".srch-box").wrap("<form action='article/en/search-result'></form>");
//    $(".hi-btn").click(function () {
//        var cfrm = confirm("वेबसाइट के हिंदी संस्करण पर हस्तानांतरित किया जा रहा है");
//        if (cfrm == true) {
//            window.location(this.window.url + "/hi");
//            return true;
//        }
//        else if (cfrm == false) {
//            return false;
//        }
//        //alert(crm);
//    });

    var comp = new RegExp(location.host);
    $('a').each(function () {
        if (comp.test($(this).attr('href'))) {
            // a link that contains the current host 
            $(this).addClass('local');
        }
        else {
            // a link that does not contain the current host
            $(this).addClass('external');
        }
    });

    //$('a').filter(function () {
//        return this.hostname && this.hostname !== location.hostname;
//    })
//    .click(function () {
//        $(this).attr('target', '_blank');
//        var x = window.confirm('You are about to leave the website. and view the content of an external website.');
//        var val = false;
//        if (x)
//            val = true;
//        else
//            val = false;
//        return val;
//    });
});


$(window).scroll(function () {
    var height = $(window).scrollTop();
    if (height > 150) {
        $(".top-nav").addClass("pwdFxd");
    }
    if (height < 150) {
        $(".top-nav").removeClass("pwdFxd");
    }
});



