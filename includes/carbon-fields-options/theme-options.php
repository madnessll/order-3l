<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
->add_tab('Контакты', [
  Field::make('text', 'site_phone1', 'Первый телефон'),
  Field::make('text', 'site_phone1_digits', 'Первый телефон (только цифры)'),
  Field::make('text', 'site_phone2', 'Второй телефон'),
  Field::make('text', 'site_phone2_digits', 'Второй телефон (только цифры)'),
  Field::make('textarea', 'adress-1', 'Первый адрес (Enter = перенос строки)'),
  Field::make('textarea', 'adress-2', 'Второй адрес (Enter = перенос строки)'),
  Field::make('text', 'vk', 'Ссылка на вконтакте'),
  Field::make('text', 'tg', 'Ссылка на telegram'),
]);
