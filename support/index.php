<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slogan.php")){ include('../modulos/slogan.php'); }
	if (file_exists("../modulos/planes2.php")){ include('../modulos/planes2.php'); }
?>
<div id="supportinfo" class="row-fluid">
	<a href="./../faq/" class="btn btn-inverse">F.A.Q.</a>
</div>
<div class="row-fluid"></div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>