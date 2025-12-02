var nav_links = document.getElementById("navLinks")
function toggleMenu() {
    if (nav_links.style.right == "0%") {
        nav_links.style.right = "-100%"
        document.getElementsByClassName("mobile-menu")[0].innerHTML="☰"
        
    }
    else {
        nav_links.style.right = "0%";
        
        document.getElementsByClassName("mobile-menu")[0].innerHTML="✕"
    }


}