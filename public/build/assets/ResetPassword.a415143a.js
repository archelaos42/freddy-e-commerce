import{c,w as l,o as w,b as o,u as a,a as t,n as _,g,m as V}from"./app.323777e2.js";import{u as b,H as v}from"./index.4adadbfc.js";import{A as k}from"./AuthenticationCard.fb5df0dc.js";import{_ as y}from"./AuthenticationCardLogo.5143a92d.js";import{_ as m,a as i}from"./TextInput.fa792be1.js";import{_ as n}from"./InputLabel.f25818bc.js";import{_ as x}from"./PrimaryButton.8b3e5e8e.js";import{A as p}from"./AppLayout.caf72f8e.js";import"./_plugin-vue_export-helper.cdc0426e.js";const P={class:"mt-4"},$={class:"mt-4"},A={class:"flex items-center justify-end mt-4"},C={name:"ResetPassword.vue",components:{AppLayout:p}},E=Object.assign(C,{props:{email:String,token:String},setup(u){const d=u,s=b({token:d.token,email:d.email,password:"",password_confirmation:""}),f=()=>{s.post(route("password.update"),{onFinish:()=>s.reset("password","password_confirmation")})};return(q,e)=>(w(),c(p,null,{default:l(()=>[o(a(v),{title:"Reset Password"}),o(k,null,{logo:l(()=>[o(y)]),default:l(()=>[t("form",{onSubmit:V(f,["prevent"])},[t("div",null,[o(n,{for:"email",value:"Email"}),o(m,{id:"email",modelValue:a(s).email,"onUpdate:modelValue":e[0]||(e[0]=r=>a(s).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"]),o(i,{class:"mt-2",message:a(s).errors.email},null,8,["message"])]),t("div",P,[o(n,{for:"password",value:"Password"}),o(m,{id:"password",modelValue:a(s).password,"onUpdate:modelValue":e[1]||(e[1]=r=>a(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),o(i,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),t("div",$,[o(n,{for:"password_confirmation",value:"Confirm Password"}),o(m,{id:"password_confirmation",modelValue:a(s).password_confirmation,"onUpdate:modelValue":e[2]||(e[2]=r=>a(s).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),o(i,{class:"mt-2",message:a(s).errors.password_confirmation},null,8,["message"])]),t("div",A,[o(x,{class:_({"opacity-25":a(s).processing}),disabled:a(s).processing},{default:l(()=>e[3]||(e[3]=[g(" Reset Password ")])),_:1},8,["class","disabled"])])],32)]),_:1})]),_:1}))}});export{E as default};
