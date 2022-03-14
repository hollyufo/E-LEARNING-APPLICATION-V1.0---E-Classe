function validation()  
{  
    var id=document.form.email_signin.value;  
    var ps=document.form.password_signin.value;  
    if(id.length=="" && ps.length=="") {  
        alert("User Name and Password fields are empty");  
        return false;  
    }  
    else  
    {  
        if(id.length=="") {  
            alert("User Name is empty");  
            return false;  
        }   
        if (ps.length=="") {  
        alert("Password field is empty");  
        return false;  
        }  
    }                             
} 
function Studentvalidation()  
{  
    let id = document.form.name.value;  
    let email = document.form.email.value;
    let phone = document.form.phone.value;
    let enrollnum = document.form.enrollnum.value;
    let date = document.form.date.value; 
    if(id.length=="" || email.length=="" || phone.length=="" || enrollnum.length=="" || date.length=="") {  
        alert("ALL fields are are required");  
        return false;  
    }else{
        // return true;
    }                 
}