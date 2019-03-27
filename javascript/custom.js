$.noConflict();

function cambiar_texto(){
	jQuery('.signup').text("REGISTRAR");
	jQuery('.catalog').text("Catálogo");
	setTimeout(function() {
		jQuery('.ourcourses .tagline').text("Todos nuestros cursos disponibles listados a continuación");
	}, 500);
}

jQuery(document).ready(function($) {
try { cambiar_texto(); }catch(err) { }
try { submit_form(); }catch(err) { }

if($('body')){
    $('body').addClass('fixed-nav');
}
/*=====
    ======= Home Page Slider End============
============*/
    

/*=====
    ======= Back to top Start============
============*/ 

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#backtotop ').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $('#backtotop a').click(function() {
        $("html, body").animate({
            scrollTop: 0
        });
        return false;
    });
    
/*=====
    ======= Back to top End============
============*/ 
    
    
/*=====
    ======= Home Page Category Start============
============*/

    var frontpageCategoryNames = $('#frontpage-category-names').html();
    if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.defaultcategories > .container-fluid').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').css({
            'display': 'none'
        });
    };



    var frontpageCategoryNames = $('#frontpage-category-names').html();
    if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.customcategories > .container-fluid').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').remove();
    };
    if ($('#frontpage-category-names > h2')) {
        $('#frontpage-category-names > h2').addClass('all');
    }

    var elements = document.getElementsByClassName('all');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Course categories') {
                elements[i].innerHTML = "Top Specializations";
                break;
            }
        }
    }

    if ($('#frontpage-category-names > h2.all')) {
        $('#frontpage-category-names > h2.all').after('<p class="tagline">All Our Available Categories Listed Below</p>');
    }

 
    // course customization start

    try {


        var customCateg = jQuery(".customcategories");
        var subCateg = customCateg && customCateg.find(".subcategories");
        var ownItem = subCateg && subCateg.find(".owl-item");
        var categoryItem = ownItem && ownItem.find('.category');
        categoryItem.each(function(index, obj) {
            var numOfCourse = jQuery(obj).find(".numberofcourse").eq(0);
            var orgContent = numOfCourse.html();
            var numContent = orgContent !== undefined ? orgContent.replace(/[\])}[{(]/g, '') : '';
            var contentNode = jQuery(obj).find('.content');
            var course = numContent.indexOf(1) !== -1 ? "course" : "courses";
            if (numContent !== '') {
                jQuery("<span class='course-num'>" + numContent + " " + course + "</span>").insertAfter(contentNode);
            } else {
                jQuery("<span class='course-num'>0 course</span>").insertAfter(contentNode);
            }
            numOfCourse.addClass('hidden');
        });
    } catch (ignore) {}

    $(".customcategories > .container-fluid").append("<a class='seeall btn' href='course/'>See All</a>");

/*=====
    ======= Home Page Category End============
============*/

