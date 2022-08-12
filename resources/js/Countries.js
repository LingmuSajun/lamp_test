$(function() {
	$.getJSON('/lamp_test/Countries.php', function($data) {
		$.each($data, function($k) {
			$('#contents').append(`<ul id="${$k}">`);
			$(`#${$k}`).append(`<li>id : ${$data[$k]['id']}</li>`);
			$(`#${$k}`).append(`<li>parent_id : ${$data[$k]['parent_id']}</li>`);
			$(`#${$k}`).append(`<li>name : ${$data[$k]['name']}</li>`);
		});
	});
});