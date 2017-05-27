// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.

require({cache:{"jimu/dijit/ColorPickerButton":function(){define("dojo/_base/declare dijit/_WidgetBase dijit/_TemplatedMixin dojo/_base/lang dojo/_base/html dojo/on dojo/_base/Color dijit/TooltipDialog dijit/popup dojox/widget/ColorPicker".split(" "),function(g,h,k,b,d,f,e,m,l,n){return g([h,k],{baseClass:"jimu-color-picker-btn",declaredClass:"jimu.dijit.ColorPickerButton",templateString:'\x3cdiv\x3e\x3cdiv class\x3d"color-node" data-dojo-attach-point\x3d"colorNode"\x3e\x3c/div\x3e\x3cdiv class\x3d"seperator"\x3e\x3c/div\x3e\x3cdiv class\x3d"action-node" data-dojo-attach-point\x3d"actionNode"\x3e\x3c/div\x3e\x3c/div\x3e',
_isTooltipDialogOpened:!1,color:null,showHex:!0,showHsv:!0,showRgb:!0,ensureMode:!1,postMixInProperties:function(){this.nls=window.jimuNls.common},postCreate:function(){this.inherited(arguments);this.color?this.color instanceof e||(this.color=new e(this.color)):this.color=new e("#ccc");d.setStyle(this.colorNode,"backgroundColor",this.color.toHex());this.colorNode.title=this.color.toHex();this.showLabel&&this._changeLabel(this.color);this._createTooltipDialog(this.domNode);this._hideTooltipDialog();
this.own(f(this.colorNode,"click",b.hitch(this,this._onNodeClick)));this.own(f(this.actionNode,"click",b.hitch(this,this._onNodeClick)));this.own(f(document.body,"click",b.hitch(this,function(a){this.isPartOfPopup(a.target||a.srcElement)||this._hideTooltipDialog()})))},_onNodeClick:function(a){a.stopPropagation();a.preventDefault();this._isTooltipDialogOpened?this._hideTooltipDialog():this._showTooltipDialog()},destroy:function(){l.close(this.tooltipDialog);this.picker.destroy();this.tooltipDialog.destroy();
this.inherited(arguments)},isPartOfPopup:function(a){var c=this.tooltipDialog.domNode;return a===c||d.isDescendant(a,c)},hideTooltipDialog:function(){this._hideTooltipDialog()},_showTooltipDialog:function(){l.open({parent:this.getParent(),popup:this.tooltipDialog,around:this.domNode});this._isTooltipDialogOpened=!0},_hideTooltipDialog:function(){l.close(this.tooltipDialog);this._isTooltipDialogOpened=!1},_createTooltipDialog:function(){var a=d.create("div");this.tooltipDialog=new m({content:a});d.addClass(this.tooltipDialog.domNode,
"jimu-color-picker-dialog");this.picker=new n({showHex:this.showHex,showRgb:this.showRgb,showHsv:this.showHsv,value:this.color.toHex(),onChange:b.hitch(this,function(a){this.ensureMode||(a=new e(a),this.setColor(a))})});this.picker.placeAt(a);this.picker.startup();if(this.ensureMode){var c=d.create("div",{"class":"jimu-btn jimu-btn-vacation jimu-float-trailing jimu-leading-margin1",title:this.nls.cancel,innerHTML:this.nls.cancel},a);this.own(f(c,"click",b.hitch(this,function(){this._hideTooltipDialog()})));
c=d.create("div",{"class":"jimu-btn jimu-float-trailing jimu-leading-margin1",title:this.nls.ok,innerHTML:this.nls.ok},a);this.own(f(c,"click",b.hitch(this,function(){var a=this.picker.get("value");this.setColor(new e(a));this._hideTooltipDialog()})));a=d.create("div",{"class":"jimu-btn jimu-float-trailing jimu-leading-margin1",title:this.nls.apply,innerHTML:this.nls.apply},a);this.own(f(a,"click",b.hitch(this,function(){var a=this.picker.get("value");this.setColor(new e(a))})))}},setColor:function(a){if(a instanceof
e){var c=this.color,b="";c&&(b=c.toHex());c=a.toHex();this.color=a;d.setStyle(this.colorNode,"backgroundColor",c);b!==c&&(this.picker.set("value",c),this.onChange(new e(c)))}},getColor:function(){return this.color},onChange:function(a){}})})},"widgets/Select/setting/_build-generate_module":function(){define(["dojo/text!./Setting.html","dojo/text!./css/style.css","dojo/i18n!./nls/strings"],function(){})},"url:widgets/Select/setting/Setting.html":'\x3cdiv\x3e\r\n  \x3cdiv class\x3d"config-section inline"\x3e\r\n    \x3cdiv class\x3d"label"\x3e${nls.setSelectionColor}\x3c/div\x3e\r\n    \x3cdiv data-dojo-attach-point\x3d"colorPicker" data-dojo-type\x3d"jimu/dijit/ColorPickerButton"\x3e\r\n    \x3c/div\x3e\r\n  \x3c/div\x3e\r\n  \x3cdiv class\x3d"config-section"\x3e\r\n    \x3cdiv class\x3d"label"\x3e${nls.selectionMode}\x3c/div\x3e\r\n    \x3cdiv class\x3d"option"\x3e\r\n      \x3cinput name\x3d"selectionMode" type\x3d"radio" data-dojo-attach-point\x3d"partialMode"\r\n            data-dojo-attach-event\x3d"onclick: _onSelectPartialMode"/\x3e\r\n      \x3clabel\x3e${nls.partiallyWithin}\x3c/label\x3e\r\n    \x3c/div\x3e\r\n    \x3cdiv class\x3d"option"\x3e\r\n      \x3cinput name\x3d"selectionMode" type\x3d"radio" data-dojo-attach-point\x3d"whollyMode"\r\n            data-dojo-attach-event\x3d"onclick: _onSelectWhollyMode"/\x3e\r\n      \x3clabel\x3e${nls.whollyWithin}\x3c/label\x3e\r\n    \x3c/div\x3e\r\n  \x3c/div\x3e\r\n  \x3cdiv class\x3d"config-section"\x3e\r\n    \x3cdiv data-dojo-attach-point\x3d"exportCheckBoxDiv"\x3e\x3c/div\x3e\r\n  \x3c/div\x3e\r\n\x3c/div\x3e',
"url:widgets/Select/setting/css/style.css":'.jimu-widget-select-setting {margin: 20px 0;}.jimu-widget-select-setting .config-section {width: 100%; margin-bottom: 20px;}.jimu-widget-select-setting .config-section label {font-family: "Avenir-Medium"; font-size: 12px; font-color: #353535;}.jimu-widget-select-setting .config-section .jimu-color-picker {width: 30px; height: 30px; margin: 0 20px;}.jimu-widget-select-setting .config-section .option {margin: 15px;}.jimu-widget-select-setting .config-section .option input {margin: 0 10px;}.jimu-widget-select-setting .inline \x3e div {display: inline-block;}.jimu-widget-select-setting .label {font-family: "Avenir-Medium"; font-size: 14px; font-color: #353535;}',
"*now":function(g){g(['dojo/i18n!*preload*widgets/Select/setting/nls/Setting*["ar","cs","da","de","en","el","es","et","fi","fr","he","hr","it","ja","ko","lt","lv","nb","nl","pl","pt-br","pt-pt","ro","ru","sr","sv","th","tr","zh-cn","vi","zh-hk","zh-tw","ROOT"]'])}}});
define("dojo/_base/declare dojo/_base/lang dojo/_base/Color dojo/on dijit/_WidgetsInTemplateMixin jimu/BaseWidgetSetting jimu/dijit/CheckBox jimu/dijit/ColorPickerButton".split(" "),function(g,h,k,b,d,f,e){return g([f,d],{baseClass:"jimu-widget-select-setting",selectionColor:"",selectionMode:"",allowExport:!1,postCreate:function(){this.inherited(arguments);this.allowExportCheckBox=new e({label:this.nls.allowExport,checked:this.config&&this.config.allowExport,onChange:h.hitch(this,this._onAllowExportChange)},
this.exportCheckBoxDiv);this.config&&this._init();this.own(b(this.colorPicker,"change",h.hitch(this,this._onColorChange)))},_onColorChange:function(b){this.selectionColor=b.toHex()},_onSelectPartialMode:function(){this.selectionMode="partial"},_onSelectWhollyMode:function(){this.selectionMode="wholly"},_onAllowExportChange:function(b){this.allowExport=b},_init:function(){(this.selectionColor=this.config.selectionColor)&&this.colorPicker.setColor(new k(this.selectionColor));this.selectionMode=this.config.selectionMode;
"partial"===this.config.selectionMode?(this.partialMode.checked=!0,this._onSelectPartialMode()):"wholly"===this.config.selectionMode&&(this.whollyMode.checked=!0,this._onSelectWhollyMode());this.allowExport=this.config.allowExport;this.allowExportCheckBox.setValue(this.allowExport)},setConfig:function(b){this.config=b;this._init()},getConfig:function(){return{selectionColor:this.selectionColor,selectionMode:this.selectionMode,allowExport:this.allowExport}}})});