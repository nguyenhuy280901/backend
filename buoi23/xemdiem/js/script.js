$(function(){
	$(".calc").click(function(event) {
		var inputToan = $("#toan").val();
		var diemToan = Number(inputToan);

		var inputLy = $("#ly").val();
		var diemLy = Number(inputLy);

		var inputHoa = $("#hoa").val();
		var diemHoa = Number(inputHoa);

		window.location.href = "calc.php?toan=" + diemToan + "&ly=" + diemLy + "&hoa=" + diemHoa;
	});
});

