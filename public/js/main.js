'use strict';
{
    function showElementAnimation() {
                        
        var element = document.getElementsByClassName('js-fadein');
        if(!element) return;
                            
        var showTiming = window.innerHeight > 768 ? 200 : 100; // 要素が出てくるタイミングはここで調整
        var scrollY = window.pageYOffset; //スクロール量を取得
        var windowH = window.innerHeight; //ブラウザウィンドウのビューポート(viewport)の高さを取得
                            
        for(var i=0;i<element.length;i++) { 
            var elemClientRect = element[i].getBoundingClientRect(); 
            var elemY = scrollY + elemClientRect.top; 
            if(scrollY + windowH - showTiming > elemY) {
            element[i].classList.add('is-show');
            } else if(scrollY + windowH < elemY) {
            // 上にスクロールして再度非表示にする場合はこちらを記述
            element[i].classList.remove('is-show');
            }
        }
    }
    showElementAnimation();

    window.addEventListener('scroll', showElementAnimation);
}

// {
//     const open = document.getElementById('open');
//     const close = document.getElementById('close');
//     const modal = document.getElementById('modal');
//     const mask = document.getElementById('mask');

//     open.addEventListener('click', () => {
//         modal.classList.remove('hidden');
//         mask.classList.remove('hidden');
//     });

//     close.addEventListener('click', () => {
//         modal.classList.add('hidden');
//         mask.classList.add('hidden');
//     });

//     mask.addEventListener('click', () => {
//        close.click();
//     });
// }

$('#open').click(() => {
    $('#modal')
        .removeClass('hidden')
    $('#mask')
        .removeClass('hidden');
});

$('#close').click(() => {
    $('#modal')
        .addClass('hidden')
    $('#mask')
        .addClass('hidden');
});






