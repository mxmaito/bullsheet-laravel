window.onload= function(){
  //  let fakeNew = document.querySelectorAll('.noticiaFalsa');
    let realNew = document.querySelectorAll('.card-columns');
   let realNewArray= Array.prototype.slice.call(realNew);

    console.log(realNewArray);

    for (let i=0;i<realNewArray.length; i++){
     realNewArray[i].addEventListener("mouseover",mouseOverReal);
     realNewArray[i].addEventListener("mouseout",mouseOutReal);
     };

    function mouseOverReal(){
        this.style.transform= "scale(1.05)";
    }
    function mouseOutReal(){
        this.style.transform= "scale(1)";
    }
}





