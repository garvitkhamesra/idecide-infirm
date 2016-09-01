
<form name="myForm" action="submit.php" method="post">	
		
		<input type="radio" name="type" value="Allopathic" checked> Allopathic
  			<input type="radio" name="type" value="Ayurveda"> Ayurveda
  			<input type="radio" name="type" value="Homeopathy"> Homeopathy
  			<input type="radio" name="type" value="Other"> Other

		
    	
      		<input type="text" name="name" placeholder="Name" class="focus" required>
    	
    	
            <b>DATE OF BIRTH<br></b>
    		<input type="date" name="date" placeholder="DOB" required>
    	
		
			GENDER
			<input type="radio" name="gender" value="male" checked> Male
  			<input type="radio" name="gender" value="female"> Female
  			<input type="radio" name="gender" value="other"> Other
	
		      	
		<input type="text" name="complaint" placeholder="Complaint">
		
			Diagnosis
			<input name="tags" id="singleFieldTags2" value="Viral,Cough">
		
		
			
		

		
			<input type="text" name="medice" placeholder="Name of Medicine" required>
		
		
			<input type="text" name="type_medicie" placeholder="Type of Medicine " required>
		
		
			<input type="text" name="dosage" placeholder="Dosage" required>
		
		
			<input type="number" name="Num_dats" placeholder="Number Of Days"  required>
		
		<li id="addmore"><input type="button" value="Add More"  onclick="addEducation('addmore')">

        
		
    		<input type="submit"  value="Submit"></input>	
    	
		
		

</form>