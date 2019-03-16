
var current_fs, next_fs, previous_fs; //to detect which step is next and which is pervious and which is in now 
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".Next").click(function()
    {
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	$("#ProgressBar li").eq($("fieldset").index(next_fs)).addClass("active");//bt5aly elorder bta3 progress bar INC
	
	next_fs.show(); //show the next fieldset
    current_fs.hide();//hide the previous fieldset
	
	current_fs.animate({opacity: 0}, 
    {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 1000, 
		complete: function(){
			current_fs.hide();
			animating = false;
		},
	});
});

$(".Previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	$("#ProgressBar li").eq($("fieldset").index(current_fs)).removeClass("active");//Dec of order in progressbar 
	previous_fs.show(); //Show Previous fieldset
	//current_fs.hide();//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 1000, 
		complete: function(){
			current_fs.hide();
            previous_fs.show();
			animating = false;
		}, 
	});
});


var current_fs_employee, next_fs_employee, previous_fs_employee; //to detect which step is next and which is pervious and which is in now 
var left_Employee, opacity_Employee, scale_Employee; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".NextEmployee").click(function()
    {
	if(animating) return false;
	animating = true;
	current_fs_employee = $(this).parent();
	next_fs_employee = $(this).parent().next();

	$("#ProgressBar li").eq($("fieldset").index(next_fs_employee)).addClass("active");//bt5aly elorder bta3 progress bar INC
	
	next_fs_employee.show(); //show the next fieldset
    current_fs_employee.hide();//hide the previous fieldset
	
	current_fs_employee.animate({opacity: 0}, 
    {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs_employee.css({'transform': 'scale('+scale+')'});
			next_fs_employee.css({'left': left, 'opacity': opacity});
		}, 
		duration: 1000, 
		complete: function(){
			current_fs_employee.hide();
			animating = false;
		},
	});
});

$(".PreviousEmployee").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs_employee = $(this).parent();
	previous_fs_employee = $(this).parent().prev();

	$("#ProgressBar li").eq($("fieldset").index(current_fs_employee)).removeClass("active");//Dec of order in progressbar 
	previous_fs_employee.show(); //Show Previous fieldset
	//current_fs.hide();//hide the current fieldset with style
	current_fs_employee.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs_employee.css({'left': left});
			previous_fs_employee.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 1000, 
		complete: function(){
			current_fs_employee.hide();
            previous_fs_employee.show();
			animating = false;
		}, 
	});
});

$(".registerParent").click(function(){
	return false;
})