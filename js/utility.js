function GetSpeakerId(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    //Gets a temp speaker id and parse it to int
    const tmpSpId = parseInt(urlParams.get('Id'));
    //If in the url there is the speakerId param and the value is a number, use the tmpSpId defined previously, otherwise set 1.
    let speakerNum = urlParams.has('Id') && !isNaN(tmpSpId) ? tmpSpId : 1;
    //Check upper and down limits on the speaker id
    speakerNum = speakerNum <= 0 ? 1 : (speakerNum > 4 ? 4 : speakerNum);
    return speakerNum;
}
async function LoadJsonData() {
    const speakerNum = GetSpeakerId();
    const response = await fetch("../assets/speakers/sp-"+speakerNum+".json");
    const json = await response.json();
    document.getElementById("speakerImg").setAttribute("src","../assets/img/speakers/speaker_"+speakerNum+".jpg");
    document.getElementById("name").innerText = json.nome;
    document.getElementById("surname").innerText = json.cognome;
    document.getElementById("presentation").innerHTML = json.presentazione;
    if(json.facebook)
        document.getElementById("facebook").innerHTML= json.facebook;
    else
        HideElementById("parFacebook");
    if(json.instagram)
        document.getElementById("instagram").innerHTML = json.instagram;
    else
        HideElementById("parInstagram");
    if(json.pagine)
        document.getElementById("pages").innerHTML = json.pagine;
    else
        HideElementById("parPages");
    if(json.mail)
        document.getElementById("mail").innerHTML = json.mail;
    else
        HideElementById("parMail");
    if(!json.facebook && !json.pagine && !json.mail)
        HideElementById("contacts");
    UpdateLink("linkPrev",GetPrevId());
    UpdateLink("linkNext",GetNextId());
}

function UpdateLink(elemId,speakerId,innerVal){
    document.getElementById(elemId).href = "../pages/speaker.html?Id="+speakerId+"#speakerContent";
}
function GetPrevId(){
    let tmp = GetSpeakerId();
    return tmp-1<=0?4:tmp-1;
}
function GetNextId(){
    let tmp = GetSpeakerId();
    return tmp+1>4?1:tmp+1;
}
function HideElementById(id){
    document.getElementById(id).classList.add("d-none");
}