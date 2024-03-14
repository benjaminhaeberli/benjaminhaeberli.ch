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

*/function Y(t){return typeof window.Node=="object"?t instanceof window.Node:t!==null&&typeof t=="object"&&typeof t.nodeType=="number"&&typeof t.nodeName=="string"}/*! @license is-dom-node-list v1.2.1

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

*/function ut(t){var e=Object.prototype.toString.call(t),r=/^\[object (HTMLCollection|NodeList|Object)\]$/;return typeof window.NodeList=="object"?t instanceof window.NodeList:t!==null&&typeof t=="object"&&typeof t.length=="number"&&r.test(e)&&(t.length===0||Y(t[0]))}/*! @license Tealight v0.3.6

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

*/function k(t,e){if(e===void 0&&(e=document),t instanceof Array)return t.filter(Y);if(Y(t))return[t];if(ut(t))return Array.prototype.slice.call(t);if(typeof t=="string")try{var r=e.querySelectorAll(t);return Array.prototype.slice.call(r)}catch{return[]}return[]}/*! @license Rematrix v0.3.0

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
*/function H(t){if(t.constructor!==Array)throw new TypeError("Expected array.");if(t.length===16)return t;if(t.length===6){var e=m();return e[0]=t[0],e[1]=t[1],e[4]=t[2],e[5]=t[3],e[12]=t[4],e[13]=t[5],e}throw new RangeError("Expected array with either 6 or 16 values.")}function m(){for(var t=[],e=0;e<16;e++)e%5==0?t.push(1):t.push(0);return t}function ft(t,e){for(var r=H(t),i=H(e),o=[],n=0;n<4;n++)for(var a=[r[n],r[n+4],r[n+8],r[n+12]],l=0;l<4;l++){var p=l*4,c=[i[p],i[p+1],i[p+2],i[p+3]],d=a[0]*c[0]+a[1]*c[1]+a[2]*c[2]+a[3]*c[3];o[n+p]=d}return o}function lt(t){if(typeof t=="string"){var e=t.match(/matrix(3d)?\(([^)]+)\)/);if(e){var r=e[2].split(", ").map(parseFloat);return H(r)}}return m()}function dt(t){var e=Math.PI/180*t,r=m();return r[5]=r[10]=Math.cos(e),r[6]=r[9]=Math.sin(e),r[9]*=-1,r}function ht(t){var e=Math.PI/180*t,r=m();return r[0]=r[10]=Math.cos(e),r[2]=r[8]=Math.sin(e),r[2]*=-1,r}function vt(t){var e=Math.PI/180*t,r=m();return r[0]=r[5]=Math.cos(e),r[1]=r[4]=Math.sin(e),r[4]*=-1,r}function V(t,e){var r=m();return r[0]=t,r[5]=typeof e=="number"?e:t,r}function pt(t){var e=m();return e[12]=t,e}function yt(t){var e=m();return e[13]=t,e}/*! @license miniraf v1.0.0

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
*/var et={delay:0,distance:"0",duration:600,easing:"cubic-bezier(0.5, 0, 0, 1)",interval:0,opacity:0,origin:"bottom",rotate:{x:0,y:0,z:0},scale:1,cleanup:!1,container:document.documentElement,desktop:!0,mobile:!0,reset:!1,useDelay:"always",viewFactor:0,viewOffset:{top:0,right:0,bottom:0,left:0},afterReset:function(){},afterReveal:function(){},beforeReset:function(){},beforeReveal:function(){}};function bt(){return document.documentElement.classList.remove("sr"),{clean:function(){},destroy:function(){},reveal:function(){},sync:function(){},get noop(){return!0}}}function mt(){document.documentElement.classList.add("sr"),document.body?document.body.style.height="100%":document.addEventListener("DOMContentLoaded",function(){document.body.style.height="100%"})}var R={success:mt,failure:bt};function L(t){return t!==null&&t instanceof Object&&(t.constructor===Object||Object.prototype.toString.call(t)==="[object Object]")}function s(t,e){if(L(t)){var r=Object.keys(t);return r.forEach(function(i){return e(t[i],i,t)})}if(t instanceof Array)return t.forEach(function(i,o){return e(i,o,t)});throw new TypeError("Expected either an array or object literal.")}function E(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];if(this.constructor.debug&&console){var i="%cScrollReveal: "+t;e.forEach(function(o){return i+=`
 — `+o}),console.log(i,"color: #ea654b;")}}function rt(){var t=this,e=function(){return{active:[],stale:[]}},r=e(),i=e(),o=e();try{s(k("[data-sr-id]"),function(n){var a=parseInt(n.getAttribute("data-sr-id"));r.active.push(a)})}catch(n){throw n}s(this.store.elements,function(n){r.active.indexOf(n.id)===-1&&r.stale.push(n.id)}),s(r.stale,function(n){return delete t.store.elements[n]}),s(this.store.elements,function(n){o.active.indexOf(n.containerId)===-1&&o.active.push(n.containerId),n.hasOwnProperty("sequence")&&i.active.indexOf(n.sequence.id)===-1&&i.active.push(n.sequence.id)}),s(this.store.containers,function(n){o.active.indexOf(n.id)===-1&&o.stale.push(n.id)}),s(o.stale,function(n){var a=t.store.containers[n].node;a.removeEventListener("scroll",t.delegate),a.removeEventListener("resize",t.delegate),delete t.store.containers[n]}),s(this.store.sequences,function(n){i.active.indexOf(n.id)===-1&&i.stale.push(n.id)}),s(i.stale,function(n){return delete t.store.sequences[n]})}var Z=function(){var t={},e=document.documentElement.style;function r(i,o){if(o===void 0&&(o=e),i&&typeof i=="string"){if(t[i])return t[i];if(typeof o[i]=="string")return t[i]=i;if(typeof o["-webkit-"+i]=="string")return t[i]="-webkit-"+i;throw new RangeError('Unable to find "'+i+'" style property.')}throw new TypeError("Expected a string.")}return r.clearCache=function(){return t={}},r}();function wt(t){var e=window.getComputedStyle(t.node),r=e.position,i=t.config,o={},n=t.node.getAttribute("style")||"",a=n.match(/[\w-]+\s*:\s*[^;]+\s*/gi)||[];o.computed=a?a.map(function(g){return g.trim()}).join("; ")+";":"",o.generated=a.some(function(g){return g.match(/visibility\s?:\s?visible/i)})?o.computed:a.concat(["visibility: visible"]).map(function(g){return g.trim()}).join("; ")+";";var l=parseFloat(e.opacity),p=isNaN(parseFloat(i.opacity))?parseFloat(e.opacity):parseFloat(i.opacity),c={computed:l!==p?"opacity: "+l+";":"",generated:l!==p?"opacity: "+p+";":""},d=[];if(parseFloat(i.distance)){var u=i.origin==="top"||i.origin==="bottom"?"Y":"X",v=i.distance;(i.origin==="top"||i.origin==="left")&&(v=/^-/.test(v)?v.substr(1):"-"+v);var w=v.match(/(^-?\d+\.?\d?)|(em$|px$|%$)/g),y=w[0],T=w[1];switch(T){case"em":v=parseInt(e.fontSize)*y;break;case"px":v=y;break;case"%":v=u==="Y"?t.node.getBoundingClientRect().height*y/100:t.node.getBoundingClientRect().width*y/100;break;default:throw new RangeError("Unrecognized or missing distance unit.")}u==="Y"?d.push(yt(v)):d.push(pt(v))}i.rotate.x&&d.push(dt(i.rotate.x)),i.rotate.y&&d.push(ht(i.rotate.y)),i.rotate.z&&d.push(vt(i.rotate.z)),i.scale!==1&&(i.scale===0?d.push(V(2e-4)):d.push(V(i.scale)));var h={};if(d.length){h.property=Z("transform"),h.computed={raw:e[h.property],matrix:lt(e[h.property])},d.unshift(h.computed.matrix);var st=d.reduce(ft);h.generated={initial:h.property+": matrix3d("+st.join(", ")+");",final:h.property+": matrix3d("+h.computed.matrix.join(", ")+");"}}else h.generated={initial:"",final:""};var f={};if(c.generated||h.generated.initial){f.property=Z("transition"),f.computed=e[f.property],f.fragments=[];var U=i.delay,I=i.duration,q=i.easing;c.generated&&f.fragments.push({delayed:"opacity "+I/1e3+"s "+q+" "+U/1e3+"s",instant:"opacity "+I/1e3+"s "+q+" 0s"}),h.generated.initial&&f.fragments.push({delayed:h.property+" "+I/1e3+"s "+q+" "+U/1e3+"s",instant:h.property+" "+I/1e3+"s "+q+" 0s"});var ct=f.computed&&!f.computed.match(/all 0s|none 0s/);ct&&f.fragments.unshift({delayed:f.computed,instant:f.computed});var G=f.fragments.reduce(function(g,S,J){return g.delayed+=J===0?S.delayed:", "+S.delayed,g.instant+=J===0?S.instant:", "+S.instant,g},{delayed:"",instant:""});f.generated={delayed:f.property+": "+G.delayed+";",instant:f.property+": "+G.instant+";"}}else f.generated={delayed:"",instant:""};return{inline:o,opacity:c,position:r,transform:h,transition:f}}function O(t,e){e.split(";").forEach(function(r){var i=r.split(":"),o=i[0],n=i.slice(1);o&&n&&(t.style[o.trim()]=n.join(":"))})}function B(t){var e=this,r;try{s(k(t),function(i){var o=i.getAttribute("data-sr-id");if(o!==null){r=!0;var n=e.store.elements[o];n.callbackTimer&&window.clearTimeout(n.callbackTimer.clock),O(n.node,n.styles.inline.generated),i.removeAttribute("data-sr-id"),delete e.store.elements[o]}})}catch(i){return E.call(this,"Clean failed.",i.message)}if(r)try{rt.call(this)}catch(i){return E.call(this,"Clean failed.",i.message)}}function Tt(){var t=this;s(this.store.elements,function(e){O(e.node,e.styles.inline.generated),e.node.removeAttribute("data-sr-id")}),s(this.store.containers,function(e){var r=e.node===document.documentElement?window:e.node;r.removeEventListener("scroll",t.delegate),r.removeEventListener("resize",t.delegate)}),this.store={containers:{},elements:{},history:[],sequences:{}}}function P(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];if(L(t))return s(e,function(i){s(i,function(o,n){L(o)?((!t[n]||!L(t[n]))&&(t[n]={}),P(t[n],o)):t[n]=o})}),t;throw new TypeError("Target must be an object literal.")}function M(t){return t===void 0&&(t=navigator.userAgent),/Android|iPhone|iPad|iPod/i.test(t)}var X=function(){var t=0;return function(){return t++}}();function it(){var t=this;rt.call(this),s(this.store.elements,function(e){var r=[e.styles.inline.generated];e.visible?(r.push(e.styles.opacity.computed),r.push(e.styles.transform.generated.final),e.revealed=!0):(r.push(e.styles.opacity.generated),r.push(e.styles.transform.generated.initial),e.revealed=!1),O(e.node,r.filter(function(i){return i!==""}).join(" "))}),s(this.store.containers,function(e){var r=e.node===document.documentElement?window:e.node;r.addEventListener("scroll",t.delegate),r.addEventListener("resize",t.delegate)}),this.delegate(),this.initTimeout=null}function $(t,e){e===void 0&&(e={});var r=e.pristine||this.pristine,i=t.config.useDelay==="always"||t.config.useDelay==="onload"&&r||t.config.useDelay==="once"&&!t.seen,o=t.visible&&!t.revealed,n=!t.visible&&t.revealed&&t.config.reset;if(e.reveal||o)return Et.call(this,t,i);if(e.reset||n)return jt.call(this,t)}function Et(t,e){var r=[t.styles.inline.generated,t.styles.opacity.computed,t.styles.transform.generated.final];e?r.push(t.styles.transition.generated.delayed):r.push(t.styles.transition.generated.instant),t.revealed=t.seen=!0,O(t.node,r.filter(function(i){return i!==""}).join(" ")),nt.call(this,t,e)}function jt(t){var e=[t.styles.inline.generated,t.styles.opacity.generated,t.styles.transform.generated.initial,t.styles.transition.generated.instant];t.revealed=!1,O(t.node,e.filter(function(r){return r!==""}).join(" ")),nt.call(this,t)}function nt(t,e){var r=this,i=e?t.config.duration+t.config.delay:t.config.duration,o=t.revealed?t.config.beforeReveal:t.config.beforeReset,n=t.revealed?t.config.afterReveal:t.config.afterReset,a=0;t.callbackTimer&&(a=Date.now()-t.callbackTimer.start,window.clearTimeout(t.callbackTimer.clock)),o(t.node),t.callbackTimer={start:Date.now(),clock:window.setTimeout(function(){n(t.node),t.callbackTimer=null,t.revealed&&!t.config.reset&&t.config.cleanup&&B.call(r,t.node)},i-a)}}function ot(t,e){if(e===void 0&&(e=this.pristine),!t.visible&&t.revealed&&t.config.reset)return $.call(this,t,{reset:!0});var r=this.store.sequences[t.sequence.id],i=t.sequence.index;if(r){var o=new K(r,"visible",this.store),n=new K(r,"revealed",this.store);if(r.models={visible:o,revealed:n},!n.body.length){var a=r.members[o.body[0]],l=this.store.elements[a];if(l)return A.call(this,r,o.body[0],-1,e),A.call(this,r,o.body[0],1,e),$.call(this,l,{reveal:!0,pristine:e})}if(!r.blocked.head&&i===[].concat(n.head).pop()&&i>=[].concat(o.body).shift())return A.call(this,r,i,-1,e),$.call(this,t,{reveal:!0,pristine:e});if(!r.blocked.foot&&i===[].concat(n.foot).shift()&&i<=[].concat(o.body).pop())return A.call(this,r,i,1,e),$.call(this,t,{reveal:!0,pristine:e})}}function Ot(t){var e=Math.abs(t);if(!isNaN(e))this.id=X(),this.interval=Math.max(e,16),this.members=[],this.models={},this.blocked={head:!1,foot:!1};else throw new RangeError("Invalid sequence interval.")}function K(t,e,r){var i=this;this.head=[],this.body=[],this.foot=[],s(t.members,function(o,n){var a=r.elements[o];a&&a[e]&&i.body.push(n)}),this.body.length&&s(t.members,function(o,n){var a=r.elements[o];a&&!a[e]&&(n<i.body[0]?i.head.push(n):i.foot.push(n))})}function A(t,e,r,i){var o=this,n=["head",null,"foot"][1+r],a=t.members[e+r],l=this.store.elements[a];t.blocked[n]=!0,setTimeout(function(){t.blocked[n]=!1,l&&ot.call(o,l,i)},t.interval)}function at(t,e,r){var i=this;e===void 0&&(e={}),r===void 0&&(r=!1);var o=[],n,a=e.interval||et.interval;try{a&&(n=new Ot(a));var l=k(t);if(!l.length)throw new Error("Invalid reveal target.");var p=l.reduce(function(c,d){var u={},v=d.getAttribute("data-sr-id");v?(P(u,i.store.elements[v]),O(u.node,u.styles.inline.computed)):(u.id=X(),u.node=d,u.seen=!1,u.revealed=!1,u.visible=!1);var w=P({},u.config||i.defaults,e);if(!w.mobile&&M()||!w.desktop&&!M())return v&&B.call(i,u),c;var y=k(w.container)[0];if(!y)throw new Error("Invalid container.");if(!y.contains(d))return c;var T;return T=Rt(y,o,i.store.containers),T===null&&(T=X(),o.push({id:T,node:y})),u.config=w,u.containerId=T,u.styles=wt(u),n&&(u.sequence={id:n.id,index:n.members.length},n.members.push(u.id)),c.push(u),c},[]);s(p,function(c){i.store.elements[c.id]=c,c.node.setAttribute("data-sr-id",c.id)})}catch(c){return E.call(this,"Reveal failed.",c.message)}s(o,function(c){i.store.containers[c.id]={id:c.id,node:c.node}}),n&&(this.store.sequences[n.id]=n),r!==!0&&(this.store.history.push({target:t,options:e}),this.initTimeout&&window.clearTimeout(this.initTimeout),this.initTimeout=window.setTimeout(it.bind(this),0))}function Rt(t){for(var e=[],r=arguments.length-1;r-- >0;)e[r]=arguments[r+1];var i=null;return s(e,function(o){s(o,function(n){i===null&&n.node===t&&(i=n.id)})}),i}function $t(){var t=this;s(this.store.history,function(e){at.call(t,e.target,e.options,!0)}),it.call(this)}var kt=function(t){return(t>0)-(t<0)||+t},Q=Math.sign||kt;function _(t,e){var r=e?t.node.clientHeight:t.node.offsetHeight,i=e?t.node.clientWidth:t.node.offsetWidth,o=0,n=0,a=t.node;do isNaN(a.offsetTop)||(o+=a.offsetTop),isNaN(a.offsetLeft)||(n+=a.offsetLeft),a=a.offsetParent;while(a);return{bounds:{top:o,right:n+i,bottom:o+r,left:n},height:r,width:i}}function Pt(t){var e,r;return t.node===document.documentElement?(e=window.pageYOffset,r=window.pageXOffset):(e=t.node.scrollTop,r=t.node.scrollLeft),{top:e,left:r}}function It(t){t===void 0&&(t={});var e=this.store.containers[t.containerId];if(e){var r=Math.max(0,Math.min(1,t.config.viewFactor)),i=t.config.viewOffset,o={top:t.geometry.bounds.top+t.geometry.height*r,right:t.geometry.bounds.right-t.geometry.width*r,bottom:t.geometry.bounds.bottom-t.geometry.height*r,left:t.geometry.bounds.left+t.geometry.width*r},n={top:e.geometry.bounds.top+e.scroll.top+i.top,right:e.geometry.bounds.right+e.scroll.left-i.right,bottom:e.geometry.bounds.bottom+e.scroll.top-i.bottom,left:e.geometry.bounds.left+e.scroll.left+i.left};return o.top<n.bottom&&o.right>n.left&&o.bottom>n.top&&o.left<n.right||t.styles.position==="fixed"}}function qt(t,e){var r=this;t===void 0&&(t={type:"init"}),e===void 0&&(e=this.store.elements),gt(function(){var i=t.type==="init"||t.type==="resize";s(r.store.containers,function(o){i&&(o.geometry=_.call(r,o,!0));var n=Pt.call(r,o);o.scroll&&(o.direction={x:Q(n.left-o.scroll.left),y:Q(n.top-o.scroll.top)}),o.scroll=n}),s(e,function(o){(i||o.geometry===void 0)&&(o.geometry=_.call(r,o)),o.visible=It.call(r,o)}),s(e,function(o){o.sequence?ot.call(r,o):$.call(r,o)}),r.pristine=!1})}function St(){var t=document.documentElement.style;return"transform"in t||"WebkitTransform"in t}function At(){var t=document.documentElement.style;return"transition"in t||"WebkitTransition"in t}var Lt="4.0.9",x,N,C,D,z,b,F,W;function j(t){t===void 0&&(t={});var e=typeof this>"u"||Object.getPrototypeOf(this)!==j.prototype;if(e)return new j(t);if(!j.isSupported())return E.call(this,"Instantiation failed.","This browser is not supported."),R.failure();var r;try{r=b?P({},b,t):P({},et,t)}catch(o){return E.call(this,"Invalid configuration.",o.message),R.failure()}try{var i=k(r.container)[0];if(!i)throw new Error("Invalid container.")}catch(o){return E.call(this,o.message),R.failure()}return b=r,!b.mobile&&M()||!b.desktop&&!M()?(E.call(this,"This device is disabled.","desktop: "+b.desktop,"mobile: "+b.mobile),R.failure()):(R.success(),this.store={containers:{},elements:{},history:[],sequences:{}},this.pristine=!0,x=x||qt.bind(this),N=N||Tt.bind(this),C=C||at.bind(this),D=D||B.bind(this),z=z||$t.bind(this),Object.defineProperty(this,"delegate",{get:function(){return x}}),Object.defineProperty(this,"destroy",{get:function(){return N}}),Object.defineProperty(this,"reveal",{get:function(){return C}}),Object.defineProperty(this,"clean",{get:function(){return D}}),Object.defineProperty(this,"sync",{get:function(){return z}}),Object.defineProperty(this,"defaults",{get:function(){return b}}),Object.defineProperty(this,"version",{get:function(){return Lt}}),Object.defineProperty(this,"noop",{get:function(){return!1}}),W||(W=this))}j.isSupported=function(){return St()&&At()};Object.defineProperty(j,"debug",{get:function(){return F||!1},set:function(t){return F=typeof t=="boolean"?t:F}});j();console.log("ℹ️ This website uses JavaScript to anonymously analyse user traffic using Plausible (https://plausible.io/)");console.log("🇨🇭 Developed by Benjamin Haeberli (https://benjaminhaeberli.ch)");j().reveal(".to-reveal",{duration:650,interval:200,origin:"left",distance:"48px"});
