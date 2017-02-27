// This function toggles the arrows are reveals the archive tree as necessary.
$(".archive").click(function() {
	if( $(this).next().is(":hidden")) {
		$(this).next().show();
		$(this).parent().css("list-style","square url(images/expanded-white.png)");
        $(this).attr("title", "Collapse " + $(this).html());
	} else {
		$(this).nextAll("ul").find("ol:visible").parent().find(":first-child").click();
		$(this).parent().css("list-style","square url(images/collapsed-white.png)");
		$(this).next().hide();
        $(this).attr("title", "Expand " + $(this).html());
	}
});
