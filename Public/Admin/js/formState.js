/**
 * 点击每行处理订单的链接，进行处理
 * fid:订单编号
 * sid:订单原来的状态编号
 */
oldSid=0;//记录订单之前的状态编号
formId="";//订单编号
function changeState(fid,sid){
	oldSid=sid;
	formId=fid;
	if(document.getElementById("tbState").style.display=="none"){
		//先显示出下面的表格
		document.getElementById("tbState").style.display="table";
	}else{
		document.getElementById("tbState").style.display="none";
	}

	//将当前点击行的订单编号显示到订单编号的地方
	document.getElementById("spFid").innerText=fid;
	//根据当前状态的编号对应的选中单选按钮
	var allrdos=document.getElementsByName("rdo");
	for(var i=0;i<allrdos.length;i++){
		if(allrdos[i].value==sid){
			allrdos[i].checked="checked";
		}
		
	}
}
function saveChangeState(){
	//如果用户选择的状态是原来的下一级，则可以修改
	//否则不能直接
	//需要拿到原来的状态编号和当前最新选择的编号
	//最新选择的编号
	var newSid=0;
	var allrdos=document.getElementsByName("rdo");
	for(var i=0;i<allrdos.length;i++){
		if(allrdos[i].checked){
			newSid=allrdos[i].value;
		}
		
	}
	if(oldSid+1==newSid){
		//说明可以修改
		$.ajax({
			url:"ProcessState.php",
			type:"post",
			dataType:"text",
			data:{
				"fid":formId,
				"sid":newSid
			},
			success:function(data){
				alert(data);
				if(data=="1"){
					alert("修改成功");
					window.location.href="index.php";
				}else if(data=="0"){
					alert("修改失败");
					
				}
				
			}
				
		});
	}
	else{
		alert("必须修改为下一级状态！");
	}
}
$(function(){
	  //全选
	  $("#chAll").click(function(){
		 $('[name=items]:checkbox').attr("checked",true);
		/*  $('[name=items]:checkbox').each(function(){
			  $(this).attr("checked",true);
			  });
		*/
		  });	      
	  //全不选
	  $("#chNo").click(function(){
		  		  $('[name=items]:checkbox').attr("checked",false);
		  	
		  });
	  //反选
	  $("#chRes").click(function(){
		  $('[name=items]:checkbox').each(function(){
			  //$(this).attr("checked",!$(this).attr("checked"));
			  this.checked=!this.checked;
			  });
});
	  $("#delete").click(function(){
		  var formId1="";
		  if(window.confirm("你确定要删除吗?")){
//		      alert(22);
			//获取选中的复选框的个数
				var chkCount=$("input[type=checkbox]:checked").length;
//				alert(chkCount);
				if(chkCount==0){
					alert("请选择要删除的物品！");
					return;
				}
				//找到所有的复选框
				var allChk=document.getElementsByName("items");
				for(var i=0;i<allChk.length;i++){
					if(allChk[i].checked==true){//说明删除该订单
//						alert(allChk[i].id);
						//复选框id
						var chid=allChk[i].id;//chkXX
						var id=chid.substr(3);
//						alert(gid);
						//找到订单号所对应的span
						var formid=document.getElementById("sp"+id).innerText;
						formId1+=formid+",";
					}
					
				}
				formId1=formId1.substr(0,formId1.length-1);
//				alert(formId1);
				//异步提交到处理程序
				$.ajax({
					url:"DeleteForm.php",
					type:"post",
					dataType:"text",
					data:{"s":formId1},
					success:function(data){
//					alert(data);
						if(data=="1"){
							alert("删除订单成功");
							window.location.href="index.php";
						}
						else if(data=="0") {
							alert("删除失败");
						}
						
					}
					
				});
		   }
		  else{
		   alert(111);
		   }
	  });
});
