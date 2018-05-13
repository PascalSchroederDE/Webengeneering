// for automically jumping to next number field when entering coupon code
function jump (act, next) {
  if(act.value.length==4) {
	act.blur();
	document.getElementById(next).focus();
  }
}