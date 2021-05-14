console.log("Hi");
const name = document.getElementById("username");
const user = document.getElementById("user");
const city = document.getElementById("cityname");
const age = document.getElementById("age");
const phone = document.getElementById("phonenumber");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpass = document.getElementById("confirmpass");
const button = document.getElementById("button");
var flag1 =false;
var flag2 =false;
var flag3 =false;
var flag4 =false;
var flag5 =false;
var flag6 =false;
var flag7 =false;
var flag8 =false;
var num=0;
name.addEventListener('input',()=>{
    document.getElementById("errormessage").style.display="none"
})


name.addEventListener('input',()=>{
  
    let reg = /^[A-Z][a-zA-Z\.\' ]*[a-zA-Z]$/;
    let inp = name.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
        num++;
        flag1=true;
        return flag1;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage").style.display="inline";
        flag1=false;
        return flag1;
    }
})

user.addEventListener('input',()=>{
    document.getElementById("errormessage").style.display="none"
})


user.addEventListener('input',()=>{
  
    let reg = /^[A-Z][a-zA-Z\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*$/;
    let inp = name.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
        num++;
        flag8=true;
        return flag8;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage").style.display="inline";
        flag8=false;
        return flag8;
    }
})



city.addEventListener('focus',()=>{
    document.getElementById("errormessage2").style.display="none"
})


city.addEventListener('blur',()=>{
  
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp = city.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
       num++
       flag2=true;
       return flag2;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage2").style.display="inline";
        flag2=false;
        return flag2;
    }
})



age.addEventListener('focus',()=>{
    document.getElementById("errormessage3").style.display="none"
})


age.addEventListener('blur',()=>{
  
    let reg = /^[1-9]$|^[1-9][0-9]$|^[1][0-1][0-9]$/;
    let inp = age.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
        num++;
       flag3=true;
       return flag3;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage3").style.display="inline";
        flag3=false;
        return flag3;
    }
})

phone.addEventListener('focus',()=>{
    document.getElementById("errormessage4").style.display="none"
})


phone.addEventListener('blur',()=>{
  
    let reg = /^(\+?91(\-)?)?(0)?[9876][0-9]{9}$/;
    let inp = phone.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
        num++;
        flag4=true;
        return flag4;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage4").style.display="inline";
        flag4=false;
        return flag4;
    }
})


email.addEventListener('focus',()=>{
    document.getElementById("errormessage5").style.display="none"
})


email.addEventListener('blur',()=>{
  
    let reg = /^[a-zA-Z0-9][a-zA-Z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*[a-zA-Z0-9]@([a-zA-Z]+[.])+[a-zA-z]+$/;
    let inp = email.value;
    console.log(reg,inp);
    if(reg.test(inp)){
        console.log("Matched");
       num++
       flag5=true;
       return flag5;
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage5").style.display="inline";
        flag5=false;
        return flag5;
    }
})


password.addEventListener('focus',()=>{
    document.getElementById("errormessage6").style.display="none"
})


password.addEventListener('blur',()=>{
  
    let reg = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[\#\?\!\@\$\%\^\&\*\-\.]).{8,}$/;
   var inp2 = password.value;
    
    if(reg.test(inp2)){
        console.log("Matched");
       num++
       flag6=true;
       document.getElementById("instructions").style.display="none";
       return flag6;
      
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage6").style.display="inline";
        document.getElementById("instructions").style.display="inline";
        flag6=false;
        return flag6;
    }
})


confirmpass.addEventListener('focus',()=>{
    document.getElementById("errormessage7").style.display="none"
})


confirmpass.addEventListener('blur',()=>{
    var inp2 = password.value;
    var inp3 = confirmpass.value;
    
    if(inp2==inp3){
        console.log("Matched");
        num++
       flag7=true;
       return flag7;
        
    }
    else{
        console.log("Not Matched");
        document.getElementById("errormessage7").style.display="inline";
        flag7=false;
        return flag7;
    }
})
button.addEventListener('click',submit);
function submit(){
    if(flag1&&flag2&&flag3&&flag4&&flag5&&flag6&&flag7){
    alert("Form Submiited successfully")
    }
    else{
        alert("Form incomplete or incorrect")
    }
}

//console.log(nameid&&confirmpassid&&passwordid&&emailid&&phoneid&&phoneid&&ageid&&cityid)
//if(nameid&&confirmpassid&&passwordid&&emailid&&phoneid&&phoneid&&ageid&&cityid){
//button.style.display="inline";

