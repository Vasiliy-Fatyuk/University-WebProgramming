/**
 *     __  ___
 *    /  |/  /___   _____ _____ ___   ____   ____ _ ___   _____
 *   / /|_/ // _ \ / ___// ___// _ \ / __ \ / __ `// _ \ / ___/
 *  / /  / //  __/(__  )(__  )/  __// / / // /_/ //  __// /
 * /_/  /_/ \___//____//____/ \___//_/ /_/ \__, / \___//_/
 *                                        /____/
 *
 * @description MessengerJS, a common cross-document communicate solution.
 * @author biqing kwok
 * @version 2.0
 * @license release under MIT license
 */
var fileType = a.fileType.toLowerCase();
 
window.Messenger = (function(){


    var prefix = "[PROJECT_NAME]",
        supportPostMessage = 'postMessage' in window;

    function Target(target, name, prefix){
        var errMsg = '';
        if(arguments.length < 2){
            errMsg = 'target error - target and name are both required';
        } else if (typeof target != 'object'){
            errMsg = 'target error - target itself must be window object';
        } else if (typeof name != 'string'){
            errMsg = 'target error - target name must be string type';
        }
        if(errMsg){
            throw new Error(errMsg);
        }
        this.target = target;
        this.name = name;
        this.prefix = prefix;
    }

    if ( supportPostMessage ){
        Target.prototype.send = function(msg){
            this.target.postMessage(this.prefix + '|' + this.name + '__Messenger__' + msg, '*');
        };
    } else {
        Target.prototype.send = function(msg){
            var targetFunc = window.navigator[this.prefix + this.name];
            if ( typeof targetFunc == 'function' ) {
                targetFunc(this.prefix + msg, window);
            } else {
                throw new Error("target callback function is not defined");
            }
        };
    }

    function Messenger(messengerName, projectName){
        this.targets = {};
        this.name = messengerName;
        this.listenFunc = [];
        this.prefix = projectName || prefix;
        this.initListen();
    }

    Messenger.prototype.addTarget = function(target, name){
        var targetObj = new Target(target, name,  this.prefix);
        this.targets[name] = targetObj;
    };

    Messenger.prototype.initListen = function(){
        var self = this;
        var generalCallback = function(msg){
            if(typeof msg == 'object' && msg.data){
                msg = msg.data;
            }
            
            var msgPairs = msg.split('__Messenger__');
            var msg = msgPairs[1];
            var pairs = msgPairs[0].split('|');
            var prefix = pairs[0];
            var name = pairs[1];

            for(var i = 0; i < self.listenFunc.length; i++){
                if (prefix + name === self.prefix + self.name) {
                    self.listenFunc[i](msg);
                }
            }
        };

        if ( supportPostMessage ){
            if ( 'addEventListener' in document ) {
                window.addEventListener('message', generalCallback, false);
            } else if ( 'attachEvent' in document ) {
                window.attachEvent('onmessage', generalCallback);
            }
        } else {
            window.navigator[this.prefix + this.name] = generalCallback;
        }
    };

    Messenger.prototype.listen = function(callback){
        var i = 0;
        var len = this.listenFunc.length;
        var cbIsExist = false;
        for (; i < len; i++) {
            if (this.listenFunc[i] == callback) {
                cbIsExist = true;
                break;
            }
        }
        if (!cbIsExist) {
            this.listenFunc.push(callback);
        }
    };
    Messenger.prototype.clear = function(){
        this.listenFunc = [];
    };
    Messenger.prototype.send = function(msg){
        var targets = this.targets,
            target;
        for(target in targets){
            if(targets.hasOwnProperty(target)){
                targets[target].send(msg);
            }
        }
    };

    return Messenger;
})();
var messenger = new Messenger('previewArea');
messenger.listen(function (msg) {
    if(msg == "printDoc"){
		printDoc();
	}
});

var printLoadImg = 0;
function printDoc(){
	var loadImg = $("#printArea img").size();
	if(loadImg == datas.length){
		bindPrint();
	}else{
		for(var i = 0;i < datas.length;i++){
			if(fileType == "word"){
			    $("#printArea").append('<img src="'+basePath+'/'+(i+1)+'.svg" style="width:595pt;height:841pt;"/>')	
			}else if(fileType == "pdf"){
				$("#printArea").append('<img src="'+basePath+'/'+(i+1)+'.png" style="width:595pt;height:841pt;"/>')	
			}else{
				$("#printArea").append('<img src="'+basePath+'/file0001.'+fileType+'" style="width:595pt;height:841pt;"/>');
							
			}
		}
	}
	
	
	$('#printArea img').load(function(){
		printLoadImg++
		if(printLoadImg == datas.length - loadImg){
			bindPrint();
			printLoadImg = 0;
		}
		
	}); 
	
	 
}
function bindPrint(){
	$(".navbar,#pageNum,#fullScreen,.container-fluid-content,#zoom,#footer").hide();
	$("body").removeClass("word-body");
	$("#printArea").show();
	if(getExplorer() == "IE"){
		pagesetup_null();
	}
	window.focus();
	window.print();
	$("#printArea").hide();
	$("body").addClass("word-body")
	$(".navbar,#pageNum,#fullScreen,.container-fluid-content,#zoom,#footer").show();
			
}
function pagesetup_null(){                
    var hkey_root,hkey_path,hkey_key;
    hkey_root="HKEY_CURRENT_USER";
    hkey_path="\\Software\\Microsoft\\Internet Explorer\\PageSetup\\";
    try{
        var RegWsh = new ActiveXObject("WScript.Shell");
        hkey_key="header";
        RegWsh.RegWrite(hkey_root+hkey_path+hkey_key,"");
        hkey_key="footer";
        RegWsh.RegWrite(hkey_root+hkey_path+hkey_key,"");
    }catch(e){}
}

function getExplorer() {
    var explorer = window.navigator.userAgent ;
    //ie 
    if (explorer.indexOf("MSIE") >= 0) {
        return "IE";
    }
    //firefox 
    else if (explorer.indexOf("Firefox") >= 0) {
        return "Firefox";
    }
    //Chrome
    else if(explorer.indexOf("Chrome") >= 0){
        return "Chrome";
    }
    //Opera
    else if(explorer.indexOf("Opera") >= 0){
        return "Opera";
    }
    //Safari
    else if(explorer.indexOf("Safari") >= 0){
        return "Safari";
    }
}

if(fileType == "pdf"){
	document.write("<script  src='"+basePath+"/cZoom.js'></script>")
}else if(fileType == "jpg" || fileType == "png" || fileType == "bmp" || fileType == "tiff" || fileType == "gif" || fileType == "svg"){
	document.write("<script  src='"+basePath+"/rotate.js'></script>")
}
