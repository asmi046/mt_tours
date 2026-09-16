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

---

Создай миграцию котораядобавит в таблицу модели @app/Models/Slider.php поле is_show (boolean) значение по умолчанию true. Так же добавь поле в модель.

После этого добавь в компонент resources/views/components/slider-main.blade.php логику вывода по ключу is_show, чтобы отображались только те слайды, у которых is_show = true.

Затем для ресурса app/MoonShine/Resources/SliderResource.php добавь поле is_show в форму редактирования, чтобы можно было управлять видимостью слайдов через админку.
