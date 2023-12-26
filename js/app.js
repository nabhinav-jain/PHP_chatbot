


var textbox=document.getElementById('textbox');
var sendBtn=document.getElementById('sendBtn');
var chatContainer=document.getElementById('chatContainer');
var httpRequest= new XMLHttpRequest();





// function for chatbot message
function chatbotSendMessage(messageText){

     if(httpRequest.readyState==XMLHttpRequest.DONE && httpRequest.status==200){

     var result=JSON.parse(httpRequest.responseText);
     var messageElement=document.createElement('div');
     messageElement.classList.add('w-50');
     messageElement.classList.add('float-left');
     messageElement.classList.add('shadow-sm');
     messageElement.style.margin="10px";
     messageElement.style.padding="5px";
     messageElement.style.display="inline-block";

      messageElement.innerHTML= `<span>Chat:</span>
      <span style="margin-top: 10px; margin-right:10px; padding: 5px;">${result.response_message}</span>`;
      
     messageElement.animate([{easing:"ease-in",opacity:0.4},{opacity:1}],{duration:1000});

     chatContainer.appendChild(messageElement);

     }else{
          // alert('ERROR'); alert for testing
         
     }



}





// function for sending message to message container
function sendMessage(messageText){
     var messageElement=document.createElement('div');
     console.log(messageText)
     messageElement.classList.add('w-50');
     messageElement.classList.add('float-right');
     messageElement.classList.add('shadow-sm');
     messageElement.style.float="right";
     messageElement.style.margin="10px";
     messageElement.style.padding="5px";

    //  this i tried using contaction will use if literal throw error
    //  messageElement.innerHTML=" <span>You:</span>"+
    //  "<span style="+"margin-top: 10px; padding: 5px;"+">"+messageText+"</span>"

     
     messageElement.innerHTML= `<span>You:</span>
     <span style="margin-top: 10px; padding: 5px;">${messageText}</span>`;

     messageElement.animate([{easing:"ease-in",opacity:0.4},{opacity:1}],{duration:1000});

     chatContainer.appendChild(messageElement);
     makeRequest(messageText);
}

//  using ajax to request to database
function makeRequest(messageText){

     httpRequest.open('GET','chatbot.php?message='+messageText,true);
     httpRequest.send();
     httpRequest.onreadystatechange=chatbotSendMessage;

}
   
sendBtn.addEventListener('click',function(e){

     console.log("btn press")
     if(textbox.value!=""){
           
    let messageText=textbox.value;
    sendMessage(messageText);
    textbox.value="";
     }else{
          alert("Empty message!!");
     }

})