<?php
include "include/document_header.php";
?>
<body id="home">
	<?php
		include "include/nav.php";		
		if(empty($modulo)):
			include "main.php";
		else:
			if(file_exists($modulo.".php")):
				if(empty($opcion_modulo)):
					include $modulo.".php";
				elseif(file_exists($modulo."-".$opcion_modulo.".php")):
					include $modulo."-".$opcion_modulo.".php";
				else:
					include "404.html";
				endif;
			else:
				include "404.html";
			endif;
		endif;

		include "include/footer.php";
	?>
</body>
</html>