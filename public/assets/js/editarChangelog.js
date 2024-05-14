export default function editarChangelog() {


  const btnEdit = document.querySelectorAll(".btn-edit")
  const btnClose = document.querySelector(".close")
  const mask = document.querySelector(".mask")
  btnEdit.forEach(btn => {
    btn.addEventListener("click", () => {
      mask.classList.add("active")
    })
  })

  btnClose.addEventListener("click", () => {
    mask.classList.remove("active")
  })

  
  
}
