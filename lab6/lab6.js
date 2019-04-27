window.onload = function () {
    var fig = document.getElementById("featured");
    var picture = fig.getElementsByTagName("img");
    var thumb = document.getElementById("thumbnails");
    var pics = thumb.getElementsByTagName("img");
    var figcaption = fig.getElementsByTagName("figcaption");
    pics[0].onclick = g1;
    pics[1].onclick = g2;
    pics[2].onclick = g3;
    pics[3].onclick = g4;
    pics[4].onclick = g5;
    figcaption[0].style.transition = "opacity , 1s";
    fig.onmouseover = h1;
    fig.onmouseout = h2;

    function g1() {
        picture[0].src = "images/medium/5855774224.jpg";
        picture[0].title = "Battle";
        figcaption[0].textContent = "Battle";
    }

    function g2() {
        picture[0].src = "images/medium/5856697109.jpg";
        picture[0].title = "Luneburg";
        figcaption[0].textContent = "Luneburg";
    }

    function g3() {
        picture[0].src = "images/medium/6119130918.jpg";
        picture[0].title = "Bermuda";
        figcaption[0].textContent = "Bermuda";

    }

    function g4() {
        picture[0].src = "images/medium/8711645510.jpg";
        picture[0].title = "Athens";
        figcaption[0].textContent = "Athens";
    }

    function g5() {
        picture[0].src = "images/medium/9504449928.jpg";
        picture[0].title = "Florence";
        figcaption[0].textContent = "Florence";
    }
    
    function h1() {
        figcaption[0].style.opacity = "0.8";
    }

    function h2() {
        figcaption[0].style.opacity = "0";
    }
}