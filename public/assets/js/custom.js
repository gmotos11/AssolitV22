$(function(){
    $('#subForm').ebcaptcha();
  });
  
  (function($){
  
      jQuery.fn.ebcaptcha = function(options){
  
          var element = this; 
          var input = this.find('#ebcaptchainput'); 
          var label = this.find('#ebcaptchatext'); 
                  $(element).find('button[type=submit]').attr('disabled','disabled'); 
  
          var randomNr1 = 0; 
          var randomNr2 = 0;
          var totalNr = 0;
  
  
          randomNr1 = Math.floor(Math.random()*10);
          randomNr2 = Math.floor(Math.random()*10);
          totalNr = randomNr1 + randomNr2;
          var texti = "What is "+randomNr1+" + "+randomNr2;
          $(label).text(texti);
          
      
          $(input).keyup(function(){
  
              var nr = $(this).val();
              if(nr==totalNr)
              {
                  //Si es correcto habilita el boton
                  $(element).find('button[type=submit]').removeAttr('disabled');                
              }
              else{
                                  //Si es incorrecto deshabilita el boton

                  $(element).find('button[type=submit]').attr('disabled','disabled');
              }
              
          });
  
          $(document).keypress(function(e)
          {
              if(e.which==13)
              {
                  if((element).find('button[type=submit]').is(':disabled')==true)
                  {
                      e.preventDefault();
                      return false;
                  }
              }
  
          });
  
      };
  
  })(jQuery);

/*function denyButton (){
    //console.log(document.getElementsByClassName("js-cookie-consent-agree")[0].parentElement);
    let parent = document.getElementsByClassName("js-cookie-consent-agree")[0].parentElement;
    let deny = document.createElement("a");
    deny.style = "margin-left: 20px;";
    deny.innerText = "Deny Cookies";
    deny.className = "cookie-buttons cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium";
    parent.appendChild(deny); 
}
denyButton()*/
