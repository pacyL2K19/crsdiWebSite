$(document).ready(function(){

	$("#new").click(function(){
		var autor = $("#autor").val();
		var title = $("#title").val();
		var cellule = $("#cellule").val();
		var cover = $("#cover").val();
		var article = $("#article").val();

		console.log("Bonjour")

		/*$.ajax({

			url: '../control/newarticle_control.php',
			type: 'POST',
			data : { autor: autor, title :title, cellule :cellule, cover: cover, article: article},
			success : function(data)
			{
				$(".message").html(data);
				
			}


		});*/
		

	});
});