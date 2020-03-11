<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Delights</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <!-- To link your external JS file to your HTML -->
    <script type="text/javascript" src="js/form.js"></script>
    <style>
        h1{
            text-align:center;
            color:#3B170B;
        }
        body{
            background-color: #3B170B;
            background-image: url("background.jpg");
            font-family: 'Kalam', cursive;
            font-size: 20px;
        }
        #errors{
            color: red;
            font-family: 'Bilbo Swash Caps', cursive;
            font-size: 26px;
            line-height: 34px;
            text-align: center;
            padding: 10px;
            margin: 0;
            border-radius: 10px;

        }
        form, .formData{
            width: 380px;
            border: 3px solid white;
            box-shadow: 0 0 10px #2c2c2c;
            padding: 30px;
            margin: 50px auto;
            color: #5F4C0B;
            background-color: #F7BE81;
            border-radius: 20px;
        }
        label{
            width: 170px;
            display: inline-block;
            font-size: 18px;
            color: #5F4C0B;
        }
        input:not([type="radio"]), select{
            font-size: 16px;
            font-family: 'Kalam', cursive;
            padding: 5px 10px;
        }
        input:not([type="radio"]){
            width: 170px;
            height: 30px;
            margin-bottom: 10px;
        }
        select{
            width: 190px;
            margin-top: 10px;
        }
        input[type="submit"]{
            width: 100%;
            font-size: 22px;
            background-color: #3B170B;
            color: white;
            font-family: 'Kalam', cursive;
            border: 0px;
            padding: 10px;
            height: 50px;
            box-shadow: 4px 4px 0px #8c087a;
            border-radius: 8px;
        }
        input[type="submit"]:active{
            box-shadow: -4px -4px 0px #8c087a;
        }
    </style>
</head>
<body>
  
  <form name="myform" method="Post" onsubmit=""  action="process.php" >
  <h1>THE DELIGHTS</h1>
  <!-- <h2>Items to purchase</h2>
    <label>KitKat</label>
    <select name="kitkat" id="kitkat">
        <option value="">----- Select -----</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/>
    <label>Crispy Delight</label>
    <select name="crispy" id="crispy">
        <option value="">----- Select -----</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/>
    <label>Dairy Milk</label>
    <select name="dairy" id="dairy">
        <option value="">----- Select -----</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/>
    <label>m&m Choco Bars</label>
    <select name="mnm" id="mnm">
        <option value="">----- Select -----</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/>
    <br><br>
    <h2>Shipping Information</h2> -->
    <label>Name*:</label>
    <input id="name" placeholder="First Last" type="text" name="name"><br/>

    <label>Email*:</label>
    <input id="email" placeholder="email@domain.com" type="email" name="email"><br/>

    <label>Phone*:</label>
    <input id="phone" placeholder="123-123-1234" type="phone" name="phone"><br/>

    <label>Address*:</label>
    <input id="address" placeholder="house#, streetname" type="address" name="address"><br/>

    <label>City*:</label>
    <input id="city"  type="city" name="city"><br/>

    <label>Post Code*:</label>
    <input id="postcode" placeholder="X9X 9X9" type="postcode" name="postcode"><br/>

    <label>Province*:</label>
    <select name="province" id="province">
        <option value="">----- Select -----</option>
        <option value="Ontario">Ontario</option>
        <option value="British Columbia">British Columbia</option>
        <option value="Quebec">Quebec</option>
        <option value="Alberta">Alberta</option>
        <option value="Nova Scotia">Nova Scotia</option>
        <option value="Manitoba">Manitoba</option>
        <option value="Saskatchewan">Saskatchewan</option>
        <option value="New Brunswick">New Brunswick</option>
        <option value="Newfoundland">Newfoundland</option>
        <option value="Prince Edward Island">Prince Edward Island</option>
    </select><br/><br>

    <label>Kitkat:</label>
    <input id="kitkat" type="kitkat" name="kitkat"><br/>

    <label>Crispy Delight:</label>
    <input id="crispy"  type="crispy" name="crispy"><br/>

    <label>Dairy Milk:</label>
    <input id="dairy" type="dairy" name="dairy"><br/>

    <label>m&m Choco Bar:</label>
    <input id="mnm"  type="mnm" name="mnm"><br/>

    <label>Delivery Time: </label>
    <select name="delivery" id="delivery">
        <option value="">----- Select -----</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br/>

    <br/><br/>

    <input type="submit" value="Place Order">
    <p id="errors"></p>
  </form>  
  
  <div class="formData">
    <p id="formResult">Output...</p>
  </div>
</body>
</html>