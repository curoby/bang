/**
 * 页头js
 */




var browser = {
	versions : function() {
		var u = navigator.userAgent, app = navigator.appVersion;
		return {//移动终端浏览器版本信息                                 
		trident : u.indexOf('Trident') > -1, //IE内核                                 
		presto : u.indexOf('Presto') > -1, //opera内核                                 
		webKit : u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核                                 
		gecko : u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核                                
		mobile : !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端                                 
		ios : !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端                 
		android : u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器                                 
		iPhone : u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器                    
		iPad: u.indexOf('iPad') > -1, //是否iPad       
		webApp : u.indexOf('Safari') == -1,//是否web应该程序，没有头部与底部
		google:u.indexOf('Chrome')>-1
	};
}(),
	language : (navigator.browserLanguage || navigator.language).toLowerCase()
}

$(function(){
	
	//body点击触发隐藏方法
	$("body").click(function(){
	
		$("#user_menu").addClass("hidden");
		$("#search_select a").not(".selected").addClass("hidden");
	});
	
	//登录后用户导航菜单
	$("#avatar").mouseDelay().hover(function(){
		$("#user_menu").removeClass("hidden");
	},
	function(){
		$("#user_menu").addClass("hidden");
	});
	
	
	//阻止点击隐藏方法
	$("#login_box,#user_menu,#search_select").click(function (e) {
		e.stopPropagation();
	});
		
	//搜索选项
	$("#search_select a.selected").click(function(){
		$(this).nextAll("a").removeClass("hidden");
	});

	$("#search_select a").not(".selected").click(function(){
		$("#search_select .selected").attr("rel",$(this).attr("rel")).children("span").html($(this).html()).end().nextAll("a").addClass("hidden");
	})
	
	//移动端
	$(".m_ctrl a,#avatar a").click(function(){
		var objs ='#'+ $(this).attr('rel');
		if($(objs).is(':visible')){
			$(objs).addClass('m_h');
		}else{
			$('#search,#nav,#user_menu').addClass('m_h');
			$(objs).removeClass('m_h');
		}
		
		if(browser.versions.android==true||browser.versions.iPhone==true||browser.versions.iPad==true){
			return false;
		}
	});
	
	
}); 


function search_keydown(event){
    if ($.browser.msie) {
        if (window.event.keyCode == 13) {
        	topSearch();
        }
    }
    else {
        if (event.keyCode == 13) {
        	topSearch();
        }
    }
}

$("#search_btn").click(function(){topSearch();})


function topSearch(){
	var searchKey = $.trim($("#search_key").val());
 
	if(searchKey&&searchKey!=L.input_task_service){
		var type      = $("#search_select .selected").attr("rel");
		var link    = "index.php?do="+type+"&path=H2&search_key="+searchKey;
			$("#frm_search").attr("action",link);
		location.href=link;
	}
}
function setLang(o){
	var lang = o.value;
	var c    = $(o).children('option:selected').attr('c');
		setCurr(c);
		setTimeout(function(){
			if(lang==LANG){
				return false;
			}else{
				setcookie("_lang",lang,24*3600);
				document.location.replace(location.href);
			}
		},500);
}
function setCurr(c,t){
	var url  = SITEURL+'/index.php?do=ajax&ajax=ajax&ac=currency&curr='+c;
	$.post(url);
	t==1&&setTimeout(function(){
		document.location.replace(location.href);
	},500);
}
