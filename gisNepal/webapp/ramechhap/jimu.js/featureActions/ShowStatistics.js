// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.

define(["dojo/_base/declare","../BaseFeatureAction","jimu/dijit/FieldStatistics"],function(c,d,e){return c(d,{iconClass:"icon-statistics",isFeatureSupported:function(b,a){return 1<b.features.length&&a&&0<this.getNumbericFields(a).length},onExecute:function(b,a){var c=new e,d={featureSet:b,layer:a,fieldNames:this.getNumbericFields(a).map(function(a){return a.name})};c.showContentAsPopup(d)},getNumbericFields:function(b){return b.fields.filter(function(a){return 0<["esriFieldTypeSmallInteger","esriFieldTypeInteger",
"esriFieldTypeSingle","esriFieldTypeDouble"].indexOf(a.type)})}})});