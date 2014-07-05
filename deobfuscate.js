;(function() {
    var elems = document.getElementsByTagName('*');
    for (var i = 0; i < elems.length; i++) {
        var node = elems[i];
        var classes = node.className || '';
        if ((' '+classes+' ').indexOf(' obfuscated ') > -1) {
            var address = node.innerText || node.textContent;
            var content = node.getAttribute('data-content') || address;
            var at = node.getAttribute('data-at') || 'AT';
            var dot = node.getAttribute('data-dot') || 'DOT';
            node.innerHTML = '<a href="mailto:'+address.replace(' ' + at + ' ', '@').replace(' ' + dot + ' ', '.')+'">'+content.replace(' ' + at + ' ', '@').replace(' ' + dot + ' ', '.')+'</a>';
        }
    }
})();
