// JavaScript Document

function SubmitForm()
{
	var xmlhttp;	
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var phone=document.getElementById('phone').value;
	var message=document.getElementById('message').value;
	message=message.replace(/\n/g, "<br />");
	var AlertError="";
	var alertName="";
	var alertemail="";
	var alertPhone="";
	var alertMessage="";
	if(name=="Name:"|name==" ")
	{
		alertName="Your Name:"+'\n';
		AlertError="error";
	}
	if(email=="E-mail:"|email==" ")
	{
		alertemail="Your E-mail:"+'\n';
		AlertError="error";
	}
	if(phone=="Phone:"|phone==" ")
	{
		alertPhone="Your Phone:"+'\n';
		AlertError="error";
	}
	if(message=="Message:"|message==" ")
	{
		alertMessage="Your Message:"+'\n';
		AlertError="error";
	}
	if(AlertError=="")
	{
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					
				document.getElementById("con_form").innerHTML=xmlhttp.responseText;
				}
			  }
			  /**/
			  
			xmlhttp.open("GET","mailme.php?name="+name+"&email="+email+"&phone="+phone+"&message="+message,true);
			xmlhttp.send();	
	}
	 if(AlertError=="error")
	 {
		 alert("Please fill in"+'\n'+alertName+alertemail+alertPhone+alertMessage);
	 }
}