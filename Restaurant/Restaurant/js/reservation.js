function send_reginfo(name_value,email_value,number_value,seats_value,date_value,time_value,curr_date){
    var rdata = new FormData();
    rdata.append("name",name_value);
    rdata.append("email",email_value);
    rdata.append("number",number_value);
    rdata.append("seats",seats_value);
    rdata.append("date",date_value);
    rdata.append("time",time_value);
    rdata.append('current_date',curr_date);
    const sendinfo = new XMLHttpRequest();
	sendinfo.open("POST","../database/reservation_db.php");
	sendinfo.send(rdata);
	
}


function validate(){
    var name_id = document.getElementById("name_id").value;
    var email_id = document.getElementById("email_id").value;
    var number_id = document.getElementById("number_id").value;
    var seats_id = document.getElementById("seats_id").value;
    var date_id = document.getElementById("date_id").value;
    var time_id = document.getElementById("time_id").value;
    var error_para = document.getElementById("error_msg_id");
    var error = document.getElementById("error_msg_id").value;
    const date_value = new Date();
    var curr_date = date_value.getFullYear()+'-'+date_value.getDate()+'-'+date_value.getMonth();
    
    var name_regex = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ ;
    var number_regex = /^[0-9]*\d$/;


    if(name_id!=""){
        if(name_regex.test(name_id)){
            if(email_id!=""){
                if(email_regex.test(email_id)){
                    if(number_id!=""){
                        if(number_regex.test(number_id)){
                            if(number_id<=10 || number_id>10){
                                if(seats_id!=""){
                                    if(date_id!=""){
                                        if(time_id!=""){
                                            send_reginfo(name_id,email_id,number_id,seats_id,date_id,time_id,curr_date);
                                        }
                                        else{
                                            error_para.style.visibility="visible";
                                            error_para.innerText = "Select time";
                                        }
                                    }
                                    else{
                                        error_para.style.visibility="visible";
                                        error_para.innerText = "Select date";
                                    }
                                }
                                else{
                                    error_para.style.visibility="visible";
                                    error_para.innerText = "Enter valid seats";
                                }
                                
                            }
                            else{
                                error_para.style.visibility="visible";
                                error_para.innerText = "Enter valid number";
                            }
                            
                        }
                        else{
                            error_para.style.visibility="visible";
                            error_para.innerText = "Enter valid number";
                        }
                        
                    }
                    else{
                        alert("Enter number");
                    }
                }
                else{
                    error_para.style.visibility="visible";
                    error_para.innerText = "Enter valid email";
                }   
            }
            else{
                alert("Enter email id");
            }
        }
        else{
            error_para.style.visibility="visible";
            error_para.innerText = "Enter valid name";
            
        }
        
    }
    else{
        alert("Enter name");
    }

}