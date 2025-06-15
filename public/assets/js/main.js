const btnToggle = document.querySelector(".btnToggle");
const boxmenu = document.querySelector(".boxmenu");

btnToggle.addEventListener("click", () => {
    btnToggle.classList.toggle("active");
    boxmenu.classList.toggle("active");
});


