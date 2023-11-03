
      

      function resetImages(element) {
        element.style.transform = "scale(1)"; // Réinitialiser la taille de l'image
        let allImages = document.querySelectorAll(".custom-image");
        let allTextBL = document.querySelectorAll(".text-bottom-left");
        let allTextBr = document.querySelectorAll(".text-bottom-right");
        let allTextTr = document.querySelectorAll(".text-top-left");
        allImages.forEach(function (img) {
          
            img.style.filter = "none"; // Mettre en flou les autres images
          
        });
        allTextBL.forEach(function (text) {
          
            text.style.filter = "none"; // Mettre en flou les autres images
          
        });
        allTextBr.forEach(function (text) {
          
            text.style.filter = "none"; // Mettre en flou les autres images
          
        });
        allTextBr.forEach(function (text) {
          
            text.style.filter = "none"; // Mettre en flou les autres images
          
        });
        allTextTr.forEach(function (text) {
          
            text.style.filter = "none"; // Mettre en flou les autres images
          
        });
      }

      function redirectToPage(page) {
        window.location.href = page; // Redirection vers la page spécifiée
      }


    function enlargeImage(element) {
      element.style.transform = "scale(1.1)"; // Agrandir l'image
      let allImages = document.querySelectorAll(".custom-image");
      let allTextBL = document.querySelectorAll(".text-bottom-left");
      let allTextBr = document.querySelectorAll(".text-bottom-right");
      let allTextTr = document.querySelectorAll(".text-top-left");
      allImages.forEach(function (img) {
        if (img !== element.childNodes[1].childNodes[1]) {
          img.style.filter = "blur(4px)"; // Mettre en flou les autres images
        }
      });
      allTextBr.forEach(function (text) {
        if (text !== element.childNodes[1].childNodes[9]) {
          text.style.filter = "blur(4px)"; // Mettre en flou les autres images
        }
      });
      allTextBL.forEach(function (text) {
        if (text !== element.childNodes[1].childNodes[5] && text !== element.childNodes[1].childNodes[7]) {
          text.style.filter = "blur(4px)"; // Mettre en flou les autres images
        }
      });
      allTextTr.forEach(function (text) {
        if (text !== element.childNodes[1].childNodes[3]) {
          text.style.filter = "blur(4px)"; // Mettre en flou les autres images
        }
      });
    }

document.addEventListener("DOMContentLoaded", function () {
  let today = new Date().toISOString().split("T")[0];
  document.getElementById("date").value = today;
});

function changerImage(src) {
    var imageSelectionnee = document.getElementById('imageSelectionnee');
    imageSelectionnee.src = src;
}
