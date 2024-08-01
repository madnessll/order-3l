<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
->show_on_page(9)
->add_tab('1 секция', [
  Field::make('text', 'hero-title', 'Заголовок'),
  Field::make('text', 'hero-subtitle1', '1 часть подзаголовка'),
  Field::make('text', 'hero-subtitle2', '2 часть подзаголовка'),
  Field::make('text', 'hero-subtitle3', '3 часть подзаголовка'),
  Field::make('image', 'hero-img', 'Картинка на главном экране'),
  Field::make('text', 'hero-card1-title', 'Первая карточка заголовок'),
  Field::make('text', 'hero-card1-subtitle', 'Первая карточка подзаголовок'),
  Field::make('textarea', 'hero-card1-subtitle2', 'Первая карточка 3 текст'),
  Field::make('textarea', 'hero-card1-descr', 'Первая карточка описание'),
  Field::make('text', 'hero-card2-title', 'Вторая карточка заголовок'),
  Field::make('text', 'hero-card2-subtitle', 'Вторая карточка подзаголовок'),
  Field::make('textarea', 'hero-card2-descr', 'Вторая карточка описание'),
  Field::make('text', 'hero-card3-title', 'Третья карточка заголовок'),
  Field::make('text', 'hero-card3-subtitle', 'Третья карточка подзаголовок'),
  Field::make('textarea', 'hero-card3-descr', 'Третья карточка описание'),
])
->add_tab('2 секция', [
  Field::make('text', 'hero-sec2', 'Заголовок'),
])
->add_tab('3 секция', [
  Field::make('text', 'hero-sec3-title', 'Заголовок'),
  Field::make('text', 'hero-sec3-card1-text', 'Карточка 1 текст'),
  Field::make('image', 'hero-sec3-card1-image', 'Карточка 1 картинка'),
  Field::make('text', 'hero-sec3-card2-text', 'Карточка 2 текст'),
  Field::make('image', 'hero-sec3-card2-image', 'Карточка 2 картинка'),
  Field::make('text', 'hero-sec3-card3-text', 'Карточка 3 текст'),
  Field::make('image', 'hero-sec3-card3-image', 'Карточка 3 картинка'),
  Field::make('text', 'hero-sec3-card4-text', 'Карточка 4 текст'),
  Field::make('image', 'hero-sec3-card4-image', 'Карточка 4 картинка'),
  Field::make('text', 'hero-sec3-card5-text', 'Карточка 5 текст'),
  Field::make('image', 'hero-sec3-card5-image', 'Карточка 5 картинка'),
  Field::make('text', 'hero-sec3-card6-text', 'Карточка 6 текст'),
  Field::make('image', 'hero-sec3-card6-image', 'Карточка 6 картинка'),
  Field::make('text', 'hero-sec3-descr', 'Текст под карточками'),
])
->add_tab('Отзывы', [
  Field::make('complex', 'reviews-items', 'Отзывы')
  ->add_fields('reviews-item', 'Отзыв', [
    Field::make('image', 'reviews-stars', 'Картинка пяти звезд'),
    Field::make('text', 'reviews-name', 'Имя и дата'),
    Field::make('textarea', 'reviews-descr', 'Отзыв'),
    ])
]);

// /////////////////////////////////////////////////////

