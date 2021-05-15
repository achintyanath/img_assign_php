console.log("Hi");
const name = document.getElementById("buttonname");

name.addEventListener('click',()=>{
    console.log("HI");
  document.getElementById("rowname").innerHTML=" <form id=\"formid\" action=\"check3.php\" method=\"post\"><input type=\"text\" id=\"username\" name=\"name\" /\><button type=\"submit\" form=\"formid\" value=\"Submit\" id =\"button\">Change</button></form>";
  const xhr = new XMLHttpRequest();
    xhr.open("POST", "check3.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // const param= "username="+`${user.value}`;
   // const param2 = "Array(username="+`${user.value}`+")";
   xhr.onload = function () {
    var obj = this.responseText;
   // console.log(obj);
    //if(obj=="yes"){
       // document.getElementById("mess").innerHTML="Username available";
       // user.style.border= "3px solid green"
           
          
    
    //}
    //else{
        //document.getElementById("mess").innerHTML="Username already taken";
        //user.style.border= "3px solid red"
   // }
    //console.log(obj);
    
    
}

//console.log(param);
    //xhr.send(param);
    




 })
