/**
 * CodeIgniter
 *
 *
 * Paging
 * @author		Hyunsoo Youn
 * @since		Version 1.0
 * @filesource
 */


var setPaging = {

	init : function(param){ //param ==> scale, setscale, set, page,total_cnt
		var listvar  = this.setListVar(param);

		var navivar = this.setTemplate(
			this.setNavigation({
				curr_set	: listvar.curr_set,
				curr_page	: listvar.curr_page,
				totalpage	: listvar.totalpage,
				setscale	: listvar.setscale
			})
		);
		return navivar;

	},

	setListVar : function(param){//param ==> scale, setscale, set, page,total_cnt

		var result = {
		};

		if(param.set){
			result.curr_set	 = this.curr_set	= param.set;
			if(param.page) 	result.curr_page = param.page;
			else result.curr_page	= (result.curr_set * param.setscale) - param.setscale + 1;
		} else {
			if(param.page) 	result.curr_page = param.page;
			else		result.curr_page = 1;
			result.curr_set = this.curr_set = Math.ceil(result.curr_page / param.setscale);
		}
		this.curr_set		= result.curr_set;
		this.curr_page		= result.curr_page;
		result.scale		= param.scale;
		result.setscale		= param.setscale;
		result.start		= (result.curr_page - 1) * param.scale;
		result.totalpage	= Math.ceil(param.total_cnt / param.scale);
		result.totalset		= Math.ceil(result.totalpage / param.setscale);
		result.listnum		= param.total_cnt - result.start;

		return result;
	},

	setNavigation : function (param) {//param ==>curr_set,curr_page,totalpage,setscale
		var result = {
		};

		result.prevpage 	= param.curr_page - 1;
		result.prevset	 	= param.curr_set  - 1;
		result.curr_page	= param.curr_page;
                result.curr_set         = param.curr_set;
                result.setscale 	= param.setscale;
                result.totalpage 	= param.totalpage;

		if(param.curr_page < param.totalpage) {
			result.nextpage 	= param.curr_page + 1;
		}else{
			result.nextpage		= 0;
		}

		result.totalset = Math.ceil(param.totalpage / param.setscale);
		if(param.curr_set<result.totalset){
			result.nextset 	= param.curr_set + 1;
		}else{
			result.nextset = 0;
		}

		result.pageindex	= new Array();
		result.startpage	= (param.curr_set * param.setscale) - param.setscale + 1;
		result.endpage		= param.curr_set * param.setscale;

		for(n=0,i=result.startpage;i<=result.endpage;i++,n++) {

			if(i>param.totalpage) break;

			result.pageindex[n] = i;

		}
		return result;
	},

	setTemplate : function(setnavi){

		var html='';

		html +='		<ul class="pagination">';
                if (setnavi.curr_page>setnavi.setscale){
			//html +='			<li class="paging_left2" page="1"><a href="javascript:;">◀</a></li>';
		}

                if (setnavi.prevset>0){
                    html +='			<li class="paging_left" ><a href="javascript:;"></a></li>';
                }
		for(var i=0,n=setnavi.startpage;i<setnavi.pageindex.length;i++,n++){

			if(n==setnavi.curr_page){
				html +='				<li class="pageindex current">'+n+'</li>';
			}else{
				html +='				<li class="pageindex">'+n+'</li>';
			}
		}
		if (setnavi.nextset>1){
			html +='			<li class="paging_right"><a href="javascript:;"></a></li>';
		}
		if (setnavi.totalset>setnavi.curr_set){
			//html +='			<li class="paging_right2" page="'+setnavi.totalpage+'"><a href="javascript:;">▷</a></li>';
		}
		html +='		</ul>';

		return html;
	},
	setEvent : function(param){
            var thisObject = this;

            jQuery('.pagination').children('.pageindex').unbind('click').bind('click',function(){
                console.log(11);
                var page = parseInt(jQuery(this).text());
                thisObject.goPage(page,param);
            });

            jQuery('.pagination').children('.paging_right').unbind('click').bind('click',function(){
                var page = parseInt(jQuery(this).prev().text())+1;
                thisObject.goPage(page,param);
            });
            jQuery('.pagination').children('.paging_left').unbind('click').bind('click',function(){
                var page = parseInt(jQuery(this).next().text())-1;
                thisObject.goPage(page,param);
            });

            jQuery('.pagination').children('.paging_right2').unbind('click').bind('click',function(){

                var page = parseInt(jQuery(this).attr('page'));
                thisObject.goPage(page,param);
            });
            jQuery('.pagination').children('.paging_left2').unbind('click').bind('click',function(){
                var page = parseInt(jQuery(this).attr('page'))-1;
                thisObject.goPage(page,param);
            });

	},

	goPage : function(page,param){
            if(param.page=='index'){
                location.href = "/admin/contents/?"+jQuery("form[name='searchForm']").serialize()+"&page="+page
            }else if(param.page=='adjustment'){
                jQuery("form[name='adjsfrm']").find("input[name='page']").val(page);
                jQuery("form[name='adjsfrm']").find("select[name='month']").trigger("change");

            }else{
                var urlParams = {};
                urlParams = getJsonFromUrl();
                urlParams.page = page;

                var gourl = param.basePath+param.page+setJsonToUrlParams(urlParams);

                console.log(gourl);
                location.href = gourl;
            }

	}
};
var getJsonFromUrl = function(){
    //var query = location.search.substr(1);
    var query = location.search.substr(location.search.indexOf("?") + 1);

    var result = {};
    if(query){
        var a = query.split("&");

        for(var i=0;i<a.length;i++){
            var item = a[i].split("=");
            result[item[0]] = decodeURIComponent(item[1]);
        }
    }
    return result;
};
var setJsonToUrlParams = function(jsonData){
    console.log(jsonData);
    var prms = '';
    var n =0;
    for(var key in jsonData){
        if(n==0) prms += '?';
        else prms += '&';
        prms += key+'='+jsonData[key];
        n++;
    }
    return prms;
}

var GetBasePath = function() {
    //BasePath를 구한다.
    var loc = unescape(document.location.href);
    var lowercase = loc.toLowerCase(loc);
    // Internet
    if (lowercase.indexOf("http://") == 0 || lowercase.indexOf("https://") == 0) {
        return loc.substr(0,loc.lastIndexOf("/") + 1);//BasePath 생성
    }else {// local
        var path;
        path = loc.replace(/.{2,}:\/{2,}/, ""); // file:/// 를 지워버린다.
        return path.substr(0,path.lastIndexOf("/") + 1);//BasePath 생성
    }
};
