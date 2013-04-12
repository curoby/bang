/**
 * ҳͷjs
 */




var browser = {
	versions : function() {
		var u = navigator.userAgent, app = navigator.appVersion;
		return {//�ƶ��ն�������汾��Ϣ                                 
		trident : u.indexOf('Trident') > -1, //IE�ں�                                 
		presto : u.indexOf('Presto') > -1, //opera�ں�                                 
		webKit : u.indexOf('AppleWebKit') > -1, //ƻ�����ȸ��ں�                                 
		gecko : u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //����ں�                                
		mobile : !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //�Ƿ�Ϊ�ƶ��ն�                                 
		ios : !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios�ն�                 
		android : u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android�ն˻���uc�����                                 
		iPhone : u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //�Ƿ�ΪiPhone����QQHD�����                    
		iPad: u.indexOf('iPad') > -1, //�Ƿ�iPad       
		webApp : u.indexOf('Safari') == -1,//�Ƿ�webӦ�ó���û��ͷ����ײ�
		google:u.indexOf('Chrome')>-1
	};
}(),
	language : (navigator.browserLanguage || navigator.language).toLowerCase()
}

$(function(){
	
	//body����������ط���
	$("body").click(function(){
	
		$("#user_menu").addClass("hidden");
		$("#search_select a").not(".selected").addClass("hidden");
	});
	
	//��¼���û������˵�
	$("#avatar").mouseDelay().hover(function(){
		$("#user_menu").removeClass("hidden");
	},
	function(){
		$("#user_menu").addClass("hidden");
	});
	
	
	//��ֹ������ط���
	$("#login_box,#user_menu,#search_select").click(function (e) {
		e.stopPropagation();
	});
		
	//����ѡ��
	$("#search_select a.selected").click(function(){
		$(this).nextAll("a").removeClass("hidden");
	});

	$("#search_select a").not(".selected").click(function(){
		$("#search_select .selected").attr("rel",$(this).attr("rel")).children("span").html($(this).html()).end().nextAll("a").addClass("hidden");
	})
	
	//�ƶ���
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
