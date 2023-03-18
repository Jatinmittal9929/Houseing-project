<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='C:\xampp\htdocs\phppractical'></script>
    <style>
        body {
		background-image:url('1.jpg');
		background-repeat: repeat-x;
		background-size: 770px 770px;
		background-attachment: scroll;

        }

        form {
		background: linear-gradient(45deg, #ef65ff, #65fff4);
            border: 1px solid black;
            width: 50%;
            color: black;
            background-color: white;
            padding: 7px;
            margin-top: 8%;
            font-family: sans-serif;
            font-size: 20px;
        }

        input {
            width: 50%;
            padding: 7px;
        }
    </style>
</head>

<body>
    <center>
        <form action="#">
            <h2> SignUp Form</h2>
            <label for="name">First Name</label>
            <input type="text" name="first name" id="name1" placeholder="Enetr your First name"> <br> <br>
            <label for="1name"> Last Nmae</label>
            <input type="text" name="Last name" id="name2" placeholder="Enetr your Last name"> <br> <br>
            <label for="no."> Contact No.</label>
            <input type="number" name="" id=""><br> <br>



            <label for="date"> Date of Birth</label>
            <input type="date" name="" id=""><br> <br>
            <label for="email">Email</label>
            <input type="email" name="" id=""><br> <br>


            <label for="gender">Gender</label>
           <select name="" id="" >
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="other">other</option>
           </select> 



            <label for="Drop">State</label>
            <select name="" id="">
                <option value="Rajasthan">Rajasthan</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Punjab">Punjab</option>
                <option value="Utar pradesh">Utar pradesh</option>
                <option value="jammu & kashmir">jammu & kashmir</option>
                <option value="Himachel pradesh">Himachel pradesh</option>
                <option value="Assam">Assam</option>
                <option value="maharashtra">maharashtra</option>

            </select><br> <br>

            



            <label for="Drop">City</label>
            <select name="" id="">
                <option value="Anand">Anand</option>
                <option value="Vadodra">Vadodra</option>
                <option value="jaipur">jaipur</option>
                <option value="kota">kota</option>
                <option value="mumbai">mumbai</option>
                <option value="jaiselmer">jaiselmer</option>
                <option value="hindaun city">hindaun city</option>
                <option value="bikaner">bikaner</option>

            </select>


            <label for="drop">Pin Code</label>
            <select name="" id="">
                <option value="388305">388305</option>
                <option value="390017">390017</option>
                <option value="302001">302001</option>
                <option value="324001">324001</option>
                <option value="400029">400029</option>
                <option value="345001">345001</option>
                <option value="322230">322230</option>
                <option value="334001">334001</option>

            </select><br> <br>

		<input type="submit" value="Submit"><br> <br><input type="reset" value="Reset">
		


        </form>

    </center>
</body>

</html>