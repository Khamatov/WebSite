'use strict';
var multiItemSliderimg = (function () {
return function (selector, config) {
var
_mainElement = document.querySelector(selector), // основный элемент блока
_sliderimgWrapper = _mainElement.querySelector('.sliderimg__wrapper'), // обертка для .slider-item
_sliderimgItems = _mainElement.querySelectorAll('.sliderimg__item'), // элементы (.slider-item)
_sliderimgControls = _mainElement.querySelectorAll('.sliderimg__control'), // элементы управления
_sliderimgControlLeft = _mainElement.querySelector('.sliderimg__control_left'), // кнопка 'LEFT'
_sliderimgControlRight = _mainElement.querySelector('.sliderimg__control_right'), // кнопка 'RIGHT'
_wrapperWidth = parseFloat(getComputedStyle(_sliderimgWrapper).width), // ширина обёртки
_itemWidth = parseFloat(getComputedStyle(_sliderimgItems[0]).width), // ширина одного элемента
_positionLeftItem = 0, // позиция левого активного элемента
_transform = 0, // значение транфсофрмации .slider_wrapper
_step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
_items = []; // массив элементов
// наполнение массива _items
_sliderimgItems.forEach(function (item, index) {
_items.push({ item: item, position: index, transform: 0 });
});

var position = {
getMin: 0,
getMax: _items.length - 1,
}

var _transformItem = function (direction) {
if (direction === 'right') {
if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
return;
}
if (!_sliderimgControlLeft.classList.contains('sliderimg__control_show')) {
_sliderimgControlLeft.classList.add('sliderimg__control_show');
}
if (_sliderimgControlRight.classList.contains('sliderimg__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
_sliderimgControlRight.classList.remove('sliderimg__control_show');
}
_positionLeftItem++;
_transform -= _step;
}
if (direction === 'left') {
if (_positionLeftItem <= position.getMin) {
return;
}
if (!_sliderimgControlRight.classList.contains('sliderimg__control_show')) {
_sliderimgControlRight.classList.add('sliderimg__control_show');
}
if (_sliderimgControlLeft.classList.contains('sliderimg__control_show') && _positionLeftItem - 1 <= position.getMin) {
_sliderimgControlLeft.classList.remove('sliderimg__control_show');
}
_positionLeftItem--;
_transform += _step;
}
_sliderimgWrapper.style.transform = 'translateX(' + _transform + '%)';
}

// обработчик события click для кнопок 'назад' и 'вперед'
var _controlClick = function (e) {
if (e.target.classList.contains('sliderimg__control')) {
e.preventDefault();
var direction = e.target.classList.contains('sliderimg__control_right') ? 'right' : 'left';
_transformItem(direction);
}
};

var _setUpListeners = function () {
// добавление к кнопкам 'назад' и 'вперед' обрботчика _controlClick для событя click
_sliderimgControls.forEach(function (item) {
item.addEventListener('click', _controlClick);
});
}

// инициализация
_setUpListeners();

return {
right: function () { // метод right
_transformItem('right');
},
left: function () { // метод left
_transformItem('left');
}
}

}
}());

var sliderimg = multiItemSliderimg('.sliderimg');