/*=====
    ======= Home Page All Courses Start============
============*/


    if ($('.frontpage-course-list-all').parent()) {
        $('.frontpage-course-list-all').parent().addClass("ourcourses");
    }
    if ($('.frontpage-course-list-all')) {
        $('.frontpage-course-list-all').addClass('row-fluid');
    }
    if ($('.ourcourses > h2')) {
        $('.ourcourses > h2').addClass('allcourses');
    }

    var elements = document.getElementsByClassName('allcourses');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Available courses') {
                elements[i].innerHTML = "Courses We Provided";
                break;
            }
        }
    }
    if ($('h2.allcourses')) {
        $('h2.allcourses').after('<p class="tagline">All Our Available Courses Listed Below</p>');
    }

    $('body #frontpage-course-list').each(function() {
        $(this).addClass('clearfix');
    });


    var ourCourses = $('.ourcourses').html();
    if (typeof ourCourses !== 'undefined' && ourCourses !== null) {
        if ($('#allcourses')) {
            $('#allcourses > .container-fluid').append('<div id="frontpage-course-list" class="ourcourses">' + ourCourses + '</div>');
        }
        if ($('#region-main .ourcourses')) {
            $('#region-main .ourcourses').remove();
        }

    };
    if ($('.ourcourses').length === 0) {
        if ($('#page #allcourses')) {
            $('#page #allcourses').remove();
        }
    }

    try {
        var mainWrapper = $('.frontpage-course-list-all, .frontpage-course-list-enrolled');
        if (mainWrapper) {
            mainWrapper.each(function(index, obj) {
                var coursebox = $(obj).find('.coursebox');
                if (coursebox) {
                    coursebox.each(function(index, obj) {
                        var courseimage = $(obj).find('.content .courseimage');
                        var findDiv = $(obj).find('.info');
                        if (courseimage.length > 0) {
                            courseimage.insertBefore(findDiv);
                        }
                    });
                }
            });
        }

    } catch (ignore) {}
    if ($(".frontpage-course-list-all > .coursebox")) {
        $(".frontpage-course-list-all > .coursebox").addClass("item");
    }
    if ($("#allcourses .frontpage-course-list-all > .coursebox")) {
        $("#allcourses .frontpage-course-list-all > .coursebox").wrapAll("<div id='owl-demo' class='owl-carousel owl-theme'></div>");
    }

    if ($('body').hasClass('dir-rtl') === true) {
        $('#owl-demo').addClass('owl-rtl');
    }



    $(".visitlink a > span").addClass("all");

    var elements = document.getElementsByClassName('all');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].innerHTML == 'Course') {
            elements[i].innerHTML = "Enter";


        }
    }

    /* Paging Morelink */
    if ($('.paging-morelink > a')) {
        $('.paging-morelink > a').addClass('paging-morelink-link');
    }
    var elements = document.getElementsByClassName('paging-morelink-link');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'All courses') {
                elements[i].innerHTML = "View all courses";
                break;
            }
        }
    }
    if ($(".paging-morelink-link")) {
        $(".paging-morelink-link").append(" <i class='fa fa-long-arrow-right' aria-hidden='true'></i>");
    }
    
/*=====
    ======= Home Page All Courses End============
============*/    

/*=====
    ======= More link for Custom Category and All Courses Start============
============*/

    // Configure/customize these variables.
    var showChar = 50; // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "More...";
    var lesstext = "...Less";


    $('.categorydescription, .inner-con').each(function(index, obj) {

        var tHTML = "";
        var teachers = $(obj).find('.teachers');
        if (teachers.length > 0) {
            var tHTML = teachers.html();
        }
        if ($(this).children('.teachers')) {
            $(this).children('.teachers').remove();
        }
        var content = $(this).html();

        if (content.length > showChar) {
            content = strip(content);

            function strip(html) {
                var tmp = document.createElement("DIV");
                tmp.innerHTML = html;
                return tmp.textContent || tmp.innerText;
            }
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + "<ul class='teachers'>" + tHTML + "</ul>" + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
            var teachersNode = $(this).children('.morecontent').children('span').children('.teachers');
            if (teachersNode) {
                var tInnerHTML = teachersNode.html();
                if (tInnerHTML === "") {
                    teachersNode.remove();
                }
            }

        }

    });

    $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
/*=====
    ======= More link for Custom Category and All Courses End============
============*/

/*=====
    ======= Home page Site News Start============
============*/

    if ($('#site-news-forum > h2')) {
        $('#site-news-forum > h2').addClass('newsheading');
    }

    var elements = document.getElementsByClassName('newsheading');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'Site announcements') {
                elements[i].innerHTML = "Special Announcements";
                break;
            }
        }
    }
    if ($('h2.newsheading')) {
        $('h2.newsheading').after('<p class="tagline">See All Site News Here</p>');
    }

    var siteNewsForum = $('#site-news-forum').html();
    if (typeof siteNewsForum !== 'undefined' && siteNewsForum !== null) {
        if ($('#news')) {
            $('#news > .container-fluid').append('<div id="site-news-forum">' + siteNewsForum + '</div>');
        }
        if ($('#region-main #site-news-forum')) {
            $('#region-main #site-news-forum').outerHTML= "";
        }

    };
    if ($('#site-news-forum').length === 0) {
        if ($('#page #news')) {
            $('#page #news').outerHTML= "";
        }
    }


    try{
        var _mainDiv = $(".author");
        if (_mainDiv) {
            for (var i = 0; i < _mainDiv.length; i++) {    
                if(_mainDiv[i].childNodes[2]){
                    if(_mainDiv[i].childNodes[2].nodeValue){
                        var _info = _mainDiv[i].childNodes[2].nodeValue; 
                        var _infoMain = _info.slice(3) ? _info.slice(3) : '';
                        if(_infoMain !== ''){
                            var _anchorEl = _mainDiv[i].childNodes[1];
                            if(_anchorEl){
                                $("<div class='content wst'>" + _infoMain + "</div>").insertAfter(_anchorEl);
                                
                            }
                            if(_mainDiv[i].childNodes[3]){
                                _mainDiv[i].childNodes[3].nodeValue = '';
                                
                                
                            }
                            if(_mainDiv[i].childNodes[0]){
                                _mainDiv[i].childNodes[0].nodeValue = '';
                                
                                
                            }
                        }
                    }
                }
            }
        }
    }catch(ignore){}


    // removing a tag
    if (jQuery("#site-news-forum > a")) {

        jQuery("#site-news-forum > a").each(function(index, obj) {
            var attr = this.getAttribute('id').substring(0, 1);
            if (attr === 'p') {
                this.outerHTML= "";
            }
        });

    }
    
