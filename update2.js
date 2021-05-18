const college = document.getElementById("college");
const school = document.getElementById("school");
const birth = document.getElementById("birth");
const work = document.getElementById("work");
const hobby = document.getElementById("hobby");
const button = document.getElementById("button");
//button.disabled = true;
var flag1 = false;
var flag2 = false;
var flag3 = false;
var flag4 = false;
var flag5 = false;


college.addEventListener("input", () => {
    document.getElementById("errormessage").style.display = "none";
});

college.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp = college.value;

    if (reg.test(inp)) {
       
        flag1 = true;
    } else {
        document.getElementById("errormessage").style.display = "inline";
       
        flag1 = false;
    }
    //check();
    return flag1;
});

school.addEventListener("input", () => {
    document.getElementById("errormessage2").style.display = "none";
});

school.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp = school.value;

    if (reg.test(inp)) {
        flag2 = true;
    } else {
        document.getElementById("errormessage2").style.display = "inline";
        flag2 = false;
    }
    //check();
    return flag2;
});

work.addEventListener("input", () => {
    document.getElementById("errormessage4").style.display = "none";
});

work.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp = work.value;

    if (reg.test(inp)) {
        flag3 = true;
    } else {
        document.getElementById("errormessage4").style.display = "inline";
        flag3 = false;
    }
    //check();
    return flag3;
});

birth.addEventListener("input", () => {
    document.getElementById("errormessage3").style.display = "none";
});

birth.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp = birth.value;

    if (reg.test(inp)) {
        flag4 = true;
    } else {
        document.getElementById("errormessage3").style.display = "inline";
        flag4 = false;
    }
   // check();
    return flag4;
});

hobby.addEventListener("input", () => {
    document.getElementById("errormessage5").style.display = "none";
});

hobby.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp = hobby.value;

    if (reg.test(inp)) {
        flag5 = true;
    } else {
        document.getElementById("errormessage5").style.display = "inline";
        flag5 = false;
        return flag5;
    }
    ///check();
    return flag5;
});

/*
function check() {
    if (flag1 && flag2 && flag3 && flag4 && flag5 ){
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}
button.addEventListener("click", submit);
function submit() {
    if (flag1 && flag2 && flag3 && flag4 && flag5) {
        alert("Form Submiited successfully");
    }
}*/
