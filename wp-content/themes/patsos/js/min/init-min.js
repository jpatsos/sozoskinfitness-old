function cl(t){$.isArray(t)?$.each(t,function(t,e){console.log(e)}):console.log(t)}$.fn.exists=function(t){var e=[].slice.call(arguments,1);return this.length&&t.call(this,e),this},$(document).ready(function(){var t=$(".hamburger"),e=$(".drawer-mask"),n=$(".drawer"),o=$("body");t.on("click",function(t){$(this).toggleClass("is-active"),o.toggleClass("is-collapsed"),t.preventDefault()}),e.on("click",function(o){t.toggleClass("is-active"),e.toggleClass("toggled"),n.toggleClass("toggled"),o.preventDefault()}),$(".concerns").exists(function(){var t=$(this),e=$(".concern"),n=$(".concern-content"),o=0;e.on("click",function(){o=$(this).data("concern"),n.removeClass("is-active"),n.each(function(){return that=$(this),that.data("concern")===o?(that.addClass("is-active"),setTimeout(function(){$("html,body").animate({scrollTop:$("#1").offset().top},1e3)},100),!1):void 0}),$("#form-source").val($(this).find("h3").html())})}),$(function(){$("a[href*=#]:not([href=#])").on("click",function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length&&$("html,body").animate({scrollTop:e.offset().top},1e3)}})})});