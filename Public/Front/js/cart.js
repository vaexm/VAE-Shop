
$(function(){
//	alert(123);
	  //全选
	  $("#chAll").click(function(){
//		 alert(1234);
		 $('[name=items]:checkbox').attr("checked",true);
//		  alert(123);
		/*  $('[name=items]:checkbox').each(function(){
			  $(this).attr("checked",true);
			  });
		*/
		 changeTotal();
		  });
	     
	      
	  //全不选
	  $("#chNo").click(function(){
		  		  $('[name=items]:checkbox').attr("checked",false);
		  		changeTotal();
		  });
	  //反选
	  $("#chRes").click(function(){
		  $('[name=items]:checkbox').each(function(){
			  //$(this).attr("checked",!$(this).attr("checked"));
			  this.checked=!this.checked;changeTotal();
			  });
});
});



/*
 * gid 商品编号  num商品数量  price商品单价
 */
function calTotal(gid,num,price){
//	alert("22");
	document.getElementById("sp"+gid).innerText=num*price;
	changeTotal();
}
//当复选框选中的时候，重新计算当前的 小计，及最后的总价
function changeTotal(){
	//找到所有复选框
	var allChk=document.getElementsByName("items");
	//记录总价
	var sum=0;
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked){
			//找到当前复选框的id
			var gid=allChk[i].id;
			sum+=parseFloat(document.getElementById("sp"+gid.substr(3)).innerText);			
		}
		
	}
	//显示最后的总价   toFixed四舍五入到指定位数
	document.getElementById("sptotal").innerText=sum.toFixed(1);
	
}

//保存商品信息
function saveShopping(){
	//获取选中的复选框的个数
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("请选择要购买的物品！");
		return;
	}
	
	//组合每一行的商品的编号和最新的数量
	//获取所有的商品数量的
	var shopping="";
	var allnum=document.getElementsByName("txtnum");
	for(var i=0;i<allnum.length;i++){
		
		var txtId=allnum[i].id;//"numXXX"
		var gid=txtId.substr(3);
		shopping+=gid+","+allnum[i].value+"@";
	}
	shopping=shopping.substr(0,shopping.length-1);
//异步提交到处理程序
	$.ajax({
		url:"UpdateShopping.php",
		type:"post",
		dataType:"text",
		data:{"s":shopping},
		success:function(data){
//		alert(data);
			if(data=="1"){
				alert("购物车更新成功！");
			}
			else {
				alert("购物车数量并未更新！");
			}
			
		}
		
	});
	location.href="index.php";
	
}

function Delete(){
	var shopping="";
	//获取选中的复选框的个数
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("请选择要删除的物品！");
		return;
	}
	//找到所有的复选框
	var allChk=document.getElementsByName("items");
//	alert(allChk.length);
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==false){//说明不删除该商品
//			alert(allChk[i].id);
			//复选框id
			var chid=allChk[i].id;//chkXX
			var gid=chid.substr(3);
//			alert(gid);
			//找到所对应的商品数量的框
			var num=document.getElementById("num"+gid).value;
//			alert(num);
			shopping+=gid+","+num+"@";
		}
		
	}
	shopping=shopping.substr(0,shopping.length-1);
//	alert(shopping);
	
	//异步提交到处理程序
	$.ajax({
		url:"UpdateShopping.php",
		type:"post",
		dataType:"text",
		data:{"s":shopping},
		success:function(data){
		alert(data);
			if(data=="1"){
				alert("购物车更新成功！");
			}
			else {
				alert("购物车数量并未更新！");
			}
			
		}
		
	});
	
}

function Pay(){
	//记录所有的商品号
	var formGid="";
	//获取选中的复选框的个数
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("请选择要购买的物品！");
		return;
	}
	//找到所有的复选框
	var allChk=document.getElementsByName("items");
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==true){//说明购买该商品
//			alert(allChk[i].id);
			//复选框id
			var chid=allChk[i].id;//chkXX
			var gid=chid.substr(3);
			//找到所对应的商品数量的框
			formGid+=gid+",";
			
		}		
	}
	formGid=formGid.substr(0,formGid.length-1);
//	alert(formGid);
	window.open("FormDetails.php","","width=500px,height=300px");
//	alert(1111);
	//异步提交到处理程序
	$.ajax({
		url:"FormDetails.php",
		type:"post",
		dataType:"text",
		data:{"fgid":formGid},
		success:function(data){
		alert(data);
			/*if(data=="1"){
				alert("更新成功！");
			}
			else {
				alert("购物车数量并未更新！");
			}*/
			
		}
		
	});
	
	
}