<!DOCTYPE html>
<html>
<head>
	<title>login.html</title>
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
        	background: #23242a;
        }

        .box{
        	position: relative;
        	width: 380px;
        	height: 420px;
        	background: #1c1c1c;
        	border-radius: 8px;
        	overflow: hidden;
        }

        .box::before{
        	content: '';
        	position: absolute;
        	top: -50%;
        	left: -50%;
        	width: 380px;
        	height: 420px;
        	background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
        	z-index: 1;
        	transform-origin: bottom right;
        	animation: animate 6s linear infinite;
        }
        

        .box::after{
        	content: '';
        	position: absolute;
        	top: -50%;
        	left: -50%;
        	width: 380px;
        	height: 420px;
        	background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
        	z-index: 1;
        	transform-origin: bottom right;
        	animation: animate 6s linear infinite;
        	animation-delay: -3s;
        }

        .borderline{
        	position: absolute;
        	top: 0;
        	inset: 0;
        }

      .borderline::before

      {
      	content: '';
        	position: absolute;
        	top: -50%;
        	left: -50%;
        	width: 380px;
        	height: 420px;
        	background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
        	z-index: 1;
        	transform-origin: bottom right;
        	animation: animate 6s linear infinite;
        	animation-delay: -1.5s;
      }

      .borderline::after

      {
      	content: '';
        	position: absolute;
        	top: -50%;
        	left: -50%;
        	width: 380px;
        	height: 420px;
        	background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
        	z-index: 1;
        	transform-origin: bottom right;
        	animation: animate 6s linear infinite;
        	animation-delay: -4.5s;
      }

 @keyframes animate{
        	0%{
        		transform: rotate(0deg);
        	}
        	100%{
        		transform: rotate(360deg);
        	}
        }



        .box form{
        	position: absolute;
        	inset: 4px;
        	background: #222;
        	padding: 50px 40px;
        	border-radius: 8px;
        	z-index: 2;
        	display: flex;
        	flex-direction: column;
        }
        .box form h2{
        	color: #fff;
        	font-weight: 500;
        	text-align: center;
        	letter-spacing: 0.1rem;

        }
        .box form .inputbox{
        	position: relative;
        	width: 300px;
        	margin-top: 35px;
        }
        .box form .inputbox input{
        	position: relative;
        	width: 100%;
        	padding: 20px 10px 10px;
        	background: transparent;
        	outline: none;
        	border: none;
        	box-shadow: none;
        	color: #23242a;
        	font-size: 1rem;
        	letter-spacing: 0.05em;
        	transition: 0.5s;
        	z-index: 10;
        }
        .box form .inputbox span{
        	position: absolute;
        	left: 0;
        	padding: 20px 0px 10px;
        	pointer-events: none;
        	color: #8f8f8f;
        	font-size: 1em;
        	letter-spacing: 0.05em;
        	transition: 0.5s;

        }
        .box form .inputbox input:valid ~ span,
        .box form .inputbox input:focus ~ span

        {
        	color: #fff;
        	font-size:0.75em;
        	transform: translateY(-34px);
        }

        .box form .inputbox i{
        	position: absolute;
        	left: 0;
        	bottom: 0;
        	width: 100%;
        	height: 2px;
        	background:#fff;
        	border-radius: 4px;
        	overflow: hidden;
        	transition: 0.5s;
        	pointer-events: none;
        }

        .box form .inputbox input:valid ~ i,
        .box form .inputbox input:focus ~ i
        {
        	height: 44px;
        }

       .box form  input[type="submit"]{
       	border: none;
       	outline: none;
       	padding: 9px 25px;
       	background: #fff;
       	margin-top: 30px;
       	cursor: pointer;
       	font-size: 0.9rem;
       	border-radius: 4px;
       	font-weight: 600;
       	width: 100px;

       } 

       .box form  input[type="submit"]:active{
       	opacity: 0.8;
       }
</style>


</head>
<body>
	<div class="box">
		<span class="borderline"></span>
	
	<form action="login.php" method="Post">
		<h2>Sign in</h2>
       <div class="inputbox">
       	<input type="text"  name="Name" required="required">
       	<span>Username</span>
       	<i></i>
    </div>

    <div class="inputbox">
       	<input type="Password" name="Password" required="required">
       	<span>Password</span>
       	<i></i>
    </div>
       	
       	<input type="submit" name="submit" value="Log in">

	</form>
</div>

</body>
</html>