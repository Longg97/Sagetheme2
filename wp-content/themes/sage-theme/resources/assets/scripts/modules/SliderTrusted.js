export default class SliderTrusted {
    constructor() {
        this.$this = $('.mod-trusted')
    }
    init() {
        if (this.$this.length) {
            this.addSlick()
        }
    }
    addSlick() {
        this.$this.find('.slider').slick({
            slidesToShow: 6,
            slidesToScroll: 2,
            infinite: false,
            draggable: false,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                    }
                },
            ],

            prevArrow: '<button type="button" class="slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span></button>',
            nextArrow: '<button type="button" class="slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span></button>'
        })
    }
}
new SliderTrusted().init()
