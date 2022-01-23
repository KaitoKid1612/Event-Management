var _interactionCore = new Object({
    appID: -1,
    cateID: -1,
    itemID: -1,
    skey: '',
    _dataBase: function (data) {
        var dt = _interactionCore._cloneObj(data);
        dt.tkey = new Date().getTime();
        dt.sck = _interactionCore._oSecu(dt.appID + '@' + dt.tkey + '@' + dt.cateID);
        dt.itemid = _interactionCore.itemID;
        dt.appid = _interactionCore.appID;
        dt.cateid = _interactionCore.cateID;
        if (self.screen) {
            dt.sr = screen.width + 'x' + screen.height;
            dt.sc = screen.colorDepth + '-bit';
        }
        return dt;
    },
    _getBase: function (url, data, callback) {
        var dt = _interactionCore._dataBase(data);
        $.get(url, dt, callback, 'html');
    },
    _postBase: function (url, data, callback) {
        var dt = _interactionCore._dataBase(data);
        $.post(url, dt, callback);
    },
    _getScript: function (url, data, callback) {
        var dt = _interactionCore._dataBase(data);
        url += $.param(dt);
        $.getScript(url, callback);
    },
    _eurc: function (s) {
        return encodeURIComponent(s);
    },
    _cloneObj: function (obj) {
        var clone = {};
        clone.prototype = obj.prototype;
        for (var p in obj)
            clone[p] = obj[p];
        return clone;
    },
    _oSecu: function (sInp) {
        /* Calculate length in words, including padding */
        wLen = (((sInp.length + 8) >> 6) + 1) << 4;
        var X = new Array(wLen);

        /* Convert string to array of words */
        j = 4;
        for (i = 0; (i * 4) < sInp.length; i++) {
            X[i] = 0;
            for (j = 0; j < 4 && (i * 4 + j) < sInp.length; j++) {
                X[i] += (sAscii.indexOf(sInp.charAt((i * 4) + j)) + 32) << (j * 8);
            }
        }

        /* Append the 1 and 0s to make a multiple of 4 bytes */
        if (j == 4) { X[i++] = 0x80; }
        else { X[i - 1] += 0x80 << (j * 8); }
        /* Appends 0s to make a 14+k16 words */
        while (i < wLen) { X[i] = 0; i++; }
        /* Append length */
        X[wLen - 2] = sInp.length << 3;
        /* Initialize a,b,c,d */
        a = 0x67452301; b = 0xefcdab89; c = 0x98badcfe; d = 0x10325476;

        /* Process each 16 word block in turn */
        for (i = 0; i < wLen; i += 16) {
            aO = a; bO = b; cO = c; dO = d;

            a = R1(a, b, c, d, X[i + 0], 7, 0xd76aa478);
            d = R1(d, a, b, c, X[i + 1], 12, 0xe8c7b756);
            c = R1(c, d, a, b, X[i + 2], 17, 0x242070db);
            b = R1(b, c, d, a, X[i + 3], 22, 0xc1bdceee);
            a = R1(a, b, c, d, X[i + 4], 7, 0xf57c0faf);
            d = R1(d, a, b, c, X[i + 5], 12, 0x4787c62a);
            c = R1(c, d, a, b, X[i + 6], 17, 0xa8304613);
            b = R1(b, c, d, a, X[i + 7], 22, 0xfd469501);
            a = R1(a, b, c, d, X[i + 8], 7, 0x698098d8);
            d = R1(d, a, b, c, X[i + 9], 12, 0x8b44f7af);
            c = R1(c, d, a, b, X[i + 10], 17, 0xffff5bb1);
            b = R1(b, c, d, a, X[i + 11], 22, 0x895cd7be);
            a = R1(a, b, c, d, X[i + 12], 7, 0x6b901122);
            d = R1(d, a, b, c, X[i + 13], 12, 0xfd987193);
            c = R1(c, d, a, b, X[i + 14], 17, 0xa679438e);
            b = R1(b, c, d, a, X[i + 15], 22, 0x49b40821);

            a = R2(a, b, c, d, X[i + 1], 5, 0xf61e2562);
            d = R2(d, a, b, c, X[i + 6], 9, 0xc040b340);
            c = R2(c, d, a, b, X[i + 11], 14, 0x265e5a51);
            b = R2(b, c, d, a, X[i + 0], 20, 0xe9b6c7aa);
            a = R2(a, b, c, d, X[i + 5], 5, 0xd62f105d);
            d = R2(d, a, b, c, X[i + 10], 9, 0x2441453);
            c = R2(c, d, a, b, X[i + 15], 14, 0xd8a1e681);
            b = R2(b, c, d, a, X[i + 4], 20, 0xe7d3fbc8);
            a = R2(a, b, c, d, X[i + 9], 5, 0x21e1cde6);
            d = R2(d, a, b, c, X[i + 14], 9, 0xc33707d6);
            c = R2(c, d, a, b, X[i + 3], 14, 0xf4d50d87);
            b = R2(b, c, d, a, X[i + 8], 20, 0x455a14ed);
            a = R2(a, b, c, d, X[i + 13], 5, 0xa9e3e905);
            d = R2(d, a, b, c, X[i + 2], 9, 0xfcefa3f8);
            c = R2(c, d, a, b, X[i + 7], 14, 0x676f02d9);
            b = R2(b, c, d, a, X[i + 12], 20, 0x8d2a4c8a);

            a = R3(a, b, c, d, X[i + 5], 4, 0xfffa3942);
            d = R3(d, a, b, c, X[i + 8], 11, 0x8771f681);
            c = R3(c, d, a, b, X[i + 11], 16, 0x6d9d6122);
            b = R3(b, c, d, a, X[i + 14], 23, 0xfde5380c);
            a = R3(a, b, c, d, X[i + 1], 4, 0xa4beea44);
            d = R3(d, a, b, c, X[i + 4], 11, 0x4bdecfa9);
            c = R3(c, d, a, b, X[i + 7], 16, 0xf6bb4b60);
            b = R3(b, c, d, a, X[i + 10], 23, 0xbebfbc70);
            a = R3(a, b, c, d, X[i + 13], 4, 0x289b7ec6);
            d = R3(d, a, b, c, X[i + 0], 11, 0xeaa127fa);
            c = R3(c, d, a, b, X[i + 3], 16, 0xd4ef3085);
            b = R3(b, c, d, a, X[i + 6], 23, 0x4881d05);
            a = R3(a, b, c, d, X[i + 9], 4, 0xd9d4d039);
            d = R3(d, a, b, c, X[i + 12], 11, 0xe6db99e5);
            c = R3(c, d, a, b, X[i + 15], 16, 0x1fa27cf8);
            b = R3(b, c, d, a, X[i + 2], 23, 0xc4ac5665);

            a = R4(a, b, c, d, X[i + 0], 6, 0xf4292244);
            d = R4(d, a, b, c, X[i + 7], 10, 0x432aff97);
            c = R4(c, d, a, b, X[i + 14], 15, 0xab9423a7);
            b = R4(b, c, d, a, X[i + 5], 21, 0xfc93a039);
            a = R4(a, b, c, d, X[i + 12], 6, 0x655b59c3);
            d = R4(d, a, b, c, X[i + 3], 10, 0x8f0ccc92);
            c = R4(c, d, a, b, X[i + 10], 15, 0xffeff47d);
            b = R4(b, c, d, a, X[i + 1], 21, 0x85845dd1);
            a = R4(a, b, c, d, X[i + 8], 6, 0x6fa87e4f);
            d = R4(d, a, b, c, X[i + 15], 10, 0xfe2ce6e0);
            c = R4(c, d, a, b, X[i + 6], 15, 0xa3014314);
            b = R4(b, c, d, a, X[i + 13], 21, 0x4e0811a1);
            a = R4(a, b, c, d, X[i + 4], 6, 0xf7537e82);
            d = R4(d, a, b, c, X[i + 11], 10, 0xbd3af235);
            c = R4(c, d, a, b, X[i + 2], 15, 0x2ad7d2bb);
            b = R4(b, c, d, a, X[i + 9], 21, 0xeb86d391);

            a = add(a, aO); b = add(b, bO); c = add(c, cO); d = add(d, dO);
        }
        return hex(a) + hex(b) + hex(c) + hex(d);
    },
    /*----------------------------------------------------------------------------------------*/
});

