const snav = document.querySelector(".select");

document.addEventListener("wheel", (e) => {
  if (e.pageY > 900) {
    snav.classList.remove("d-none");
  } else {
    snav.classList.add("d-none");
  }
});
