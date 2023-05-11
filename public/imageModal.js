var modal = document.getElementById("myModal");

var pictures = document.getElementsByClassName('picture');

// Get the image and insert it inside the modal - use its "alt" text as a caption
let img = document.getElementById("myImg");
let modalImg = document.getElementById("img01");
let captionText = document.getElementById("caption");

for (let i = 0; i < pictures.length; i++) {
  const element = pictures[i];

  pictures[i].addEventListener('click', function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    console.log(this.alt);
    document.body.classList.add('overflow-hidden');
  });
  
}

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
  console.log(this.alt);
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
  document.body.classList.remove('overflow-hidden');
}