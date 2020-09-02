//Категории
let arr_tabs = $("#section3_tabs").children().children();
//Блоки с товарами
let arr_category_names = $("#section3_categories").children();

//Скрываем все объекты, кроме объекта по умолчанию
arr_category_names[0].style.display = "";
for(let i = 1; i < arr_category_names.length; i++){
        arr_category_names[i].style.display = "none";
}

//Смена активного элемента
function changeClass(elem){
    for(let i = 0; i < arr_tabs.length; i++){
        if(arr_tabs[i] == elem){
            arr_tabs[i].className = "active";
        }
        else{
            arr_tabs[i].className = "";
        }
    }
}

//Смена блока товаров в зависимости от активного элемента
function changeBlock(name){
    for(let i = 0; i < arr_category_names.length; i++){
        if(arr_category_names[i].id == name){
            arr_category_names[i].style.display = "";
        }
        else{
            arr_category_names[i].style.display = "none";
        }
    }
}

//Событие при клике на табы
function changeCategory(element){
    let e = element.target;
    let categoryName = e.innerHTML;

    changeClass(e);
    changeBlock(categoryName);
}

//Навешивание события
for(let i = 0; i < arr_tabs.length; i++){
    arr_tabs[i].addEventListener("click", changeCategory);
}
