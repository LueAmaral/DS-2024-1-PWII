const $html = document.querySelector("html")
const $toggletheme = document.getElementById("toggletheme")
const $lightModeIcon = document.getElementById("light-mode-icon")
const $darkModeIcon = document.getElementById("dark-mode-icon")
const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');

$toggletheme.onclick = function(){
    $html.dataset.bsTheme = $html.dataset.bsTheme == "light" ? "dark" : "light";
    localStorage.setItem('theme', $html.dataset.bsTheme);
    updateTheme();
}

function updateTheme() {
    if($html.dataset.bsTheme == "dark"){
        $lightModeIcon.style.display = "";
        $darkModeIcon.style.display = "none";
    }else{
        $lightModeIcon.style.display = "none";
        $darkModeIcon.style.display = "";
    }
}

// Carrega o tema salvo ou o tema padrão do sistema
let savedTheme = localStorage.getItem('theme');
if(savedTheme) {
    $html.dataset.bsTheme = savedTheme;
} else {
    const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');
    $html.dataset.bsTheme = prefersColorScheme.matches ? "dark" : "light";
}
updateTheme();