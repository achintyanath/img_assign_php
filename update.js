const name = document.getElementById("buttonname");
const city = document.getElementById("buttonname2");
const gender = document.getElementById("buttonname3");
const age = document.getElementById("buttonname4");
const education = document.getElementById("buttonname5");
const phone = document.getElementById("buttonname6");
const email = document.getElementById("buttonname7");
const pass = document.getElementById("buttonname8");
const college = document.getElementById("buttonname9");
const school = document.getElementById("buttonname10");
const birth = document.getElementById("buttonname11");
const work = document.getElementById("buttonname12");
const hobby = document.getElementById("buttonname13");

name.addEventListener("click", () => {
  document.getElementById("rowname").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="name" name="name" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  
  const name2 = document.getElementById("name");
  name2.addEventListener("input", () => {
    document.getElementById("errormessage").style.display="none"
  });

  name2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z\.\' ]*[a-zA-Z]$/;
    let inp = name2.value;
    console.log(reg, inp);
    if (reg.test(inp)) {
      console.log("Matched");
      /* num++;
        flag1=true;
        return flag1;*/
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage").style.display="inline";
       /* flag1=false;
        return flag1;*/
    }
  });
});

city.addEventListener("click", () => {
  document.getElementById("rowname2").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="city" name="city" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };
  const city2 = document.getElementById("city");
  name2.addEventListener("input", () => {
    document.getElementById("errormessage2").style.display="none"
  });


  city2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp = city2.value;
    //console.log(reg,inp);
    if (reg.test(inp)) {
      console.log("Matched");
      //num++
      //flag2=true;
      //return flag2;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage2").style.display="inline";
      //flag2=false;
      //return flag2;
    }
  });
});

/*
gender.addEventListener('click',()=>{
  console.log("HI");
document.getElementById("rowname3").innerHTML=" <form id=\"formid\" action=\"check3.php\" method=\"post\"><input type=\"text\" id=\"gender\" name=\"gender\" /\><button type=\"submit\" form=\"formid\" value=\"Submit\" id =\"button\">Change</button></form>";
const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
  var obj = this.responseText;
 }

 


})*/

age.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname4").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="age" name="age" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const age2 = document.getElementById("age");
  age2.addEventListener("input", () => {
    document.getElementById("errormessage3").style.display="none"
  });

  age2.addEventListener("input", () => {
    let reg = /^[1-9]$|^[1-9][0-9]$|^[1][0-1][0-9]$/;
    let inp = age2.value;
    console.log(reg, inp);
    if (reg.test(inp)) {
      console.log("Matched");
      /*  num++;
     flag3=true;
     return flag3;*/
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage3").style.display="inline";
      /*flag3=false;
      return flag3;*/
    }
  });
});

education.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname5").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="education" name="education" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };
});

phone.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname6").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="phone" name="phone" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const phone2 = document.getElementById("phone");
  phone2.addEventListener("input", () => {
    document.getElementById("errormessage4").style.display="none"
  });

  phone2.addEventListener("input", () => {
    let reg = /^(\+?91(\-)?)?(0)?[9876][0-9]{9}$/;
    let inp = phone2.value;
    console.log(reg, inp);
    if (reg.test(inp)) {
      console.log("Matched");
      /*num++;
      flag4=true;
      return flag4;*/
    } else {
      console.log("Not Matched");
    document.getElementById("errormessage4").style.display="inline";
      /*flag4=false;
      return flag4;*/
    }
  });
});

email.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname7").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="email" name="email" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const email2 = document.getElementById("email");
  email2.addEventListener("input", () => {
     document.getElementById("errormessage5").style.display="none"
  });

  email2.addEventListener("input", () => {
    let reg =
      /^[a-zA-Z0-9][a-zA-Z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*[a-zA-Z0-9]@([a-zA-Z]+[.])+[a-zA-z]+$/;
    let inp = email2.value;
    console.log(reg, inp);
    if (reg.test(inp)) {
      console.log("Matched");
      /*num++
     flag5=true;
     return flag5;*/
    } else {
      console.log("Not Matched");
       document.getElementById("errormessage5").style.display="inline";
      /*flag5=false;
      return flag5;*/
    }
  });
});

pass.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname8").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="password" id="pass" name="pass" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const pass2 = document.getElementById("pass");

  pass2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  pass2.addEventListener("input", () => {
    let reg = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[\#\?\!\@\$\%\^\&\*\-\.]).{8,}$/;
    var inp2 = pass2.value;

    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});


college.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname9").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="test" id="college" name="college" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const college2 = document.getElementById("college");

  college2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  college2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = college2.value;


    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});




school.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname10").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="school" name="school" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const school2 = document.getElementById("school");

  school2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  school2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = school2.value;

    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});




birth.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname11").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="birth" name="birth" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const birth2 = document.getElementById("birth");

  birth2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  birth2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp2 = birth2.value;

    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});



work.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname12").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="work" name="work" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const work2 = document.getElementById("work");

  work2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  work2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = work2.value;

    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});



hobby.addEventListener("click", () => {
  console.log("HI");
  document.getElementById("rowname13").innerHTML =
    ' <form id="formid" action="check3.php" method="post"><input type="text" id="hobby" name="hobby" /><button type="submit" form="formid" value="Submit" id ="button">Change</button></form>';
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "check3.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    var obj = this.responseText;
  };

  const hobby2 = document.getElementById("hobby");

  hobby2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  hobby2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = hoppy2.value;

    if (reg.test(inp2)) {
      console.log("Matched");
      num++;
      flag6 = true;
      document.getElementById("instructions").style.display = "none";
      return flag6;
    } else {
      console.log("Not Matched");
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      flag6 = false;
      return flag6;
    }
  });
});

