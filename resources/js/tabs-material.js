
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabs-content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("nav-tabs-link");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" operativen", "");
    }
    document.getElementById(tabName).style.display = "grid";
    evt.currentTarget.className += " active";
}


window.onload = function() {
    document.getElementById('tab1').style.display = "grid";
};
