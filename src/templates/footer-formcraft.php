<?php 

if (function_exists("add_formcraft_form")) {
	if  (get_bloginfo( 'url' ) === "http://localhost/licratex") {
		add_formcraft_form("[fc id='1'][/fc]");
	} else { 
		add_formcraft_form("[fc id='5'][/fc]");
	}
} else {
	echo "<p style='background:red;color:yellow;text-align:center'>AGREGA FORMCRAFT</p>";
}

?>