Container::make('post_meta', 'Дополнительные поля')
->show_on_page(20)
->add_tab('1 секция', [
  Field::make('text', 'logo-title', 'Заголовок'),
  Field::make('textarea', 'logo-descr', 'Описание'),
  Field::make('text', 'logo-title2', 'Второй заголовок'),
  Field::make('textarea', 'logo-descr2', 'Второе описание'),
  Field::make('textarea', 'logo-descr3', 'Третье описание'),
  Field::make('image', 'logo-img', 'Картинка'),
])
->add_tab('2 секция', [
  Field::make('text', 'logo-sec2-title', 'Заголовок'),
  Field::make('text', 'logo-sec2-title-card-blue', 'Заголовок в синей плашке'),
  Field::make('text', 'logo-sec2-subtitle-card-blue', 'Подзаголовок в синей плашке'),
  Field::make('textarea', 'logo-sec2-descr-card-blue', 'Описание в синей плашке'),
  Field::make('text', 'logo-sec2-title-card-pink', 'Заголовок в розовой плашке'),

  Field::make('text', 'logo-sec2-subtitle-card-pink', 'Первый подзаголовок в розовой плашке'),
  Field::make('textarea', 'logo-sec2-descr-card-pink', 'Первое описание в розовой плашке'),

  Field::make('text', 'logo-sec2-subtitle2-card-pink', 'Второй подзаголовок в розовой плашке'),
  Field::make('textarea', 'logo-sec2-descr2-card-pink', 'Второе описание в розовой плашке'),

  Field::make('text', 'logo-sec2-subtitle3-card-pink', 'Третий подзаголовок в розовой плашке'),
  Field::make('textarea', 'logo-sec2-descr3-card-pink', 'Третье описание в розовой плашке'),

  Field::make('textarea', 'logo-sec2-descr', 'Последний абзац в розовой плашке'),
])
->add_tab('3 секция', [
  Field::make('text', 'logo-sec3-title', 'Заголовок'),
  Field::make('textarea', 'logo-sec3-descr', 'Описание'),
])
->add_tab('4 секция', [
  Field::make('text', 'logo-sec4-title', 'Заголовок'),
  Field::make('textarea', 'logo-sec4-descr', 'Описание'),

  Field::make('complex', 'individual_classes', 'Индивидуальные занятия')
  ->add_fields('logo-class-item', 'Элемент', [
  Field::make('text', 'logo-class-item-title', 'Заголовок'),
]),
  Field::make('textarea', 'logo-sec4-descr-last', 'Последний абзац'),
]);

