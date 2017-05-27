// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.
//>>built
require({cache:{"url:widgets/SmartEditor/setting/EditFields.html":'\x3cdiv\x3e\r\n    \x3cdiv class\x3d"settingsDesc" data-dojo-attach-point\x3d"fieldsDesc"\x3e${nls.fieldsPage.description}\x3c/div\x3e\r\n    \r\n    \x3cdiv data-dojo-attach-point\x3d"fieldsTable"\x3e\x3c/div\x3e\r\n    \x3cdiv class\x3d"settingsNotes" data-dojo-attach-point\x3d"fieldsNotes"\x3e${nls.fieldsPage.fieldsNotes}\x3c/div\x3e\r\n\x3c/div\x3e'}});
define("dojo/_base/declare dojo/_base/lang dojo/_base/array dojo/on dojo/query dojo/text!./EditFields.html ./FieldValidation dijit/_TemplatedMixin jimu/BaseWidgetSetting jimu/dijit/SimpleTable jimu/dijit/Popup esri/lang".split(" "),function(e,c,d,f,g,h,k,l,m,n,p,q){return e([m,l],{baseClass:"jimu-widget-smartEditor-setting-fields",templateString:h,_layerInfo:null,_fieldValid:null,_fieldValidations:null,__layerName:null,postCreate:function(){this.inherited(arguments);this._initFieldsTable();this._setFiedsTable(this._layerInfo.fieldInfos);
this._fieldValidations=void 0===this._layerInfo.fieldValidations?{}:c.clone(this._layerInfo.fieldValidations)},popupEditPage:function(){var a=new p({titleLabel:q.substitute({layername:this._layerName},this.nls.fieldsPage.title),width:720,maxHeight:700,autoHeight:!0,content:this,buttons:[{label:this.nls.ok,onClick:c.hitch(this,function(){this._validateTable()&&(this._resetFieldInfos(),this._layerInfo.fieldValidations=this._fieldValidations,a.close())})},{label:this.nls.cancel,classNames:["jimu-btn-vacation"],
onClick:c.hitch(this,function(){a.close()})}],onClose:c.hitch(this,function(){})})},_initFieldsTable:function(){this._fieldsTable=new n({fields:[{name:"required",title:"",type:"text","class":"required"},{name:"visible",title:this.nls.fieldsPage.fieldsSettingsTable.display,type:"checkbox","class":"visible"},{name:"isEditable",title:this.nls.fieldsPage.fieldsSettingsTable.edit,type:"checkbox","class":"editable"},{name:"canPresetValue",title:this.nls.fieldsPage.fieldsSettingsTable.canPresetValue,type:"checkbox",
"class":"preset"},{name:"fieldName",title:this.nls.fieldsPage.fieldsSettingsTable.fieldName,type:"text","class":"fieldName"},{name:"label",title:this.nls.fieldsPage.fieldsSettingsTable.fieldAlias,type:"text",editable:!1,"class":"fieldLabel"},{name:"actions",title:this.nls.fieldsPage.fieldsSettingsTable.actions,type:"actions",actions:["up","down","edit"],"class":"actions"}],selectable:!1,style:{height:"300px",maxHeight:"300px"}});this._fieldsTable.placeAt(this.fieldsTable);this._fieldsTable.startup();
g("th.simple-table-field",this._fieldsTable.domNode).forEach(function(a){switch(a.innerText){case this.nls.fieldsPage.fieldsSettingsTable.display:a.title=this.nls.fieldsPage.fieldsSettingsTable.displayTip;break;case this.nls.fieldsPage.fieldsSettingsTable.edit:a.title=this.nls.fieldsPage.fieldsSettingsTable.editTip;break;case this.nls.fieldsPage.fieldsSettingsTable.fieldName:a.title=this.nls.fieldsPage.fieldsSettingsTable.fieldNameTip;break;case this.nls.fieldsPage.fieldsSettingsTable.fieldAlias:a.title=
this.nls.fieldsPage.fieldsSettingsTable.fieldAliasTip;break;case this.nls.fieldsPage.fieldsSettingsTable.canPresetValue:a.title=this.nls.fieldsPage.fieldsSettingsTable.canPresetValueTip;break;case this.nls.fieldsPage.fieldsSettingsTable.actions:a.title=this.nls.fieldsPage.fieldsSettingsTable.actionsTip}},this);this.own(f(this._fieldsTable,"actions-edit",c.hitch(this,this._onEditFieldInfoClick)))},_validateTable:function(){var a=this._fieldsTable.getRows();return 0===a.length?!1:d.some(a,function(a){return this._fieldsTable.getRowData(a).isEditable},
this)},_onEditFieldInfoClick:function(a){a=this._fieldsTable.getRowData(a);var r={currentVersion:this._layerInfo.mapLayer.resourceInfo.currentVersion,fields:c.clone(this._layerInfo.mapLayer.resourceInfo.fields)};this._fieldValid=new k({nls:this.nls,_layerDefinition:r,_url:this._layerInfo.mapLayer.url,_fieldValidations:this._fieldValidations,_fieldName:a.fieldName,_fieldAlias:a.label});this._fieldValid.popupActionsPage()},_setFiedsTable:function(a){d.forEach(a,function(a){var b={fieldName:a.fieldName,
isEditable:a.isEditable,canPresetValue:a.canPresetValue,label:a.label,visible:a.visible};a.hasOwnProperty("nullable")&&!1===a.nullable?b.required="*":b.required="";this._fieldsTable.addRow(b)},this)},_resetFieldInfos:function(){var a=[],c=this._fieldsTable.getData();d.forEach(c,function(b){a.push({fieldName:b.fieldName,label:b.label,canPresetValue:b.canPresetValue,isEditable:null===b.isEditable?!0:b.isEditable,visible:null===b.visible?!0:b.visible})});this._layerInfo.fieldInfos=a}})});