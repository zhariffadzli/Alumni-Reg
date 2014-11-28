function validateForm()
{
	var x=document.forms["frm"]["firstname"].value;

if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }

            re = /^[A-Za-z\s]+$/;
			a = re == /^[A-Za-z\s]+$/;
if(re.test(document.frm.firstname.value) == a)
{
alert('First Name must be in alphabet only');
return false;
}
  var x=document.forms["frm"]["lastname"].value;
if (x==null || x=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
    	         re = /^[A-Za-z\s]+$/;
			a = re == /^[A-Za-z\s]+$/;
if(re.test(document.frm.lastname.value) == a)
{
alert('Last Name must be in alphabet only');
return false;
}
     var x=document.forms["frm"]["username"].value;
	{
if (x==null || x=="")
  {
  alert("User Name must be filled out");
  return false;
  }
	}
	x=document.frm;
    input=x.username.value;
  	   if (input.length<8)
 {
 alert("User Name must be 8 or more characters!");
 return false;
 }
      var x=document.forms["frm"]["password"].value;
	  {
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
      }
	x=document.frm;
    input=x.password.value;
  	   if (input.length<6)
 {
 alert("Password must be more than 6 and less than 25 characters!");
 return false;
 }
       var x=document.forms["frm"]["confirmpassword"].value;
if (x==null || x=="")
  {
  alert("Confirm Password must be filled out");
  return false;
  }
                      
                     var pass1=document.forms["frm"]["password"].value;
                     var pass2=document.forms["frm"]["confirmpassword"].value;
if(pass1 != pass2)
  {
   alert("Password and Confirm Password do not Match!");
   return false;
  }
	   var x=document.forms["frm"]["address"].value;
if (x==null || x=="")
  {
  alert("Address must be filled out");
  return false;
  }
           var x=document.forms["frm"]["city"].value;
if (x==null || x=="")
  {
  alert("city must be filled out");
  return false;
  }
		     re = /^[A-Za-z\s]+$/;
			a = re == /^[A-Za-z\s]+$/;
if(re.test(document.frm.city.value) == a)
{
alert('city must be in alphabet only');
return false;
}
           var x=document.forms["frm"]["country"].value;
if (x==null || x=="")
  {
  alert("country must be filled out");
  return false;
  }
             var x=document.forms["frm"]["stud_id"].value;
			 {
if (x==null || x=="")
  {
  alert("stud_id must be filled out");
  return false;
  }
			 }
			 x=document.frm;
       input=x.stud_id.value;
  	   if (input.length<11)
 {
 alert("stud_id must be 5 characters!");
 return false;
 }
  var inputNum=x.stud_id.value;
  if(isNaN(inputNum))
  {
	  alert("stud_id does not appear to be a number.");
	  return false;
  }
               var x=document.forms["frm"]["email"].value;
			   var atpos=x.indexOf("@");
               var dotpos=x.lastIndexOf(".");
if (x==null || x=="")

  {
  alert("Email must be filled out");
  return false;
  }
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {
  alert("Not a valid e-mail address");
  return false;
  }
   x=document.frm;
  var inputNum=x.contact.value;
  if(isNaN(inputNum))
  {
	  alert("contact does not appear to be a number.");
	  return false;
  }
                   var x=document.forms["frm"]["securityquestion"].value;
if (x==null || x=="")
  {
  alert("Security question must be filled out");
  return false;
  }
                     var x=document.forms["frm"]["securityanswer"].value;
if (x==null || x=="")
  {
  alert("Security answer must be filled out");
  return false;
  }

  var x=document.forms["frm"]["gender"].value;
if (x==null || x=="")
  {
  alert("please select your gender");
  return false;
  }

  var x=document.forms["frm"]["course"].value;
if (x==null || x=="")
  {
  alert("course cannot be blank");
  return false;
  }
 var x=document.forms["frm"]["faculty"].value;
if (x==null || x=="")
  {
  alert("faculty must be filled out");
  return false;
  }

}


