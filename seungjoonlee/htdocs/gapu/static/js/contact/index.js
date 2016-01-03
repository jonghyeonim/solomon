$(document).ready(function () {

    $("#form-submit").click(function () {

        var name = $("[name='name']").val();
        var number = $("[name='number']").val();
        var email = $("[name='email']").val();
        var content = $("[name='content']").val();

        if (name.length > 0) {
            if (number.length > 0 && isPhoneNumber(number) == true){
                if (email.length > 0 && isEmail(email) == true) {
                    if (content.length > 10) {
                        $("#form-mail").submit();
                    } else {
                        alert("문의 사항을 10자 이상 입력해주세요");
                    }
                } else {
                    alert("E-mail을 정확하게 입력해주세요");
                }
            }else{
                alert("핸드폰 번호를 정확하게 입력해주세요")
            }

        } else {
            alert("이름을 입력해주세요");
        }

    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function  isPhoneNumber(number){
        var regex = /^((01[1|6|7|8|9])[1-9]+[0-9]{6,7})|(010[1-9][0-9]{7})$/;
        return regex.test(number);
    }
});/**
 * Created by SangBeom on 2015-12-14.
 */
