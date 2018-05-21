var gridster = null;
var grid = document.getElementsByClassName("gridster");
var text = document.getElementsByClassName("temanot");
var img = document.getElementsByClassName("img2");
for (var i=0;i<text.length;i++){
text[i].style.fontSize="15px";
}
for (var i = 0;i<img.length; i++) {
img[i].width="200";
img[i].height="140";
}

       var gridster = null;
            gridster = $(".gridster ul").gridster({
                widget_base_dimensions: [75, 75],
                autogenerate_stylesheet: true   ,
               	max_cols: 100,
                max_rows: 100,
                shift_widgets_up: false,
            shift_larger_widgets_down: false,
            collision: {
                wait_for_mouseup: true
            }
        }).data('gridster');
   
    gridster.$el.ready(function () {

        // Redimensionar widgets em hover
        gridster.$el
                .on('dblclick', 'li', function () {
                    gridster=null;
                    gridster = $(".gridster ul").gridster({
                       widget_base_dimensions: [75, 75],    
        }).data('gridster');
                // this.setAttribute("data-row",2);
                })
    });
//lixo
  /*  lis = document.getElementsByTagName("li");
	var grade = document.getElementById("grids");
	for(var i=0;i<lis.length;i++){
	lis[i].onclick=function(){
		if(this.getAttribute("data-col")==12){
			this.style.display="none";
		}
		if(this.getAttribute("data-col")==13){
			this.style.display="none";
		}
		}
	};
*/