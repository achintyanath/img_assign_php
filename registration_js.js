const name = document.getElementById("username");
const user = document.getElementById("user");
const city = document.getElementById("cityname");
const age = document.getElementById("age");
const phone = document.getElementById("phonenumber");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpass = document.getElementById("confirmpass");
const button = document.getElementById("button");
const gender = document.getElementsByName("gender");
//button.disabled = true;
button.disabled = false;
var flag1 = false;
var flag2 = false;
var flag3 = false;
var flag4 = false;
var flag5 = false;
var flag6 = false;
var flag7 = false;
var flag8 = false;

name.addEventListener("input", () => {
    document.getElementById("errormessage").style.display = "none";
});

name.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z\.\' ]*[a-zA-Z ]$/;
    let inp = name.value;

    if (reg.test(inp)) {
        flag1 = true;
    } else {
        document.getElementById("errormessage").style.display = "inline";
        flag1 = false;
    }
    check();
    return flag1;
});

user.addEventListener("input", () => {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "check2.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    const param = "username=" + `${user.value}`;

    xhr.send(param);
    xhr.onload = function () {
        var obj = this.responseText;

        if (obj == "yes") {
            document.getElementById("mess").innerHTML = "Username available";
            user.style.border = "3px solid green";
        } else {
            document.getElementById("mess").innerHTML = "Username already taken";
            user.style.border = "3px solid red";
        }
    };

    
});


user.addEventListener("input", () => {
    document.getElementById("errormessage8").style.display = "none";
    
});



user.addEventListener("input", () => {
    let reg =/^[a-zA-Z0-9][a-zA-Z0-9 ]*$/;
    let inp = user.value;

    if (reg.test(inp)) {
        flag8 = true;
    } else {
        document.getElementById("errormessage8").style.display = "inline";
        flag8 = false;
    }
    check();
    return flag8;
    
});









city.addEventListener("input", () => {
    document.getElementById("errormessage2").style.display = "none";
});

city.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z ]$/;
    let inp = city.value;

    if (reg.test(inp)) {
        flag2 = true;
    } else {
        document.getElementById("errormessage2").style.display = "inline";
        flag2 = false;
    }
    check();
    return flag2;
});

age.addEventListener("input", () => {
    document.getElementById("errormessage3").style.display = "none";
});

age.addEventListener("input", () => {
    let reg = /^[1-9]$|^[1-9][0-9]$|^[1][0-1][0-9]$/;
    let inp = age.value;

    if (reg.test(inp)) {
        flag3 = true;
    } else {
        document.getElementById("errormessage3").style.display = "inline";
        flag3 = false;
    }
    check();
    return flag3;
});

phone.addEventListener("input", () => {
    document.getElementById("errormessage4").style.display = "none";
});

phone.addEventListener("input", () => {
    let reg = /^(\+?91(\-)?)?(0)?[9876][0-9]{9}$/;
    let inp = phone.value;

    if (reg.test(inp)) {
        flag4 = true;
    } else {
        document.getElementById("errormessage4").style.display = "inline";
        flag4 = false;
    }
    check();
    return flag4;
});

email.addEventListener("input", () => {
    document.getElementById("errormessage5").style.display = "none";
});

email.addEventListener("input", () => {
    let reg =
        /^[a-zA-Z0-9][a-zA-Z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*[a-zA-Z0-9]@([a-zA-Z]+[.])+[a-zA-z ]+$/;
    let inp = email.value;

    if (reg.test(inp)) {
        flag5 = true;
    } else {
        document.getElementById("errormessage5").style.display = "inline";
        flag5 = false;
        return flag5;
    }
    check();
    return flag5;
});

password.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
});

password.addEventListener("input", () => {
    let reg = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[\#\?\!\@\$\%\^\&\*\-\.]).{8,}$/;
    var inp2 = password.value;

    if (reg.test(inp2)) {
        flag6 = true;
        document.getElementById("instructions").style.display = "none";
    } else {
        document.getElementById("errormessage6").style.display = "inline";
        document.getElementById("instructions").style.display = "inline";
        flag6 = false;
    }
    check();
    return flag6;
});

confirmpass.addEventListener("input", () => {
    document.getElementById("errormessage7").style.display = "none";
});

confirmpass.addEventListener("input", () => {
    var inp2 = password.value;
    var inp3 = confirmpass.value;

    if (inp2 == inp3) {
        flag7 = true;
    } else {
        document.getElementById("errormessage7").style.display = "inline";
        flag7 = false;
    }
    check();
    return flag7;
});
/*
function check() {
    if (flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}*/
button.addEventListener("click", submit);
/*function submit() {
    if (flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7) {
        alert("Form Submiited successfully");
    } else {
        alert("Form incomplete or incorrect");
    }
}*/
