В блоке с классом slider_main текущего файла размести swipper слайдер со следующими настройками

- 1 слайд отображается
- Из навигации оставь стрелки постраничная не нужна
- автопрокрутка через 5 секунд
- весь слайд должен быть обернут в ссылку с htrf="#"
- В каждом слайде тег img который ведет себя как фон.
- В нижнем левом углу каждого слайда расположен тайтл
- на каждом слайде есть оверлей как пример:

```css
.banner_video .dop_param .item .overlay {
    width: 100%;
    height: 100%;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.7) 0%,
        rgba(0, 0, 0, 0) 70%
    );
}
```

Все стили размести в public/scss/\_banner_slider.scss

Настройки слайдера вынеси в js файл о примеру resources/js/sliders/sea-hotel-galery.js
