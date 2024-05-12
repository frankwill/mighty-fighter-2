export default function navigationLinks() {
  const navigationLinks = document.querySelectorAll(".navigation__links")
  const arrayNavigationLinks = Array.from(navigationLinks)

  navigationLinks.forEach((link) => {
    link.addEventListener("click", () => {
      navigationLinks.forEach((allLinks) => allLinks.classList.remove("active"))
      link.classList.add("active")
    })
  })

  
  window.navigation.addEventListener("navigate", (event) => {  
    const destinationUrl = new URL(event.destination.url);
    const path = destinationUrl.pathname;

    navigationLinks.forEach(link => {
      if(link.classList.contains("active")) {
        link.classList.remove("active")
      }
    })

    const linkActive = arrayNavigationLinks.find(link => link.getAttribute("href") === path)
    if (linkActive) {
      linkActive.classList.add("active")
    }
  })
}
