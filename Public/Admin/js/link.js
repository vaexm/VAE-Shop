//修改友情链接  lid链接id
function UpLinks(lid){
//	alert(1111);
	var id=lid;
	var name=document.getElementById("links1").value;
	var url=document.getElementById("links").value;
//	alert(name);alert(url);
	$.ajax({
		url:"UpLinks.php",
		dataType:"text",
		type:"post",
		data:{"lid":id,
			"lname":name,
			"lurl":url
			},
		success:function(data){
//			alert(data);
			if(data=="1"){
				alert("修改成功");
				window.location.href="index.php?p=links";
			}else if(data=="0"){
				alert("修改失败");
				
			}
			
		}
	});
}