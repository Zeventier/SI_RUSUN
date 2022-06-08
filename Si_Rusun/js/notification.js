const d = new Date();
let bulan = d.getMonth();
let year = d.getFullYear();

var elems = document.getElementsByClassName("year");
for(var i = 0; i < elems.length; i++) {
    elems[i].innerHTML = year;
}

console.log(bulan)


if  (bulan >= 0 ){
    document.getElementById("jan").style.display = "block";
}else{
    document.getElementById("jan").style.display = "none";
}

if (bulan >= 1){
   document.getElementById("feb").style.display = "block";
}else{
    document.getElementById("feb").style.display = "none";
}

if (bulan >= 2){
    document.getElementById("mar").style.display = "block";
}else{
    document.getElementById("mar").style.display = "none";
}

if (bulan >= 3){
    document.getElementById("apr").style.display = "block";
}else{
    document.getElementById("apr").style.display = "none";
}

if (bulan >= 4){
    document.getElementById("mei").style.display = "block";
}else{
    document.getElementById("mei").style.display = "none";
}

if (bulan >= 5){
    document.getElementById("jun").style.display = "block";
}else{
    document.getElementById("jun").style.display = "none";
}

if (bulan >= 6){
    document.getElementById("jul").style.display = "block";
}else{
    document.getElementById("jul").style.display = "none";
}

if (bulan >= 7){
    document.getElementById("agu").style.display = "block";
}
else{
    document.getElementById("agu").style.display = "none";
}
if (bulan >= 8){
   document.getElementById("sep").style.display = "block";
}else{
    document.getElementById("sep").style.display = "none";
}

if (bulan >= 9){
    document.getElementById("okt").style.display = "block";
}else{
    document.getElementById("okt").style.display = "none";
}

if (bulan >= 10){
    document.getElementById("nov").style.display = "block";
}else{
    document.getElementById("nov").style.display = "none";
}

if (bulan == 11){
    document.getElementById("des").style.display = "block";
}else{
    document.getElementById("des").style.display = "none";
}
