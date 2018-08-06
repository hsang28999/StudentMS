function activeSection(id1,id2) {
    var element1 = document.getElementById(id1);
    element1.classList.add("active");
    if(id2 != "null") {
        var element2 = document.getElementById(id2);
        element2.classList.add("active");
    }
};