// //////////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')
->show_on_page(23)
->add_tab('1 секция', [
  Field::make('text', 'prep-title', 'Заголовок'),
  Field::make('text', 'prep-subtitle', 'Подзаголовок'),
  Field::make('textarea', 'prep-descr', 'Описание'),
  Field::make('textarea', 'prep-descr2', 'Нижний абзац'),
  Field::make('image', 'prep-img', 'Картинка'),
])
->add_tab('2 секция', [
  Field::make('text', 'prep2-title', 'Заголовок'),
  Field::make('text', 'prep2-subtitle1', '1 Подзаголовок'),
  Field::make('textarea', 'prep2-descr1', '1 описание'),

  Field::make('text', 'prep2-subtitle2', '2 Подзаголовок'),
  Field::make('textarea', 'prep2-descr2', '2 описание'),

  Field::make('text', 'prep2-subtitle3', '3 Подзаголовок'),
  Field::make('textarea', 'prep2-descr3', '3 описание'),

  Field::make('text', 'prep2-subtitle4', '4 Подзаголовок'),
  Field::make('textarea', 'prep2-descr4', '4 описание'),

  Field::make('image', 'prep2-img1', '1 картинка'),
  Field::make('text', 'prep2-text-img1', 'Название карточки с 1 картинкой'),

  Field::make('image', 'prep2-img2', '2 картинка'),
  Field::make('text', 'prep2-text-img2', 'Название карточки с 2 картинкой'),

  Field::make('image', 'prep2-img3', '3 картинка'),
  Field::make('text', 'prep2-text-img3', 'Название карточки с 3 картинкой'),

  Field::make('image', 'prep2-img4', '4 картинка'),
  Field::make('text', 'prep2-text-img4', 'Название карточки с 4 картинкой'),

  Field::make('image', 'prep2-img5', '5 картинка'),
  Field::make('text', 'prep2-text-img5', 'Название карточки с 5 картинкой'),

  Field::make('image', 'prep2-img6', '6 картинка'),
  Field::make('text', 'prep2-text-img6', 'Название карточки с 6 картинкой'),
])
->add_tab('3 секция', [
  Field::make('textarea', 'prep3-descr1', 'Первый абзац'),
  Field::make('text', 'prep3-title', 'Заголовок задач'),
  Field::make('complex', 'prep3-items', 'Задачи')
  ->add_fields('prep3-item', 'Задача', [
  Field::make('text', 'prep3-item-title', 'Заголовок'),
]),
  Field::make('textarea', 'prep3-descr2', 'Второй абзац'),
])
->add_tab('Последняя секция', [
  Field::make('textarea', 'prep-last-descr', 'Абзац'),
  Field::make('image', 'prep-last-image', 'Картинка'),
]);
// /////////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')
->show_on_page(34)
->add_tab('1 секция', [
  Field::make('text', 'price-title', 'Заголовок'),
  Field::make('text', 'price-subtitle', 'Подзаголовок'),
  Field::make('text', 'price-block-title', 'Название блока'),

  Field::make('text', 'price-item-title1', 'Название первой колонки'),
  Field::make('text', 'price-item-subtitle1-left', 'Текст слева первой колонки'),
  Field::make('text', 'price-item-price1-left', 'Цена слева первой колонки'),
  Field::make('text', 'price-item-subtitle1-right', 'Текст справа первой колонки'),
  Field::make('text', 'price-item-price1-right', 'Цена справа первой колонки'),
  Field::make('text', 'price-item-descr1', 'Описание справа первой колонки'),

  Field::make('text', 'price-item-title2', 'Название второй колонки'),
  Field::make('text', 'price-item-subtitle2-left', 'Текст слева второй колонки'),
  Field::make('text', 'price-item-price2-left', 'Цена слева второй колонки'),
  Field::make('text', 'price-item-subtitle2-right', 'Текст справа второй колонки'),
  Field::make('text', 'price-item-price2-right', 'Цена справа второй колонки'),
  Field::make('text', 'price-item-descr2', 'Описание справа второй колонки'),

  Field::make('text', 'price-item-title3', 'Название третьей колонки'),
  Field::make('text', 'price-item-subtitle3-right', 'Текст третьей колонки'),
  Field::make('text', 'price-item-price3-right', 'Цена третьей колонки'),
  Field::make('text', 'price-item-descr3', 'Описание третьей колонки'),
])
->add_tab('2 секция', [
  Field::make('text', 'price2-title', 'Заголовок'),
  Field::make('text', 'price2-subtitle1', 'Название первой колонки'),
  Field::make('text', 'price2-price1', 'Цена первой колонки'),

  Field::make('text', 'price2-subtitle2', 'Название второй колонки'),
  Field::make('text', 'price2-price2', 'Цена второй колонки'),
  Field::make('text', 'price2-descr2', 'Описание второй колонки'),

  Field::make('text', 'price2-subtitle3', 'Название третьей колонки'),
  Field::make('text', 'price2-price3', 'Цена третьей колонки'),
  Field::make('text', 'price2-descr3', 'Описание третьей колонки'),
])
->add_tab('3 секция', [
  Field::make('text', 'price3-title', 'Заголовок'),
  Field::make('text', 'price3-subtitle1', 'Название первой колонки'),
  Field::make('text', 'price3-price1', 'Цена первой колонки'),

  Field::make('text', 'price3-subtitle2', 'Название второй колонки'),
  Field::make('text', 'price3-price2', 'Цена второй колонки'),

  Field::make('text', 'price3-subtitle3', 'Название третьей колонки'),
  Field::make('text', 'price3-price3', 'Цена третьей колонки'),
])
->add_tab('4 секция', [
  Field::make('text', 'price4-title', 'Заголовок'),
  Field::make('text', 'price4-subtitle', 'Подзаголовок'),

  Field::make('text', 'price4-subtitle1', 'Название первой колонки'),
  Field::make('text', 'price4-price1', 'Цена первой колонки'),

  Field::make('text', 'price4-subtitle2', 'Название второй колонки'),
  Field::make('text', 'price4-price2', 'Цена второй колонки'),
  Field::make('text', 'price4-descr2', 'Описание второй колонки'),
])
->add_tab('5 секция', [
  Field::make('text', 'price5-title', 'Заголовок'),

  Field::make('text', 'price5-subtitle1', 'Название первой колонки'),
  Field::make('text', 'price5-price1', 'Цена первой колонки'),
  Field::make('text', 'price5-descr1', 'Описание первой колонки'),

  Field::make('text', 'price5-subtitle2', 'Название второй колонки'),
  Field::make('text', 'price5-price2', 'Цена второй колонки'),
  Field::make('text', 'price5-descr2', 'Описание второй колонки'),
])
->add_tab('6 секция', [
  Field::make('text', 'price6-title', 'Заголовок'),
  Field::make('text', 'price6-price', 'Цена'),
])
->add_tab('7 секция', [
  Field::make('text', 'price7-title', 'Заголовок'),

  Field::make('text', 'price7-subtitle1', 'Название первой колонки'),
  Field::make('text', 'price7-price1', 'Цена первой колонки'),

  Field::make('text', 'price7-subtitle2', 'Название второй колонки'),
  Field::make('text', 'price7-price2', 'Цена второй колонки'),

  Field::make('text', 'price7-subtitle3', 'Название третьей колонки'),
  Field::make('text', 'price7-price3', 'Цена третьей колонки'),
])
->add_tab('Последняя секция', [
  Field::make('text', 'price8-title', 'Заголовок'),
  Field::make('text', 'price8-subtitle', 'Подзаголовок'),
  Field::make('text', 'price8-text-left', 'Текст слева сверху'),
  Field::make('text', 'price8-text-right', 'Текст справа сверху'),
  Field::make('text', 'price8-item1', 'Направление 1'),
  Field::make('text', 'price8-item2', 'Направление 2'),
  Field::make('text', 'price8-item3', 'Направление 3'),
  Field::make('text', 'price8-item4', 'Направление 4'),
  Field::make('text', 'price8-text-bottom', 'Текст снизу'),
  Field::make('text', 'price8-price', 'Цена'),
]);

