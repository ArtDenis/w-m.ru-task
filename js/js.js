(function() {
    //при перезагрузке страницы, возникает проблема в том, что текст label накладывается на содержимое в input, если он не пустой
    var attrs = document.getElementsByClassName('smart');
    for (var k = 0; k < attrs.length; k++) {
        labelNoEmpty(attrs[k].getElementsByTagName('input')[0]);
    }

    //мобильная навигация
    var btnMenuMobile = document.getElementsByClassName("pull")[0];
    var navigation = document.getElementById('navigation');
    var menuMobile = navigation.getElementsByTagName('ul')[0];
    btnMenuMobile.onclick = function(event) {
        event.preventDefault();
        menuMobile.classList.toggle("current");
        return false;
    };

    window.onscroll = function() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;
        if ( scrolled > 60 && !navigation.classList.contains('navigation') ){
            navigation.className += ' navigation';
        } else if( scrolled <= 60 && navigation.classList.contains('navigation') ) {
            navigation.classList.remove('navigation');
        }
    }
})();
function labelNoEmpty(em) {
    if (em.value.length > 0) {
        em.nextElementSibling.className += ' noempty';
    } else {
        em.nextElementSibling.classList.remove('noempty');
    }
}

var slider = document.getElementById('slider');
noUiSlider.create(slider, {
    start: 2,
    connect: "lower",
    step: 1,
    range: {
        min: 0,
        max: 3,
        '50%': 2
    }
});
var input = document.getElementById('js_value');
slider.noUiSlider.on('update', function( values, handle ) {

    var value = values[handle];
    input.value = Math.round(value);

});

$(document).ready(function() {
    $("select").select2({
        placeholder: "Год рождения",
        minimumResultsForSearch: -1
    });
});


