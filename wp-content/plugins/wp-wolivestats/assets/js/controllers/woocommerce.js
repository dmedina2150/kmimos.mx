angular.module("Wolive").controller("WooController",["$scope","$rootScope","$timeout","ajaxAdmin","Functions",function(t,a,r,o,e){function n(t){return function(a,r){return a[t]>r[t]?1:a[t]<r[t]?-1:0}}function s(t,a,r){for(var o=[],e=[],s=0;s<t.length;s++)o.push({x:parseInt(t[s].x),y:parseInt(t[s].y)});for(var s=0;s<a.length;s++)e.push({x:parseInt(a[s].x),y:parseInt(a[s].y)});var c=[];o.sort(n("x")),e.sort(n("x")),o.length>0&&c.push({values:o,key:"Orders",color:"#ff7f0e"}),e.length>0&&c.push({values:e,key:"Carts",color:"rgb(172,103,145\t)"}),u?i.datum(c).transition().duration(500).call(u):nv.addGraph(function(){return u=nv.models.lineChart().margin({left:20,top:30,right:20}).useInteractiveGuideline(!0).duration(350).showLegend(!1).showYAxis(!1).showXAxis(!0).forceX([0,r]).forceY([0,1]).interpolate(!0),i=d3.select(".graphVisits svg").datum(c),i.transition().duration(500).call(u),u})}function c(t){angular.forEach(t,function(a,r){t[r].value=parseInt(t[r].value)});var a=t;p?(0===t.length?(p.color(["#9b5f8f"]),a=[{label:"No data",value:.1}],jQuery(".graphLiveCart  .nv-pieLabels").hide()):(jQuery(".graphLiveCart .nv-pieLabels").show(),p.color(["#e6d6e3","#c9a7c2","#7a778f","#462b40","#9b5f8f"])),_.datum(a).transition().duration(350).call(p)):nv.addGraph(function(){return p=nv.models.pieChart().x(function(t){return t.label}).y(function(t){return t.value}).labelThreshold(1).labelType("percent").showLegend(!0).showLabels(!0).labelThreshold(1).donut(!0).color(["#4da0ff","#ffac4d"]).noData("No data"),p.valueFormat(d3.format("d")),0===t.length?(p.color(["#9b5f8f"]),a=[{label:"No data",value:1e-4}]):p.color(["#e6d6e3","#c9a7c2","#7a778f","#462b40","#9b5f8f"]),_=d3.select(".graphLiveCart svg").datum(a),_.transition().duration(350).call(p),0===t.length&&jQuery(".graphLiveCart  .nv-pieLabels").hide(),p})}function d(t){var a;a=t.carts?[{label:"Carts",value:t.carts},{label:"Orders",value:t.orders}]:[],f?h.datum(a).transition().duration(350).call(f):nv.addGraph(function(){return f=nv.models.pieChart().x(function(t){return t.label}).y(function(t){return t.value}).showLabels(!0).labelThreshold(.05).labelType("percent").color(["rgba(155,95,143,.3)","rgba(155,95,143,.8)"]).donut(!0).showLegend(!1),f.valueFormat(d3.format("d")),h=d3.select(".cart_abandoned svg").datum(a).call(f),f})}var l=this;l.today_popular_products=[],l.cart_live=[],l.time_average=0,l.popular_products=[],t.go=e.goBlank,t.isFocus=!0,t.goOrder=e.goBlank,l.itemScopes=[{name:"",step:2,method:"getTodayStore",count:0,update:function(t){t=t.data,l.today_orders_from=l.today_orders?l.today_orders:0,l.today_orders=t.today.orders,l.today_carts_from=l.today_carts?l.today_carts:0,l.today_carts=t.today.today_cars,l.today_sales=t.today.sales,d({carts:t.today.today_cars,orders:t.today.orders})}},{name:"",step:3,method:"getPopularProducts",count:0,update:function(t){t=t.data,l.updateArrayID("popular_products",t.today_popular_products)}},{name:"",step:1,method:"getCartLive",count:0,update:function(t){t=t.data,c(t.cart_live),l.n_cart_from=l.n_cart?l.n_cart:t.n_cart,l.n_cart=t.n_cart}},{name:"",step:5,method:"getGraphHourWoo",count:0,update:function(t){t=t.data,s(t.order_hour,t.cart_hour,t.HOUR)}},{name:"Orders",step:6,method:"getOrders",count:0,update:function(t){t=t.data,l.last_orders=l.processOrders(t.last_orders)}}],t.$on("$viewContentLoaded",function(){l.reloadOverview(),e.setFocusEvents(function(a){t.isFocus=a})}),t.$on("$destroy",function(){r.cancel(t.timer_scope)}),l.reloadOverview=function(){var a={action:"getWoocommerce"};o.newRequest(a,function(a){var o=a.data;l.today_orders_from=l.today_orders?l.today_orders:0,l.today_orders=o.today.orders,l.today_sales=o.today.sales,l.today_carts_from=l.today_orders?l.today_carts:0,l.today_carts=o.today.today_cars,s(o.order_hour,o.cart_hour,o.HOUR),c(o.cart_live),l.n_cart_from=l.n_cart?l.n_cart:o.n_cart,l.n_cart=o.n_cart,l.updateArrayID("popular_products",o.today_popular_products),l.last_orders=l.processOrders(o.last_orders),d({carts:o.today.today_cars,orders:o.today.orders}),wolive.resize(),$("#center-overview-middle").fadeIn(),t.timestamp=o.timestamp,t.timer_scope=r(l.scopeTimer,wolive_scoopeTime)})},l.scopeTimer=function(){for(var a=l.itemScopes,e=0;e<l.itemScopes.length;e++){var n=a[e];if(++n.count>=n.step){n.count=0;var s={action:"getScopeTime",method:n.method,ignoreLoadingBar:!0};o.newRequest(s,a[e].update)}}t.timer_scope=r(l.scopeTimer,wolive_scoopeTime)},l.processActions=function(t){angular.forEach(t,function(t,a){l.actionIsPage(t.action_type)&&angular.forEach(l.popular_pages,function(a,r){a.id==t.value_int&&(a.total=parseInt(a.total)+1)}),"hit_src"==t.action_type&&angular.forEach(l.popular_search,function(a,r){a.id==t.value_int&&(a.total=parseInt(a.total)+1)})})},l.actionIsPage=function(t){return"hit_url"==t||"hit_post"==t||"hit_index"==t||"hit_src"==t},l.updateArrayID=function(t,a){var r=!1;if(0==l[t].length)return l[t]=a,0!=a.length;for(var o=l[t].length-1;o>=0;o--){var e=!1;objold=l[t][o],angular.forEach(a,function(t,a){t.id==objold.id&&t.action_type==objold.action_type&&(e=!0)}),e||(l[t].splice(o,1),r=!0)}return angular.forEach(a,function(a,o){var e=!1;angular.forEach(l[t],function(t,o){a.id==t.id&&a.action_type==t.action_type&&(t.total!=a.total&&(r=!0),t.total=parseInt(a.total),t.percent=parseInt(a.percent),e=!0)}),e||(l[t].push(a),r=!0)}),r},l.processOrders=function(t){return angular.forEach(t,function(a,r){t[r].last_action=(Date.now()/1e3|0)-a.last_action}),t};var u,i,p,_,f,h}]);