
// THE COOKIE VALUE IS SET HERE!
let isLightToggled = false;

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("lightButton").addEventListener("click", toggleLightMode);
});

setTheme();

function setTheme ()
{
    console.log("Setting theme!");

    if (isLightToggled)
    {
        // vvv grabs all content-entry divs and sets background white
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

        // vvv sets background to pitch black
        let domBody = document.body;
        domBody.style.backgroundColor = "black";
    }
    else {
        // vvv resets all JS assigned style
        
        // Get all elements on the page
        var allElements = document.querySelectorAll('*');

        // Iterate through each element and remove inline styles
        allElements.forEach(function (element) {
            element.style = '';
        });
    }



}

function toggleLightMode () {
    isLightToggled = !isLightToggled;

    console.log("Light mode toggled? "+isLightToggled);

    setTheme();
}


// document.getElementById("lightButton").addEventListener("click", toggleLightMode);

// let domBody = document.body;
// domBody.style.backgroundColor = "lightgreen";
