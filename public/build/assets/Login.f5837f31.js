import{c as i,w as n,o as m,b as o,u as r,a as e,m as x,g as b,f as v,n as _}from"./app.323777e2.js";import{u as h,H as y,L as d,d as L}from"./index.4adadbfc.js";import{_ as k}from"./Checkbox.b58bdaf2.js";import{_ as p,a as u}from"./TextInput.fa792be1.js";import{_ as f}from"./InputLabel.f25818bc.js";import{A as g}from"./AppLayout.caf72f8e.js";import"./_plugin-vue_export-helper.cdc0426e.js";const C={class:"flex justify-center mx-72"},V={class:"w-1/2 pr-3"},M={class:""},j={class:"w-1/2"},z={class:"flex"},B={class:"flex mt-4"},N={class:"block mt-4"},R={class:"flex items-center"},P={class:"flex items-center justify-end mt-4"},$=["disabled"],q={name:"Login.vue",components:{AppLayout:g}},O=Object.assign(q,{props:{canResetPassword:Boolean,status:String},setup(w){const t=h({email:"",password:"",remember:!1,_token:""});function c(){t.transform(l=>({...l,remember:t.remember?"on":""})),L.Inertia.post("/login",{email:t.email,password:t.password,remember:t.remember,_token:t._token})}return(l,s)=>(m(),i(g,null,{default:n(()=>[o(r(y),{title:"Log in"}),s[12]||(s[12]=e("input",{type:"hidden",name:"_token"},null,-1)),s[13]||(s[13]=e("div",{class:"flex justify-center bg-gradient-to-b from-gray-200 pt-2"},[e("a",{href:"/login",class:"text-sm mt-1 mr-2"},[e("span",{class:"underline"},[e("svg",{xmlns:"http://www.w3.org/2000/svg",x:"0px",y:"0px",width:"12",height:"12",viewBox:"0 0 50 50"},[e("path",{d:"M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"})])])]),e("div",{class:"mr-1 text-gray-400 text-sm"}," > "),e("a",{href:"/login",class:"text-sm"},[e("span",{class:"underline"},"My account")])],-1)),s[14]||(s[14]=e("h1",{class:"font-ropa text-tra text-3xl text-center mb-14 mt-12"},"Log into account",-1)),e("div",C,[e("div",V,[s[4]||(s[4]=e("h1",{class:"font-bold font-ropa text-tra text-base text-transform: uppercase"},"New user",-1)),s[5]||(s[5]=e("div",{class:"relative bottom-3"},"________",-1)),s[6]||(s[6]=e("p",null,"Creating your user account allows for faster and simpler shopping/placing an order, changing your data, as well as reviewing your order status and history. ",-1)),e("div",M,[o(r(d),{href:"/register"},{default:n(()=>s[3]||(s[3]=[e("button",{class:"flex relative -right-3/4 mt-28 font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2"},[e("h1",null,"Register"),e("div",{class:"px-1 pb-1"},[e("svg",{width:"25",height:"25",xmlns:"http://www.w3.org/2000/svg",fill:"currentColor","clip-rule":"evenodd"},[e("path",{d:"M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"})])])],-1)])),_:1})])]),e("div",j,[s[10]||(s[10]=e("h1",{class:"font-bold font-ropa text-tra text-base text-transform: uppercase"},"Registered user",-1)),s[11]||(s[11]=e("div",{class:"relative bottom-3"},"________",-1)),e("form",{onSubmit:x(c,["prevent"])},[e("div",z,[o(f,{class:"w-20 mr-24 my-auto",for:"email",value:"Email"}),o(p,{id:"email",modelValue:r(t).email,"onUpdate:modelValue":s[0]||(s[0]=a=>r(t).email=a),placeholder:"E-mail address",type:"email",class:"mt-1 block w-full h-9 rounded-none",required:"",autofocus:""},null,8,["modelValue"]),o(u,{class:"mt-2",message:r(t).errors.email},null,8,["message"])]),e("div",B,[o(f,{class:"w-20 mr-24 my-auto",for:"password",value:"Password"}),o(p,{id:"password",modelValue:r(t).password,"onUpdate:modelValue":s[1]||(s[1]=a=>r(t).password=a),type:"password",placeholder:"Password",class:"mt-1 block w-full h-9 rounded-none",required:"",autocomplete:"current-password"},null,8,["modelValue"]),o(u,{class:"mt-2",message:r(t).errors.password},null,8,["message"])]),e("div",N,[e("label",R,[o(k,{checked:r(t).remember,"onUpdate:checked":s[2]||(s[2]=a=>r(t).remember=a),name:"remember"},null,8,["checked"]),s[7]||(s[7]=e("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1))])]),e("div",P,[w.canResetPassword?(m(),i(r(d),{key:0,href:l.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:n(()=>s[8]||(s[8]=[b(" Forgot your password? ")])),_:1},8,["href"])):v("",!0),e("button",{class:_(["flex justify-center font-ropa text-white text-transform: uppercase bg-black ml-4 pr-1 mt-2 pt-2 pl-2",{"opacity-25":r(t).processing}]),disabled:r(t).processing},s[9]||(s[9]=[e("h1",null,"Log in",-1),e("div",{class:"px-1 pb-1"},[e("svg",{width:"25",height:"25",xmlns:"http://www.w3.org/2000/svg",fill:"currentColor","clip-rule":"evenodd"},[e("path",{d:"M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"})])],-1)]),10,$)])],32)])])]),_:1}))}});export{O as default};