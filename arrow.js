var list = ["biya","diya","piya","riya"];
function post(item,callback){

    setTimeout(()=>{
        list.push(item);
        callback();
    },2000)
}
function get(){
    console.log(list);
}
post("diya",get);
