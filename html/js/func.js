const itemSlider = document.querySelectorAll('.owl-carousel');
    itemSlider && itemSlider.forEach( (item, key) => {
        item.classList.add(`owl-carousel-${key}`)

        const itemSliderFunction = $(`.owl-carousel-${key}`);
        itemSliderFunction && $(`.owl-carousel-${key}`).owlCarousel({
            margin: 0,
            responsiveClass: true,
            dots: false,
            // navContainer: '.owl-nav',
            nav: true,
            navText: [
                `<img src="img/svg/item-prev.svg" alt="">`,
                `<img src="img/svg/item-next.svg" alt="">`    
            ],
            responsive: {
                0: {
                    items: 1,
                },
            },
        })

    })
