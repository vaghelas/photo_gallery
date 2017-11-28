// JavaScript Document

  function formValidator(){
	// Make quick references to our fields
	var name = document.getElementById('txtname');
	var address = document.getElementById('txtaddress');
	var radio=document.getElementById('radio');
	var bod=document.getElementById('date01');
	//var maddress = document.getElementById('maddress');
	//var country = document.getElementById('country');
	var state = document.getElementById('txtstate');
	var city = document.getElementById('city');
    var area = document.getElementById('area');
	var contact = document.getElementById('txtcontactno');
	var education = document.getElementById('txteducation');
	var emailadd = document.getElementById('txtemail');
	var username = document.getElementById('txtusername');
	var ppassword = document.getElementById('txtpass');
	var roll = document.getElementById('roll');
	//var pcategory = document.getElementById('pcategory');
	//var ptype= document.getElementById('ptype');
	//var area= document.getElementById('area');
	//var Country_Id= document.getElementById('Country_Id');
	//var state_id= document.getElementById('state_id');
	//var city_id= document.getElementById('city_id');
	//var plsubcity= document.getElementById('plsubcity');
	//var pladdress= document.getElementById('pladdress');
	//var txtareadescription= document.getElementById('txtareadescription');
	
	// Check each input in the order that it appears in the form!
	// Basic Info
		if(isAlphabet(name, "Please enter only letters for your name")){
		if(isAlphabet(address, "Please enter Address")){
		if(checkCheckBoxes(radio, "Please Checked Term and Condition")){
		if(isNumeric(bod, "Please enter Numeric value")){
		
		//if(notEmpty(ppassword, "Please enter Password")){
		//if(notEmpty(mobile, "Please enter Mobile Number")){
		
		if(madeSelection(state, "Please Choose a state")){
		if(madeSelection(city, "Please Choose a city")){
		//if(notEmpty(maddress, "Please Insert Your Address")){
				if(madeSelection(area, "Please Choose a Area")){
				if(isNumeric(contact, "Please enter Numeric value")){
				if(isAlphabet(education, "Please enter only letters for your name")){
				if(emailValidator(emailadd, "Please enter a valid email address")){
				if(notEmpty(username, "Please enter Categery")){
				if(notEmpty(ppassword, "Please enter Password")){
				if(madeSelection(roll, "Please Choose a roll")){
				//if(notEmpty(pcategory, "Please enter Categery")){
				//if(notEmpty(ptype, "Please enter Proprty Type")){
				//if(notEmpty(txtarea, "Please enter Proprty Area")){
				//if(isNumeric(txtarea, "Please enter numeric value")){
						   //if(madeSelection(Country_Id, "Please Choose a Property Location Contry")){
						   //if(madeSelection(state_id, "Please Choose a Property Location State")){
						   //if(madeSelection(city_id, "Please Choose a Property Location city")){
						   //if(madeSelection(plsubcity, "Please Choose a Property Location SubCity")){
						   //if(notEmpty(pladdress, "Please Insert Property Location Address")){
						   //if(notEmpty(txtareadescription, "Please Insert Property Type Description")){
						  
							  
						  }
						  }
						
						}
					
					}
					}
				}
				}
				}
				}
				}
}
}
}



			//confpassword.focus();
	return false;

}

function checkCheckBoxes(elem,helperMsg) {
    if (myForm.elem.checked == false) 
    {
		alert(helperMsg);
        //alert ('You didn\'t choose any of the checkboxes!');
        return false;
    } else {    
        return true;
    }
}
function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}
function passwordmatch(elem1,elem2,helpmessage)
{
if(myForm.elem1.value!=myForm.elem2.value)
{
alert(helpmessage);
myForm.elem1.focus();
return false;
}
else
{
return true;
}
}
function madeSelection(elem, helperMsg){
	if(elem.value == "0"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else
	{
		return true;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		//elem.style.border = '1px solid red';
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

 
/*$(document).ready(function(){
 
        $("#cname").hide();
		$("#cnumber").hide();
		$("#caddress").hide();
       
 
    $('#caddcontact').click(function(){
	$("#cname").show();
	$("#cnumber").show();
	$("#caddress").show();
    });
	 $('#cexs').click(function(){
	$("#cname").hide();
	$("#cnumber").hide();
	$("#caddress").hide();
    });
 
});

// Click on continue button open additional information
 $(document).ready(function(){
 
    $("#comname").hide();
		
    $('#individual').click(function(){
	$("#comname").hide();
    });
	 $('#broker').click(function(){
	$("#comname").show();
    });
 
});

*/