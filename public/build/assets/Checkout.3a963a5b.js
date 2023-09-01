import{_ as c,o as d,e as n,z as p}from"./app.65305f40.js";const u={name:"Checkout.vue"};$(function(){$("form.require-validation").bind("submit",function(e){var r=$(e.target).closest("form"),t=["input[type=email]","input[type=password]","input[type=text]","input[type=file]","textarea"].join(", "),a=r.find(".required").find(t),o=r.find("div.error");o.addClass("hide"),$(".has-error").removeClass("has-error"),a.each(function(l,i){var s=$(i);s.val()===""&&(s.parent().addClass("has-error"),o.removeClass("hide"),e.preventDefault())})})});const m={"accept-charset":"UTF-8",action:"/",class:"require-validation","data-cc-on-file":"false","data-stripe-publishable-key":"test_public_key",id:"payment-form",method:"post"},f=p('<div class="form-row"><div class="col-xs-12 form-group required"><label class="control-label">Name on Card</label> <input class="form-control" size="4" type="text"></div></div><div class="form-row"><div class="col-xs-12 form-group card required"><label class="control-label">Card Number</label> <input autocomplete="off" class="form-control card-number" size="20" type="text"></div></div><div class="form-row"><div class="col-xs-4 form-group cvc required"><label class="control-label">CVC</label> <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text"></div><div class="col-xs-4 form-group expiration required"><label class="control-label">Expiration</label> <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text"></div><div class="col-xs-4 form-group expiration required"><label class="control-label"></label> <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text"></div></div><div class="form-row"><div class="col-md-12"><div class="form-control total btn btn-info"> Total: <span class="amount">$300</span></div></div></div><div class="form-row"><div class="col-md-12 form-group"><button class="form-control btn btn-primary submit-button" type="submit" style="margin-top:10px;">Pay \xBB</button></div></div><div class="form-row"><div class="col-md-12 error form-group hide"><div class="alert-danger alert">Please correct the errors and try again.</div></div></div>',6),v=[f];function b(e,r,t,a,o,l){return d(),n("form",m,v)}const h=c(u,[["render",b]]);export{h as default};