/*=====
    ======= Home page Site News End============
============*/    

/*=====
    ======= Home page My Courses Start============
============*/

    if ($('.frontpage-course-list-enrolled')) {
        $('.frontpage-course-list-enrolled').parent().addClass("mycourses");
    }

    if ($('.mycourses > h2')) {
        $('.mycourses > h2').addClass('mycoursesheading');
    }

    var elements = document.getElementsByClassName('mycoursesheading');
    if (elements) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].innerHTML == 'My courses') {
                elements[i].innerHTML = "Enrolled Courses";
                break;
            }
        }
    }

    if ($('.mycourses > h2')) {
        $('.mycourses > h2').after('<p class="tagline">You Can Enroll Wide Range Of Courses In This Canvas To Full Fill Your Dreams.</p>');
    }

    var myCourses = $('.mycourses').html();
    if (typeof myCourses !== 'undefined' && myCourses !== null) {
        if ($('#enrolledcourses > .container-fluid')) {
            $('#enrolledcourses > .container-fluid').append('<div id="frontpage-course-list" class="mycourses">' + myCourses + '</div>');
        }
        if ($('#region-main .mycourses')) {
            $('#region-main .mycourses').remove();
        }

    };
    if ($('.mycourses').length === 0) {
        $('#page #enrolledcourses').remove();
    }



    $('.frontpage-course-list-enrolled .coursebox').addClass('span3');
    $('.frontpage-course-list-enrolled').addClass('clearfix');

    $(function() {
        var frontpageCourseListEnrolled = $('.frontpage-course-list-enrolled');
        var totalPageWidth = $(frontpageCourseListEnrolled).width();
        var courseBoxWidth = frontpageCourseListEnrolled.find('.coursebox:first').outerWidth(true);
        $('.frontpage-course-list-enrolled > .coursebox').addClass('tst');
        var allBoxes = frontpageCourseListEnrolled.find('.coursebox');
        var totalBoxes = allBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-enrolled"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="content-column span3 content-column-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.content-column-' + temp3).append($(allBoxes[temp2]).clone());
        }
        shadowPAGE.append('<div class="clear"></div>');
        frontpageCourseListEnrolled.html(shadowPAGE);
    });

    $(function() {


        $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').children().each(function() {
            var tagClass = $(this);
            // collum 1
            if (tagClass.hasClass('content-column-0')) {
                var divs = $('.content-column-0 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-1"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-1').each(function(idx, val) {
                        $(val).children().each(function(index, element) {
                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-1');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 2
            //for reverse
            if (tagClass.hasClass('content-column-1')) {
                var divs = $('.content-column-1 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-2"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {

                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-2').each(function(idx, val) {

                        $($(val).children().get().reverse()).each(function(index, element) {

                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-2');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }

                        });
                    });
                });
            };
            // collum 3
            if (tagClass.hasClass('content-column-2')) {
                var divs = $('.content-column-2 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-3"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {

                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-3').each(function(idx, val) {

                        $(val).children().each(function(index, element) {

                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-3');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 4
            //for reverse
            if (tagClass.hasClass('content-column-3')) {
                var divs = $('.content-column-3 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-4"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-4').each(function(idx, val) {
                        $($(val).children().get().reverse()).each(function(index, element) {
                            if (element.parentNode.children.length <= 1) {
                                $(element).addClass('main-color-4');
                            } else {
                                $(element).addClass('color-' + (++index));
                            }
                        });
                    });
                });
            };
            // collum 5
            if (tagClass.hasClass('content-column-4')) {
                var divs = $('.content-column-4 > .coursebox');
                for (var i = 0; i < divs.length; i += 4) {
                    divs.slice(i, i + 4).wrapAll('<div class="color-wrapper-5"></div>');
                };
                $('.frontpage-course-list-enrolled .shadow-frontpage-course-list-enrolled').each(function(i, v) {
                    $(v).attr('id', 'color-wrapper-' + (i + 1)).find('div.color-wrapper-5').each(function(idx, val) {
                        $(val).children().each(function(index, element) {
                            $(element).addClass('color-' + (++index));
                        });
                    });
                });
            };


        });
    });
/*=====
    ======= Home page My Courses End============
============*/

/*=====
    ======= Home page Student Section Start============
============*/

$("#colorful-background-image").colorfulTab({
    theme: "flatline",
    backgroundImage: "true",
    overlayColor: "#002F68",
    overlayOpacity: "0.8"
});

/*=====
    ======= Home page Student Section End============
============*/
    
/*=====
    ======= Stickyicons Section Start============
============*/
    
var stickyNavHeight = $('#stickyicons').height();
$('#stickyicons').css({
    'margin-top': Math.ceil((stickyNavHeight / 2) * -1)
});
$('#stickyicons li').each(function() {
    var linkEl = $(this).find('a'),
        textEl = $(this).find('span.stickynavtext');
    linkEl.hover(function() {
        textEl.stop().animate({
            right: '100%'
        }, 300)
    }, function() {
        textEl.stop().animate({
            right: -500
        }, 150)
    })
});
/*=====
    ======= Stickyicons Section End============
============*/
    
/*=====
    ======= Main Navigation Section Start============
============*/
    
if($("#navigation-wrapper .main-navigation-inner .nav")){
    $("#navigation-wrapper .main-navigation-inner .nav").addClass("main-menu theme-ddmenu");
    $("#navigation-wrapper .main-navigation-inner .nav").removeClass("nav");
}
if($("#navigation-wrapper .main-navigation-inner .main-menu")){
    $("#navigation-wrapper .main-navigation-inner .main-menu").attr({
        "data-animtype": 2, 
        "data-animspeed": 450
    });
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-menu").removeClass("dropdown-menu").addClass("dropdown-list");
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown a.dropdown-toggle b.caret").removeClass("caret").addClass("mobile-arrow");
}
if($("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-list li.dropdown-submenu")){
    $("#navigation-wrapper .main-navigation-inner .main-menu li.dropdown ul.dropdown-list li.dropdown-submenu").removeClass("dropdown-submenu").addClass("dropdown");
}
    
/*=====
    ======= Main Navigation Section End============
============*/
    
});
jQuery(document).ready(function($) {
	try{ seccion_nosotros(); }catch(err) { console.log(err); }
});
jQuery('.customsearchx .item').hover(
	function(){
		var $this = jQuery(this);
		expand($this);
	},
	function(){
		var $this = jQuery(this);
		collapse($this);
	}
);
if (jQuery(window).width() < 767) {
	jQuery('#social_fixed').removeClass('social_fixed');
}
jQuery(window).resize(function() {
	if (jQuery(window).width() < 767) {
		jQuery('#social_fixed').removeClass('social_fixed');
	}else {
		jQuery('#social_fixed').addClass('social_fixed');
	}
});
function expand($elem){
	var angle = 0;
	var t = setInterval(function () {
		if(angle == 1440){
			clearInterval(t);
			return;
		}
		angle += 40;
		jQuery('.customsearchx .item .link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
	},10);
	
	var s="380px";
	if(parseInt($(document).width())>757 && parseInt($(document).width())<911){
		s="380px";
	}else if(parseInt($(document).width())<757){
		s="290px";
	}
	
	$elem.stop().animate({width:s}, 1000)
	.find('.item_content').fadeIn(400,function(){
		jQuery(this).find('p').stop(true,true).fadeIn(600);
	});
}
function collapse($elem){
	var angle = 1440;
	var t = setInterval(function () {
		if(angle == 0){
			clearInterval(t);
			return;
		}
		angle -= 40;
		jQuery('.customsearchx .item .link',$elem).stop().animate({rotate: '+=40deg'}, 0);
	},10);
	$elem.stop().animate({width:'40px'}, 1000)
	.find('.item_content').stop(true,true).fadeOut()
          .find('p').stop(true,true).fadeOut();
}
function seccion_nosotros(){
	jQuery('#about .about_content .about_title').click(function(){
		var id = $(this).attr('id');
		$('#about .about_content .about_title').removeClass('selected_about_title');
		$(this).addClass('selected_about_title');
		$('#about .about_content .about_text').hide();
		$('.'+id).show();
	});
}
function isEmail(email) {
  var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  var rtn = regex.test(email);
  if(email==""){
	rtn = false;
  }
  return rtn;
}
function isName(name) {
  var regex = /^([àèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑa-zA-Z ]+)$/;
  return regex.test(name);
}
function isMessage(message) {
  var regex = /^([àèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑa-zA-Z0-9\-\.\,\(\)\@\:\/ ]+)$/;
  return regex.test(message);
}
var google_recaptcha=false;
function google_captcha(){
	google_recaptcha=true;
}
function submit_form(){
	jQuery('#submit_map input[type="button"]').click(function(){
		jQuery('.nombre_error').hide();
		jQuery('.correo_error').hide();
		jQuery('.mensaje_error').hide();
		jQuery('.captcha_error').hide();
		//
		var nombre = jQuery('#submit_map input[name="nombre"]').val();
		var correo = jQuery('#submit_map input[name="correo"]').val();
		var mensaje = jQuery('#submit_map textarea[name="mensaje"]').val();
		//
		var name = isName(nombre);
		var email = isEmail(correo);
		var message = isMessage(mensaje);
		if(name && email && message && google_recaptcha){
			jQuery('.usac_send_email').fadeIn(300);
			/* sending email */
			var key = grecaptcha.getResponse();
			$.ajax({
				type: "POST",
				url: jQuery('#submit_map').attr('action'),
				data: {
					nombre: nombre,
					correo: correo,
					mensaje: mensaje,
					captcha: grecaptcha.getResponse()
				},
				success: function(result) {
					var obj = JSON.parse(result);
					if(obj.result=="OK"){
						jQuery('#usac_send_text_message').html("Mensaje enviado correctamente.");
						jQuery('#submit_map input[name="nombre"]').val("");
						jQuery('#submit_map input[name="correo"]').val("");
						jQuery('#submit_map textarea[name="mensaje"]').val("");
					}else if(obj.result=="NOT OK"){
						if(obj.code==1){
							jQuery('#usac_send_text_message').html("Valores del formulario incorrectos.");
						}else if(obj.code==2){
							jQuery('#usac_send_text_message').html("Recaptcha incorrecto. ¿Eres un rebot?");
						}if(obj.code==4){
							jQuery('#usac_send_text_message').html("Intentalo de nuevo más tarde.");
						}if(obj.code==5){
							jQuery('#usac_send_text_message').html("Error interno.");
						}
					}
					setTimeout(function() {
						jQuery('.usac_send_email').fadeOut(300);
						grecaptcha.reset();
					}, 2500);
				},
				error: function (request, status, error) {
					console.log(request);
					console.log(status);
					console.log(error);
					jQuery('#usac_send_text_message').html("Ha sucedido un error.");
					setTimeout(function() {
						jQuery('.usac_send_email').fadeOut(300);
						grecaptcha.reset();
					}, 2500);
				}
			})
		}else{
			if(name==false){
				jQuery('.nombre_error').fadeIn(300);
			}
			if(email==false){
				jQuery('.correo_error').fadeIn(300);
			}
			if(message==false){
				jQuery('.mensaje_error').fadeIn(300);
			}
			if(google_recaptcha==false){
				jQuery('.captcha_error').fadeIn(300);
			}
		}
	});
}	

