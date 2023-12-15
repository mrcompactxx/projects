function book(){
    window.location.href="http://localhost/projects/Restaurant/php/reservation_page.php";
}

function login(){
    window.location.href="http://localhost/projects/Restaurant/php/login_page.php";
}

function menu_redirect(){
    window.location.href="http://localhost/projects/Restaurant/php/menu.php";
    
}

function about_redirect(){

}

function contact_redirect(){

}

function send()
{
    var email = document.getElementById("email-id").value;
    var message = document.getElementById("message-id").value;


    var form_data = new FormData();
    form_data.append("email",email);
    form_data.append("message",message);

    const senddata = new XMLHttpRequest();
    senddata.open("POST","../database/contact_page_db.php");
    senddata.send(form_data);
}

function about_us_redirect(){
    window.location.href="";
}