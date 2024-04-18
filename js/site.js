// jQuery scroll-to plugin
!function(o,e,t){"undefined"!=typeof module&&module.exports?module.exports=t():"function"==typeof define&&define.amd?define(t):e[o]=t()}("jquery-scrollto",this,function(){var o,e,t;return o=e=window.jQuery||require("jquery"),e.propHooks.scrollTop=e.propHooks.scrollLeft={get:function(o,e){var t=null;return("HTML"===o.tagName||"BODY"===o.tagName)&&("scrollLeft"===e?t=window.scrollX:"scrollTop"===e&&(t=window.scrollY)),null==t&&(t=o[e]),t}},e.Tween.propHooks.scrollTop=e.Tween.propHooks.scrollLeft={get:function(o){return e.propHooks.scrollTop.get(o.elem,o.prop)},set:function(o){"HTML"===o.elem.tagName||"BODY"===o.elem.tagName?(o.options.bodyScrollLeft=o.options.bodyScrollLeft||window.scrollX,o.options.bodyScrollTop=o.options.bodyScrollTop||window.scrollY,"scrollLeft"===o.prop?o.options.bodyScrollLeft=Math.round(o.now):"scrollTop"===o.prop&&(o.options.bodyScrollTop=Math.round(o.now)),window.scrollTo(o.options.bodyScrollLeft,o.options.bodyScrollTop)):o.elem.nodeType&&o.elem.parentNode&&(o.elem[o.prop]=o.now)}},t={config:{duration:400,easing:"swing",callback:void 0,durationMode:"each",offsetTop:0,offsetLeft:0},configure:function(o){return e.extend(t.config,o||{}),this},scroll:function(o,l){var r,n,s,i,p,c,f,a,d,u,g,h,T,w,m,y,L,b;return r=o.pop(),n=r.$container,s=r.$target,c=n.prop("tagName"),i=e("<span/>").css({position:"absolute",top:"0px",left:"0px"}),p=n.css("position"),n.css({position:"relative"}),i.appendTo(n),g=i.offset().top,h=s.offset().top,T=h-g-parseInt(l.offsetTop,10),w=i.offset().left,m=s.offset().left,y=m-w-parseInt(l.offsetLeft,10),f=n.prop("scrollTop"),a=n.prop("scrollLeft"),i.remove(),n.css({position:p}),L={},b=function(){return 0===o.length?"function"==typeof l.callback&&l.callback():t.scroll(o,l),!0},l.onlyIfOutside&&(d=f+n.height(),u=a+n.width(),T>f&&d>T&&(T=f),y>a&&u>y&&(y=a)),T!==f&&(L.scrollTop=T),y!==a&&(L.scrollLeft=y),n.prop("scrollHeight")===n.width()&&delete L.scrollTop,n.prop("scrollWidth")===n.width()&&delete L.scrollLeft,null!=L.scrollTop||null!=L.scrollLeft?n.animate(L,{duration:l.duration,easing:l.easing,complete:b}):b(),!0},fn:function(o){var l,r,n,s;l=[];var i=e(this);if(0===i.length)return this;for(r=e.extend({},t.config,o),n=i.parent(),s=n.get(0);1===n.length&&s!==document.body&&s!==document;){var p,c;p="visible"!==n.css("overflow-y")&&s.scrollHeight!==s.clientHeight,c="visible"!==n.css("overflow-x")&&s.scrollWidth!==s.clientWidth,(p||c)&&(l.push({$container:n,$target:i}),i=n),n=n.parent(),s=n.get(0)}return l.push({$container:e("html"),$target:i}),"all"===r.durationMode&&(r.duration/=l.length),t.scroll(l,r),this}},e.ScrollTo=e.ScrollTo||t,e.fn.ScrollTo=e.fn.ScrollTo||t.fn,t});

jQuery(document).ready(function($) {


// ------------------------------------------------------------------------
// Filters
// ------------------------------------------------------------------------

function filter() {
	if ($('.cultural-toggle input').is(':checked')) {
		$('.cities-list').addClass('cultural');
	} else {
		$('.cities-list').removeClass('cultural');
	}
	if ($('.natural-toggle input').is(':checked')) {
		$('.cities-list').addClass('natural');
	} else {
		$('.cities-list').removeClass('natural');
	}
	if ($('.unesco-toggle input').is(':checked')) {
		$('.cities-list').addClass('unesco');
	} else {
		$('.cities-list').removeClass('unesco');
	}
}

window.onload = function () { filter(); }
$('.filters').click(function() {
	filter();
});



// ------------------------------------------------------------------------
// Heritage Sites (on city pages)
// ------------------------------------------------------------------------

$('.more-sites li:first-child').addClass('active');

var numSites = $('.site').length;
for (var i=0; i<=numSites; i++) {
    (function(i){

        $('.more-sites li:nth-child('+i+')').click(function() {
        	$('.site').hide();
            $('.sites div:nth-child('+i+')').show();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('header').ScrollTo({
	            duration: 500
	        });
        });

        var age = $('.site:nth-child('+i+') .age').attr('data-age');
        var agePos = (age / 3);
		$('.site:nth-child('+i+') .age').css('right',agePos+'%');

		var year = (2018 - age);
		$('.site:nth-child('+i+') .age span').text(year);

    })(i);
}



// ------------------------------------------------------------------------
// Make Facebook/Twitter buttons open in popup window
// ------------------------------------------------------------------------
$('.fb, .tweet').click(function (event) {
    if (event.preventDefault) { event.preventDefault(); } else { event.returnValue = false; }
    window.open($(this).attr("href"), "popupWindow", "width=600,height=600,scrollbars=yes");
});


});

