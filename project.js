$(document).ready(function () {
	$(".btn").click(function(){
		//alert(1)
		//console.log($("#register_form"));
		record=$("#register_form").serialize();
		console.log(record);

		$.post("register_action.php",record,function(response){
			//console.log(response);
			$(".msg").html(response);
		})
	})
	$(".btn1").click(function(){
		// alert(1)
		//console.log($("#register_form"));
		login_record=$("#login_form").serialize();
		//console.log(record);

		$.post("login_action.php",login_record,function(response){
			//console.log(response);
			if(response=='ok'){
				window.location.href="welcome.php";
			}
			else{
			$(".msg").html(response);
			}
		})
	})
	/**************************************************/
	$(".btn_pass").click(function(){
		$.post("password-action.php",$("#password_form").serialize(),function(res){
			if(res=="ok"){
			$(".msg").html("password updated");
			$("#password_form")[0].reset();
		}
		else{
			$(".msg").html(res);
		}
		})
	})
	/**************************************************/
	$("#forgot2_form,#forgot3_form").hide();
		$(".btn_forgot1").click(function(){
		// alert(1);
		$.post("forgot-action1.php",$("#forgot1_form").serialize(),function(response){
			if (response=="ok") {
				// $(".msg").html(response);
				$(".msg").empty();
				$("#forgot1_form")[0].reset();
				$("#forgot1_form,#forgot2_form").slideToggle();
			}
			else{
				$(".msg").html(response);
			}
		})
	})


	$(".btn_forgot2").click(function(){
		// alert(1);
		$.post("forgot-action2.php",$("#forgot2_form").serialize(),function(response){
			if (response=="ok") {
				// $(".msg").html(response);
				$(".msg").empty();
				$("#forgot2_form")[0].reset();
				$("#forgot2_form,#forgot3_form").slideToggle();
			}
			else{
				$(".msg").html(response);
			}
		})
	})


	$(".btn_forgot3").click(function(){
		$.post("forgot-action3.php",$("#forgot3_form").serialize(),function(response){
			if (response=="ok") {
				// $(".msg").html(response);
				// $(".msg").empty();
				$("#forgot3_form")[0].reset();
				$(".msg").html("password updated");
			}
			else{
				$(".msg").html(response);
			}
		})
	})
});