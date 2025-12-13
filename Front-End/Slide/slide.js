/**
 * Função de funcionamento do Slide
 * 
 * @param {number} slide - Recebe o número do slide
 * @param {string} param - Recebe parametros de execução
 */
function alterSlide(slide = 0, param = null) {
    const slides = document.getElementsByClassName('slide');
    const totalSlides = slides.length;

    // Função para ocultar todos os slides e exibir o slide atual
    const showSlide = (index) => {
        for (let i = 0; i < totalSlides; i++) {
            slides[i].style.animation = 'closeSlide 4s';
            setTimeout(()=>{

                slides[i].style.display = i === index ? 'block' : 'none';
            }, 400)
        }
    };

    if (param === 'dots') {
        // Verifica se o slide está dentro do intervalo válido
        if (slide >= 0 && slide < totalSlides) {
            showSlide(slide);
        }
    } else {
        // Exibe o slide atual e calcula o próximo slide automaticamente
        showSlide(slide);
        slide = (slide + 1) % totalSlides; // Loop circular
    }

    // Configura o loop automático (somente se não for interação com dots)
    if (param !== 'dots') {
        setTimeout(() => {
            alterSlide(slide);
        }, 5000);
    }
}

// Inicializa o slider
alterSlide();
