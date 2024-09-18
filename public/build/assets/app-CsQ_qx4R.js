/*! @license is-dom-node v1.0.4

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/function W(t){return typeof window.Node=="object"?t instanceof window.Node:t!==null&&typeof t=="object"&&typeof t.nodeType=="number"&&typeof t.nodeName=="string"}/*! @license is-dom-node-list v1.2.1

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/function dt(t){var e=Object.prototype.toString.call(t),r=/^\[object (HTMLCollection|NodeList|Object)\]$/;return typeof window.NodeList=="object"?t instanceof window.NodeList:t!==null&&typeof t=="object"&&typeof t.length=="number"&&r.test(e)&&(t.length===0||W(t[0]))}/*! @license Tealight v0.3.6

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/function $(t,e){if(e===void 0&&(e=document),t instanceof Array)return t.filter(W);if(W(t))return[t];if(dt(t))return Array.prototype.slice.call(t);if(typeof t=="string")try{var r=e.querySelectorAll(t);return Array.prototype.slice.call(r)}catch{return[]}return[]}/*! @license Rematrix v0.3.0

	Copyright 2018 Julian Lloyd.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/function Y(t){if(t.constructor!==Array)throw new TypeError("Expected array.");if(t.length===16)return t;if(t.length===6){var e=m();return e[0]=t[0],e[1]=t[1],e[4]=t[2],e[5]=t[3],e[12]=t[4],e[13]=t[5],e}throw new RangeError("Expected array with either 6 or 16 values.")}function m(){for(var t=[],e=0;e<16;e++)e%5==0?t.push(1):t.push(0);return t}function ut(t,e){for(var r=Y(t),i=Y(e),o=[],n=0;n<4;n++)for(var a=[r[n],r[n+4],r[n+8],r[n+12]],f=0;f<4;f++){var p=f*4,c=[i[p],i[p+1],i[p+2],i[p+3]],l=a[0]*c[0]+a[1]*c[1]+a[2]*c[2]+a[3]*c[3];o[n+p]=l}return o}function ft(t){if(typeof t=="string"){var e=t.match(/matrix(3d)?\(([^)]+)\)/);if(e){var r=e[2].split(", ").map(parseFloat);return Y(r)}}return m()}function lt(t){var e=Math.PI/180*t,r=m();return r[5]=r[10]=Math.cos(e),r[6]=r[9]=Math.sin(e),r[9]*=-1,r}function ht(t){var e=Math.PI/180*t,r=m();return r[0]=r[10]=Math.cos(e),r[2]=r[8]=Math.sin(e),r[2]*=-1,r}function vt(t){var e=Math.PI/180*t,r=m();return r[0]=r[5]=Math.cos(e),r[1]=r[4]=Math.sin(e),r[4]*=-1,r}function V(t,e){var r=m();return r[0]=t,r[5]=typeof e=="number"?e:t,r}function pt(t){var e=m();return e[12]=t,e}function yt(t){var e=m();return e[13]=t,e}/*! @license miniraf v1.0.0

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/var tt=function(){var t=Date.now();return function(e){var r=Date.now();r-t>16?(t=r,e(r)):setTimeout(function(){return tt(e)},0)}}(),gt=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||tt;/*! @license ScrollReveal v4.0.9

	Copyright 2021 Fisssion LLC.

	Licensed under the GNU General Public License 3.0 for
	compatible open source projects and non-commercial use.

	For commercial sites, themes, projects, and applications,
	keep your source code private/proprietary by purchasing
	a commercial license from https://scrollrevealjs.org/
*/var et={delay:0,distance:"0",duration:600,easing:"cubic-bezier(0.5, 0, 0, 1)",interval:0,opacity:0,origin:"bottom",rotate:{x:0,y:0,z:0},scale:1,cleanup:!1,container:document.documentElement,desktop:!0,mobile:!0,reset:!1,useDelay:"always",viewFactor:0,viewOffset:{top:0,right:0,bottom:0,left:0},afterReset:function(){},afterReveal:function(){},beforeReset:function(){},beforeReveal:function(){}};function bt(){return document.documentElement.classList.remove("sr"),{clean:function(){},destroy:function(){},reveal:function(){},sync:function(){},get noop(){return!0}}}function mt(){document.documentElement.classList.add("sr"),document.body?document.body.style.height="100%":document.addEventListener("DOMContentLoaded",function(){document.body.style.height="100%"})}var k={success:mt,failure:bt};function A(t){return t!==null&&t instanceof Object&&(t.constructor===Object||Object.prototype.toString.call(t)==="[object Object]")}function s(t,e){if(A(t)){var r=Object.keys(t);return r.forEach(function(i){return e(t[i],i,t)})}if(t instanceof Array)return t.forEach(function(i,o){return e(i,o,t)});throw new TypeError("Expected either an array or object literal.")}function T(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];if(this.constructor.debug&&console){var i="%cScrollReveal: "+t;e.forEach(function(o){return i+=`
 — `+o}),console.log(i,"color: #ea654b;")}}function rt(){var t=this,e=function(){return{active:[],stale:[]}},r=e(),i=e(),o=e();try{s($("[data-sr-id]"),function(n){var a=parseInt(n.getAttribute("data-sr-id"));r.active.push(a)})}catch(n){throw n}s(this.store.elements,function(n){r.active.indexOf(n.id)===-1&&r.stale.push(n.id)}),s(r.stale,function(n){return delete t.store.elements[n]}),s(this.store.elements,function(n){o.active.indexOf(n.containerId)===-1&&o.active.push(n.containerId),n.hasOwnProperty("sequence")&&i.active.indexOf(n.sequence.id)===-1&&i.active.push(n.sequence.id)}),s(this.store.containers,function(n){o.active.indexOf(n.id)===-1&&o.stale.push(n.id)}),s(o.stale,function(n){var a=t.store.containers[n].node;a.removeEventListener("scroll",t.delegate),a.removeEventListener("resize",t.delegate),delete t.store.containers[n]}),s(this.store.sequences,function(n){i.active.indexOf(n.id)===-1&&i.stale.push(n.id)}),s(i.stale,function(n){return delete t.store.sequences[n]})}var Z=function(){var t={},e=document.documentElement.style;function r(i,o){if(o===void 0&&(o=e),i&&typeof i=="string"){if(t[i])return t[i];if(typeof o[i]=="string")return t[i]=i;if(typeof o["-webkit-"+i]=="string")return t[i]="-webkit-"+i;throw new RangeError('Unable to find "'+i+'" style property.')}throw new TypeError("Expected a string.")}return r.clearCache=function(){return t={}},r}();function wt(t){var e=window.getComputedStyle(t.node),r=e.position,i=t.config,o={},n=t.node.getAttribute("style")||"",a=n.match(/[\w-]+\s*:\s*[^;]+\s*/gi)||[];o.computed=a?a.map(function(g){return g.trim()}).join("; ")+";":"",o.generated=a.some(function(g){return g.match(/visibility\s?:\s?visible/i)})?o.computed:a.concat(["visibility: visible"]).map(function(g){return g.trim()}).join("; ")+";";var f=parseFloat(e.opacity),p=isNaN(parseFloat(i.opacity))?parseFloat(e.opacity):parseFloat(i.opacity),c={computed:f!==p?"opacity: "+f+";":"",generated:f!==p?"opacity: "+p+";":""},l=[];if(parseFloat(i.distance)){var d=i.origin==="top"||i.origin==="bottom"?"Y":"X",v=i.distance;(i.origin==="top"||i.origin==="left")&&(v=/^-/.test(v)?v.substr(1):"-"+v);var w=v.match(/(^-?\d+\.?\d?)|(em$|px$|%$)/g),y=w[0],E=w[1];switch(E){case"em":v=parseInt(e.fontSize)*y;break;case"px":v=y;break;case"%":v=d==="Y"?t.node.getBoundingClientRect().height*y/100:t.node.getBoundingClientRect().width*y/100;break;default:throw new RangeError("Unrecognized or missing distance unit.")}d==="Y"?l.push(yt(v)):l.push(pt(v))}i.rotate.x&&l.push(lt(i.rotate.x)),i.rotate.y&&l.push(ht(i.rotate.y)),i.rotate.z&&l.push(vt(i.rotate.z)),i.scale!==1&&(i.scale===0?l.push(V(2e-4)):l.push(V(i.scale)));var h={};if(l.length){h.property=Z("transform"),h.computed={raw:e[h.property],matrix:ft(e[h.property])},l.unshift(h.computed.matrix);var st=l.reduce(ut);h.generated={initial:h.property+": matrix3d("+st.join(", ")+");",final:h.property+": matrix3d("+h.computed.matrix.join(", ")+");"}}else h.generated={initial:"",final:""};var u={};if(c.generated||h.generated.initial){u.property=Z("transition"),u.computed=e[u.property],u.fragments=[];var U=i.delay,L=i.duration,P=i.easing;c.generated&&u.fragments.push({delayed:"opacity "+L/1e3+"s "+P+" "+U/1e3+"s",instant:"opacity "+L/1e3+"s "+P+" 0s"}),h.generated.initial&&u.fragments.push({delayed:h.property+" "+L/1e3+"s "+P+" "+U/1e3+"s",instant:h.property+" "+L/1e3+"s "+P+" 0s"});var ct=u.computed&&!u.computed.match(/all 0s|none 0s/);ct&&u.fragments.unshift({delayed:u.computed,instant:u.computed});var G=u.fragments.reduce(function(g,q,J){return g.delayed+=J===0?q.delayed:", "+q.delayed,g.instant+=J===0?q.instant:", "+q.instant,g},{delayed:"",instant:""});u.generated={delayed:u.property+": "+G.delayed+";",instant:u.property+": "+G.instant+";"}}else u.generated={delayed:"",instant:""};return{inline:o,opacity:c,position:r,transform:h,transition:u}}function O(t,e){e.split(";").forEach(function(r){var i=r.split(":"),o=i[0],n=i.slice(1);o&&n&&(t.style[o.trim()]=n.join(":"))})}function X(t){var e=this,r;try{s($(t),function(i){var o=i.getAttribute("data-sr-id");if(o!==null){r=!0;var n=e.store.elements[o];n.callbackTimer&&window.clearTimeout(n.callbackTimer.clock),O(n.node,n.styles.inline.generated),i.removeAttribute("data-sr-id"),delete e.store.elements[o]}})}catch(i){return T.call(this,"Clean failed.",i.message)}if(r)try{rt.call(this)}catch(i){return T.call(this,"Clean failed.",i.message)}}function Et(){var t=this;s(this.store.elements,function(e){O(e.node,e.styles.inline.generated),e.node.removeAttribute("data-sr-id")}),s(this.store.containers,function(e){var r=e.node===document.documentElement?window:e.node;r.removeEventListener("scroll",t.delegate),r.removeEventListener("resize",t.delegate)}),this.store={containers:{},elements:{},history:[],sequences:{}}}function I(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];if(A(t))return s(e,function(i){s(i,function(o,n){A(o)?((!t[n]||!A(t[n]))&&(t[n]={}),I(t[n],o)):t[n]=o})}),t;throw new TypeError("Target must be an object literal.")}function C(t){return t===void 0&&(t=navigator.userAgent),/Android|iPhone|iPad|iPod/i.test(t)}var H=function(){var t=0;return function(){return t++}}();function it(){var t=this;rt.call(this),s(this.store.elements,function(e){var r=[e.styles.inline.generated];e.visible?(r.push(e.styles.opacity.computed),r.push(e.styles.transform.generated.final),e.revealed=!0):(r.push(e.styles.opacity.generated),r.push(e.styles.transform.generated.initial),e.revealed=!1),O(e.node,r.filter(function(i){return i!==""}).join(" "))}),s(this.store.containers,function(e){var r=e.node===document.documentElement?window:e.node;r.addEventListener("scroll",t.delegate),r.addEventListener("resize",t.delegate)}),this.delegate(),this.initTimeout=null}function R(t,e){e===void 0&&(e={});var r=e.pristine||this.pristine,i=t.config.useDelay==="always"||t.config.useDelay==="onload"&&r||t.config.useDelay==="once"&&!t.seen,o=t.visible&&!t.revealed,n=!t.visible&&t.revealed&&t.config.reset;if(e.reveal||o)return Tt.call(this,t,i);if(e.reset||n)return jt.call(this,t)}function Tt(t,e){var r=[t.styles.inline.generated,t.styles.opacity.computed,t.styles.transform.generated.final];e?r.push(t.styles.transition.generated.delayed):r.push(t.styles.transition.generated.instant),t.revealed=t.seen=!0,O(t.node,r.filter(function(i){return i!==""}).join(" ")),nt.call(this,t,e)}function jt(t){var e=[t.styles.inline.generated,t.styles.opacity.generated,t.styles.transform.generated.initial,t.styles.transition.generated.instant];t.revealed=!1,O(t.node,e.filter(function(r){return r!==""}).join(" ")),nt.call(this,t)}function nt(t,e){var r=this,i=e?t.config.duration+t.config.delay:t.config.duration,o=t.revealed?t.config.beforeReveal:t.config.beforeReset,n=t.revealed?t.config.afterReveal:t.config.afterReset,a=0;t.callbackTimer&&(a=Date.now()-t.callbackTimer.start,window.clearTimeout(t.callbackTimer.clock)),o(t.node),t.callbackTimer={start:Date.now(),clock:window.setTimeout(function(){n(t.node),t.callbackTimer=null,t.revealed&&!t.config.reset&&t.config.cleanup&&X.call(r,t.node)},i-a)}}function ot(t,e){if(e===void 0&&(e=this.pristine),!t.visible&&t.revealed&&t.config.reset)return R.call(this,t,{reset:!0});var r=this.store.sequences[t.sequence.id],i=t.sequence.index;if(r){var o=new K(r,"visible",this.store),n=new K(r,"revealed",this.store);if(r.models={visible:o,revealed:n},!n.body.length){var a=r.members[o.body[0]],f=this.store.elements[a];if(f)return S.call(this,r,o.body[0],-1,e),S.call(this,r,o.body[0],1,e),R.call(this,f,{reveal:!0,pristine:e})}if(!r.blocked.head&&i===[].concat(n.head).pop()&&i>=[].concat(o.body).shift())return S.call(this,r,i,-1,e),R.call(this,t,{reveal:!0,pristine:e});if(!r.blocked.foot&&i===[].concat(n.foot).shift()&&i<=[].concat(o.body).pop())return S.call(this,r,i,1,e),R.call(this,t,{reveal:!0,pristine:e})}}function Ot(t){var e=Math.abs(t);if(!isNaN(e))this.id=H(),this.interval=Math.max(e,16),this.members=[],this.models={},this.blocked={head:!1,foot:!1};else throw new RangeError("Invalid sequence interval.")}function K(t,e,r){var i=this;this.head=[],this.body=[],this.foot=[],s(t.members,function(o,n){var a=r.elements[o];a&&a[e]&&i.body.push(n)}),this.body.length&&s(t.members,function(o,n){var a=r.elements[o];a&&!a[e]&&(n<i.body[0]?i.head.push(n):i.foot.push(n))})}function S(t,e,r,i){var o=this,n=["head",null,"foot"][1+r],a=t.members[e+r],f=this.store.elements[a];t.blocked[n]=!0,setTimeout(function(){t.blocked[n]=!1,f&&ot.call(o,f,i)},t.interval)}function at(t,e,r){var i=this;e===void 0&&(e={}),r===void 0&&(r=!1);var o=[],n,a=e.interval||et.interval;try{a&&(n=new Ot(a));var f=$(t);if(!f.length)throw new Error("Invalid reveal target.");var p=f.reduce(function(c,l){var d={},v=l.getAttribute("data-sr-id");v?(I(d,i.store.elements[v]),O(d.node,d.styles.inline.computed)):(d.id=H(),d.node=l,d.seen=!1,d.revealed=!1,d.visible=!1);var w=I({},d.config||i.defaults,e);if(!w.mobile&&C()||!w.desktop&&!C())return v&&X.call(i,d),c;var y=$(w.container)[0];if(!y)throw new Error("Invalid container.");if(!y.contains(l))return c;var E;return E=kt(y,o,i.store.containers),E===null&&(E=H(),o.push({id:E,node:y})),d.config=w,d.containerId=E,d.styles=wt(d),n&&(d.sequence={id:n.id,index:n.members.length},n.members.push(d.id)),c.push(d),c},[]);s(p,function(c){i.store.elements[c.id]=c,c.node.setAttribute("data-sr-id",c.id)})}catch(c){return T.call(this,"Reveal failed.",c.message)}s(o,function(c){i.store.containers[c.id]={id:c.id,node:c.node}}),n&&(this.store.sequences[n.id]=n),r!==!0&&(this.store.history.push({target:t,options:e}),this.initTimeout&&window.clearTimeout(this.initTimeout),this.initTimeout=window.setTimeout(it.bind(this),0))}function kt(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];var i=null;return s(e,function(o){s(o,function(n){i===null&&n.node===t&&(i=n.id)})}),i}function Rt(){var t=this;s(this.store.history,function(e){at.call(t,e.target,e.options,!0)}),it.call(this)}var $t=function(t){return(t>0)-(t<0)||+t},Q=Math.sign||$t;function _(t,e){var r=e?t.node.clientHeight:t.node.offsetHeight,i=e?t.node.clientWidth:t.node.offsetWidth,o=0,n=0,a=t.node;do isNaN(a.offsetTop)||(o+=a.offsetTop),isNaN(a.offsetLeft)||(n+=a.offsetLeft),a=a.offsetParent;while(a);return{bounds:{top:o,right:n+i,bottom:o+r,left:n},height:r,width:i}}function It(t){var e,r;return t.node===document.documentElement?(e=window.pageYOffset,r=window.pageXOffset):(e=t.node.scrollTop,r=t.node.scrollLeft),{top:e,left:r}}function Lt(t){t===void 0&&(t={});var e=this.store.containers[t.containerId];if(e){var r=Math.max(0,Math.min(1,t.config.viewFactor)),i=t.config.viewOffset,o={top:t.geometry.bounds.top+t.geometry.height*r,right:t.geometry.bounds.right-t.geometry.width*r,bottom:t.geometry.bounds.bottom-t.geometry.height*r,left:t.geometry.bounds.left+t.geometry.width*r},n={top:e.geometry.bounds.top+e.scroll.top+i.top,right:e.geometry.bounds.right+e.scroll.left-i.right,bottom:e.geometry.bounds.bottom+e.scroll.top-i.bottom,left:e.geometry.bounds.left+e.scroll.left+i.left};return o.top<n.bottom&&o.right>n.left&&o.bottom>n.top&&o.left<n.right||t.styles.position==="fixed"}}function Pt(t,e){var r=this;t===void 0&&(t={type:"init"}),e===void 0&&(e=this.store.elements),gt(function(){var i=t.type==="init"||t.type==="resize";s(r.store.containers,function(o){i&&(o.geometry=_.call(r,o,!0));var n=It.call(r,o);o.scroll&&(o.direction={x:Q(n.left-o.scroll.left),y:Q(n.top-o.scroll.top)}),o.scroll=n}),s(e,function(o){(i||o.geometry===void 0)&&(o.geometry=_.call(r,o)),o.visible=Lt.call(r,o)}),s(e,function(o){o.sequence?ot.call(r,o):R.call(r,o)}),r.pristine=!1})}function qt(){var t=document.documentElement.style;return"transform"in t||"WebkitTransform"in t}function St(){var t=document.documentElement.style;return"transition"in t||"WebkitTransition"in t}var At="4.0.9",M,x,N,D,z,b,F,B;function j(t){t===void 0&&(t={});var e=typeof this>"u"||Object.getPrototypeOf(this)!==j.prototype;if(e)return new j(t);if(!j.isSupported())return T.call(this,"Instantiation failed.","This browser is not supported."),k.failure();var r;try{r=b?I({},b,t):I({},et,t)}catch(o){return T.call(this,"Invalid configuration.",o.message),k.failure()}try{var i=$(r.container)[0];if(!i)throw new Error("Invalid container.")}catch(o){return T.call(this,o.message),k.failure()}return b=r,!b.mobile&&C()||!b.desktop&&!C()?(T.call(this,"This device is disabled.","desktop: "+b.desktop,"mobile: "+b.mobile),k.failure()):(k.success(),this.store={containers:{},elements:{},history:[],sequences:{}},this.pristine=!0,M=M||Pt.bind(this),x=x||Et.bind(this),N=N||at.bind(this),D=D||X.bind(this),z=z||Rt.bind(this),Object.defineProperty(this,"delegate",{get:function(){return M}}),Object.defineProperty(this,"destroy",{get:function(){return x}}),Object.defineProperty(this,"reveal",{get:function(){return N}}),Object.defineProperty(this,"clean",{get:function(){return D}}),Object.defineProperty(this,"sync",{get:function(){return z}}),Object.defineProperty(this,"defaults",{get:function(){return b}}),Object.defineProperty(this,"version",{get:function(){return At}}),Object.defineProperty(this,"noop",{get:function(){return!1}}),B||(B=this))}j.isSupported=function(){return qt()&&St()};Object.defineProperty(j,"debug",{get:function(){return F||!1},set:function(t){return F=typeof t=="boolean"?t:F}});j();const Ct={async copyCodeBlock(t){const e=t.getAttribute("data-code-id"),r=document.getElementById("code-"+e);if(!r){console.error("Code element not found for id: "+e);return}const i=r.textContent;if(!navigator.clipboard){console.error("Clipboard API not supported.");return}try{await navigator.clipboard.writeText(i);const o=t.querySelector("[data-icon=copy-icon]"),n=t.querySelector("[data-icon=copied-icon]");o.classList.add("hidden"),n.classList.remove("hidden"),setTimeout(()=>{o.classList.remove("hidden"),n.classList.add("hidden")},1e3)}catch(o){console.error("Error copying code: "+o)}}};console.log("ℹ️ This website uses JavaScript to anonymously analyse user traffic using Plausible (https://plausible.io/)");console.log("🇨🇭 Developed by Benjamin Haeberli (https://benjaminhaeberli.ch)");document.addEventListener("DOMContentLoaded",function(){var t=document.querySelectorAll("button[data-code-id]");t.forEach(function(e){e.addEventListener("click",function(){Ct.copyCodeBlock(e)})})});
