

(function(w) {
    var origin = 'https://astg.widerplanet.com';
    var wg = w.document.getElementById('wp_tg_cts');
    function doPair(url) {
        if (wg == null) { return; }
        (function(_url) {
            var frm = w.document.createElement('IFRAME');
            frm.width = '1px';
            frm.height = '1px';
            frm.style.display = 'none';
            frm.src= _url;
            frm.title = 'tgpairing';
            frm.addEventListener('load', function(o) {
                try {
                    frm.contentWindow.postMessage({}, origin);
                } catch(e) {}
            });

            wg.appendChild(frm);
            setTimeout(function() {
                wg.removeChild(frm);
            }, 3000);
        })(url);
    }

    try {
        doPair('https://astg.widerplanet.com/delivery/storage?request_id=f8c204f9e54fcc903a63b6f9b723af7c&wp_uid=2-41681f6098498027256944dd36061b61-s1616029282.5362%7Cwindows_10%7Cchrome-coiom2&qsc=e4kfun');
    } catch(e) {}
})(window);