// /////////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')
->show_on_page(36)
->add_tab('1 секция', [
  Field::make('text', 'psix-title', 'Заголовок'),
  Field::make('textarea', 'psix-descr', 'Описание'),
  Field::make('textarea', 'psix-descr2', '2 описание'),
  Field::make('image', 'psix-image', 'Картинка'),
])
->add_tab('2 секция', [
  Field::make('text', 'psix2-title', 'Заголовок'),
  Field::make('complex', 'psix2-items', 'Пункты')
  ->add_fields('psix2-item', 'Элемент', [
  Field::make('text', 'psix2-item-digit', 'Номер'),
  Field::make('text', 'psix2-item-title', 'Заголовок'),
]),
  Field::make('text', 'psix2-last', 'Последний абзац')
])
->add_tab('3 секция', [
  Field::make('text', 'psix3-title', 'Заголовок'),
  Field::make('complex', 'psix3-items', 'Пункты')
  ->add_fields('psix3-item', 'Элемент', [
  Field::make('text', 'psix3-item-title', 'Название'),
  Field::make('image', 'psix3-item-image', 'Картинка'),
]),
])
->add_tab('Последняя секция', [
  Field::make('text', 'psix4-title', 'Заголовок'),
  Field::make('textarea', 'psix4-descr', 'Описание'),
  Field::make('textarea', 'psix4-descr2', 'Нижний абзац'),
]);
// /////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')
->show_on_page(44)
->add_tab('Поля', [
  Field::make('text', 'breath-title', 'Заголовок'),
  Field::make('image', 'breath-img', 'Картинка'),
  Field::make('complex', 'breath-items', 'Тексты')
  ->add_fields('breath-text', 'Элемент', [
    Field::make('rich_text', 'breath-descr', 'Текст'),
]),
]);
// //////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')

->show_on_page(51)
->add_tab('Поля', [
  Field::make('text', 'breath-title', 'Заголовок'),
  Field::make('image', 'breath-img', 'Картинка'),
  Field::make('complex', 'breath-items', 'Тексты')
  ->add_fields('breath-text', 'Элемент', [
    Field::make('rich_text', 'breath-descr', 'Текст'),
]),
]);
// /////////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')

->show_on_page(54)
->add_tab('Поля', [
  Field::make('text', 'breath-title', 'Заголовок'),
  Field::make('image', 'breath-img', 'Картинка'),
  Field::make('complex', 'breath-items', 'Тексты')
  ->add_fields('breath-text', 'Элемент', [
    Field::make('rich_text', 'breath-descr', 'Текст'),
]),
]);
// /////////////////////////////////////////////////////////
Container::make('post_meta', 'Дополнительные поля')

->show_on_page(57)
->add_tab('Поля', [
  Field::make('text', 'breath-title', 'Заголовок'),
  Field::make('image', 'breath-img', 'Картинка'),
  Field::make('complex', 'breath-items', 'Тексты')
  ->add_fields('breath-text', 'Элемент', [
    Field::make('rich_text', 'breath-descr', 'Текст'),
]),
]);