var USERAGENT = navigator.userAgent.toLowerCase();
function setHomepg(siteurl){
 if (document.all){
  document.body.style.behavior='url(#default#homepage)';
  document.body.setHomePage(siteurl);
  }else if (window.sidebar){
    if(window.netscape){
         try{
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch (e){
          alert( "您的浏览器不支持,请在地址栏内输入about:config,找到signed.applets.codebase_principal_support,双击将其值切换为true后重试" );
         }
    }
    var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components. interfaces.nsIPrefBranch);
    prefs.setCharPref('browser.startup.homepage',site['siteurl']);
 }
}


function addFavorite(url, title) {
	try {
		window.external.addFavorite(url, title);
	} catch (e){
		try {
			window.sidebar.addPanel(title, url, '');
        	} catch (e) {
			alert("请按 Ctrl+D 键添加到收藏夹");
		}
	}
}