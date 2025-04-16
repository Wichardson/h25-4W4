    const radio0 = document.querySelector('[data-id_radio="0"]');
    const radio1 = document.querySelector('[data-id_radio="1"]');
    const radio2 = document.querySelector('[data-id_radio="2"]');

    let carrousel = document.querySelectorAll(".hero__carrousel"); 
    
    function showOnly(index) {
       
        carrousel.forEach(item => item.classList.remove("visible"));
        carrousel[index].classList.add("visible");
    }
    
    radio0.addEventListener("change", function () {
        showOnly(0);
    });
    
    radio1.addEventListener("change", function () {
        showOnly(1);
    });
    
    radio2.addEventListener("change", function () {
        showOnly(2);
    });