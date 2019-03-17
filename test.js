<<<<<<< HEAD
function insert()
{
	var pea = document.getElementById("pea").value;
	var formData = new FormData();
	formData.append('pea',pea);
	$.ajax({
			url:'insert.php',
			method:'POST',
			data:formData,
			async:true,
			cache:false,
			processData:false,
			contentType:false,
			success:function(response)
			{
				alert(response);
			},
			complete:function()
			{
				location.reload();
			}
	});
=======
function insert()
{
	var pea = document.getElementById("pea").value;
	var formData = new FormData();
	formData.append('pea',pea);
	$.ajax({
			url:'insert.php',
			method:'POST',
			data:formData,
			async:true,
			cache:false,
			processData:false,
			contentType:false,
			success:function(response)
			{
				alert(response);
			},
			complete:function()
			{
				location.reload();
			}
	});
>>>>>>> 0da382d5c03a657fb36120ef0ce89334085f49b0
}