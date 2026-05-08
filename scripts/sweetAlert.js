document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("diceImg");
    button.addEventListener("click", () => {
    Swal.fire({
        title: "Gambling room",
        text: "Author: Gašper Levpušček",
        imageUrl: "../images/dice-anim.gif", 
        imageWidth: 100,             
        imageHeight: 100,             
        confirmButtonText: "OK",
        confirmButtonColor: "#e85e5e"    
        });
    });
});