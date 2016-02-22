$('#todoList ul').sortable({
	items: "li:not('.listTitle, .addItem')",
	connectWith: "ul",
	dropOnEmpty: true,
	placeholder: "emptySpace"
});

$('#todoList ul').droppable({
	over: function() {
		$(this).find('li.listTitle').css('background-color','blue');
	},
	out: function() {
		$(this).find('li.listTitle').css('background-color','#444');
	},
	drop: function() {
		$(this).find('li.listTitle').css('background-color','#444');
	}
});

$('input').keydown(function(e){
	if(e.keyCode == 13) {
		var item = $(this).val();

		$(this).parent().parent().append('<li>' + item + '</li>');
		$(this).val('');
	}
});

$('li.listTitle').click(function(){
	$("li.addItem").hide();
	$(this).next().show();
	$(this).next().find('input').focus();
});

$('#trash').droppable({
	drop: function(event, ui) {
		ui.draggable.remove();
	}
})