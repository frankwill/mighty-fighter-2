export default function navigationLinks() {
  const navigationLinks = document.querySelectorAll(".navigation__links")
  const arrayNavigationLinks = Array.from(navigationLinks)

  navigationLinks.forEach((link) => {
    link.addEventListener("click", () => {
      navigationLinks.forEach((allLinks) => allLinks.classList.remove("active"))
      link.classList.add("active")
    })
  })

  const linkLutadores = arrayNavigationLinks.find(link => link.getAttribute("href") === "/lutadores")
  window.navigation.addEventListener("navigate", (event) => {  
    navigationLinks.forEach(link => {
      if(link.classList.contains("active")) {
        link.classList.remove("active")
      }
    })
    if (event.destination.url === "http://127.0.0.7:5500/lutadores") {
      linkLutadores.classList.add("active")
    }
  })
}
