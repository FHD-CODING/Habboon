var CurStory = 1;
var interval = "";

function TimedNews() {
	var index = CurStory;
	CurStory++;
	index++;
	$("#buttons a").removeClass("selected");
	$(".article").fadeOut("slow");
	$("#buttons a:nth-child(" + index + ")").addClass("selected");
	index++;
	$(".article:nth-child(" + index + ")").fadeIn("slow");
	if (CurStory >= $('#buttons a').size())
		CurStory = 0;
};

$(document).ready(function(){
	interval = setInterval("TimedNews()",6000);
	
	// Like a mother-fucking boss
	$('#buttons a').click(function(event){
		if (!$(event.target).hasClass("active")) {
		var index = $("#buttons a").index(this);
		CurStory = index+1;
		index+=2;
		clearInterval(interval);
		interval = setInterval("TimedNews()",6000);
		$("#buttons a").removeClass("selected");
		$(".article").fadeOut("slow");
		$(event.target).addClass("selected");
		$(".article:nth-child(" + index + ")").fadeIn("slow");
		if (CurStory >= $('#buttons a').size())
			CurStory = 0;
		}
	});
	
});