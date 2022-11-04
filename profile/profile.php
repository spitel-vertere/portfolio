<?php
    include ("connect.php");
    include ("profilescript.php");
?>
<style type="text/css">
    .container label{
        font-weight: bold;
    }
    #imageframe{
        border:1px ridge orange;  border-radius:50%; height:300px; width:300px; margin:0 auto;
    }

    .container input{
        border:0; border-bottom: 1px solid black;

    }

    @media screen and (max-width: 500px) {
        .container{
            margin:0;
            padding: 0;
        }
        #imageframe{
           height:150px; width:150px;
        }
    }
</style>

</style>
 <form class='container need-validation'>
    <div style="background: #00000008; height:1000px; width:100%; position: fixed; z-index: 2; top:0; left:0" id="blocker"></div>
    <div class="row" style="border:px solid black; display: inline; z-index: 5; position: relative">
            <button type="button" class="btn btn-sm btn-flat float-right"  id="editbtn" style="height:20px; color:#a73;" onclick="editProfile(this)">
              <span class="fa fa-edit"></span>
              EDIT
            </button>
                <button type="button" class="btn btn-sm btn-flat float-right"  style="height:20px;  color:#a73; display: none"  id="cancelbtn" 
                            onclick="cancelEdit()">
                  <span class="fa fa-times"></span>
                  CANCEL
                </button>
                 <button type="button" class="btn btn-sm btn-flat float-right"  style="height:20px;  color:#a73; display: none"  id="savebtn" 
                            onclick="saveEdit()" >
                  <span class="fa fa-save"></span>
                  SAVE
                </button>       
    </div>
       
      <div class="row">
        <div class="col-lg-12">
            <div id="profile-container" style=" width:100%; border-bottom:3px solid #9bf; text-align: center; margin-bottom: 10px">
                <div style="" id="imageframe">
                    <image id="profileImage" src="assets/images/users/1.jpg" style="width:100%; height:100%; border-radius: 50%" onclick = '$( "#imageUpload" ).trigger( "click" );'/>   
                </div>
                <center>Tap to change</center>
            </div>
            <input id="imageUpload" class= "addsalesperson d-none" type="file" name="profile_photo" placeholder="Photo" required=""  capture>
        </div>
      </div>


      <div class="row mt-3" style='border:px solid black'>
            <div class="col-md-6">
             <div class="row form-group">
                <label class="col-md-5">Name </label>
                <div class="col-md-7">
                  <input type="text" class=" form-control input-sm letteronly t border- transparent-" id="firstname" style="" placeholder='First Name ' autocomplete="off">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5"></label>
                <div class="col-md-7">
                  <input type="text" class="form-control input-sm letteronly txt_firstCapital border- transparent-" id="middlename" placeholder='Middle Name' autocomplete="off" >
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5"></label>
                <div class="col-md-7">
                  <input type="text" class="form-control input-sm letteronly l border- transparent-" id="lastname"  placeholder='Last Name 'autocomplete="off" >
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-6">Gender </label>
               <div class="col pl-5">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="genderm">
                <span class="form-check-label" for="flexRadioDefault1">
                  Male
                </span>
              </div>
              <div class="col">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="genderf" >
                <span class="form-check-label" for="flexRadioDefault2">
                  Female
                </span>
              </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <div class="row">
                         <label class="col-md-5">Birthdate </label>
                        <div class="col-md-7">
                          <input type="date" class="form-control input-sm border- transparent-"  placeholder='YYYY-MM-DD' id="birthdate" >
                        </div>
                    </div>
                </div>
               <div class="col">
                    <div class="row">
                         <label class="col-sm-2">Age</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control input-sm border- transparent-"  placeholder='00' id="age" >
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row form-group">
                
            </div>
          </div>
          <div class="col-md-6">
            <div class="row form-group">
                <label class="col-md-5">Current Address </label>
                 <div class="col-md-7">
                  <textarea type="textarea" class="form-control input-sm letteronly txt_firstCapital border- transparent-" id="etc" rows="2" placeholder='House #, Block, Lot, Unit, Bldg.,Floor, etc.' autocomplete="off" ></textarea>
                </div>
               
            </div>
            <div class="row form-group" onclick="alert()">
                <label class="col-md-5">Contact No</label>
                <div class="col-md-7" style="border-bottom: px solid black">
                  <input type="text" class="form-control input-sm p-0" placeholder='09123456789' id="contact" autocomplete="off" style="width:65%;">
                  <span class="w-25" style="font-size:10px; background: red; color:white; border-radius: 20%"> Not yet Verified </span>
                  <span class="fa fa-fast-forward" style="font-size: 25px; color:#acf"></span>
                  
                </div>
            </div>
            <div class="row form-group" onclick="alert()">
                <label class="col-md-5">Email </label>
                <div class="col-md-7" style="border-bottom: px solid black">
                  <input type="text" class="form-control input-sm p-0" placeholder='sample@email.com' id="email" autocomplete="off" style="width:65%;">
                  <span class="w-25 mr-1 " style="font-size:10px; background: red; color:white; border-radius: 20%"> Not yet Verified </span>
                  <span class="fa fa-fast-forward" style="font-size: 25px; color:#acf"></span>
                  
                </div>
            </div>

                <label class="col-md-12" style="border-bottom: 2px solid #acf; "></label>
                  <button type="button" class="btn btn-sm btn-flat col-md-12"  style=" color:#69b; font-weight: bold" onclick="$('#pwbox').show();">
                        Change Password
                      <span class="fa fa-edit"></span>
                      
                </button>

            <div id="pwbox" class="" style="display: none">
                <div class="row form-group" >
                     <label class="col-md-5">Password </label>
                    <div class="col-md-7" style="border-bottom: px solid black">
                      <input type="password" class="form-control input-sm p-0" placeholder='Old Password' id="oldpw" autocomplete="off" style="width:80%;">
                      <span class="fa fa-eye-slash" onclick="showPassword('oldpw', this)"></span>
                    </div>
                </div>
                 <div class="row form-group" style="display:;" >
                     <label class="col-md-5"></label>
                    <div class="col-md-7" style="border-bottom: px solid black">
                      <input type="password" class="form-control input-sm p-0" placeholder='New Password' id="newpw" autocomplete="off" style="width:80%;">
                      <span class="fa fa-eye-slash" onclick="showPassword('newpw', this)"></span>
                    </div>
                </div>
                <div class="row form-group" style="display:;" >
                     <label class="col-md-5"></label>
                    <div class="col-md-7" style="border-bottom: px solid black">
                      <input type="password" class="form-control input-sm p-0" placeholder='Retype new Password' id="retypepw" autocomplete="off" style="width:80%;">
                      <span class="fa fa-eye-slash" onclick="showPassword('retypepw', this)"></span>
                    </div>
                </div>
            </div>

          </div>
        
        <label  class=" col-md-9 border- transparent-" aria-label="Text input with checkbox" ><center style="font-color:red" id="errorprompt"><center></label>
        <br><br>
    </div>

</form>


<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
</script>