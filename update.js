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
    ' <form id="formid1" action="check3.php" method="post"><input type="text" id="name" name="name" /><button type="submit" form="formid1" value="Submit" id ="button1" disabled>Change</button></form>';

  const name2 = document.getElementById("name");
  name2.addEventListener("input", () => {
    document.getElementById("errormessage").style.display = "none";
  });

  name2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z\.\' ]*[a-zA-Z]$/;
    let inp = name2.value;

    if (reg.test(inp)) {
     
      document.getElementById("button1").disabled=false;
      flag1 = true;
      return flag1;
    } else {
      
      document.getElementById("errormessage").style.display = "inline";
      document.getElementById("button1").disabled=true;
      flag1 = false;
      return flag1;
    }
  });
});

city.addEventListener("click", () => {
  document.getElementById("rowname2").innerHTML =
    ' <form id="formid2" action="check3.php" method="post"><input type="text" id="city" name="city" /><button type="submit" form="formid2" value="Submit" id ="button2" disabled>Change</button></form>';

  const city2 = document.getElementById("city");

  city2.addEventListener("input", () => {
    document.getElementById("errormessage2").style.display = "none";
  });

  city2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp = city2.value;

    if (reg.test(inp)) {
      console.log("i")
      document.getElementById("button2").disabled=false;
    } else {
      document.getElementById("errormessage2").style.display = "inline";
      document.getElementById("button2").disabled=true;
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
  document.getElementById("rowname4").innerHTML =
    ' <form id="formid3" action="check3.php" method="post"><input type="text" id="age" name="age" /><button type="submit" form="formid3" value="Submit" id ="button3" disabled>Change</button></form>';

  const age2 = document.getElementById("age");
  age2.addEventListener("input", () => {
    document.getElementById("errormessage3").style.display = "none";
  });

  age2.addEventListener("input", () => {
    let reg = /^[1-9]$|^[1-9][0-9]$|^[1][0-1][0-9]$/;
    let inp = age2.value;

    if (reg.test(inp)) {
      document.getElementById("button3").disabled=false;
    } else {
      document.getElementById("errormessage3").style.display = "inline";
      document.getElementById("button3").disabled=true;
    }
  });
});

education.addEventListener("click", () => {
  document.getElementById("rowname5").innerHTML =
    ' <form id="formid4" action="check3.php" method="post">  <select id="qualification" name="qualification"><option value="10th pass">10th pass</option><option value="12th pass">12th pass</option><option value="Graduate">Graduate</option><option value="Post-Grauate">Post-Graduate</option><option value="Phd">Phd</option></select> <button type="submit" form="formid4" value="Submit" id ="button4" disabled>Change</button></form>';
    document.getElementById("button4").disabled=false;
});

phone.addEventListener("click", () => {
  document.getElementById("rowname6").innerHTML =
    ' <form id="formid5" action="check3.php" method="post"><input type="text" id="phone" name="phone" /><button type="submit" form="formid5" value="Submit" id ="button5" disabled>Change</button></form>';

  const phone2 = document.getElementById("phone");
  phone2.addEventListener("input", () => {
    document.getElementById("errormessage4").style.display = "none";
  });

  phone2.addEventListener("input", () => {
    let reg = /^(\+?91(\-)?)?(0)?[9876][0-9]{9}$/;
    let inp = phone2.value;

    if (reg.test(inp)) {
      document.getElementById("button5").disabled=false;
    } else {
      document.getElementById("errormessage4").style.display = "inline";
      document.getElementById("button5").disabled=true;
    }
  });
});

email.addEventListener("click", () => {
  document.getElementById("rowname7").innerHTML =
    ' <form id="formid6" action="check3.php" method="post"><input type="text" id="email" name="email" /><button type="submit" form="formid6" value="Submit" id ="button6" disabled>Change</button></form>';

  const email2 = document.getElementById("email");
  email2.addEventListener("input", () => {
    document.getElementById("errormessage5").style.display = "none";
  });

  email2.addEventListener("input", () => {
    let reg =
      /^[a-zA-Z0-9][a-zA-Z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*[a-zA-Z0-9]@([a-zA-Z]+[.])+[a-zA-z]+$/;
    let inp = email2.value;

    if (reg.test(inp)) {
      document.getElementById("button6").disabled=false;
    } else {
      document.getElementById("errormessage5").style.display = "inline";
      document.getElementById("button6").disabled=true;
    }
  });
});

pass.addEventListener("click", () => {
  document.getElementById("rowname8").innerHTML =
    ' <form id="formid7" action="check3.php" method="post"><input type="password" id="pass" name="pass" /><button type="submit" form="formid7" value="Submit" id ="button7" disabled>Change</button></form>';

  const pass2 = document.getElementById("pass");

  pass2.addEventListener("input", () => {
    document.getElementById("errormessage6").style.display = "none";
  });

  pass2.addEventListener("input", () => {
    let reg = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[\#\?\!\@\$\%\^\&\*\-\.]).{8,}$/;
    var inp2 = pass2.value;

    if (reg.test(inp2)) {
     
      document.getElementById("instructions").style.display = "none";
      document.getElementById("button7").disabled=false;
    } else {
      document.getElementById("errormessage6").style.display = "inline";
      document.getElementById("instructions").style.display = "inline";
      document.getElementById("button7").disabled=true;
    }
  });
});

college.addEventListener("click", () => {
  document.getElementById("rowname9").innerHTML =
    ' <form id="formid8" action="check3.php" method="post"><input type="test" id="college" name="college" /><button type="submit" form="formid8" value="Submit" id ="button8" disabled>Change</button></form>';

  const college2 = document.getElementById("college");

  college2.addEventListener("input", () => {
    document.getElementById("errormessage7").style.display = "none";
  });

  college2.addEventListener("input", () => {
    let reg =
      /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = college2.value;

    if (reg.test(inp2)) {
      
     
      document.getElementById("button8").disabled=false;
    } else {
      document.getElementById("errormessage7").style.display = "inline";
     
      document.getElementById("button8").disabled=true;
    }
  });
});

school.addEventListener("click", () => {
  document.getElementById("rowname10").innerHTML =
    ' <form id="formid9" action="check3.php" method="post"><input type="text" id="school" name="school" /><button type="submit" form="formid9" value="Submit" id ="button9" disabled>Change</button></form>';

  const school2 = document.getElementById("school");

  school2.addEventListener("input", () => {
    document.getElementById("errormessage8").style.display = "none";
  });

  school2.addEventListener("input", () => {
    let reg =
      /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = school2.value;

    if (reg.test(inp2)) {
      
      
      document.getElementById("button9").disabled=false;
    } else {
      document.getElementById("errormessage8").style.display = "inline";
      
      document.getElementById("button9").disabled=true;
    }
  });
});

birth.addEventListener("click", () => {
  document.getElementById("rowname11").innerHTML =
    ' <form id="formid10" action="check3.php" method="post"><input type="text" id="birth" name="birth" /><button type="submit" form="formid10" value="Submit" id ="button10" disabled>Change</button></form>';

  const birth2 = document.getElementById("birth");

  birth2.addEventListener("input", () => {
    document.getElementById("errormessage9").style.display = "none";
  });11

  birth2.addEventListener("input", () => {
    let reg = /^[A-Z][a-zA-Z ]*[a-zA-Z]$/;
    let inp2 = birth2.value;

    if (reg.test(inp2)) {
     
     
      document.getElementById("button10").disabled=false;
    } else {
      document.getElementById("errormessage9").style.display = "inline";
      document.getElementById("button10").disabled=true;
     
    }
  });
});

work.addEventListener("click", () => {
  document.getElementById("rowname12").innerHTML =
    ' <form id="formid11" action="check3.php" method="post"><input type="text" id="work" name="work" /><button type="submit" form="formid11" value="Submit" id ="button11" disabled>Change</button></form>';

  const work2 = document.getElementById("work");

  work2.addEventListener("input", () => {
    document.getElementById("errormessage10").style.display = "none";
  });

  work2.addEventListener("input", () => {
    let reg =
      /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = work2.value;

    if (reg.test(inp2)) {
     
     
      document.getElementById("button11").disabled=false;
    } else {
      document.getElementById("errormessage10").style.display = "inline";
      document.getElementById("button11").disabled=true;
    }
  });
});

hobby.addEventListener("click", () => {
  document.getElementById("rowname13").innerHTML =
    ' <form id="formid12" action="check3.php" method="post"><input type="text" id="hobby" name="hobby" /><button type="submit" form="formid12" value="Submit" id ="button12" disabled>Change</button></form>';

  const hobby2 = document.getElementById("hobby");

  hobby2.addEventListener("input", () => {
    document.getElementById("errormessage11").style.display = "none";
  });

  hobby2.addEventListener("input", () => {
    let reg =
      /^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/;
    let inp2 = hobby2.value;

    if (reg.test(inp2)) {
      
    
      document.getElementById("button12").disabled=false;
    } else {
      document.getElementById("errormessage11").style.display = "inline";
      document.getElementById("button12").disabled=true;
    }
  });
});
