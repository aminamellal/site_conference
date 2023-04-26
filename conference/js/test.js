// Sélectionnez le bouton Back to top
var btnBackToTop = document.getElementById("btn-back-to-top");

// Ajoutez un écouteur d'événements pour le clic sur le bouton
btnBackToTop.addEventListener("click", function() {
  // Faites défiler jusqu'au haut de la page
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});