$(document).ready(function() {

	$("#find-my-weather").click(function(event) {
		$(".loader").fadeIn("fast");
		event.preventDefault();

		if ($("#city").val() != 0) {
			$.get("scraper.php?city="+$("#city").val(), function(data) {
				$(".loader").fadeOut("fast");
				if (data == "") {
					$(".alertSuccess").hide();
					$(".alertFail").html("City does not exist").fadeIn("fast");
				} else {
					$(".alertFail").hide();
					$(".alertSuccess").html(data).fadeIn("fast");
				}

			});
		} else {
			$(".alertFail").hide();
			$(".alertSuccess").hide();
			$(".alertFail").html("Please enter a city").fadeIn("fast");
		}
	});
});