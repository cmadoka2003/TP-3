
document.addEventListener("DOMContentLoaded", function () {
  let today = new Date().toISOString().split("T")[0];
  document.getElementById("date").value = today;
});

function changerImage(src) {
    var imageSelectionnee = document.getElementById('imageSelectionnee');
    imageSelectionnee.src = src;
}
