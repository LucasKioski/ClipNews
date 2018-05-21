$(function () {
    $('.default-slider').unslider({
        autoplay: true,
        delay: 6000,
        arrows: false,
        dots: true,
        infinite: true
    })
});
$('#Date').pickadate({
    
});
$(document).ready(function () {
    $(".teste").hide();
    $(".open").click(function () {
        $(".open").hide();
        //$(".open").html("clique novamente para ocultar");
        $(this).toggleClass("active").next().slideToggle("slow");
        return false;
    })
});
var imagem = document.getElementsByTagName("img");
var text = document.getElementById("textTrump");
var text2 = document.getElementById("textTrum");
var frase = document.getElementsByTagName("h2");
gridster = $(".gridster ul").gridster({
    widget_base_dimensions: [150, 150],
    max_cols: 7,
    shift_widgets_up: false,
    shift_larger_widgets_down: false,
    collision: {
        wait_for_mouseup: true
    }
}).data('gridster');
gridster.$el.ready(function () {
    gridster.$el
        .on('click', 'li', function () {
            gridster.resize_widget($(this), 1, 1),
                text.style.display = "none",
                text2.style.display = "none",
                frase[2].style.fontSize = "15pt",
                imagem[3].width = 150,
                imagem[3].style.margin = 0,
                imagem[3].height = 70;
        })
        .on('dblclick', 'li', function () {
            gridster.resize_widget($(this), 10, 3),
                text.style.display = "block",
                text2.style.display = "block",
                frase[2].style.fontSize = "28pt",
                imagem[3].width = 400,
                imagem[3].style.marginLeft = "10px",
                imagem[3].height = 350;
        });


});