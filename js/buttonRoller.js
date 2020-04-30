const animeInput = document.getElementsByClassName("input-roll");
    const animeBtn = document.getElementsByClassName("input-btn");
    const animeTxt = document.getElementsByClassName("input-btnText");

    //change btnTxt class display
    const showTxt = () => {
      animeTxt[0].style.display = "inline-block";
    }
    const showMailTxt = () => {
      animeTxt[1].style.display = "inline-block";
    }

    //what it have to do on EventListener
    //setTimeout(1000) == animation in css keyframes
    const btnRoll = () => {
      animeBtn[0].classList.add("input-animate");
      return setTimeout("showTxt()", 1000);
    }
    const btnMailRoll = () => {
      animeBtn[1].classList.add("input-animate");
      return setTimeout("showMailTxt()", 1000);
    }
    //do when focus
    animeInput[0].addEventListener('focus', btnRoll);
    animeInput[1].addEventListener('focus', btnMailRoll);