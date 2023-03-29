// Sélectionne toutes les balises avec la class background-activite
const activites = document.querySelectorAll(".background-activite")

// Fonction encapsulée dans une variable qui ajoute la classe defiler si l'activité est visible à l'écran selon le viewport
const ScrollAnimation = () => {
  activites.forEach((activite) => {
    // Si l'activité est visible, ajoute la classe defiler
    if (activite.getBoundingClientRect().top <= window.innerHeight * 0.8) {
      activite.classList.add("defiler")
    } else {
        // Si non, enlève la classe défiler
      activite.classList.remove("defiler")
    }
  })
}

// Appelle la fonction ScrollAnimation lorsqu'il y a un scroll déclencher par l'utilisateur
window.addEventListener("scroll", ScrollAnimation)
