	<?php if (get_bloginfo( 'url' ) === "http://localhost/licratex") {
	if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='1'][/fc]"); };
	} else {
	if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='5'][/fc]"); };
	} ?>