var images = new Array ('images/man3.png', 'images/man2.png', 'images/man3.png');
var index = 1;
 
function rotateImage()
{
  $('#myImage').fadeOut('slow', function() 
  {
    $(this).attr('src', images[index]);
    
    $(this).fadeIn('slow', function() 
    {
      if (index == images.length-1)
      {
        index = 0;
      }
      else
      {
        index++;
      }
    });
  });
} 
 
$(document).ready(function()
{
  setInterval (rotateImage, 3500);
});




function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



