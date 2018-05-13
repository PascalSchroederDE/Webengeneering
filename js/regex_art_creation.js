//checks regex of article creation for directly aborting if not matching; for security reasons there is an additional check in creation.php
function control()
	{
		var title=document.getElementById("title").value;
		var price=document.getElementById("price").value;
		var del_price=document.getElementById("delivery_costs").value;
		var del_time=document.getElementById("delivery_time").value;
		var prod_type=document.getElementById("product_type").value;
		var producer=document.getElementById("producer").value;
		var model=document.getElementById("model").value;
		var description=document.getElementById("description").value;

		var title_rex=/[a-z0-9?&=_.!äöüß-]$/i;
		var price_rex=/[0-9.,-]$/i;
		var del_price_rex=/[0-9.,-]$/i;
		var del_time_rex=/[0-9-]$/i;
		var prod_type_rex=/[a-z_.äöüß-]$/i;
		var producer_rex=/[a-z&_.äöüß-]$/i;
		var model_rex=/[a-z&_.äöüß-]$/i;
		var description_rex=/[a-z0-9?&=_,.!äöüß-]$/i;
		
		var title_check=title_rex.test(title);
		var price_check=price_rex.test(price);
		var del_price_check=del_price_rex.test(del_price);
		var del_time_check=del_time_rex.test(del_time);
		var prod_type_check=prod_type_rex.test(prod_type);
		var producer_check=producer_rex.test(producer);
		var model_check=model_rex.test(model);
		var description_check=description_rex.test(description);
		
		
		if (title_check != true) {
			document.getElementById("title").style.border="1px solid #ff0000";
		} else {
			document.getElementById("title").style.border="none";
		}
		
		if (price_check != true) {
			document.getElementById("price").style.border="1px solid #ff0000";
		} else {
			document.getElementById("price").style.border="none";
		}
		
		if (del_price_check != true) {
			document.getElementById("delivery_costs").style.border="1px solid #ff0000";
		} else {
			document.getElementById("delivery_costs").style.border="none";
		}
		
		if (del_time_check != true) {
			document.getElementById("delivery_time").style.border="1px solid #ff0000";
		} else {
			document.getElementById("delivery_time").style.border="none";
		}
		
		if (prod_type_check != true) {
			document.getElementById("product_type").style.border="1px solid #ff0000";
		} else {
			document.getElementById("product_type").style.border="none";
		}
		
		if (producer_check != true && document.getElementById("producer").value!="") {
			document.getElementById("producer").style.border="1px solid #ff0000";
		} else {
			document.getElementById("producer").style.border="none";
		}

		if (model_check != true && document.getElementById("model").value!="") {
			document.getElementById("model").style.border="1px solid #ff0000";
		} else {
			document.getElementById("model").style.border="none";
		}
		
		if (description_check != true) {
			document.getElementById("description").style.border="1px solid #ff0000";
		} else {
			document.getElementById("description").style.border="none";
		}
		
		
		if (title_check!=true || price_check!=true || del_price_check!=true || del_time_check!=true || prod_type_check!=true || producer_check!=true || model_check!=true || description_check!=true) {
			return false;
		}
	}