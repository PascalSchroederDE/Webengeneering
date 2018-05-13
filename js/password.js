//checks password strongness with length and regex
function PasswordStrongness() {
	
	var pw=document.getElementById("pw").value;
    var rep_pw=document.getElementById("rep_pw").value;
	
	var num=/[0-9]/;
	var let=/[A-z]/;
	var letlow=/[a-z]/;
	var letup=/[A-Z]/;
	var special=/[=.!§%$§&ä()}{^_?-]/;
	
	//Good/Green: Longer than 9 signs with lowercase & uppercase and a special sign
	if (pw.length>=9 && num.test(pw) && letlow.test(pw) && letup.test(pw) && special.test(pw)) {
	    document.getElementById("pw_strongness").className="circle_green";
	} else if(pw.length>=6 && num.test(pw) && let.test(pw)){
	    document.getElementById("pw_strongness").className="circle_yellow";
    } else {
	    document.getElementById("pw_strongness").className="circle_red";
	}
}

function PasswordRepeat() {
    var pw=document.register.pw.value;
    var rep_pw=document.register.rep_pw.value;
	
	var num=/[0-9]/;
	var let=/[A-z]/;
	var letlow=/[a-z]/;
	var letup=/[A-Z]/;


    if(pw==rep_pw && pw.length>=6 && num.test(pw) && let.test(pw)) {
	    document.getElementById("rep_pw_check").className="circle_green";
	} else {
	    document.getElementById("rep_pw_check").className="circle_red";
	}
}