var sAscii = " !\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`"
sAscii = sAscii + "abcdefghijklmnopqrstuvwxyz{|}~";
var sHex = "0123456789abcdef";
function hex(i) {
    h = "";
    for (j = 0; j <= 3; j++) {
        h += sHex.charAt((i >> (j * 8 + 4)) & 0x0F) + sHex.charAt((i >> (j * 8)) & 0x0F);
    }
    return h;
};
function add(x, y) {
    return ((x & 0x7FFFFFFF) + (y & 0x7FFFFFFF)) ^ (x & 0x80000000) ^ (y & 0x80000000);
};
function R1(A, B, C, D, X, S, T) {
    var q1 = add(X, T);
    var q2 = add(A, (B & C) | ((~B) & D));
    q = add(q2, q1);
    return add((q << S) | ((q >> (32 - S)) & (Math.pow(2, S) - 1)), B);
};
function R2(A, B, C, D, X, S, T) {
    q = add(add(A, (B & D) | (C & (~D))), add(X, T));
    return add((q << S) | ((q >> (32 - S)) & (Math.pow(2, S) - 1)), B);
};
function R3(A, B, C, D, X, S, T) {
    q = add(add(A, B ^ C ^ D), add(X, T));
    return add((q << S) | ((q >> (32 - S)) & (Math.pow(2, S) - 1)), B);
};
function R4(A, B, C, D, X, S, T) {
    q = add(add(A, C ^ (B | (~D))), add(X, T));
    return add((q << S) | ((q >> (32 - S)) & (Math.pow(2, S) - 1)), B);
};
_interactionCore.init = function (appID_, allowPageHit_, allowAd_, allowRate_, cateID_, itemID_) {
    var __interactionUrl = oAppPath + 'm/Interaction/';
    var a = this, c = _interactionCore;

    var __allowPageHit = false;
    if (typeof (allowPageHit_) != 'undefined')
        __allowPageHit = allowPageHit_;

    var __allowAd = false;
    if (typeof (allowAd_) != 'undefined')
        __allowAd = allowAd_;

    var __allowRate = false;
    if (typeof (allowRate_) != 'undefined')
        __allowRate = allowRate_;

    c.appID = appID_;

    if (typeof (cateID_) != 'undefined')
        c.cateID = cateID_;

    if (typeof (itemID_) != 'undefined')
        c.itemID = itemID_;

    var _allowClicked = true;
    var _showTitle = true;
    a.request = function () {
        c._getScript(__interactionUrl + '__htm?ref=3', { ad: __allowAd ? 1 : 0, pv: __allowPageHit ? 1 : 0, rt: __allowRate ? 1 : 0 }, function () { });
    }

    /*------------------------------------*/
    var _rateContainer = 'Statistics_Rate';
    var _rateSuccess;
    var _rateMax;
    a.initRate = function (rateMax, rateContainer, rateTitle, onSuccess) {
        if (rateMax != '')
            _rateMax = rateMax;
        _rateContainer = rateContainer;
        var rc = $("#" + _rateContainer);
        rc.attr("class", "orate_Panel");
        if (typeof (rateTitle) == 'undefined')
            rateTitle = 'đánh giá';
        rc.html('<span id="' + _rateContainer + 'sp"></span>&nbsp;' + rateTitle + '<br /><ul id="' + _rateContainer + 'ul"></ul><br />');
        _rateSuccess = onSuccess;
    };
    a.getRate = function (count, point, hit) {
        $("#" + _rateContainer + 'sp').html(count);
        var pc_ = 0;
        if (count != 0)
            pc_ = Math.floor(point / count);
        var citem = _rateMax;
        var lpriId = _rateContainer + '_orate_';
        var cokname = 'os_rate0829';
        var newValue = c.appID + '`' + c.cateID + '`' + c.itemID + ',';
        var cokvalue = $.cookie(cokname);

        var _boRated = false;
        if (cokvalue == undefined)
            cokvalue = '';
        else {
            var reg = new RegExp(newValue);
            if (reg.test(cokvalue))
                _boRated = true;
        }

        var liArray = [];
        var rcon = document.getElementById(_rateContainer + 'ul');
        for (var i = 0; i < citem; i++) {
            var li0 = document.createElement('li');
            li0.setAttribute('id', lpriId + i);
            li0.setAttribute('po', i);
            li0.className = (i < pc_) ? 'on2' : 'off2';
            if (!_boRated) {
                li0.onmouseover = function () {
                    if (!_boRated)
                        for (var i = 0; i < liArray.length; i++)
                            liArray[i].className = (i <= parseInt(this.getAttribute('po'))) ? 'on2' : 'off2';
                };
                li0.onmouseout = function () {
                    if (!_boRated)
                        for (var i = 0; i < liArray.length; i++)
                            liArray[i].className = (i <= pc_) ? 'on2' : 'off2';
                };
                li0.onclick = function () {
                    if (!_boRated) {
                        var pn = parseInt(this.getAttribute('po'));
                        count++;
                        document.getElementById(_rateContainer + 'sp').innerHTML = count;
                        pn++;
                        var img = new Image(1, 1);
                        img.src = c._getBase(__interactionUrl + '__srm', { p: pn });
                        img.onLoad = function () { return; };
                        point = pn;
                        _boRated = true;
                        $.cookie(cokname, cokvalue + newValue, 1, '/');
                        if (_rateSuccess)
                            _rateSuccess();
                    }
                };
            }
            liArray.push(li0);
            rcon.appendChild(li0);
        }
    }
    /*----------------------------------------------------------------------*/
    function getClickUrl(bni, adi, rci, urlReturn) {
        if (_allowClicked)
            return __interactionUrl + '__click?bni=' + bni + '&adi=' + adi + '&rci=' + rci + '&url=' + urlReturn;
        return urlReturn;
    }
    function rosrc2(src) {
        if (src.indexOf('http://') == -1)
            src = oMediaUrl + src;
        return src;
    };
    function rAdv120111(boxID, arrAd) {
        if (typeof (arrAd) == 'undefined')
            return;
        var adBox = document.getElementById(boxID);
        if (!adBox)
            return;
        var n = arrAd.length;
        if (n == 0)
            return;
        var rand = Math.floor(Math.random() * n + 1);
        rand = arrAd[rand % n];
        var width = 0;
        var height = 0;
        var strInnerHTML = '';
        width = rand.wid;
        height = rand.hig;
        switch (rand.typ) {
            case 'fla':
                strInnerHTML = createFlash(rosrc2(rand.src), width, height);
                break;
            case 'img':
                var hrf_ = rand.lnk;
                var target = '';
                if (hrf_.indexOf('javascript') == -1)
                    target = ' target="_blank"';
                if (_allowClicked)
                    hrf_ = getClickUrl(rand.bni, rand.adi, rand.rci, hrf_);
                strInnerHTML = '<a href="' + hrf_ + '"' + target + '><img src="' + rosrc2(rand.src) + '" width="' + width + 'px" height="' + height + 'px" alt="" />';
                if (_showTitle)
                    strInnerHTML += '<div>' + rand.tit + '</div>';
                strInnerHTML += '</a>';
                break;
            case 'balloon':
                var ranb = Math.floor(Math.random() * 5 + 1);
                if (ranb % 5 == 1)
                    strInnerHTML = createBalloon(rand.src, rand.tit, 'C' + rand.bni, rand.adi, rand.rci, rand.bni, rand.lnk, width, height, 15, 5);
                break;
            case 'ifr':
                strInnerHTML = '<iframe src="' + rosrc2(rand.src) + '" height="' + height + '" scrolling="no" width="' + width + '" frameborder="0"></iframe>';
                break;
            case 'pop':
                strInnerHTML = '<a onclick=\'openWindow("' + rand.lnk + '","osportal",500,460);\' href="javascript:voidnull(0)"><img src="' + rosrc2(rand.src) + '" width="' + width + 'px" height="' + height + 'px" alt="" /></a>';
                break;
        }
        if (strInnerHTML != '')
            adBox.innerHTML = strInnerHTML;
        adBox.className = 'oad';
        adBox.style.display = 'block';
    }
    a.ladv = function (data) {
        var rID = 0;
        var oID = '';
        var arr;
        for (var i = 0; i < data.length; i++) {
            var item = data[i];
            if (item.rci == rID)
                arr.push(item);
            else {
                if (arr)
                    rAdv120111(oID, arr);
                arr = new Array();
                arr.push(item);
                rID = item.rci;
                oID = item.rgs;
            }
        }
        rAdv120111(oID, arr);
    };
    /*----------------------------------------------------------------------*/
    $(document).ready(function () {
        a.request();
    });
}