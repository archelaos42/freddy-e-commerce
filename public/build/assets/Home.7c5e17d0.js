import{G as o,d as n,k,o as i,e as d,a as e,t as f,h as u,j as b,s as m,E as y,F as p,i as j,B as S}from"./app.65305f40.js";var O=typeof o=="object"&&o&&o.Object===Object&&o,w=O,G=w,B=typeof self=="object"&&self&&self.Object===Object&&self,N=G||B||Function("return this")(),R=N,C=R,F=C.Symbol,x=F,h=x;h&&h.toStringTag;var v=x;v&&v.toStringTag;const V={class:"text-center"},$={class:"flex justify-between mb-6"},D={class:"text-3xl"},E={class:"flex items-center mb-4"},T=e("label",{for:"normal",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"1",-1),U={class:"flex items-center mb-4"},H=e("label",{for:"regular",class:"ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"},"2",-1),I=["textContent"],M={__name:"Home",props:{products:Object,filters:Object,lengths:Object},setup(g){const s=g;let l=n(s.filters.lengthNormal),a=n(s.filters.lengthRegular);n(s.filters);let _=n(s.lengths);return k([a,l],([c,r,t])=>{S.Inertia.get("/",{lengthRegular:c,lengthNormal:r,filters:t},{preserveState:!0})}),(c,r)=>(i(),d("div",V,[e("div",$,[e("h1",D,f(u(_)),1)]),e("div",null,[e("div",E,[b(e("input",{"onUpdate:modelValue":r[0]||(r[0]=t=>y(l)?l.value=t:l=t),id:"normal",type:"checkbox",value:"normal",class:"w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[m,u(l)]]),T]),e("div",U,[b(e("input",{"onUpdate:modelValue":r[1]||(r[1]=t=>y(a)?a.value=t:a=t),id:"regular",type:"checkbox",value:"regular",class:"w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"},null,512),[[m,u(a)]]),H])]),e("div",null,[e("ul",null,[(i(!0),d(p,null,j(g.products.data,t=>(i(),d("li",{key:t.id,textContent:f(t.length)},null,8,I))),128))])])]))}};export{M as default};