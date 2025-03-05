document.addEventListener('DOMContentLoaded', () => {
    const cardBodies = document.querySelectorAll('.card');

    cardBodies.forEach(cardBody => {        
        const cardContainers = cardBody.querySelectorAll('.card-body')
        const cardTexts = cardBody.querySelectorAll('.card-text');
        const icons = cardBody.querySelectorAll('img')

        cardTexts.forEach(cardText => {
            cardText.style.display = "none";
        });


        cardBody.addEventListener('mouseenter', () => {
            cardBody.classList.add('hovered'); 

            cardContainers.forEach(cardContainer => {
                if (cardContainer.classList.contains("flex-column")) {
                    cardContainer.classList.remove("flex-column");
                    cardContainer.classList.add("flex-row");
                }
            });

            cardTexts.forEach(cardText => {
                cardText.style.display = "block";
            });

            icons.forEach(icon => {
                icon.style.width = "44px";
            });
        });


        cardBody.addEventListener('mouseleave', () => {
            cardBody.classList.remove('hovered');

            cardContainers.forEach(cardContainer => {
                if (cardContainer.classList.contains("flex-row")) {
                    cardContainer.classList.add("flex-column");
                    cardContainer.classList.remove("flex-row");
                }
                
            })

            cardTexts.forEach(cardText => {
                cardText.style.display = "none";
            });

            icons.forEach(icon => {
                icon.style.width = "88px";
            });
        });
    });
});