'use strict';

$('li').find("[data-langid='"+lang+"']").addClass('default-lang');

function changeLang(langid, path) {
    $.ajax({
        method: 'post',
        url: path,
        data: {
            langId: langid
        },
        success: function(data) {
            location.reload();
        }
    })
}