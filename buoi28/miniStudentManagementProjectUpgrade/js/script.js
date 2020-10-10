$(function(){
	$("#student_id").change(function(event) {
		var student_id = $(this).val();
		$("#subject_id").empty();
		$.ajax({
			url: '../register/unRegisterSubject.php',
			data: {student_id: student_id}
		})
		.done(function(data) {
			var subjects = JSON.parse(data);
			for (subject of subjects) {
				let subject_id = subject.id;
				let subject_name = subject.name;
				let option = 	"<option value=" + subject_id + ">" +
									subject_id + " - " + subject_name + 
								"</option>";

				$("#subject_id").append(option);
			}
		})
		.fail(function() {
			console.log("error");
		});
	});
});