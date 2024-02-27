import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

export const swiperProyecto = () => {
  const swiperProyecto = new Swiper('.swiper-proyecto', {
    // Optional parameters
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    direction: "horizontal",
    speed: 1000,
    autoplay: {
      "delay": 5000,
      "disableOnInteraction": false
    },
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-proyecto-next',
      prevEl: '.swiper-proyecto-prev',
    },
    pagination: {
      el: '.proyecto-pagination',
    },
  })
}