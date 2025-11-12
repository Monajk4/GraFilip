setTimeout(komunikat,3000)
function komunikat(){alert("Bartczak nic nie zrobił")} 


let klik = document.getElementById("klik");
let punkty = 0;
let punktyZaKlikniecie = 1;
let serca = 1;
let sercaCena = 100
let sercaGuzik = document.getElementById("serca");
klik.addEventListener("click", () => {
    let zdobytePunkty = punktyZaKlikniecie * serca
    punkty += zdobytePunkty;
    document.getElementById("punkty").innerHTML=punkty;
})
sercaGuzik.addEventListener("click", () => {
    if(punkty>=100){
        serca+= 0.5;
        punkty = punkty - sercaCena
        sercaCena+= sercaCena*serca - 100
        document.getElementById("sercaCena").innerHTML = sercaCena
        document.getElementById("punkty").innerHTML=punkty;
    }
})  