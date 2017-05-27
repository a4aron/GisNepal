// All material copyright ESRI, All Rights Reserved, unless otherwise specified.
// See http://js.arcgis.com/3.15/esri/copyright.txt and http://www.arcgis.com/apps/webappbuilder/copyright.txt for details.

define("dojo/_base/declare dojo/_base/lang dojo/_base/Color dojo/_base/array dojo/DeferredList dojo/dom-class dojo/dom-construct dojo/dom-style dojo/on esri/geometry/geometryEngine esri/graphic esri/layers/FeatureLayer esri/symbols/SimpleMarkerSymbol esri/symbols/SimpleLineSymbol esri/symbols/Font esri/symbols/TextSymbol esri/tasks/query jimu/CSVUtils jimu/utils".split(" "),function(D,m,y,n,E,k,q,F,w,G,z,H,A,B,I,J,K,L,M){return D("ProximityInfo",null,{constructor:function(b,c,a){this.tab=b;this.container=
c;this.parent=a;this.graphicsLayer=this.incident=null;this.specialFields={};this.dateFields={};this.config=a.config},updateForIncident:function(b,c,a){n.forEach(this.tab.tabLayers,m.hitch(this,function(d){if("undefined"!==typeof d.empty){var f=new H(d.url);w(f,"load",m.hitch(this,function(){this.tab.tabLayers=[f];this.processIncident(b,c,a)}))}else this.processIncident(b,c,a)}))},processIncident:function(b,c,a){this.container.innerHTML="";this.buffer=c;k.add(this.container,"loading");var d=[];this.incident=
b;this.graphicsLayer=a;var f=this.tab.tabLayers;a=[];for(var h=0;h<f.length;h++){var e=f[h],g=new K;g.returnGeometry=!0;g.geometry=c.geometry;g.outFields="true"===this.parent.config.csvAllFields||!0===this.parent.config.csvAllFields?["*"]:this._getFields(e);"undefined"!==typeof e.queryFeatures&&a.push(e.queryFeatures(g))}(new E(a)).then(m.hitch(this,function(a){for(var c=0;c<a.length;c++){var e=a[c][1],g=this._getFields(f[c]);if(e&&e.features)for(var e=e.features,h=0;h<e.length;h++){for(var l=e[h],
m=this._getDistance(b.geometry,l.geometry),k={DISTANCE:m},n=0;n<g.length;n++)k[g[n]]=l.attributes[g[n]];!0===this.config.csvAllFields||"true"===this.config.csvAllFields?l.attributes.DISTANCE=m:l.attributes=k;d.push(l)}}this._processResults(d)}))},_processResults:function(b){this.container.innerHTML="";k.remove(this.container,"loading");this.graphicsLayer.clear();if(0===b.length&&this.buffer)this.container.innerHTML=this.parent.nls.noFeaturesFound;else{0===b.length&&!this.buffer&&(this.container.innerHTML=
this.parent.nls.defaultTabMsg);b.sort(this._compareDistance);var c=q.create("div",{style:"width:"+220*(b.length+1)+"px;"},this.container);k.add(c,"SAT_tabPanelContent");var a=q.create("div",{},c);k.add(a,"SATcol");a=q.create("div",{innerHTML:this.parent.nls.downloadCSV},a);k.add(a,"btnExport");w(a,"click",m.hitch(this,this._exportToCSV,b));var a=this.parent.nls[this.parent.config.distanceUnits],d;"undefined"!==typeof this.tab.advStat?d=this.tab.advStat.stats.outFields:(d=[],0<this.tab.tabLayers.length&&
n.forEach(this.tab.tabLayers,m.hitch(this,function(a){"undefined"!==typeof a.popupInfo?n.forEach(a.popupInfo.fieldInfos,m.hitch(this,function(a){if(a.visible){var b={value:0};b.expression=a.fieldName;b.label=a.label;d.push(b)}})):a.infoTemplate?n.forEach(a.infoTemplate.info.fieldInfos,m.hitch(this,function(a){if(a.visible){var b={value:0};b.expression=a.fieldName;b.label=a.label;d.push(b)}})):n.forEach((a.layerObject?a.layerObject:a).fields,m.hitch(this,function(a){var b={value:0};b.expression=a.name;
b.label=a.alias;d.push(b)}))})));for(var f=0;f<b.length;f++){var h=f+1,e=b[f],g=e.geometry,v=g;"point"!==g.type&&(v=g.getExtent().getCenter());var g=e.attributes,x;"point"===this.incident.geometry.type&&(x=a+": "+Math.round(100*g.DISTANCE)/100);var r="",p=0,s;for(s in g)if("DISTANCE"!==s&&3>p&&"undefined"!==typeof d)for(var l=0;l<d.length;l++)if(d[l].expression===s){var t=M.sanitizeHTML(this._getFieldValue(s,g[s])),u;if(e._layer&&e._layer.fields){var C=this._getField(e._layer.fields,s);C&&(u=C.alias)}if("undefined"===
typeof u||u in[""," ",null,void 0])u=s;this.isURL(t)?t='\x3ca href\x3d"'+t+'" target\x3d"_blank" style\x3d"color: inherit;"\x3e'+u+"\x3c/a\x3e":this.isEmail(t)&&(t='\x3ca href\x3d"mailto:'+t+'" style\x3d"color: inherit;"\x3e'+u+"\x3c/a\x3e");r+=t+"\x3cbr/\x3e";p+=1}e=q.create("div",{},c);k.add(e,"SATcolRec");p=q.create("div",{},e);k.add(p,"SATcolRecBar");l=q.create("div",{innerHTML:h},p);k.add(l,"SATcolRecNum");F.set(l,"backgroundColor",this.parent.config.color);w(l,"click",m.hitch(this,this._zoomToLocation,
v));x&&(l=q.create("div",{innerHTML:x},p),k.add(l,"SATcolDistance"));this.parent.config.enableRouting&&(p=q.create("div",{title:this.parent.nls.get_directions},p),k.add(p,"SATcolDir"),w(p,"click",m.hitch(this,this._routeToIncident,v)));r=q.create("div",{"class":"SATcolWrap",innerHTML:r},e);k.add(r,"SATcolInfo");r=new B(B.STYLE_SOLID,new y.fromString(this.parent.config.color),1);r=new A(A.STYLE_CIRCLE,24,r,new y.fromString(this.parent.config.color));e=new I;e.family="Arial";e.size="12px";h=new J(h,
e,"#ffffff");h.setOffset(0,-4);this.graphicsLayer.add(new z(v,r,g));this.graphicsLayer.add(new z(v,h,g))}}},_exportToCSV:function(b){if(0===b.length)return!1;var c;c=this.tab.label?this.tab.label:this.tab.layers;var a=[],d=[];n.forEach(b,function(b){a.push(b.attributes)});for(var f in a[0])d.push(f);L.exportCSV(c,a,d)},_getField:function(b,c){for(var a=0;a<b.length;a++){var d=b[a];if(d.name===c||d.alias===c)return d}},_getFields:function(b){var c=[];if(this.tab.advStat&&this.tab.advStat.stats&&this.tab.advStat.stats.outFields&&
0<this.tab.advStat.stats.outFields.length)n.forEach(this.tab.advStat.stats.outFields,function(a){c.push(a.expression)});else{var a;if(b.infoTemplate)a=b.infoTemplate.info.fieldInfos;else if(0<this.parent.map.itemInfo.itemData.operationalLayers.length){var d=this.parent.map.itemInfo.itemData.operationalLayers;a=null;var f=0;a:for(;f<d.length;f++){var h=d[f];if("ArcGISMapServiceLayer"===h.layerType&&"undefined"!==typeof h.layers)for(var e=0;e<h.layers.length;e++){var g=h.layers[e];if(g.popupInfo&&g.id===
b.layerId){a=g.popupInfo.fieldInfos;break a}}}a||(a=b.fields)}else a=b.fields;for(d=0;d<a.length;d++)f=a[d],"undefined"!==typeof f.visible?f.visible&&c.push(f.fieldName):c.push(f.name)}var k={};n.forEach(b.fields,m.hitch(this,function(a){if("esriFieldTypeDate"===a.type||a.domain){if("esriFieldTypeDate"===a.type&&b.infoTemplate)for(var c in b.infoTemplate._fieldsMap)"undefined"!==typeof b.infoTemplate._fieldsMap[c].fieldName&&(b.infoTemplate._fieldsMap[c].fieldName===a.name&&"undefined"!==typeof b.infoTemplate._fieldsMap[c].format.dateFormat)&&
(this.dateFields[a.name]=b.infoTemplate._fieldsMap[c].format.dateFormat);k[a.name]=a}}));this.specialFields=k;return c},_getFieldValue:function(b,c){var a=c;if(this.specialFields[b]){var d=this.specialFields[b];"esriFieldTypeDate"===d.type?"undefined"!==this.dateFields[b]?(d=this._getDateFormat(this.dateFields[b]),a=void 0!==typeof d?(new Date(c)).toLocaleDateString(navigator.language,d):(new Date(c)).toLocaleString()):a=(new Date(c)).toLocaleString():n.some(d.domain.codedValues,function(b){if(b.code===
c)return a=b.name,!0})}return a},isURL:function(b){return/(https?:\/\/|ftp:)/g.test(b)},isEmail:function(b){return/\S+@\S+\.\S+/.test(b)},_getDateFormat:function(b){var c;switch(b){case "shortDate":c={month:"2-digit",day:"2-digit",year:"numeric"};break;case "shortDateLE":c={day:"2-digit",month:"2-digit",year:"numeric"};break;case "longMonthDayYear":c={month:"long",day:"2-digit",year:"numeric"};break;case "dayShortMonthYear":c={day:"2-digit",month:"short",year:"numeric"};break;case "longDate":c={weekday:"long",
month:"long",day:"2-digit",year:"numeric"};break;case "shortDateLongTime":c={month:"2-digit",day:"2-digit",year:"numeric",hour:"numeric",minute:"2-digit",second:"2-digit",hour12:!0};break;case "shortDateLELongTime":c={day:"2-digit",month:"2-digit",year:"numeric",hour:"numeric",minute:"2-digit",second:"2-digit",hour12:!0};break;case "shortDateShortTime":c={month:"2-digit",day:"2-digit",year:"numeric",hour:"numeric",minute:"2-digit",hour12:!0};break;case "shortDateLEShortTime":c={day:"2-digit",month:"2-digit",
year:"numeric",hour:"numeric",minute:"2-digit",hour12:!0};break;case "shortDateShortTime24":c={month:"2-digit",day:"2-digit",year:"numeric",hour:"numeric",minute:"2-digit",hour12:!1};break;case "shortDateLEShortTime24":c={day:"2-digit",month:"2-digit",year:"numeric",hour:"numeric",minute:"2-digit",hour12:!1};break;case "longMonthYear":c={month:"long",year:"numeric"};break;case "shortMonthYear":c={month:"short",year:"numeric"};break;case "year":c={year:"numeric"}}return c},_getDistance:function(b,
c){var a=0,d=this.parent.config.distanceUnits,a=G.distance(b,c,9001);switch(d){case "miles":a*=6.21371E-4;break;case "kilometers":a*=0.0010;break;case "feet":a*=3.28084;break;case "yards":a*=1.09361;break;case "nauticalMiles":a*=5.39957E-4}return a},_compareDistance:function(b,c){return b.attributes.DISTANCE<c.attributes.DISTANCE?-1:b.attributes.DISTANCE>c.attributes.DISTANCE?1:0},_zoomToLocation:function(b){this.parent.zoomToLocation(b)},_routeToIncident:function(b){this.parent.routeToIncident(b)}})});