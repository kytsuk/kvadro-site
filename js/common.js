$(document).ready(function() {

	$("#Form-sen").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за замовлення. В найближчий час ми з Вами зв'яжемось");
			$("#Form-sen").trigger("reset");
		});
		return false;
	});
	
});