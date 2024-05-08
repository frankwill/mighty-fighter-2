const navigationLinks = document.querySelectorAll('.navigation__links')

navigationLinks.forEach(link => {  
  link.addEventListener('click', () => {
    navigationLinks.forEach(allLinks => allLinks.classList.remove("active"))
    link.classList.add("active")
  })
})
