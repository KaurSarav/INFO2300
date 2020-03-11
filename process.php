<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delight's Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <!- To link your external JS file to your HTML -->
    <!-- <script type="text/javascript" src="js/form.js"></script> -->
    <style type="text/css">
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
            color: #ff0000;
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
  
  <div class="formData">
    <p id="formResult"><h1>The Delight's Invoice</h1></p>
    <br/>
    <h3>Invoice Number: <?php echo rand(); ?></h3>
    <?php
        echo '<pre>';
        //print_r($_POST);    //just to rmove array from output screen
        echo '</pre>';

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode =$_POST['postcode'];
        $province = @$_POST['province'];
        $kitkat =$_POST['kitkat']; 
        $crispy =$_POST['crispy'];
        $dairy =$_POST['dairy'];
        $mnm =$_POST['mnm'];
        $delivery =$_POST['delivery'];
    
    $errors='';
    if (trim($name)==''){
      $errors.='name is required<br>';
    }
    if (trim($email)==''){
      $errors.='email is required<br>';
    }
    if (trim($phone)==''){
        $errors.='phone is required<br>';
      }
    if (trim($address)==''){
        $errors.='address is required<br>';
      }
    if (trim($city)==''){
        $errors.='city is required<br>';
      }
    if (trim($postcode)==''){
        $errors.='postcode is required<br>';
      }
    if($delivery==1){
        $delivery=30;
      }
    else if($delivery==2){
        $delivery=25;
      }
    else if($delivery==3){
        $delivery=20;
      }
    else if($delivery==4){
        $delivery=15;
    }
    if(trim($kitkat)<0){
      $errors.='Invalid Entry!! Please Try Again<br>';
    }
    if(trim($crispy)<0){
      $errors.='Invalid Entry!! Please Try Again<br>';
    }
    if(trim($dairy)<0){
      $errors.='Invalid Entry!! Please Try Again<br>';
    }
    if(trim($mnm)<0){
      $errors.='Invalid Entry!! Please Try Again<br>';
    }
    if(!is_numeric($kitkat)){
      $errors=$errors.'Invalid Entry!! Please enter how many kitkats in integers<br/>';
    }
    if(!is_numeric($crispy)){
      $errors=$errors.'Invalid Entry!! Please enter how many crispy delights in integers<br/>';
    }
    if(!is_numeric($dairy)){
      $errors=$errors.'Invalid Entry!! Please enter how many dairy milk in integers<br/>';
    }
    if(!is_numeric($mnm)){
      $errors=$errors.'Invalid Entry!! Please enter how many m&m Choco Bars in integers<br/>';
    }

    if($errors==''){
      echo"Name: $name <br>";
      echo"Email: $email<br>";
      echo"Phone: $phone<br>";
      echo"Delivery Address: $address, $city, $province, $postcode.<br>";
      $costKitkat=$kitkat*40;
      echo "Kitkat @ $40: ${costKitkat}<br>";
      $costcrispy=$crispy*35;
      echo "Crispy Delight @ $35: $${costcrispy}<br>";
      $costdairy=$dairy*80;
      echo "Dairy Milk @ $80: $${costdairy}<br>";
      $costmnm=$mnm*120;
      echo "m&m Choco Bar @ $120: $${costmnm}<br>";
      echo "Shipping Charges: $${delivery}<br><br>";
      $subtotal=$costKitkat+$costcrispy+$costdairy+$costmnm+$delivery;
      echo "Subtotal: $${subtotal}<br>";
      $tax=$subtotal*13/100;
      echo "Tax @13%: $${tax}<br><br>";
      $total=$subtotal+$tax;
      echo "Total: $${total}<br>";
    }
    else{
      echo $errors;
    }
      ?>
  </div>
</body>
</html>