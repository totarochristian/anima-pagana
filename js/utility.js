const maxIdSpeaker = 8;

function GetSpeakerId(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    //Gets a temp speaker id and parse it to int
    const tmpSpId = parseInt(urlParams.get('Id'));
    //If in the url there is the speakerId param and the value is a number, use the tmpSpId defined previously, otherwise set 1.
    let speakerNum = urlParams.has('Id') && !isNaN(tmpSpId) ? tmpSpId : 1;
    //Check upper and down limits on the speaker id
    speakerNum = speakerNum <= 0 ? 1 : (speakerNum > maxIdSpeaker ? maxIdSpeaker : speakerNum);
    return speakerNum;
}
function getRandomInt(min, max) {
    const minCeiled = Math.ceil(min);
    const maxFloored = Math.floor(max);
    return Math.floor(Math.random() * (maxFloored - minCeiled) + minCeiled); // The maximum is exclusive and the minimum is inclusive
}
async function LoadJsonData() {
    const speakerNum = GetSpeakerId();
    const response = await fetch("../assets/speakers/sp-"+speakerNum+".json");
    const json = await response.json();
    document.getElementById("speakerImg").setAttribute("src","../assets/img/speakers/speaker_"+speakerNum+".jpg?"+getRandomInt(1000,10000));
    document.getElementById("name").innerText = json.nome;
    document.getElementById("surname").innerText = json.cognome;
    document.getElementById("presentation").innerHTML = json.presentazione;

    CheckValueAndSetOrHideElementById(json.facebook,"facebook","parFacebook");
    CheckValueAndSetOrHideElementById(json.instagram,"instagram","parInstagram");
    CheckValueAndSetOrHideElementById(json.youtube,"youtube","parYoutube");
    CheckValueAndSetOrHideElementById(json.pagine,"pages","parPages");
    CheckValueAndSetOrHideElementById(json.mail,"mail","parMail");
    CheckValueAndSetOrHideElementById(json.edizione2023,"previousEditionContent","previousEditionParagraph");

    if(!json.facebook && !json.pagine && !json.mail)
        HideElementById("contacts");
        
    UpdateLink("linkPrev",GetPrevId());
    UpdateLink("linkNext",GetNextId());
}
function CheckValueAndSetOrHideElementById(value,elemIdToSet,elemIdToHide){
    if(value)
        document.getElementById(elemIdToSet).innerHTML = value;
    else
        HideElementById(elemIdToHide);
}
function UpdateLink(elemId,speakerId,innerVal){
    document.getElementById(elemId).href = "../pages/speaker.html?Id="+speakerId+"#speakerContent";
}
function GetPrevId(){
    let tmp = GetSpeakerId();
    return tmp-1<=0?maxIdSpeaker:tmp-1;
}
function GetNextId(){
    let tmp = GetSpeakerId();
    return tmp+1>maxIdSpeaker?1:tmp+1;
}
function HideElementById(id){
    document.getElementById(id).classList.add("d-none");
}