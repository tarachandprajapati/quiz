
var x=document.forms["myForm"].["firstname"].value;
var y=document.forms["myForm"].["lastname"].value;
var z=document.forms["myForm"].["address"].value;
var w=document.forms["myForm"].["level"].value;
var p=document.forms["myForm"].["mob"].value;
var q=document.forms["myForm"].["email"].value;
var r=document.forms["myForm"].["semester"].value;
var s=document.forms["myForm"].["college"].value;
var t=document.forms["myForm"].["roll_no"].value;
var u=document.forms["myForm"].["image"].value;

(function(){
	var hexacode = ['#ffff00', '#ff0000', '#00ff00', '#0000ff', '#ffffff'],
	el = document.getElementById('autocolor').style,
	counter = -1,
	hexalen = hexacode.length;
	function auto(){
		el.backgroundColor = hexacode[counter = ++counter % hexalen];
	}
	setInterval(auto, 400);
})();

function validate()
      {
      
         if( document.myForm.firstname.value == "" )
         {
            alert( "Please provide your Firstname!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         

         if( document.myForm.lastname.value == "" )
         {
            alert( "Please provide your Lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }


         if( document.myForm.address.value == "" )
         {
            alert( "Please provide your Address!" );
            document.myForm.address.focus() ;
            return false;
         }

         if( document.myForm.mob.value == "" )
         {
            alert( "Please provide your Mobile No.!" );
            document.myForm.mob.focus() ;
            return false;
         }
  
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
        
         return( true );
      }