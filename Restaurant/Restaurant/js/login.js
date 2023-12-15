function send_data(first_name,last_name,email,password){
    var fdata = new FormData();
    fdata.append("first_name",first_name);
    fdata.append("last_name",last_name);
    fdata.append("email",email);
    fdata.append("password",password);
    
    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/login_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
    {
        if(this.status==200)
        {
            if(sendinfo.responseText=='1')
            {
                alert("Account already exists");
            }

        }
        else
        {
            document.write("readystate or status is inappropriate");
        }

    }

}


function signup(){
    var first_name = document.getElementById("first-name-id").value;
    var last_name = document.getElementById("last-name-id").value;
    var email = document.getElementById("email-id").value;
    var pass = document.getElementById("password-id").value;

    var email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    

    if(first_name!=""){
            if(last_name!=""){ 
                    if(email!=""){
                        if(email_regex.test(email)){
                            if(pass!=""){
                                if(pass.length>5){
                                    send_data(first_name,last_name,email,pass);
                                }
                                else{
                                    alert("Password must be greater than 5 characters!");
                                }
                            }
                            else{
                                alert("Enter password");
                            }    
                        }
                        else{
                            alert("Enter valid email");
                        }   
                    }
                    else{
                        alert("Enter email");
                    }
            }
            else{
                alert("Enter last name");
            }
        }
    else{
        alert("Enter first name");
    }

}