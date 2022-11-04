<script type="text/javascript">
	fillProfileFieldInfo();
	$("#topbar_title").html("Profile");

	function fillProfileFieldInfo(){
		//let idcode = 'EWD2014045011';
		//alert("I'm here");
		$.ajax({
			type: 'POST',
			url: 'profile/profileclass.php',
			data: 'form=fillProfileFieldInfo',
			success: function(data){
				console.log(data + " - ha?");
				profile_data = JSON.parse(data);
				//console.log(profile_data + " - ha?");
				//alert(JSON.parse(data));
				$("#firstname").val(profile_data.firstname);
				$("#middlename").val(profile_data.middlename );
				$("#lastname").val(profile_data.lastname);
				$("#email").val(profile_data.email);
				// $("#profid").val(profile_data.idcode);
				$("#contact").val(profile_data.mobile);				
				$("#birthdate").val(profile_data.birthdate);
				$("#address").val(profile_data.address);
				$("#age").val(profile_data.age);
				radio_gender = (profile_data.gender.toLowerCase() == "male")?"genderm":"genderf";
				$("#"+radio_gender).attr("checked", true);
			}
		});
	}
</script>
