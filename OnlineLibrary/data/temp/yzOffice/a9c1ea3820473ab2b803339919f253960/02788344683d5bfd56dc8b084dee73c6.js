 $(function() {
    	var appendStr ='<div id="zoom" style="position: fixed; right: 20px; bottom: 10px; width: 24px; height: 140px;">'+
					   	'<div style="border-radius:12px;width: 24px;height: 24px;background-color: #f2f2f2;text-align: center;font-size: 16px;cursor: pointer;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);" onclick="changeTab(1)"><img src="'+basePath+'/zoomIn.png" style="opacity: 0.5;"/></div>'+
					   	'<div style="border-radius:12px;width: 24px;height: 24px;background-color: #f2f2f2;margin-top: 10px;text-align: center;font-size: 16px;cursor: pointer;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);" onclick="changeTab(0)"><img src="'+basePath+'/zoomOut.png" style="opacity: 0.5;"/></div>'+
						'<div style="border-radius:12px;width: 24px;height: 24px;background-color: #f2f2f2;margin-top: 10px;text-align: center;font-size: 16px;cursor: pointer;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);" onclick="rotate(1)"><img src="'+basePath+'/rotate_right.png" width="24" height="24" style="opacity: 0.5;"/></div>'+
						'<div style="border-radius:12px;width: 24px;height: 24px;background-color: #f2f2f2;margin-top: 10px;text-align: center;font-size: 16px;cursor: pointer;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);" onclick="rotate(0)"><img src="'+basePath+'/rotate_left.png" width="24" height="24" style="opacity: 0.5;"/></div>'+
					   '</div>';
		$('body').append(appendStr);				   
    });
    function changeTab(type){
		var size = parseFloat($("#scale").val());
		var previousPage = $(".activePage").val();
    	if(type==1 && size <= 2){
    		size = size + 0.2;
    	}else if(type==0 && size >= 0.4){
    		size = size - 0.2;
    	}
		$("#scale").val(size)
		//$(".docArea").css("zoom",size)
		
		isZoom = true;
		renderPage();
		
		changePage(previousPage)

    	
    }
	function rotate(direction){
		var angle = parseFloat($("#angle").val());
		var previousPage = $(".activePage").val();
		if(direction == 1){
    		angle = angle + 90;
    	}else if(direction == 0){
    		angle = angle - 90;
    	};
		$("#angle").val(angle);
		if(angle/90%2 != 0){
			isRotate = true;
		}else{
			isRotate = false;
		}
		
		renderPage();
		changePage(previousPage)
	}