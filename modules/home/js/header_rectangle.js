const words = ["Spiritual", "Learning", "Reflection"];
let index = 0;

function changeText() {
  const textElement = document.getElementById("changing-text");
  textElement.textContent = words[index];
  index = (index + 1) % words.length;
}

setInterval(changeText, 2000); // Change word every 2 seconds
