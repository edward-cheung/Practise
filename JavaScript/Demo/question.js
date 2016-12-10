function getElementsByClassName(className,context){
    context = context || document;
     
    if(context.getElementsByClassName){
        return context.getElementsByClassName(className);
    }
     
    var nodes = context.getElementsByTagName('*');
    var rets = [];
    for(var i = 0; i < nodes.length; i++){
        if(hasClass(className,nodes[i])){
            rets.push(nodes[i]);
        }
    }
     
    return rets;
}
 
 
function hasClass(className,node){
    var classNames = node.className.split(/\s+/);
     
    for(var i = 0; i < classNames.length; i++){
        if(classNames[i] == className){
            return true;
        }
    }
     
    return false;
}

var test = document.getElementById('question_box');
var arr=getElementsByClassName('wjques maxtop question jqtransformdone',test);
for(var j=0;j<arr.length;j++){
	if(arr[j].questiontype="2"){
		var a=arr[j].children[1].children;
		var m=Math.ceil(Math.random()*(a.length-1));
		if(m==0) m==1;
		a[m].children[0].children[1].checked = true;
	}else{
	}
}