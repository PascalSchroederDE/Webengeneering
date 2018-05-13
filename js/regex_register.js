//checks regex of user registration for directly aborting if not matching; for security reasons there is an additional check in register.php
function control()
	{
	  //Variablen deklarieren und initialisieren
	  var email=document.register.email.value;
	  var username=document.register.username.value;
	  var pw=document.register.pw.value;
	  var rep_pw=document.register.rep_pw.value;
	  var paypal=document.register.paypal_username.value;
	  var prename=document.register.prename.value;
	  var name=document.register.name.value;
	  var agb=document.register.agb.checked;
	  var day=document.register.day.value;
	  var month=document.register.month.value;
	  var year=document.register.year.value;
	  
	  //Meta - Legt benötigten Syntax fest
	  var email_rex=/\w+[@]\w+[.]\w{2,3}/;
	  var username_rex=/[a-z0-9?&=_.!äöüß-]$/i;
	  var pw_rex=/[a-z0-9?=.-_!%$§&ä()}{^öüß-]$/i;
	  var paypal_rex=/[a-z0-9?&=_.!äöüß-]$/i;
	  var prename_rex=/[a-zäöüß-]$/i;
	  var name_rex=/[a-zäöüß-]$/i;
	  
	  //Überprüfung, ob Meta mit Eingabe übereinstimmt (m steht für Meta(-übereinstimmung)
	  var email_check=email_rex.test(email);
	  var username_check=username_rex.test(username);
	  var pw_check=pw_rex.test(pw);
	  var rep_pw_check=pw_rex.test(rep_pw);
	  var paypal_check=paypal_rex.test(paypal);
	  var prename_check=prename_rex.test(prename);
	  var name_check=name_rex.test(name);
	  
	 //Überprüfung ob True, wenn nicht, dann Rand rot färben, wenn doch (wieder) weiß färben
	  if (email_check != true) {
		document.getElementById("email").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("email").style.border="none";
	  }  
	  
	  if (username_check != true) {
	    document.getElementById("username").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("username").style.border="none";
	  }
	  
	  if (pw_check != true) {
	    document.getElementById("pw").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("pw").style.border="none";
	  }
	  
	  if (rep_pw_check != true || rep_pw!=pw) {
	    document.getElementById("rep_pw").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("rep_pw").style.border="none";
	  }
	  
	  if (paypal_check != true) {
	    document.getElementById("paypal_username").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("paypal_username").style.border="none";
	  }
	  
	  if (prename_check != true || rep_pw!=pw) {
	    document.getElementById("prename").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("prename").style.border="none";
	  }
	  

	  if (name_check != true) {
	    document.getElementById("name").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("name").style.border="none";
	  }
	  
	  if (agb != true) {
	    document.getElementById("agb").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("agb").style.border="none";
	  }
	  

	  if (day == "") {
	    document.getElementById("day").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("day").style.border="none";
	  }
	  
	  if (month == "") {
	    document.getElementById("month").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("month").style.border="none";
	  }
	  
	  if (year == "") {
	    document.getElementById("year").style.border="1px solid #ff0000";
	  } else {
	    document.getElementById("year").style.border="none";
	  }
	   
	   
	  if(email_check!=true || username_check!=true || pw_check!=true || rep_pw_check!=true || paypal_check!=true || prename_check!=true || name_check!=true || agb!=true || rep_pw!=pw || day=="" || month=="" || year=="") {
	    return false;
	  }
	}