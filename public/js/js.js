function getSize(event) {
    var submit = document.querySelectorAll('.getSize');
    for(let i = 0; i < submit.length; i++) {
      submit[i].value = event;
      console.log(submit[i]);
    }
}


var acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}