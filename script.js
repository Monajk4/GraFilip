let klik = document.getElementById("klik")
let punkty = 0;
klik.addEventListener("click", () => {
    punkty ++;
    document.getElementById("punkty").innerHTML=punkty;
})