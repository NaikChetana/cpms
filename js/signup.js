


function lformValidation()
{
	
var email = document.forms["login"]["user-email"].value;
var pw=document.forms["login"]["user-pw"].value;


if(ValidateEmail(email))
{
				if(pass_validation(pw,7,12))
				{
					alert("success!");
				}


}
}







function rformValidation()
{
	
var email = document.forms["reg"]["user-email"].value;
var uname = document.forms["reg"]["user-name"].value;
var conno= document.forms["reg"]["user-contact"].value;
var addr=document.forms["reg"]["user-addr"].value;
var pw=document.forms["reg"]["user-pw"].value;


if(ValidateEmail(email))
{
	
	if(allLetter(uname))
	{
		if(allnumeric(conno))
		{
			if(alphanumeric(addr))
			{
				if(pass_validation(pw,7,12))
				{
					alert("success!");
					
				}
			}
		}
	}
}
}




function pass_validation(pw,mx,my)
{
		if(pw=="")
{
	alert("Please enter your Password");
	return false;
}
	
	else
	{
var pass_len = pw.length;
if (pass_len == 0 ||pass_len >= my || pass_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
pw.focus();
return false;
}
}
}


function alphanumeric(addr)
{
	
	if(addr=="")
{
	alert("Please enter your Address");
	return false;
}
else return true;
/*
	
else
{
var letters = /^[0-9a-zA-Z]+$/;
if(addr.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
addr.focus();
return false;
}
}
*/
}

function allnumeric(conno)
{ 
var numbers = /^[0-9]+$/;
if(conno=="")
{
	alert("Please enter your Contact Number");
	return false;
}
else
{

if(conno.match(numbers))
{
return true;
}
else
{
alert('Contact must have numeric characters only');
conno.focus();
return false;
}
}
}


function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;

if(uname=="")
{
	alert("Please enter your username");
	return false;
}
else
{
if(uname.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
}


function ValidateEmail(email)
{

    if (email == "") {
        alert("mail must be filled out");
        return false;
    }
	
	else
	{
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
}

