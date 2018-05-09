$(document).ready(function(){
  var headCout = 0, eyeCount = 0, noseCout = 0, mouthCount = 0;

  background();

  $('#head').click(function(){
    if(headCout < 9){
      $('#head').animate({left:"-=367px"},500);
      headCout+=1;
    }else{
      $('#head').animate({left:"0px"},500);
      headCout = 0;
    }
  });

  $('#eyes').click(function(){
    if(eyeCount < 9){
      $('#eyes').animate({left:"-=367px"},500);
      eyeCount+=1;
    }else{
      $('#eyes').animate({left:"0px"},500);
      eyeCount = 0;
    }
  });

  $('#nose').click(function(){
    if(noseCout < 9){
      $('#nose').animate({left:"-=367px"},500);
      noseCout+=1;
    }else{
      $('#nose').animate({left:"0px"},500);
      noseCout = 0;
    }
  });

  $('#mouth').click(function(){
    if(mouthCount < 9){
      $('#mouth').animate({left:"-=367px"},500);
      mouthCount+=1;
    }else{
      $('#mouth').animate({left:"0px"},500);
      mouthCount = 0;
    }
  });
});

function background(){
  $('#rep').fadeIn(5000).fadeOut(5000);
  setTimeout("background()", 1000);
};
