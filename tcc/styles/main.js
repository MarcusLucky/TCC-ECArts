let toggleNavStatus = false;

let toggleNav = function() {
    let getSidebar = document.querySelector(".nav-sidebar");
    let getSidebarUl = document.querySelector(".nav-sidebar ul");
    let getSidebarTitle = document.querySelector(".nav-sidebar span");
    let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");

    if(toggleNavStatus === false){
        getSidebarUl.style.visibility = "visible";
        getSidebar.style.width = "180px";
        getSidebarTitle.style.opacity = "0.5";

        let arryLength = getSidebarLinks.length;
        for (let  i = 0; i < arryLength; i++){
            getSidebarLinks[i].style.opacity = "1";
        }
    toggleNavStatus = true;
    }

    else if(toggleNavStatus === true){
        getSidebar.style.width = "60px";
        getSidebarTitle.style.opacity = "0";

        let arryLength = getSidebarLinks.length;
        for (let  i = 0; i < arryLength; i++){
            getSidebarLinks[i].style.opacity = "0";
        }

    getSidebarUl.style.visibility = "hidden";

    toggleNavStatus = false;
    }
}