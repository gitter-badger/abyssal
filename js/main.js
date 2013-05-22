// JavaScript Document
$(window).load(function() {
	$(".splash1").css("display","none");
	$(".splash2").css("display","none");
	$(".splash3").css("display","none");
	$(".splash1").fadeIn(2000);
	$(".splash2").fadeIn(4000);
	$(".splash3").fadeIn(5000);
    $(".splash1").animate({opacity:'0'},4000);	
	$(".splash2").animate({opacity:'0'},2000);	
	$(".splash3").animate({opacity:'0',marginTop:'-150'},4000, function(){ 
		window.location.href = "home";});
			
});
    /*$(".loading").css("display", "none");
    $(".logo_main").fadeIn(3000);
    $(".logo_main").fadeOut(2000, function(){ 
		window.location.href = "home.php";});*/
function fadeIn()
{
	$("#main").css("display","none");
	$("#main").fadeIn(2000);	
}
function toggle()
{
	var height = document.getElementById("collection").style.height;
	if (height == "0%" || height == ""){
		show();
	}
	else {
		hide();
	}
}
function show()
{
	document.getElementById("collection").style.top = "-85%";	
	document.getElementById("collection").style.height = "80%";	
	document.getElementById("collection-toggle").style.color = "#fff";	
	document.getElementById("collection-toggle").style.textShadow = "-2px -2px 0 #777";
	document.getElementById("link-ext").style.backgroundColor ="rgba(175, 107, 128, 0.77)";
	document.getElementById("link-ext").style.boxShadow = "inset 0 0 12px #744150";
	document.getElementById("inner-panel").style.display = "block";	
	
}

function hide()
{
	document.getElementById("collection").style.top = "0%";	
	document.getElementById("collection").style.height = "0%";	
	document.getElementById("collection-toggle").style.color = "";	
	document.getElementById("collection-toggle").style.textShadow = "";
	document.getElementById("link-ext").style.backgroundColor ="";
	document.getElementById("link-ext").style.boxShadow = "";
	document.getElementById("inner-panel").style.display = "none";	
}

/* ============
	magnifier 
==============*/

function magnifye() {

  var native_width = 0;
  var native_height = 0;
  var mouse = {x: 0, y: 0};
  var magnify;
  var cur_img;

  var ui = {
    magniflier: $('.magnifier')
  };

  // Add the magnifying glass
  if (ui.magniflier.length) {
    var div = document.createElement('div');
    div.setAttribute('class', 'glass');
    ui.glass = $(div);

    $('body').append(div);
  }

  
  // All the magnifying will happen on "mousemove"

  var mouseMove = function(e) {
    var $el = $(this);

    // Container offset relative to document
    var magnify_offset = cur_img.offset();

    // Mouse position relative to container
    // pageX/pageY - container's offsetLeft/offetTop
    mouse.x = e.pageX - magnify_offset.left;
    mouse.y = e.pageY - magnify_offset.top;
    
    // The Magnifying glass should only show up when the mouse is inside
    // It is important to note that attaching mouseout and then hiding
    // the glass wont work cuz mouse will never be out due to the glass
    // being inside the parent and having a higher z-index (positioned above)
    if (
      mouse.x < cur_img.width() &&
      mouse.y < cur_img.height() &&
      mouse.x > 0 &&
      mouse.y > 0
      ) {

      magnify(e);
    }
    else {
      ui.glass.fadeOut(100);
    }

    return;
  };

  var magnify = function(e) {

    // The background position of div.glass will be
    // changed according to the position
    // of the mouse over the img.magniflier
    //
    // So we will get the ratio of the pixel
    // under the mouse with respect
    // to the image and use that to position the
    // large image inside the magnifying glass

    var rx = Math.round(mouse.x/cur_img.width()*native_width - ui.glass.width()/2)*-1;
    var ry = Math.round(mouse.y/cur_img.height()*native_height - ui.glass.height()/2)*-1;
    var bg_pos = rx + "px " + ry + "px";
    
    // Calculate pos for magnifying glass
    //
    // Easy Logic: Deduct half of width/height
    // from mouse pos.

    // var glass_left = mouse.x - ui.glass.width() / 2;
    // var glass_top  = mouse.y - ui.glass.height() / 2;
    var glass_left = e.pageX - ui.glass.width() / 2;
    var glass_top  = e.pageY - ui.glass.height() / 2;
    //console.log(glass_left, glass_top, bg_pos)
    // Now, if you hover on the image, you should
    // see the magnifying glass in action
    ui.glass.css({
      left: glass_left,
      top: glass_top,
      backgroundPosition: bg_pos
    });

    return;
  };

  $('.magnifier').on('mousemove', function() {
    ui.glass.fadeIn(100);
    
    cur_img = $(this);

    var large_img_loaded = cur_img.data('large-img-loaded');
    var src = cur_img.data('large') || cur_img.attr('src');

    // Set large-img-loaded to true
    // cur_img.data('large-img-loaded', true)

    if (src) {
      ui.glass.css({
        'background-image': 'url(' + src + ')',
        'background-repeat': 'no-repeat'
      });
    }

    // When the user hovers on the image, the script will first calculate
    // the native dimensions if they don't exist. Only after the native dimensions
    // are available, the script will show the zoomed version.
    //if(!native_width && !native_height) {

      if (!cur_img.data('native_width')) {
        // This will create a new image object with the same image as that in .small
        // We cannot directly get the dimensions from .small because of the 
        // width specified to 200px in the html. To get the actual dimensions we have
        // created this image object.
        var image_object = new Image();

        image_object.onload = function() {
          // This code is wrapped in the .load function which is important.
          // width and height of the object would return 0 if accessed before 
          // the image gets loaded.
          native_width = image_object.width;
          native_height = image_object.height;

          cur_img.data('native_width', native_width);
          cur_img.data('native_height', native_height);

          //console.log(native_width, native_height);

          mouseMove.apply(this, arguments);

          ui.glass.on('mousemove', mouseMove);
        };


        image_object.src = src;
        
        return;
      } else {

        native_width = cur_img.data('native_width');
        native_height = cur_img.data('native_height');
      }
    //}
    //console.log(native_width, native_height);

    mouseMove.apply(this, arguments);

    ui.glass.on('mousemove', mouseMove);
  });

  ui.glass.on('mouseout', function() {
    ui.glass.off('mousemove', mouseMove);
  });
}