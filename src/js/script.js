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
  allTextTr.forEach(function (text) {
    text.style.filter = "none"; // Mettre en flou les autres images
  });
  
}

function redirectToPage(page) {
  window.location.href = page; // Redirection vers la page spécifiée
}

function enlargeImage(elementP) {
  elementP.style.transform = "scale(1.1)"; // Agrandir l'image
  let element=elementP.childNodes[1].childNodes[1]
  let allDiv = document.querySelectorAll(".image-container");
  let allImages = document.querySelectorAll(".custom-image");

  let allTextBL = document.querySelectorAll(".text-bottom-left");
  let allTextBr = document.querySelectorAll(".text-bottom-right");
  let allTextTr = document.querySelectorAll(".text-top-left");
  allImages.forEach(function (img) {
    if (img !== element.childNodes[1]) {
      img.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  allTextBr.forEach(function (text) {
    if (text !== element.childNodes[9]) {
      text.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  allTextBL.forEach(function (text) {
    if (
      text !== element.childNodes[5]&&
      text !== element.childNodes[7]
    ) {
      text.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  allTextTr.forEach(function (text) {
    if (text !== element.childNodes[3]) {
      text.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  let texteSurvol = element.querySelector(".texte-survol");

  if (!texteSurvol) {
    texteSurvol = document.createElement("div");

    if (elementP.childNodes[1].href.includes("#")) {
      texteSurvol.textContent = "Pas d'information pour l'instant";
    } else {
      texteSurvol.textContent = "Cliquez pour voir plus";
    }

    texteSurvol.className = "texte-survol";
    element.appendChild(texteSurvol);
  }

  elementP.addEventListener("mouseout", function () {
    texteSurvol.style.display = "none"; // Masquer l'élément texteSurvol lorsque la souris quitte l'élément
  });

  elementP.addEventListener("mouseover", function () {
    texteSurvol.style.display = "block"; // Réafficher l'élément texteSurvol lorsque la souris rentre dans l'élément
  });

 
}
function changerImage(src) {
  var imageSelectionnee = document.getElementById("imageSelectionnee");
  imageSelectionnee.src = src;
}

document.addEventListener("DOMContentLoaded", function () {
  let today = new Date().toISOString().split("T")[0];
  document.getElementById("date").value = today;
 

});

