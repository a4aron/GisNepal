// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.
//>>built
require({cache:{"url:widgets/Query/setting/SortFields.html":'\x3cdiv\x3e\r\n\t\x3cdiv\x3e${nls.configureFieldsTip}\x3c/div\x3e\r\n\t\x3cdiv class\x3d"add-with-icon" data-dojo-attach-event\x3d"onclick:_onAddNewClicked"\x3e\r\n\t\t\x3cspan class\x3d"jimu-icon jimu-icon-add"\x3e\x3c/span\x3e\r\n\t\t\x3cspan class\x3d"add-label"\x3e${nls.addNew}\x3c/span\x3e\r\n\t\x3c/div\x3e\r\n\t\x3cdiv data-dojo-attach-point\x3d"tableDiv"\x3e\x3c/div\x3e\r\n\x3c/div\x3e'}});
define("dojo/_base/declare dijit/_WidgetBase dijit/_TemplatedMixin dijit/_WidgetsInTemplateMixin dijit/registry dijit/form/Select dojo/text!./SortFields.html dojo/on dojo/query dojo/_base/lang dojo/_base/array dojo/_base/html jimu/dijit/SimpleTable".split(" "),function(n,p,q,r,k,l,s,g,h,b,e,m,t){return n([p,q,r],{baseClass:"jimu-query-setting-sort-fields",templateString:s,_allFieldNames:null,_sortTipClassName:"sort-tip",_fieldNameSelectClassName:"field-name-select",_sortTypeSelectClassName:"sort-type-select",
nls:null,layerDefinition:null,orderByFields:null,validSortFieldTypes:[],postCreate:function(){this.inherited(arguments);var a=e.filter(this.layerDefinition.fields,b.hitch(this,function(c){return 0<=this.validSortFieldTypes.indexOf(c.type)}));this._allFieldNames=e.map(a,function(c){return c.name});this._initTable();this.orderByFields?this._setOrderByFields(this.orderByFields):this.orderByFields=[]},_initTable:function(){var a={autoHeight:!1,style:"height:187px",fields:[{name:"sortTip",title:this.nls.field,
type:"text",width:"100px"},{name:"fieldName",title:"",type:"extension",create:b.hitch(this,this._create4FieldName),setValue:b.hitch(this,this._setValue4FieldName),getValue:b.hitch(this,this._getValue4FieldName)},{name:"sortType",title:this.nls.sortingOrder,type:"extension",create:b.hitch(this,this._create4SortType),setValue:b.hitch(this,this._setValue4SortType),getValue:b.hitch(this,this._getValue4SortType)},{name:"actions",title:this.nls.actions,type:"actions",actions:["up","down","delete"],width:"120px"}]};
this.table=new t(a);this.own(g(this.table,"row-up",b.hitch(this,this._onTableRowUp)));this.own(g(this.table,"row-down",b.hitch(this,this._onTableRowDown)));this.table.placeAt(this.tableDiv);this.table.startup()},getOrderByFields:function(){var a=this.table.getData();return e.map(a,b.hitch(this,function(c){return c.fieldName+" "+c.sortType}))},_getFieldAlias:function(a){for(var c=a,f=this.layerDefinition.fields,d=0;d<f.length;d++)if(f[d].name===a){c=f[d].alias||a;break}return c},_getRestFields:function(){var a=
this._getAllFieldSelects(),c=e.map(a,b.hitch(this,function(c){return c.get("value")}));return e.filter(this._allFieldNames,b.hitch(this,function(a){return 0>c.indexOf(a)}))},_onAddNewClicked:function(){var a=this._getRestFields();if(0!==a.length){var c="",c=0===this.table.getRows().length?this.nls.sortBy:this.nls.thenBy;this.table.addRow({sortTip:c,fieldName:a[0],sortType:"ASC"})}},_setOrderByFields:function(a){this.table.clear();a=a||[];e.forEach(a,b.hitch(this,function(c,a){var d=c.split(" "),b=
d[0],e="ASC";d[1]&&"string"===typeof d[1]&&(d[1]=d[1].toUpperCase(),"DESC"===d[1]&&(e="DESC"));d="";d=0===a?this.nls.sortBy:this.nls.thenBy;this.table.addRow({sortTip:d,fieldName:b,sortType:e})}))},_getAllFieldSelects:function(){var a=h("."+this._fieldNameSelectClassName,this.table.tbody);return e.map(a,b.hitch(this,function(a){return k.byNode(a)}))},_getSelectFromTd:function(a,c){var b=h("."+c,a)[0];return k.byNode(b)},_onTableRowUp:function(){this._resetSortTips()},_onTableRowDown:function(){this._resetSortTips()},
_getAllSortTipDivs:function(){return h(".sortTip .normal-text-div",this.table.tbody)},_resetSortTips:function(){var a=this.table.getRows();e.forEach(a,b.hitch(this,function(a,b){var d="",d=0===b?this.nls.sortBy:this.nls.thenBy;this.table.editRow(a,{sortTip:d})}));a=this._getAllSortTipDivs();e.forEach(a,b.hitch(this,function(a,b){a.innerHTML=0===b?this.nls.sortBy:this.nls.thenBy}))},_create4FieldName:function(a){var c=this._getRestFields(),f=new l({style:"width:120px;height:20px;"});m.addClass(f.domNode,
this._fieldNameSelectClassName);f.placeAt(a);e.forEach(c,b.hitch(this,function(a){var c=this._getFieldAlias(a);f.addOption({value:a,label:c})}));this.own(g(f,"change",b.hitch(this,this._onFieldNameSelectChanged)))},_setValue4FieldName:function(a,c){this._getSelectFromTd(a,this._fieldNameSelectClassName).set("value",c)},_getValue4FieldName:function(a){return this._getSelectFromTd(a,this._fieldNameSelectClassName).get("value")},_onFieldNameSelectChanged:function(){var a=this._getAllFieldSelects();e.forEach(a,
b.hitch(this,function(a){var f=a.get("value"),d=a.getOptions(),d=e.filter(d,b.hitch(this,function(a){return a.value!==f}));a.removeOption(d);d=this._getRestFields();e.forEach(d,b.hitch(this,function(b){if(b!==f){var d=this._getFieldAlias(b);a.addOption({value:b,label:d})}}))}))},_create4SortType:function(a){var c=new l({style:"width:120px;height:20px;"});m.addClass(c.domNode,this._sortTypeSelectClassName);c.placeAt(a);c.addOption({value:"ASC",label:this.nls.ascending,selected:!0});c.addOption({value:"DESC",
label:this.nls.descending})},_setValue4SortType:function(a,c){var b=this._getSelectFromTd(a,this._sortTypeSelectClassName);("ASC"===c||"DESC"===c)&&b.set("value",c)},_getValue4SortType:function(a){return this._getSelectFromTd(a,this._sortTypeSelectClassName).get("value")}})});