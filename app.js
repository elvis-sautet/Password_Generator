//get the Dom elements;
const outputPass = document.getElementById("output");
const clipboard = document.getElementById("fa-clipboard");
const passLength = document.getElementById("length");
const upperCase = document.getElementById("upper");
const lowerCase = document.getElementById("lower");
const numberStr = document.getElementById("number");
const symbolStr = document.getElementById("symbol");
const buttonGeneratePaswword = document.getElementById("generate");
const clipboardtxt = document.getElementById("copy");
//assign the random generator functions to an object
const randomFunc = {
    hasUpper:getUpper,
    hasLower:getLower,
    hasNumber:getNumber,
    hasSymbol:getSymbol
}

buttonGeneratePaswword.addEventListener("click",()=>{
    const length = passLength.value;
    const hasUpper = upperCase.checked;
    const hasLower = lowerCase.checked;
    const hasNumber  = numberStr.checked;
    const hasSymbol = symbolStr.checked;

    let generatedPassword = '';
    const totalChecked = hasUpper + hasLower + hasNumber + hasSymbol;
    const typeArray = [ {hasUpper} , {hasLower} , {hasNumber} , {hasSymbol}].filter(type=> Object.values(type)[0])
    if(totalChecked === 0){
        return '';
    }
    for (let i = 0; i < length; i+=totalChecked) {
       typeArray.forEach(item=>{
        const functName = Object.keys(item)[0];
        generatedPassword += randomFunc[functName]();
       })  
    }
    outputPass.innerHTML=generatedPassword;
});
//event listener to copy password to clipboard
clipboardtxt.addEventListener("click",()=>{
    const password = outputPass.innerText;
    if(!password){
        return;
    }
    const textArea = document.createElement("textarea");
    textArea.value = password;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy")
    textArea.remove();
    alert("password copied to clipboard")
})
    


//functions to return random characters from a charctercode 
function getUpper() { 
    return String.fromCharCode(Math.floor(Math.random() * 26 ) + 65)
 }
 function getLower() { 
    return String.fromCharCode(Math.floor(Math.random() * 26 ) + 97)
 }
 function getNumber() { 
    return String.fromCharCode(Math.floor(Math.random() * 10) + 48)
 }
 function getSymbol() {
    const symbol = "!@#$%^&*()_+";
    return symbol[Math.floor(Math.random() * symbol.length)];
  }