/**
 * Created by Administrator on 2016/8/10.
 */
$(function () {
    $('.active').click(function () {
        $(this).nextAll().toggle();
    });
});

//kindeditor编辑器
var editor;
KindEditor.ready(function(K) {
    editor = K.create('.content', {
        resizeType : 1,
        items : [
            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
            'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|', 'emoticons', 'image', 'link']
    });
});