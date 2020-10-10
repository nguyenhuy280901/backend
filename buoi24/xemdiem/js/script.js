$(function(){
	$(".calc").click(function(event) {
		var diemToan 	= Number($("#toan").val());
		var diemLy 		= Number($("#ly").val());
		var diemHoa 	= Number($("#hoa").val());

		var tongDiem 	= diemToan * 2 + diemLy + diemHoa;

		if (tongDiem >= 30) {
			$("#kq").html("Đậu");
			return;
		}
		$("#kq").html("Rớt");
	});
});



// function xemKetQua() {
// 	var diemToan 	= Number($("#toan").val());
// 	var diemLy 		= Number($("#ly").val());
// 	var diemHoa 	= Number($("#hoa").val());

// 	var tongDiem 	= diemToan * 2 + diemLy + diemHoa;//>=30: đậu
	
// 	if (tongDiem >= 30) {
// 		$("#kq").html("Đậu");
// 	}
// 	else {
// 		$("#kq").html("Rớt");
// 	}
// }
