addEventListener('DOMContentLoaded', posInit);


function posInit(Event){
    spanPos = document.querySelectorAll("#h_right > a > span");
    section = document.querySelectorAll("section");
    adv_bar = document.querySelector("#adv_bar");
    main = document.querySelector("main");
    document.querySelector("main").addEventListener("scroll", posColor);

    spanPos[0].style.color = "#00dddd";
    spanPos[0].style.textShadow = "#00dddd 0 0 0.3em";
}

function posColor(Event) {
    scrollAmount = Event.target.scrollTop;

    spanPos.forEach(sec => {
        sec.style.color = "#646464";
        sec.style.textShadow = "none"; 
    });

    spanPos[getSec(scrollAmount)].style.color = "#00dddd";
    spanPos[getSec(scrollAmount)].style.textShadow = "#00dddd 0 0 0.3em";

    adv_bar.style.width = scrollAmount*100/(main.scrollHeight-window.innerHeight) + "vw";
}


function getSec(sA) {
    if(sA > section[4].offsetTop - 180){
        return 4;
    }
    if(sA > section[3].offsetTop - 180){
        return 3;
    }
    if(sA > section[2].offsetTop - 180){
        return 2;
    }
    if(sA > section[1].offsetTop - 180){
        return 1;
    }
    return 0;
}