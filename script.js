// const button=document.querySelector('button');
//                 button.addEventListener("click",()=>{
//                  Notification.requestPermission().then(perm=>{
//                     alert(perm); 
//                  })


//                 });
document.getElementById('main').style.display = "none";
document.getElementById('mainn').style.display = "none";
document.getElementById('bloc').style.display = "none";
document.getElementById('plante').style.display = "none";
document.getElementById('profil').style.display = 'none';
document.getElementById('mproj').style.display = 'none';



// function ajouterrespo() {
//     document.getElementById('mainn').style.display = "block";
//     document.getElementById('main').style.display = "none";
//     document.getElementById('bloc').style.display = "none";

//     document.getElementById('profil').style.display = 'none';
//     document.getElementById('card').style.display = 'none';

// }

function ajouterbloc() {
    document.getElementById('card').style.display = "none";
    document.getElementById('mainn').style.display = "none";
    document.getElementById('main').style.display = "none";
    document.getElementById('bloc').style.display = "block";
    document.getElementById('plante').style.display = "none";
}

function reunion() {
    document.getElementById('plante').style.display = "none";
    document.getElementById('reunion').style.display = 'block';
    document.getElementById('div').style.display = 'none';
    document.getElementById('profil').style.display = 'none';
    document.getElementById('projet').style.display = 'none';
    document.getElementById('chef').style.display = 'none';
    document.getElementById('b').style.display = 'none';
    document.getElementById('pro').style.display = 'none';
}

document.getElementById('plante').style.display = 'none';
document.getElementById('pro').style.display = 'none';
document.getElementById('reunion').style.display = 'none';
document.getElementById('profil').style.display = 'none';
document.getElementById('projet').style.display = 'none';
document.getElementById('chef').style.display = 'none';
document.getElementById('div').style.display = 'none';
document.getElementById('prof').style.display = 'none';
document.getElementById('chef').style.display = 'none';

function home() {
    document.getElementById('pro').style.display = 'none';
    document.getElementById('reunion').style.display = 'none';
    document.getElementById('profil').style.display = 'none';
    document.getElementById('projet').style.display = 'none';
    document.getElementById('chef').style.display = 'none';
    document.getElementById('div').style.display = 'none';
    document.getElementById('prof').style.display = 'none';
}
document.getElementById('profil').style.display = 'none';

function home() {
    document.getElementById('profil').style.display = 'none';
}

function profil() {
    document.getElementById('b').style.display = 'none';
    document.getElementById('profil').style.display = 'block';
    document.getElementById('ro').style.display = 'none';
    document.getElementById('espace').style.display = 'none';
}