// JavaScript Document

function formvali()
{
	var x= document.forms["sform"]["name"].value;
	var y= document.forms["sform"]["phone"].value;
	var z= document.forms["sform"]["uname"].value;
	var m= document.forms["sform"]["pass"].value;
	if(x=="")
	{
	window.alert("Name must be field out ");
	return false;	
	}
	else if(y =="")
	{
	window.alert("Phone must be field out ");
	return false;	
	}
	else if(z =="")
	{
	window.alert("user name must be field out ");
	return false;	
	}
	else if(m=="")
	{
	window.alert("password must be field out ");
	return false;	
	}
		
	
}


