

function login()
{
    var name = document.querySelector(".loginUname").value;
    var email = document.querySelector(".loginEmail").value;
    var pass = document.querySelector(".loginPass").value;
    
    if(name=="" || name.length<4)
    {
        document.getElementById("loginUnamep").innerHTML="name must be greater than 3 characters";
        return false;
    }
    else if(pass=="" || pass.length<7)
    {
        document.getElementById("loginPassp").innerHTML="password must be greater than 6 character";
        return false;
    }
    else if (email=="" || !email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
    {
        document.getElementById("loginEmailp").innerHTML="enter a valid email";
        return false;
    }
    else
    {
        return true;
    }
}