let page = document.querySelector('.page'); //Находим страницу, которую будем менять
let btn = document.querySelector('.theme'); //Находим элемент, при клине на который, будет менять тема

if ('dark-theme' === localStorage.getItem('theme', 'dark-theme')) { //Проверяем явлется ли информация, которую мы запомнили тёмной темой 
    page.classList.toggle('dark-theme'); //Включаем тёмную тему
} else {
    page.classList.toggle('light-theme'); //Включаем светлую тему
}

btn.onclick = function () {
    if (page.classList.toggle('dark-theme')) { //Проверяем, какую тему мы выбираем
        localStorage.setItem('theme', 'dark-theme'); //Включаем тёмную тему
    } else {
        localStorage.setItem('theme', 'light-theme'); //Включаем светлую тему
    }
}