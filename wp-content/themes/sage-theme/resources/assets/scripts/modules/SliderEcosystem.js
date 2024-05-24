export default class SliderEcosystem {
    constructor () {
      this.$this = $('.mod-ecosystem')
    }
    init () {
      if (this.$this.length) {
        this.addSlick()
      }
    }
    addSlick () {
      this.$this.find('.slider').slick({
        // rows: 0,
        // adaptiveHeight: true,
        infinite: false,
        draggable: false,
        prevArrow: '<button type="button" class="slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span><span class="sr-only">Previous Button</span></button>',
        nextArrow: '<button type="button" class="slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span><span class="sr-only">Next Button</span></button>'
      })
    }
  }
  new SliderEcosystem().init()
  