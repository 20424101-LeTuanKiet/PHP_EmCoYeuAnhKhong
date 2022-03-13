const form = document.getElementById('ten');
const input_ten = document.getElementById('lname');

form.addEventListener('submit', (e) => {
//stop submit if have error
if (checkInput()) {
    e.preventDefault();
}

function checkInput()
{
    if(input_ten.value == "" || input_ten.value == null || input_ten.value != "Nguyễn Hồng Hạnh"){
        alert("Bạn đâu phải người yêu của tôi???");
        return true;
    }
    return false;
}});