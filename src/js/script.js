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
  var texteSurvol = document.querySelector(".texte-survol");
  if (texteSurvol) {
    texteSurvol.remove();
  }
}

function redirectToPage(page) {
  window.location.href = page; // Redirection vers la page spécifiée
}

function enlargeImage(element) {
  element.style.transform = "scale(1.1)"; // Agrandir l'image
  let allDiv = document.querySelectorAll(".image-container");
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
    if (
      text !== element.childNodes[1].childNodes[5] &&
      text !== element.childNodes[1].childNodes[7]
    ) {
      text.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  allTextTr.forEach(function (text) {
    if (text !== element.childNodes[1].childNodes[3]) {
      text.style.filter = "blur(4px)"; // Mettre en flou les autres images
    }
  });
  let texteSurvol = null;

  if (element.href.includes("#")) {
    texteSurvol = document.createElement("div");
    texteSurvol.textContent = "Pas d'information pour l'instant";
    texteSurvol.className = "texte-survol";
  } else {
    texteSurvol = document.createElement("div");
    texteSurvol.textContent = "Cliquez pour voir plus";
    texteSurvol.className = "texte-survol";
  }

  texteSurvol.addEventListener("mouseover", function (event) {
    event.stopPropagation(); // Empêche la propagation de l'événement de souris
  });

  element.appendChild(texteSurvol);
  texteSurvol.addEventListener("mouseout", function () {

    texteSurvol.remove(); // Retirer l'élément texteSurvol lorsque la souris quitte l'élément
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

