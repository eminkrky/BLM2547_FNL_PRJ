document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".project-card");

  cards.forEach((card) => {
    card.addEventListener("click", () => {
      alert(`Seçilen Proje: ${card.querySelector("h3").innerText}`);
    });
  });
});
