let bg = document.querySelectorAll("#TopTitle > img");
let title = document.querySelectorAll("#TopTitle > div");
let lineCut = document.querySelectorAll(".lineCut");
let section = document.querySelectorAll("section");

let r_bg_2 = document.querySelectorAll("#sec2 > div > img");
let r_bg_3 = document.querySelectorAll("#sec3 > div > img");
let r_bg_4 = document.querySelectorAll("#sec4 > div > img");

document.querySelector("main").addEventListener("scroll", parallax_scroll);

function parallax_scroll(Event) {
    scrollAmount = Event.target.scrollTop;

    bg[0].style.top = (scrollAmount * 1.4) % section[4].offsetTop + "px";
    bg[1].style.top = (scrollAmount * 1.2) % section[4].offsetTop + "px";
    bg[2].style.top = (scrollAmount * 1.0) % section[4].offsetTop + "px";
    bg[3].style.top = scrollAmount * 0.8 + "px";
    bg[4].style.top = scrollAmount * 0.6 + "px";
    bg[5].style.top = scrollAmount * 0.4 + "px";
    bg[6].style.top = scrollAmount * 0.2 + "px";
    bg[7].style.top = scrollAmount * 0.0 + "px";
    //bg[8].style.top = scrollAmount * 0.5 + "px";
    
    lineCut[0].style.width = to_bottom(lineCut[0], 0, 1, 0, 100) + "%";
    lineCut[1].style.width = to_bottom(lineCut[1], 0, 1, 0, 100) + "%";
    lineCut[2].style.width = to_bottom(lineCut[2], 0, 0.5, 0, 30) + "%";
    lineCut[3].style.width = to_bottom(lineCut[3], 0, 0.5, 0, 30) + "%";
    lineCut[4].style.width = to_bottom(lineCut[4], 0, 0.5, 0, 30) + "%";
    lineCut[5].style.width = to_bottom(lineCut[5], 0, 0.5, 0, 30) + "%";
    lineCut[6].style.width = to_bottom(lineCut[6], 0, 0.5, 0, 30) + "%";
    lineCut[7].style.width = to_bottom(lineCut[7], 0, 0.5, 0, 30) + "%";

    r_bg_2[0].style.top = Math.max((scrollAmount - section[2].offsetTop + 190) * 0.2, 0) + "px";
    r_bg_3[0].style.top = Math.max((scrollAmount - section[3].offsetTop + 190) * 0.2, 0) + "px";
    r_bg_4[0].style.top = Math.max((scrollAmount - section[4].offsetTop + 190) * 0.3, 0) + "px";
}

function to_bottom(elem, offset, ratio, min, max){
    return Math.min( Math.max( (window.innerHeight - elem.getBoundingClientRect().top - offset)*ratio*100/window.innerHeight, min), max)
}