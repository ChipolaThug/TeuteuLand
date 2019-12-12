window.addEventListener("load", function(){
    let Total = document.getElementById("jeu");
    Total.style.width = (window.innerWidth - 20) + "px";
    Total.style.height = (window.innerHeight - 150) + "px";


    let enfants = document.querySelectorAll('.enfant'), i;
    for (i = 0; i < enfants.length; ++i) {
        enfants[i].style.width = (0.66*enfants[i].offsetHeight) + "px";
    }
    
    let photoEnfant = document.getElementById("photoEnfant");
    console.log(Total.style.width);
    console.log(Total.style.width*0.3);
    photoEnfant.style.width = (Total.offsetWidth *0.3) + "px";
    let pyramidePhoto = document.getElementById("pyramidePhoto");
    pyramidePhoto.style.width = (Total.offsetWidth *0.7) + "px";

    let text = "";
    function changeVar(str){
        text = str;
    }
    function readTextFile(file)
    {
        let rawFile = new XMLHttpRequest();
        rawFile.open("GET", file);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    let allText = rawFile.responseText;
                    ALLtext = (' ' + allText).slice(1);
                    changeVar(ALLtext);
                }
            }
        }
        rawFile.send(null);
    };
    readTextFile('../HTML/uploads/Robinson.txt');
    setTimeout(function(){next()},100);

    window.allowDrop = function (ev) {
        ev.preventDefault();
    };
      
    window.drag = function (ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        console.log(ev);
    };
      
    window.drop = function (ev) {
        console.log(ev);
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        console.log(data + " ok");
        //ev.target.appendChild(document.getElementById(data));
        //console.log(ev);
        ev.target.children.src = data;
    };


    function next(){
        let childName = text.split("\n");
        console.log(childName);
        for(let i = 0; i < childName.length; i++){
            window['enfant'+i] = document.createElement('img');
            window['enfant'+i].src = "../IMG/"+childName[i]+".png";
            window['enfant'+i].style.height = (photoEnfant.offsetWidth/4.5 * 1.5) + "px";
            window['enfant'+i].style.width = (photoEnfant.offsetWidth/4.5) + "px";
            window['enfant'+i].draggable="true";
            window['enfant'+i].ondragstart=function(){drag(event)}
            photoEnfant.appendChild(window['enfant'+i]);
        }
    };
});

/**/