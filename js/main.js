function sendForm(e){var i=e,o=new FormData(e);$(i).attr("data-metrika-target");$.ajax({type:"POST",url:"/mail/send.php",contentType:!1,processData:!1,data:o,dataType:"json",success:function(o){if(console.log(o),"success"==o.result){var r=$(i).find('input[name="name"]').val(),s=$(i).find('input[name="phone"]').val();roistatGoal.reach({name:r,text:"Заявка",phone:s}),$("input").removeClass("error_input"),$(".modal").on("show.bs.modal",function(){$(".modal").not($(this)).each(function(){$(this).modal("hide")})}),$("#myModal_spasibo").modal("show"),$(i).find("input").val(""),ym(68064520,"reachGoal","id1")}else{for(var a in $("input").removeClass("error_input"),o.text_error)$(e).find('input[name="'+a+'"]').addClass("error_input"),0}},error:function(e){console.log(e)},beforeSend:function(){console.log("loading..."),$(".modal").prepend('<div class="loader">dd</div>')},complete:function(){$(".loader").remove()}})}$(document).ready(function(){$(".thumb-item").brazzersCarousel(),$(".obzor__slider").slick({slidesToShow:1,slidesToScroll:1,initialSlide:2,arrows:!1,fade:!0,swipe:!1,asNavFor:".obzor__navslider"}),$(".obzor__navslider").slick({slidesToShow:0,slidesToScroll:1,asNavFor:".obzor__slider",dots:!1,infinite:!1,initialSlide:2,centerMode:!0,swipe:!1,focusOnSelect:!0,prevArrow:$(".obzor__navleft"),nextArrow:$(".obzor__navright")});try{$(".mainslider__slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,autoplay:!1,autoplaySpeed:3e3,arrows:!0,dots:!0,prevArrow:$(".mainslider__left"),nextArrow:$(".mainslider__right"),asNavFor:".mainslider-nav"}),$(".mainslider-nav").slick({infinite:!0,slidesToShow:0,slidesToScroll:0,asNavFor:".mainslider__slider",dots:!1,arrows:!1,centerMode:!1,focusOnSelect:!0})}catch(e){}try{$(".carslider__slider").each(function(){$(this).slick({infinite:!0,slidesToShow:1,slidesToScroll:1,autoplay:!1,autoplaySpeed:3e3,arrows:!0,dots:!1,fade:!0,asNavFor:$(this).parent().parent().parent().find(".carslider-nav")})}),$(".carslider-nav").each(function(){$(this).slick({infinite:!0,slidesToShow:0,slidesToScroll:0,asNavFor:$(this).parent().parent().find(".carslider__slider"),dots:!1,arrows:!1,centerMode:!1,focusOnSelect:!0})})}catch(e){}$(".carslider__right").click(function(e){$(this).parent().parent().find(".slick-slider").slick("slickNext")}),$(".carslider__left").click(function(e){$(this).parent().parent().find(".slick-slider").slick("slickPrev")}),setTimeout(function(){[].forEach.call(document.querySelectorAll("img[data-src]"),function(e){e.setAttribute("src",e.getAttribute("data-src")),e.onload=function(){e.removeAttribute("data-src")}})},2e3),(new WOW).init(),$("input[type=tel]").mask("+7 (999) 999-99-99")}),$(document).ready(function(){function e(){$(".dom-popup").css("display","none")}$(".close-modal").on("click",e),$("#modal_close_href").on("click",e)});