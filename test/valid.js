$(document).ready(function(){
  $("#username").blur(function() { chkname('username'); });
  $("#passcode").blur(function() { chkname('passcode'); });
  $("#passcode2").blur(function() { chkname('passcode2'); });
  $("#question").blur(function() { chkselect('question'); });
  $("#answer").blur(function() { chkname('answer'); });
  $("#role").blur(function() { chkselect('role'); });
  $('.pop_but').click(function() { chkvalid(); })
 });    
//==================OnClick Validations==========================
function chkvalid()
{
 $val=$("#terms:checked").val();
 if($val==undefined){
    setalert('termsspan',$termserr);
}else{
  clearalert('termsspan');
var ousr=chkname('username');
var opas=chkname('passcode');
var orepas=  chkname('passcode2');
var oque=  chkselect('question');
var oans=  chkname('answer');
var orol=  chkselect('role');
if((ousr==true) && (opas==true) && (orepas==true)&&(oque==true) && (oans==true) && (orol==true)){
 if(($("#username").val()!="") &&($("#passcode").val()!="") &&($("#passcode2").val()!="")&&($("#question").val()!="") &&($("#answer").val()!="")&&($("#role").val()!="")){
     if(($("#usernamespan").val()=="")&&($("#passcodespan").val()=="")&&($("#passcode2span").val()=="")&& ($("#questionspan").val()=="")&&($("#answerspan").val()=="")&&($("#rolespan").val()=="")&& ($("#termsspan").val()==""))
      {
   $('#success').html('<center><h1><font color=green>Welcome to HScripts.com</h1><br><h4><font color=red>Submission Successful!</font></h4></center>')
     }
   }
  }
 }
}//==================Validate Re type password==========================
function chkpass(data)
{
 if($('#passcode').val()==data)
  return true;
 else
  return false;
} 
//==================Validate Email==========================
/*function isValidEmail(email)
{
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 if(!filter.test(email))
		return false;
	 else
		return true;
}*/	

//==================Validate Number==========================
/*function validatenum(data)
{
        if(data.match('^(0|[1-9][0-9]*)$'))
               return true;
         else 
             return false;
}*/
//==================Validate Nunmber==========================

//==================Validate Name==========================
function checkSpecialChar(data){
	var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?~_";
	isvalid=true;
	for (var i = 0; i < data.length; i++) {
		if (iChars.indexOf(data.charAt(i)) != -1) {isvalid=false;}
	}return isvalid;
}
function validateName(data){
		  if(data.length>0&&checkSpecialChar(data)){
      var isvalid=true;
      var iChars = "1234567890"; 
			for (var i = 0; i < data.length; i++) {
		 if (iChars.indexOf(data.charAt(i)) != -1) {isvalid=false;}
}	
			return isvalid;
}
		else{return false;
}
}

//==================Validate Name==========================

function chkname(nameid)
{
 $value=$('#'+nameid).val();
 
 if($value=="")
  {
  setalert(nameid+'span',$empty);     
       }
   else{
    	if(nameid=='username') {
           $valid=true;
      }else if(nameid=='passcode') {
           $valid=true;
      }else if(nameid=='passcode2') {
           $valid=chkpass($value);
        $errmsg=$passworderr;
      }    
      if($valid==false)
         {
            setalert(nameid+'span',$errmsg);       
                return false;
        } 
       else{
          
            clearalert(nameid+'span');          
           return true;
       }
    }
}
//==================Validate Gender==========================
/*function chkselect(gender)
{
   $value=$('#'+gender).val();
  
  if($value=="Choose Gender" || $value=="" )
   {
    setalert(gender+'span',$gendererr);
     return false;
    }
  else{
            clearalert(gender+'span');
            return true;
   }


}*/
//==================Validate Gender==========================

function setalert(idd,errmsg)
{
  $('.'+idd+'imgg').css({
        "background":"url(images/error_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"5px"
    });
$('#'+idd).html(errmsg);
 
  return false;
}
function clearalert(idd)
{
 
 $('.'+idd+'imgg').css({
        "background":"url(images/success_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"10px"
    });

 //$('#'+idd).fadeOut("slow");
$('#'+idd).html("");
 return true;
}
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";