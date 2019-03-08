// This function toggles the arrows are reveals the archive tree as necessary.
$(".archive").click(function () {
	if ($(this).next().is(":hidden")) {
		$(this).next().show();
		$(this).parent().css("list-style", "square url(images/expanded-black.png)");
		$(this).attr("title", "Collapse " + $(this).html());
	} else {
		$(this).nextAll("ul").find("ol:visible").parent().find(":first-child").click();
		$(this).parent().css("list-style", "square url(images/collapsed-black.png)");
		$(this).next().hide();
		$(this).attr("title", "Expand " + $(this).html());
	}
});