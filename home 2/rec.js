	
function v()
{var a = document.getElementsById(c);
	 if(form.n.value=="")
    {
    	alert("Name field is required");
  return false; 
}
else if(form.e.value=="")
{
	alert("Check that your email address is correct");
	return false;
}
else if(form.m.value.length!=8)
{
	alert("Please enter a valid Mobile Number");
return false;}


else if(a.value=="")
{
	alert("Please fill in the comment field");
	return false;
}

}
