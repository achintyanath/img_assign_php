var chatbtn = document.getElementsByClassName("buttonname");
//var userto = document.getElementsByClassName("userto");
const chatbox = document.getElementById("chatbox");
/*

for (var i = 0 ; i < chatbtn.length; i++) {
 
 chatbtn[i].addEventListener("click", () => {
  chatbox.style.display = "block";
 
  make_chat_dialog_box();
  const close1 = document.getElementById("close");

  close1.addEventListener("click", () => {
    chatbox.style.display = "none";
 });
 });
}*/


/*
 $(document).on('click', '.start_chat', function(){
   var to_user_id = $(this).data('touserid');
   var to_user_name = $(this).data('tousername');
   make_chat_dialog_box(to_user_id, to_user_name);
   $("#user_dialog_"+to_user_id).dialog({
    autoOpen:false,
    width:400
   });
   $('#user_dialog_'+to_user_id).dialog('open');
  });
*/

function dialog_box(userto) {
  
  


  chatbox.style.display = "block";
  //console.log("hi");
  var inside = '<div id="prem_'+userto+'" style="width:350px;height:400px;border: 1px solid #ccc;background-color::#eecce3; overflow:scroll; display: flex; flex-direction: column-reverse">'+chathistory()+'</div><textarea id="msg_'+userto+'" name="msg" style="width:346px;height:40px;border: 1px solid #ccc;background-color: #FFFDD0" placeholder="Type your message here" required></textarea><button type="submit" id="send_' + userto + '" style="position:absolute;bottom: 0em; right:0em">Send</button><button type="button" id="close_' + userto + '" style="position:absolute;top: 0em;right:0em">Close</button>';
  chatbox.innerHTML = inside;
  var chatmessage= document.getElementById("msg_" + userto);
  document.getElementById("close_" + userto).addEventListener("click", () => {
    chatbox.style.display = "none";
});

function scrolldown() {
  var objDiv = document.getElementById("prem_"+userto);
  objDiv.scrollTop = objDiv.scrollHeight;
}

document.getElementById("send_" + userto).addEventListener("click", () => {
 scrolldown();
  var chatmess = chatmessage.value;


  const xhr = new XMLHttpRequest();
  xhr.open("POST", "insert.php", true);

  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var param = "user_to=" + `${userto}`;
  param+= "&chat="+`${chatmess}`;
  chatmessage.value="";
  xhr.send(param);
  xhr.onload = function () {

      var obj = this.responseText.trim();
     // console.log(obj);
      var prem= document.getElementById("prem_" + userto);
      prem.innerHTML=obj;
  };

});
function chathistory(){
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "chat_history.php", true);

  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var param = "user_to=" + `${userto}`;
 

  xhr.send(param);
  xhr.onload = function () {

      var obj = this.responseText.trim();
     // console.log(obj);
      var prem= document.getElementById("prem_" + userto);
      prem.innerHTML=obj;
  };
}




function continuous_update(){
    chathistory();
}


setInterval(function(){continuous_update()},2000);

}