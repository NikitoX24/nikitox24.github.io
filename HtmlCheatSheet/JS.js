// const paragraph = "I think Ruth's dog is cuter than your dog!";

// console.log(paragraph.replace("Ruth's", 'my'));
// // Expected output: "I think my dog is cuter than your dog!"

// const regex = /Dog/i;
// console.log(paragraph.replace(regex, 'ferret'));
// // Expected output: "I think Ruth's ferret is cuter than your dog!"









var btn = document.getElementById("demo8");
btn.addEventListener("click", myFunction01);

function myFunction01() {
  alert("Hola");
  btn.removeEventListener("click", myFunction01);
}