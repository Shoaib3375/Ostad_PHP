
function postReque(){
var URL="https://crud.teamrabbil.com/api/v1/CreateProduct"
var BodyData={Img:"123",ProductCode:"123",ProductName:"123",Qty:"123",TotalPrice:"123",UnitPrice:"123"}
var Config={
    method:"POST",
    headers:{'accept':'application/json','Content-Type':'application/json'},
    body:JSON.stringify{BodyData}
}

fetch(URL,Config)
.then(response=>response.json())
.then(result=>console.log(result))
.catch(err=>console.log(err))

}