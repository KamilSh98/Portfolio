const buttonleft = document.getElementById("more-left");
const listleft = document.getElementById("more-list-left");
const buttonright = document.getElementById("more-right");
const listright = document.getElementById("more-list-right");

listleft.style.display = "none";
listright.style.display = "none";

buttonleft.addEventListener("click", (event) => {
    if (listleft.style.display == "none"){
    listleft.style.display = "block";
    } else {
        listleft.style.display = "none";
    }
});

buttonright.addEventListener("click", (event) => {
    if (listright.style.display == "none"){
    listright.style.display = "block";
    } else {
        listright.style.display = "none";
    }
});

