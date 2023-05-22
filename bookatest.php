<!DOCTYPE html>
<html>
<head>
	<title>bookatest</title>

	<style type="text/css">
		*{
        	margin: 0;
        	padding: 0;
        	box-sizing: border-box;
        	font-family: 'Poppins',sans-serif;
        }
        body{
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	min-height: 100vh;
        	background: #1f6357;
        }

        .box{
        	position: relative;
        	width: 380px;
        	height: 420px;
        	background:gray;
        	border-radius: 8px;
        	overflow: hidden;
        	border-radius: 10px;
        	box-shadow: 2px 2px 2px white;

        }

        

.box form .inputbox input,select{
  height: 2rem;
  width: 100%;
 font-size: 1.2rem;
  color:black;
  text-align: center;
  border: none;
}

.box form .inputbox input{
  text-align: center;
  padding: 10px;

}
.box form h1{
	color:yellow;
	font-size: 20px;
	text-align: center;
	padding-bottom: 10px;
	word-spacing: 2px;
	text-shadow: 1px 1px white;
}
.box form h1 span{
	color: tomato;
}




        
        

        
        


        .box form{
        	position: absolute;
        	inset: 4px;
        	background: #222;
        	padding: 10px 20px;
        	border-radius: 8px;
        	z-index: 2;
        	display: flex;
        	flex-direction: column;
        	width: 100%;
        }

        .box form .inputbox{
        	position: relative;
        	width: 100%;

        	}
       

        .box form .inputbox .space{
        	padding: 10px;
        }

        .box form  .space{
        	padding: 10px;
        	background-color: #556b2f;
        }

        .box form .button{
        	color: white;
        	background-color:teal;
        	padding: 5px;
        	margin: 10px;
        	width: 30%;
        }

        .box form .button:hover{
        	color: red;
        	background-color:yellow;
        	cursor: pointer;
        	text-shadow: 1px 1px green;
        }
        

       


		
	</style>
</head>
<body>
	<div class="box">
	<form action="lab.php" method="POST">
		<h1> <span>A</span>pply <span>P</span>ath<span>L</span>ab</h1>
		                <div class="register">
						<div class="inputbox">
						 
							<div class="space">
							    <input type="text" name="Name" placeholder="Full name" required="required">
						    </div>
						    <div class="space">
							<input type="number" name="Phone" placeholder="phone" required="required">
						    </div>
							<div class="space">
							<input type="email"  name="Email" placeholder="your email " required="required">
                           </div>
                           <div class="space">
						   <input type="date" name="Date">
						   </div>
						</div>
					    <div class="space">
						<select  name="Department" id="">
			<option value="" disabled selected>Department</option>

			<option value="THYROID">THYROID</option>
			<option value="FEVER">FEVER</option>
			<option value="DIABETES">DIABETES</option>
			<option value="CARDIO">CARDIO</option>
			<option value="KIDNEY">KIDNEY</option>
			<option value="LIVER">LIVER</option>
		<option value="FULL BODY">FULL BODY</option>
			<option value="VITAMIN">VITAMIN</option>
			<option value="URINE">URINE</option>
		</select>
	</div>
        <div class="space">
		<select name="Location" id="" required="required">
			<option value="" disabled selected>Location</option>
			<option value="Burdwan">Burdwan</option>
			<option value="Durgapur">Durgapur</option>
			<option value="Katwa">Katwa</option>
			<option value="Memari">Memari</option>
			<option value="Bandel">Bandel</option>
		</select>
	</div>
         <div>
		<input type="submit" value="Submit" class="button" name="submit"> </div>

			

			</div>

					</form>
				</div>




</body>
</html>