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
    document.getElementById("facebook").innerText = json.facebook;
    document.getElementById("pages").innerHTML = json.pagine;
    document.getElementById("mail").innerText = json.mail;
}