/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp-head()
this file will be called automatically in the footer so as not to
slow the page load.

*/// Modernizr.load loading the right scripts only if you need them
Modernizr.load([{test:Modernizr.borderradius,nope:["libs/selectivizr-min.js"]}]);jQuery(document).ready(function(a){});jQuery(function(a){if(!Modernizr.input.placeholder){a(this).find("[placeholder]").each(function(){a(this).val(a(this).attr("placeholder"))});a("[placeholder]").focus(function(){if(a(this).val()===a(this).attr("placeholder")){a(this).val("");a(this).removeClass("placeholder")}}).blur(function(){if(a(this).val()===""||a(this).val()===a(this).attr("placeholder")){a(this).val(a(this).attr("placeholder"));a(this).addClass("placeholder")}});a("[placeholder]").closest("form").submit(function(){a(this).find("[placeholder]").each(function(){a(this).val()===a(this).attr("placeholder")&&a(this).val("")})})}});(function(a){function l(){c.setAttribute("content",f);g=!0}function m(){c.setAttribute("content",e);g=!1}function n(b){k=b.accelerationIncludingGravity;h=Math.abs(k.x);i=Math.abs(k.y);j=Math.abs(k.z);!a.orientation&&(h>7||(j>6&&i<8||j<8&&i>6)&&h>5)?g&&m():g||l()}if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1))return;var b=a.document;if(!b.querySelector)return;var c=b.querySelector("meta[name=viewport]"),d=c&&c.getAttribute("content"),e=d+",maximum-scale=1",f=d+",maximum-scale=10",g=!0,h,i,j,k;if(!c)return;a.addEventListener("orientationchange",l,!1);a.addEventListener("devicemotion",n,!1)})(this);