function formSubmit(){
    var myOutput = ''; // we will use this to store the output of the form
    var errors = ''; // we will use this to store any error messages.
    
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var postcode = document.getElementById('postcode').value;
    var province = document.getElementById('province').value;
    var phone = document.getElementById('phone').value;
    var kitkat = document.getElementById('kitkat').value;
    var crispy = document.getElementById('crispy').value;
    var mnm = document.getElementById('mnm').value;
    var dairy = document.getElementById('dairy').value;
    kitkat = parseInt(kitkat);
    crispy = parseInt(crispy);
    dairy = parseInt(dairy);
    mnm = parseInt(mnm);

    // Writing a regular expression to validate Post Code
    // Post code format example is N2E 1A6

    var postcoderegex = /^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/;

    // Converting the postcode to uppercase before testing
    postcode = postcode.toUpperCase(); 

    // Testing if the postcode fits the pattern
    if(postcoderegex.test(postcode)){ // Returns true if postcode satisfies the pattern
        errors += ''; // No error in postcode
    }
    else{
        errors += 'Post code is not in correct format <br/>'; // Error found in postcode
    }

    // Writing a regular expression to validate Phone

    var phoneregex = /^\(?(\d{3})\)?[\.\-\/\s]?(\d{3})[\.\-\/\s]?(\d{4})$/;

    // Testing if the phone fits the pattern
    if(phoneregex.test(phone)){ // Returns true if phone satisfies the pattern
        errors += ''; // No error in phone
    }
    else{
        // Error found in phone; concatenating to the existing list of errors
        errors += 'Phone is not in correct format <br/>'; 
    }


    // Comparing the errors string if any errors were found.
    if(errors.trim() != ''){ // trim is the function that trims any empty spaces from front or back
        // Showing the errors
        document.getElementById('errors').innerHTML = errors + '-- Please fix the above errors --';
        document.getElementById('errors').style.border = '2px dashed white';
    }
    else{
        // If no errors found
        
        var costkitkat = 0; 
        var costcrispy = 0;
        var costdairy = 0;
        var costmnm = 0;
        var Subtotal=0;
        var total=0;
        var tax=0;
        if(kitkat > 0){
            costkitkat = 40*kitkat;
        }
        if(crispy > 0){
            costcrispy = 35*crispy;
        }
        if(dairy > 0){
            costdairy = 80*dairy;
        }
        if(mnm > 0){
            costmnm = 120*mnm;
        }


        // Preparing the myOutput
        myOutput = <h1>The Delight's Invoice</h1>
                    `name:${name}<br>
                    email:${email}<br>
                    phone:${phone}<br>
                    delivery address:${address}<br>
                    Kitkat @ $40: ${kitkat} <br>
                    Crispy Delight @ $35: ${crispy}<br>
                    Dairy Milk @ $80: ${dairy}<br>
                    m&m Choco Bar @ $120: ${mnm}<br>
                    Shipping Charges: ${$delivery}<br>
                    Subtotal:${Subtotal}<br>
                    Tax @13%:${tax}<br>
                    Total:${total}<br> `;
        // removing any error messages
        document.getElementById('errors').innerHTML = '';
        document.getElementById('errors').style.border = '0px';
        // Showing the values put in by the user and the total cost
        document.getElementById('formResult').innerHTML = myOutput;
    }

    // Return false will stop the form from submitting and keep it on the current page.
    if(errors!=''){
        return false;
    }
    else{
        return true;
    }
}