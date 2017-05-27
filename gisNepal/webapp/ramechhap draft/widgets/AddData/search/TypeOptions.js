// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.
//>>built
require({cache:{"url:widgets/AddData/search/templates/TypeOptions.html":'\x3cdiv class\x3d"search-data-type-options"\x3e\r\n  \x3cdiv data-dojo-type\x3d"dijit/form/DropDownButton"\x3e\r\n    \x3cspan\x3e${i18n.search.typeOptions.prompt}\x3c/span\x3e\r\n    \x3cdiv data-dojo-type\x3d"dijit/TooltipDialog"\r\n         data-dojo-attach-point\x3d"tooltipDialog"\r\n         data-dojo-props\x3d"class:\'add-data-widget-popup\'"\x3e\r\n      \x3clabel for\x3d"${id}_mapServiceId" class\x3d"search-type-option"\x3e\r\n        \x3cinput id\x3d"${id}_mapServiceId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"mapServiceToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;Map Service\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.mapService}\r\n      \x3c/label\x3e\r\n      \x3clabel for\x3d"${id}_featureServiceId" class\x3d"search-type-option"\x3e\r\n        \x3cinput id\x3d"${id}_featureServiceId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"featureServiceToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;Feature Service\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.featureService}\r\n      \x3c/label\x3e\r\n      \x3clabel for\x3d"${id}_imageServiceId" class\x3d"search-type-option"\x3e\r\n        \x3cinput id\x3d"${id}_imageServiceId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"imageServiceToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;Image Service\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.imageService}\r\n      \x3c/label\x3e\r\n      \x3clabel for\x3d"${id}_vectorTileServiceId" class\x3d"search-type-option"\r\n        data-dojo-attach-point\x3d"vectorTileNode"\x3e\r\n        \x3cinput id\x3d"${id}_vectorTileServiceId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"vectorTileServiceToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;Vector Tile Service\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.vectorTileService}\r\n      \x3c/label\x3e\r\n      \x3clabel for\x3d"${id}_kmlId" class\x3d"search-type-option"\x3e\r\n        \x3cinput id\x3d"${id}_kmlId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"kmlToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;KML\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.kml}\r\n      \x3c/label\x3e\r\n       \x3clabel for\x3d"${id}_wmsId" class\x3d"search-type-option"\x3e\r\n        \x3cinput id\x3d"${id}_wmsId"\r\n          data-dojo-type\x3d"dijit/form/CheckBox"\r\n          data-dojo-attach-point\x3d"wmsToggle"\r\n          data-dojo-attach-event\x3d"onClick: optionClicked"\r\n          data-option-q\x3d\'type:\x26quot;WMS\x26quot;\'/\x3e\r\n        ${i18n.search.typeOptions.wms}\r\n      \x3c/label\x3e\r\n    \x3c/div\x3e\r\n  \x3c/div\x3e\r\n\x3c/div\x3e\r\n'}});
define("dojo/_base/declare dojo/_base/array dojo/_base/lang dojo/on ./SearchComponent dojo/text!./templates/TypeOptions.html dojo/i18n!../nls/strings dojo/Deferred dijit/TooltipDialog dijit/form/DropDownButton dijit/form/CheckBox".split(" "),function(g,h,d,k,l,m,n,p){return g([l],{i18n:n,templateString:m,supportsVectorTile:!1,postCreate:function(){this.inherited(arguments);this.own(k(this.tooltipDialog,"open",d.hitch(this,function(){this.tooltipDialog.domNode.className+=" "+this.searchPane.wabWidget.appConfig.theme.name})));
this._checkVTSupport().then(d.hitch(this,function(a){this.supportsVectorTile=a;this.supportsVectorTile||(console.warn("AddData: Vector Tile is not supported."),this.vectorTileNode.style.display="none")}))},_checkVTSupport:function(){var a=new p;require(["esri/layers/vector-tile"],function(c){c=c.supported();a.resolve(c)});return a},getOptionWidgets:function(){return[this.mapServiceToggle,this.featureServiceToggle,this.imageServiceToggle,this.vectorTileServiceToggle,this.kmlToggle,this.wmsToggle]},
optionClicked:function(){this.search()},appendQueryParams:function(a){var c=function(a,b){0<a.length&&(a+=" OR ");return a+b},b="",e="",d=!1;h.forEach(this.getOptionWidgets(),function(a){var f=a.focusNode.getAttribute("data-option-q");e=c(e,f);a.get("checked")&&(b=c(b,f),d=!0)});d||(b=e);null!==b&&0<b.length&&(b="("+b+")",a.q=null!==a.q&&0<a.q.length?a.q+(" AND "+b):b)}})});