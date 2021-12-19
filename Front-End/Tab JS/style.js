function openCity(evt, cityName){
    
    // Declaração de Variavél
    var i, tabcontent, tablinks;

    // Elementos da classe tabcontent
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++){

        tabcontent[i].style.display = "none";

    }

    // Obter elementos classe tablinks e remova a classe "ativa"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++){

        tablinks[i].className = tablinks[i].className.replace(" active", "");

    }

    // Mostrar a guia atual e adiciona uma classe "ativa" ao botão que abriu a guia
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}