let mic = document.getElementById("mic");
let chatareamain = document.querySelector('.chatarea-main');
let chatareaouter = document.querySelector('.chatarea-outer');

let intro = ["Hello, I am REX", "Hi, I am a Robo", "Hello, I'm here to help you"];
let help = ["How may i assist you?","How can i help you?","What i can do for you?"];
let question = ["Hello donor,How can i help you", "Have you checked the eligibility criteria","What is your blood type","Thank you for donating blood"];
let receiver= ["Hello receiver,How can i help you", "Have you registered for receiving blood", "What is your blood type", "Fill correct information in registration form for further status"];
let available = ["Let me check"]
let thank = ["Most welcome","Not an issue","Its my pleasure","Mention not","We hope you like our website"];
let closing = ['Ok bye-bye','As you wish, bye take-care','Bye-bye, see you soon..']

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();

function showusermsg(usermsg){
    let output = '';
    output += `<div class="chatarea-inner user">${usermsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function showchatbotmsg(chatbotmsg){
    let output = '';
    output += `<div class="chatarea-inner chatbot">${chatbotmsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function chatbotvoice(message){
    const speech = new SpeechSynthesisUtterance();
    speech.text = "Sorry I didn't get you";
    if(message.includes('who are you')){
        let finalresult = intro[Math.floor(Math.random() * intro.length)];
        speech.text = finalresult;
    }
    if(message.includes('hello')){
        let finalresult = help[Math.floor(Math.random() * help.length)];
        speech.text = finalresult;
    }
    if(message.includes('I am a Donor')){
        let finalresult = question[Math.floor(Math.random() * question.length)];
        speech.text = finalresult;
    }
    if(message.includes('I am a receiver')){
        let finalresult = receiver[Math.floor(Math.random() * receiver.length)];
        speech.text = finalresult;
    } 
    if(message.includes('is blood available')){
        let finalresult = available[Math.floor(Math.random() * available.length)];
        speech.text = finalresult;
    }


    if(message.includes('thank you' || 'thank you so much')){

        let finalresult = thank[Math.floor(Math.random() * thank.length)];
        speech.text = finalresult;
    }
    if(message.includes('talk to you later')){
        let finalresult = closing[Math.floor(Math.random() * closing.length)];
        speech.text = finalresult;
    }
    window.speechSynthesis.speak(speech);
    chatareamain.appendChild(showchatbotmsg(speech.text));
}

recognition.onresult=function(e){
    let resultIndex = e.resultIndex;
    let transcript = e.results[resultIndex][0].transcript;
    chatareamain.appendChild(showusermsg(transcript));
    chatbotvoice(transcript);
    console.log(transcript);
}
recognition.onend=function(){
    mic.style.background="#ff3b3b";
}
mic.addEventListener("click", function(){
    mic.style.background='#39c81f';
    recognition.start();
    console.log("Activated");
})
