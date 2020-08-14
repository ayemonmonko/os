function count(){
	var shopString=localStorage.getItem("heinshop");
	if(shopString){
		var shopArray=JSON.parse(shopString);
		if(shopArray!=0){
			var count=shopArray.length;
			// console.log(count);
			$("#item_count").text('('+count+')');
		
	}else{
		$("#item_count").text('()');
	}
}else{
	$("item_count").text('()');
}
}