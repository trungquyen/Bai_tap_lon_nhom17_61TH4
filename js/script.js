//nhận tất cả những yếu tố bắt buộc
const searchWrapper = document.querySelector(".header__search");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");

inputBox.onkeyup = (e)=>{
    let userData = e.tarGet.value;
    let emptyArray = [];
    if(userData){
        emptyArray = suggetions.filter((data)=>{
            return data.toLocaleLowerCase();
        });
        emptyArray = emptyArray.map(()=>{
            return data = '<li>'+ data +'</li>';
        });
        console.log(emptyArray);
        searchWrapper.classList.add("active");
        showSuggetions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i =0;i < allList.lengt; i++) {
            allList[i].setAttribute("onclick","select(this)");
        }
    }else{
        searchWrapper.classList.remove("active");
    }
}
function select(element){
    let selectUserData = element.textContent;
    inputBox.value = selectUserData;
}
function showSuggetions(list){
    let listData;
    if(!list.lenght){
        userValue = inputBox.value;
        listData = '<li>'+  userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData
}