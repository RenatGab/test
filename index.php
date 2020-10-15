<!DOCTYPE html>

<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Тестовый задание</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="comments-box">
			<h2>Список записей</h2>
		</div>
		<form>
			<div class="form-comment form-group" style="display: none;">
				<label for="exampleFormControlTextarea1">Введите текст</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="button" id="addcomment" class="btn btn-primary">Добавить</button>
		</form>
	</div>
</body>

<script>
jQuery(document).ready(function(e) {
    jQuery('#addcomment').on('click', function() {
		jQuery('.form-comment').fadeIn(2000);
		jQuery('.form-comment textarea').focus();
		var comment = jQuery('.form-comment textarea').val();
		if (comment != '') {
			jQuery('.comments-box').append("<div class='mb-3'>"+comment+"</div>");
		}
		
	});
});
</script>
</html>