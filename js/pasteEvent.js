//for directly pasting coupon codes and spliting in 4 text fields
function pasteEvent(act) {
    var originalValue = act.value;

    setTimeout(function(){
         $currentInputBox = act;

         var pastedValue = $currentInputBox.value;

        if (pastedValue.length == 19) {
            pasteValues(pastedValue);
        }
        else {
            act.val(originalValue);
        }

        $(".coupon").attr("maxlength", 4);

    
    $(".coupon").attr("maxlength", 19);
    }, 0 );
    
   
};

function pasteValues(element) {
	var values = [];
    values = element.split("-");
    for(var i=0; i<values.length; i++) {
        var id = (i+1).toString();
    	var inputBox = document.getElementById("coupon"+id);
        inputBox.value = values[i];
    }
};