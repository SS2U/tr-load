function insert()
{
	var pea = document.getElementById("pea").value;
	var pea = document.getElementById("location").value;
	var pea = document.getElementById("kva").value;
	var pea = document.getElementById("phase").value;
	var pea = document.getElementById("C_A_L").value;
	var pea = document.getElementById("C_B_L").value;
	var pea = document.getElementById("C_C_L").value;
	var pea = document.getElementById("C_A_R").value;
	var pea = document.getElementById("C_B_R").value;
	var pea = document.getElementById("C_C_R").value;
	var pea = document.getElementById("V_AN_L").value;
	var pea = document.getElementById("V_BN_L").value;
	var pea = document.getElementById("V_CN_L").value;
	var pea = document.getElementById("V_AN_R").value;
	var pea = document.getElementById("V_BN_R").value;
	var pea = document.getElementById("V_CN_R").value;
	
	
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
}