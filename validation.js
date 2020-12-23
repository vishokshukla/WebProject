function validate() {



      if(!document.registrationForm.enrollment.value){
         alert("Please Enter enrollment Number");
         document.registrationForm.enrollment.focus() ;
         return false;
      }
            if( document.registrationForm.name.value == "" ) {
         alert( "Please provide your name!" );
         document.registrationForm.name.focus() ;
         return false;
      }


      if( document.registrationForm.father.value == "" ) {
         alert( "Please provide your Father's Name!" );
         document.registrationForm.father.focus() ;
         return false;
      }



         if( document.registrationForm.mother.value == "" ) {
         alert( "Please provide your Mother's Name!" );
         document.registrationForm.mother.focus() ;
         return false;
      }

      if( document.registrationForm.email.value == "" ) {
         alert( "Please provide your email!" );
         document.registrationForm.email.focus() ;
         return false;
      }

      var password=document.registrationForm.password.value;
      if(password.length<6 || password.length>20){
         alert("Password must be between 6 to 20 character");
         document.registrationForm.email.focus();
         return false;
      }
      document.registrationForm.submit();
      return( true );
   
}