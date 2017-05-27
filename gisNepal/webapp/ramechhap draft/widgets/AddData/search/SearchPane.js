// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.
//>>built
require({cache:{"url:widgets/AddData/search/templates/SearchPane.html":'\x3cdiv class\x3d"search-pane-wrapper"\x3e\r\n  \x3cdiv data-dojo-attach-point\x3d"tabNode"\x3e\x3c/div\x3e\r\n  \x3cdiv class\x3d"search-pane" data-dojo-attach-point\x3d"onlinePane"\x3e\r\n    \x3cdiv class\x3d"search-pane-header" data-dojo-attach-point\x3d"headerNode"\x3e\r\n      \x3cdiv class\x3d"search-bar main-search-bar"\x3e\r\n        \x3cdiv data-dojo-type\x3d"widgets/AddData/search/ScopeOptions"\r\n          data-dojo-attach-point\x3d"scopeOptions"\x3e\r\n        \x3c/div\x3e\r\n        \x3cspan class\x3d"search-box-placeholder" data-dojo-attach-point\x3d"searchBoxPlaceholder"\x3e\x3c/span\x3e\r\n        \x3cdiv data-dojo-type\x3d"widgets/AddData/search/SearchBox"\r\n          data-dojo-attach-point\x3d"searchBox"\x3e\r\n        \x3c/div\x3e\r\n      \x3c/div\x3e\r\n      \x3cdiv class\x3d"search-bar-separator"\x3e\x3c/div\x3e\r\n      \x3cdiv class\x3d"search-bar search-bar-secondary" data-dojo-attach-point\x3d"optionsNode"\x3e\r\n        \x3cdiv data-dojo-type\x3d"widgets/AddData/search/BBoxOption"\r\n          data-dojo-attach-point\x3d"bboxOption"\x3e\r\n        \x3c/div\x3e\r\n        \x3cspan class\x3d"filter-placeholder" data-dojo-attach-point\x3d"filterPlaceholder"\x3e\x3c/span\x3e\r\n        \x3cdiv class\x3d"filter-wrapper" data-dojo-attach-point\x3d"filterWrapper"\x3e\r\n          \x3cdiv data-dojo-type\x3d"widgets/AddData/search/TypeOptions"\r\n            data-dojo-attach-point\x3d"typeOptions"\x3e\r\n          \x3c/div\x3e\r\n          \x3cdiv data-dojo-type\x3d"widgets/AddData/search/SortOptions"\r\n            data-dojo-attach-point\x3d"sortOptions"\x3e\r\n          \x3c/div\x3e\r\n        \x3c/div\x3e\r\n      \x3c/div\x3e\r\n    \x3c/div\x3e\r\n    \x3cdiv class\x3d"search-pane-content" data-dojo-attach-point\x3d"contentNode"\x3e\r\n      \x3cdiv data-dojo-type\x3d"widgets/AddData/search/ResultsPane"\r\n        data-dojo-attach-point\x3d"resultsPane"\x3e\r\n      \x3c/div\x3e\r\n    \x3c/div\x3e\r\n    \x3cdiv class\x3d"search-bar search-pane-footer" data-dojo-attach-point\x3d"footerNode"\x3e\r\n      \x3cdiv data-dojo-type\x3d"widgets/AddData/search/Paging"\r\n        data-dojo-attach-point\x3d"paging"\x3e\r\n      \x3c/div\x3e\r\n      \x3cdiv data-dojo-type\x3d"widgets/AddData/search/ResultCount"\r\n        data-dojo-attach-point\x3d"resultCount"\x3e\r\n      \x3c/div\x3e\r\n      \x3c!-- \x3cdiv class\x3d"footerOptions"\x3e\r\n        \x3ca href\x3d"#"\r\n          data-dojo-attach-point\x3d"FromUrlNode"\r\n          data-dojo-attach-event\x3d"onClick: addFromUrlClicked"\x3e${i18n.addFromUrl.buttonLabel}\x3c/a\x3e\r\n      \x3c/div\x3e --\x3e\r\n      \x3cdiv style\x3d"clear:both"\x3e\x3c/div\x3e\r\n    \x3c/div\x3e\r\n  \x3c/div\x3e\r\n  \x3cdiv class\x3d"search-pane" data-dojo-attach-point\x3d"urlPane"\x3e\r\n    \x3c!-- \x3cdiv data-dojo-type\x3d"widgets/AddData/search/AddFromUrlPane" data-dojo-attach-point\x3d"addFromUrlPane"\x3e\x3c/div\x3e --\x3e\r\n  \x3c/div\x3e\r\n\x3c/div\x3e\r\n'}});
define("dojo/_base/declare dojo/_base/lang dojo/_base/array dojo/_base/html dojo/on dojo/dom-class dijit/_WidgetBase dijit/_TemplatedMixin dijit/_WidgetsInTemplateMixin dojo/text!./templates/SearchPane.html dojo/i18n!../nls/strings jimu/dijit/TabContainer3 ./AddFromUrlPane ./SearchBox ./BBoxOption ./ScopeOptions ./TypeOptions ./SortOptions ./ResultsPane ./Paging ./ResultCount".split(" "),function(h,d,f,e,g,b,k,l,m,n,p,q,r){return h([k,l,m],{i18n:p,templateString:n,qDefaultFilter:null,qRequiredFilter:null,
searchOnStart:!0,searchContext:null,wabWidget:null,_dfd:null,postCreate:function(){this.inherited(arguments);f.forEach(this.getComponents(),function(b){b.searchPane=this},this);this.initTabs()},startup:function(){this._started||(this.inherited(arguments),this.bindEvents(),this.initOptions(),this.searchOnStart&&this.search())},initTabs:function(){this.addFromUrlPane=new r({searchPane:this});e.place(this.addFromUrlPane.domNode,this.urlPane);this.tab=new q({tabs:[{title:this.nls.search.searchBox.search,
content:this.onlinePane},{title:this.nls.search.url,content:this.urlPane}]},this.tabNode);e.place(this.tab.domNode,this.domNode)},_onFilterPlaceholderChanged:function(){b.contains(this.filterPlaceholder,"opened")?(b.remove(this.filterPlaceholder,"opened"),b.remove(this.filterWrapper,"show")):(this.filterWrapper.style.top=this.headerNode.clientHeight+"px",b.add(this.filterPlaceholder,"opened"),b.add(this.filterWrapper,"show"))},_onSearchBoxPlaceholderChanged:function(){this.searchBox&&(b.contains(this.searchBoxPlaceholder,
"opened")?(b.remove(this.searchBoxPlaceholder,"opened"),b.remove(this.searchBox.domNode,"show")):(b.add(this.searchBoxPlaceholder,"opened"),b.add(this.searchBox.domNode,"show"),this.searchBox.searchTextBox.focus()))},bindEvents:function(){this.own(g(this.filterPlaceholder,"click",d.hitch(this,this._onFilterPlaceholderChanged)));this.own(g(this.searchBoxPlaceholder,"click",d.hitch(this,this._onSearchBoxPlaceholderChanged)))},buildQueryParams:function(b){var c=null;"string"===typeof this.qRequiredFilter&&
0<this.qRequiredFilter.length&&(c=this.qRequiredFilter);var a={q:c,canSortByRelevance:!1};f.forEach(this.getComponents(),function(c){c.appendQueryParams(a,b)});delete a.canSortByRelevance;null===a.q&&("string"===typeof this.qDefaultFilter&&0<this.qDefaultFilter.length)&&(a.q=this.qDefaultFilter);return a},getComponents:function(){return[this.searchBox,this.bboxOption,this.scopeOptions,this.typeOptions,this.sortOptions,this.resultsPane,this.paging,this.resultCount]},initOptions:function(){},resize:function(){this.contentNode.style.top=
this.headerNode.clientHeight+1+"px";this.contentNode.style.bottom=this.footerNode.clientHeight+1+"px"},search:function(){var b=this,c={},a=this.buildQueryParams(c);if(!(null===a||null===a.q)){a&&null===a.sortField&&(a.sortOrder="desc");var d=this.searchContext.portal;c.scopeIsArcGISOnline&&this.searchContext.arcgisOnlinePortal&&(d=this.searchContext.arcgisOnlinePortal);null!==this._dfd&&this._dfd.cancel("Search aborted.",!1);var e=null;this._dfd=e=d.queryItems(a).then(function(a){e.isCanceled()||
(a.queryParams||(a.queryParams={start:a.start,num:a.num},!a.nextQueryParams&&("undefined"!==typeof a.nextStart&&-1!==a.nextStart)&&(a.nextQueryParams={start:a.nextStart})),f.forEach(b.getComponents(),function(b){b.processResults(a)}))}).otherwise(function(a){console.warn("searchError",a)})}}})});