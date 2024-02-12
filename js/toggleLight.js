
let isLightToggled = false;
// ^^^ this needs to be set by cookies somehow

function toggleLightMode () {
    if (isLightToggled)
    {
        isLightToggled = false;
    }
    else {
        isLightToggled = true;
    }

    if (isLightToggled)
    {
        //content-entry marks individual posts
        //vvv sets background color to white
        let contentEntries = document.getElementsByClassName("content-entry");

        for (var i = 0; i < contentEntries.length; i++) 
        {
            contentEntries[i].style.backgroundColor = "white";
        }

        //vvv grabs all the text tags on the page to change text color to black
        let textElements = document.querySelectorAll("h1, h2, h3, h4, h5, h6, p, span, div, a, li");

        for (var i = 0; i < textElements.length; i++)
        {
            textElements[i].style.color = "black";
        }


        let domBody = document.body;
        domBody.style.backgroundColor = "black";

        console.log("TOGGLED LIGHT MODE");
    }
}
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("lightButton").addEventListener("click", toggleLightMode);
});

// document.getElementById("lightButton").addEventListener("click", toggleLightMode);

// let domBody = document.body;
// domBody.style.backgroundColor = "lightgreen";
