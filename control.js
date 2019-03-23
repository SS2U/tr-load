function insert()
{
	var dat = document.getElementById("dat").value;
	var pea = document.getElementById("pea").value;
	var loc = document.getElementById("loc").value;
	var kva = document.getElementById("kva").value;
	var phase = document.getElementById("phase").value;
	var C_A_L = document.getElementById("C_A_L").value;
	var C_B_L = document.getElementById("C_B_L").value;
	var C_C_L = document.getElementById("C_C_L").value;
	var C_A_R = document.getElementById("C_A_R").value;
	var C_B_R = document.getElementById("C_B_R").value;
	var C_C_R = document.getElementById("C_C_R").value;
	var V_AN_L = document.getElementById("V_AN_L").value;
	var V_BN_L = document.getElementById("V_BN_L").value;
	var V_CN_L = document.getElementById("V_CN_L").value;
	var V_AN_R = document.getElementById("V_AN_R").value;
	var V_BN_R = document.getElementById("V_BN_R").value;
	var V_CN_R = document.getElementById("V_CN_R").value;
	
	
	var formData = new FormData();
	formData.append('dat',dat);
	formData.append('pea',pea);
	formData.append('loc',loc);
	formData.append('kva',kva);
	formData.append('phase',phase);
	formData.append('C_A_L',C_A_L);
	formData.append('C_B_L',C_B_L);
	formData.append('C_C_L',C_C_L);
	formData.append('C_A_R',C_A_R);
	formData.append('C_B_R',C_B_R);
	formData.append('C_C_R',C_C_R);
	formData.append('V_AN_L',V_AN_L);
	formData.append('V_BN_L',V_BN_L);
	formData.append('V_CN_L',V_CN_L);
	formData.append('V_AN_R',V_AN_R);
	formData.append('V_BN_R',V_BN_R);
	formData.append('V_CN_R',V_CN_R);
	
	
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