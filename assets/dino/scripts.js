const dino = document.getElementById("dino");
const cactus = document.getElementById("cactus");

function jump() {
    if (dino.classList != "jump") {
        dino.classList.add("jump");

        setTimeout(function () {
            dino.classList.remove("jump");
        }, 300);
    }
}

let isAlive = setInterval(function () {
    // get current dino Y position
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    //get current cactus X positon
    let cactusleft = parseInt(window.getComputedStyle(cactus).getPropertyValue("left"));
    //detect collision
    if (cactusleft < 50 && cactusleft > 0 && dinoTop >= 140) {
        alert("Game Over !");
    }

}, 10);

document.addEventListener("keydown", function (event) {
    jump()
});