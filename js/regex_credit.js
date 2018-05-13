//checks regex of coupon code for directly aborting if not matching; for security reasons there is an additional check in backend
function control() {
  var subject=document.getElementById("payment_method").value;
  var matter=document.getElementById("annotation").value;
  
  var subject_rex=/[a-z_.-]$/i;
  var matter_rex=/[a-z0-9?&=,_.!-]$/i;
  
  
  var subject_check=subject_rex.test(subject);
  var matter_check=matter_rex.test(matter);
  
  
  if (subject_check != true) {
	document.getElementById("payment_method").style.border="1px solid #ff0000";
  } else {
	document.getElementById("payment_method").style.border="none";
  }
		
  if (matter_check != true) {
	document.getElementById("annotation").style.border="1px solid #ff0000";
  } else {
	document.getElementById("annotation").style.border="none";
  }
  
  
  if (subject_check!=true || matter_check!=true) {
	return false;
  }
}